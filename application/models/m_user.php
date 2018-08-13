<?php
class M_user extends CI_Model{
	function cek_login($table,$where){
	//function cek_login($user,$pass){
		/*
		$this->db->where('username', $user);
		$this->db->where('password', $pass);
		$query = $this->db->get('user');

		join:
		$this->db->select('*');
		$this->db->from('user');
		$this->db->join('region', 'region.id = user.region');
		$query = $this->db->get();
		*/
		//$query = $this->db->get_where($table,$where);
		//if ($query->num_rows() > 0) {
		//	return $query->result_array();
		//}
		//*/
		$array = $this->db->get_where($table,$where);
			return $array->result_array();
		//}
	//	return $this->db->get_where($table,$where);
	}

	function tampil_data(){
		return $this->db->get('user');
	}

	function tampil_data_join(){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->join('region', 'user.id_region = region.id_reg', 'left');
		return $this->db->get();
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
