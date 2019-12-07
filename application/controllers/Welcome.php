<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
	    parent::__construct();
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
