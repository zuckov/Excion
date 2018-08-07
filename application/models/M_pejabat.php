<?php

class M_pejabat extends CI_Model{
  function __construct() {
    parent::__construct();
  }

  function tampil_data(){
    return $this->db->get('pejabat');
	}

	function input_data($data){
		$this->db->insert('pejabat', $data);
	}

	function create_data($data,$table){
		$this->db->insert($table,$data);
	}

	function update_user($data,$table){

	}

	function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}

  //i dont think we need this....
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function delete_data($where, $table){
		$this->db->where($where);
		$this->db->delete($table);
	}

}
?>
