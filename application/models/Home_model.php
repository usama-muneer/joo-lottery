<?php
  class Home_model extends CI_Model
  {
    function __construct(){
      parent::__construct();
    }
    //Insert Messages code start
    function insert_message($data){
      $this->db->insert('messages', $data);
    }
    //Insert Messages code end

    //admin validate code start
    function admin_validate($username, $password){
      $this->db->where('username', $username);
      $this->db->where('password', $password);
      $query = $this->db->get('admin');
      if($query->num_rows() > 0){
        return true;
      }
      else{
        return false;
      }
    }
    //admin validate code end

    public function admin_login(){
      $username = $_POST["username"];
      $password = $_POST['password'];
      $this->load->model("home_model");
      if($this->homepage_model->admin_validate($username , $password)){
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
