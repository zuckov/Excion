<?php

class H_operator extends CI_Model{
  function __construct() {
    parent::__construct();
  }

  function tampil_data_count(){
		return $this->db->get('history_operator');
	}

  function tampil_data(){
    $this->db->select('*');
		$this->db->from('history_operator');
		$this->db->join('user', 'history_operator.dari = user.id', 'left');
    $this->db->join('region', 'user.id_region = region.id_reg', 'left');
    //$this->db-order_by('history', 'DESC');
    return $this->db->get();
		//return $this->db->get('history_operator');
	}

  function tampil_data_distinct(){
    $this->db->distinct();
    $this->db->select('date, nama_region, nama, id, folder');
		$this->db->from('history_operator');
		$this->db->join('user', 'history_operator.dari = user.id', 'left');
    $this->db->join('region', 'user.id_region = region.id_reg', 'left');
    $this->db->order_by('date', 'desc');
    return $this->db->get();
		//return $this->db->get('history_operator');
	}

  function get_nama($id){
    /*
    $this->db->select('*');
    $this->db->from('history_operator');
    $this->db->join('user', 'history_operator.dari = user.id');
    $this->db->where('user.id',$id);
    //$this->db->where("(user_id = '$userid' AND sender_id = '$senderid')
    //           OR (sender_id='$userid' AND user_id = '$senderid')");
    $query = $this->db->get();
    return $query->result_array();
    //return $this->db->get();
    */
    $this->db->select('*');
		$this->db->from('history_operator');
		$this->db->join('user', 'history_operator.dari = user.id');
    $this->db->join('region', 'user.id_region = region.id_reg');
    return $this->db->get();
  }

	function input_data($data){
		$this->db->insert('history_operator', $data);
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
