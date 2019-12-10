<?php
  class Home_model extends CI_Model
  {
    function __construct(){
      parent::__construct();
      date_default_timezone_set('Asia/Karachi');
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

    //Fetch Draw data
    function get_draws(){
      $date = date('Y-m-d');
      $sql = "SELECT * FROM draw Where checked = 'Yes' and date_time ='".$date."' ORDER BY time";
      $data = $this->db->query($sql)->result_array();
      if($data){
        return $data;
      }
      else{
        return false;
      }
    }

    //Fetch Draw data vy given date
    function searchDrawByDate($date_time){
      $sql = "SELECT * FROM draw Where checked = 'Yes' and date_time ='".$date_time."' ORDER BY time";
      $data = $this->db->query($sql)->result_array();
      if($data){
        return $data;
      }
      else{
        return false;
      }
    }

    //Fetch Draw data vy given date & time
    function updateDrawByDateTime(){
      $date_time = date('Y-m-d');
  		$currTime = date('H:i:s');
      $sql1 = "SELECT * FROM draw Where date_time ='".$date_time."' AND time <='".$currTime."'";
      $validate1 = $this->db->query($sql1)->result_array();
      if($validate1){
        $sql2 = "UPDATE draw SET checked = 'Yes' WHERE date_time ='".$date_time."' AND time <='".$currTime."'";
        $validate2 = $this->db->query($sql2);
      }
    }

    //Fetch Draw data vy given date & time
    function searchDrawByDateTime($date_time, $currTime){
      $sql1 = "SELECT * FROM draw Where date_time ='".$date_time."' AND time <='".$currTime."'";
      $validate1 = $this->db->query($sql1)->result_array();
      if($validate1){
        $sql2 = "UPDATE draw SET checked = 'Yes' WHERE date_time ='".$date_time."' AND time <='".$currTime."'";
        $validate2 = $this->db->query($sql2);
        if($validate2){
          $sql3 = "SELECT * FROM draw WHERE checked = 'Yes' AND date_time ='".$date_time."' AND time <='".$currTime."' ORDER BY time";
          $data = $this->db->query($sql3)->result_array();
          return $data;
        }else{
          $sql3 = "SELECT * FROM draw WHERE checked = 'Yes' AND date_time ='".$date_time."' AND time <='".$currTime."' ORDER BY time";
          $data = $this->db->query($sql3)->result_array();
          return $data;
        }
      }
      else{
        return false;
      }
    }

  }
