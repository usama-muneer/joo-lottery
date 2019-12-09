<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
	    parent::__construct();
			date_default_timezone_set('Asia/Karachi');
			if($this->session->userdata('logged_in') == true){
				redirect(base_url('/adminhome'));
			}
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		$data = array();
		$this->load->model('home_model');
		if($this->home_model->get_draws()){
			$data['draw_data'] = $this->home_model->get_draws();
			$this->load->view('home/index', $data);
	  }
    else{
			$this->load->view('home/index');
    }
	}

	public function searchDrawByDate(){
		$date_time = $_POST['date_time'];
		$this->load->model('home_model');
		$srno = 1;
    if($this->home_model->searchDrawByDate($date_time)){
			$data = $this->home_model->searchDrawByDate($date_time);
			foreach ($data as $draw_row){
				echo  "<tr>
												<th scope='row'>".$srno."</th>
												<td>".substr($draw_row['date_time'], 0,10)."</td>
												<td>".$draw_row['time']."</td>
												<td>".$draw_row['number']."</td>
											</tr>";
				$srno++;
			}
		}else{
			echo  "<tr>
											<td colspan=4 class='text-center text-info'><b>No data found</b></td>
										</tr>";
		}
	}

	public function test(){
		$this->load->view('home/test');
	}

	public function raffledraw(){
		$date_time = date('Y-m-d');
		$currTime = date('h:i:s');
		$this->load->model('home_model');
    if($this->home_model->searchDrawByDateTime($date_time, $currTime)){
			$data = $this->home_model->searchDrawByDateTime($date_time, $currTime);
			foreach ($data as $draw_row){
				#First Winner
				if($draw_row['date_time'] == $date_time AND $currTime >= $draw_row['time']  AND $currTime < '01:00:00'){
					$draw['draw_data'] = array('status' => 'yes', 'currDate' => $date_time, 'drawTime' => $draw_row['time'], 'winner' => $draw_row['number']);
					$draw['draw_prize'] = array('draw#' => 1, 'prize' => 'First Prize: '.$date_time.' '.$draw_row['time'].' ('. $draw_row['number'].')');
					$this->load->view('home/raffledraw', $draw);
				}
				#Second Winner
				else if($draw_row['date_time'] == $date_time AND $currTime >= $draw_row['time']  AND $currTime < '03:00:00'){
					$draw['draw_data'] = array('status' => 'yes', 'currDate' => $date_time, 'drawTime' => $draw_row['time'], 'winner' => $draw_row['number']);
					$draw['draw_prize'] = array('draw#' => 2, 'prize' => 'Second Prize: '.$date_time.' '.$draw_row['time'].' ('. $draw_row['number'].')');
					$this->load->view('home/raffledraw', $draw);
				}
				#Third Winner
				else if($draw_row['date_time'] == $date_time AND $currTime >= $draw_row['time']  AND $currTime < '04:00:00'){
					$draw['draw_data'] = array('status' => 'yes', 'currDate' => $date_time, 'drawTime' => $draw_row['time'], 'winner' => $draw_row['number']);
					$draw['draw_prize'] = array('draw#' => 3, 'prize' => 'Third Prize: '.$date_time.' '.$draw_row['time'].' ('. $draw_row['number'].')');
					$this->load->view('home/raffledraw', $draw);
				}
				#Fourth Winner
				else if($draw_row['date_time'] == $date_time AND $currTime >= $draw_row['time']  AND $currTime < '23:59:00'){
					$draw['draw_data'] = array('status' => 'yes', 'currDate' => $date_time, 'drawTime' => $draw_row['time'], 'winner' => $draw_row['number']);
					$draw['draw_prize'] = array('draw#' => 4, 'prize' => 'Fourth Prize: '.$date_time.' '.$draw_row['time'].' ('. $draw_row['number'].')');
					$this->load->view('home/raffledraw', $draw);
				}
				else{
					$draw['draw_data'] = array('status' => 'Wait');
					$this->load->view('home/raffledraw', $draw);
				}
			}
	  }
    else{
			$this->load->view('home/raffledraw');
    }
	}

	public function admin_login(){
		$username = $_POST["username"];
		$password = $_POST['password'];
		$this->load->model("home_model");
		if($this->home_model->admin_validate($username , $password)) {
			$res = 'ok';
			$sessionData = array(
				'username'  => $username,
				'logged_in' => TRUE
			);
			$this->session->set_userdata($sessionData);
		}
		else{
			$res = 'err';
		}
		echo $res;
		die;
	}
}
