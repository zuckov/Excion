<?php
class User extends CI_Model{
	function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}

	function tampil_data(){
		return $this->db->get('user');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function create_user($data,$table){
		$this->db->insert($table,$data);
	}

	function update_user($data,$table){

	}

	function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function delete_user($where, $table){
		$this->db->where($where);
		$this->db->delete($table);
	}

}
?>
