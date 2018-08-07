<?php

class M_region extends CI_Model{
  var $table = 'region';
  function __construct() {
    parent::__construct();
  }

  function tampil_data(){
    /*
    $query = $this->db->get($this->table);
    if ($query->num_rows()>0) {
      return $query->result_array();
    }*/
    return $this->db->get('region');
	}

	function input_data($data){
		$this->db->insert('region', $data);
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
