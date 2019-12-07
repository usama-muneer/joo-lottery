<?php
  class Admin_model extends CI_Model
  {
    function __construct(){
      parent::__construct();
    }
    //Insert Messages code start
    function insert_draw($data){
      $this->db->insert('draw', $data);
      return true;
    }
    //Insert Messages code end

    //Insert Messages code start
    function draw_validate($date_time, $time){
      $this->db->where('date_time', $date_time);
      $this->db->where('time', $time);
      $query = $this->db->get('draw');
      if($query->num_rows() > 0){
        return false;
      }
      else{
        return true;
      }
    }
    //Insert Messages code end

    //Fetch Draw data
    function get_draws(){
      date_default_timezone_set('Asia/Karachi');
      $date = date('Y-m-d');
      $sql = "SELECT * FROM draw Where date_time ='".$date."' ORDER BY time";
      $data = $this->db->query($sql)->result_array();
      if($data){
        return $data;
      }
      else{
        return false;
      }
    }

  }
