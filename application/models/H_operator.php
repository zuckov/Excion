<?php

class H_operator extends CI_Model{
  function __construct() {
    parent::__construct();
  }
	function tampil_data(){
		return $this->db->get('history_operator');
	}

	function input_data($data){
		$this->db->insert('history_operator',$data);
	}
}
