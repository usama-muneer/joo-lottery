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

  }
