  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
  function __construct(){
	    parent::__construct();
			if($this->session->userdata('logged_in') == false){
				redirect(base_url('/'));
			}
	}


  public function index(){
    $data = array();
		$this->load->model('admin_model');
		if($this->admin_model->get_draws()){
			$data['draw_data'] = $this->admin_model->get_draws();
		  $this->load->view('admin/index', $data);
	  }
    else{
      $this->load->view('admin/index');
    }
  }

  public function insert_draw(){
    date_default_timezone_set('Asia/Karachi');
    $date_time = date('Y-m-d');
    $time      = $_POST['time'];
    $number = $_POST['number'];
    $this->load->model('admin_model');
    if($this->admin_model->draw_validate($date_time, $time)){
      $data = array(
        "date_time" => $date_time,
        "time"    => $time,
        "number"  => $number,
        "checked" => 'No'
      );
      $this->admin_model->insert_draw($data);
      echo '<div class="alert alert-success">
                  <strong>Success!</strong>
                </div>';
      die;
    }else{
      echo '<div class="alert alert-danger alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Error!</strong> Today slot has been filled.
                </div>';
      die;
    }
  }

  public function logout(){
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('username');
		$this->session->sess_destroy();
		redirect(base_url('/'));
	}
}
