  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  public function index(){
    
		$this->load->view('admin/index');
	}

  public function insert_draw(){
      $data = array(
        "date" => date('Y-m-d h:m:s'),
        "time"    => $_POST['time'],
        "number"  => $_POST['number']
      );
      $this->load->model('admin_model');
      $this->admin_model->insert_draw($data);
      $res = 'ok';
      echo $res;
      die;
  }
}
