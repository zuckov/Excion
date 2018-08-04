<?php


class Crud extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('user');
		$this->load->helper('url');

	}

	function index(){
		$data['user'] = $this->user->tampil_data()->result();
		$this->load->view('crud/v_tampil',$data);
	}

	function tambah(){
		$this->load->view('crud/v_input');
	}

	function tambah_aksi(){
    $username = $this->input->post('user');
    $pass = md5($this->input->post('pass'));
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$lvl = $this->input->post('lvl');
    $region = $this->input->post('region');

		$data = array(
			'username' => $username,
			'password' => $pass,
			'nama' => $nama,
      'email' => $email,
      'level_user' => $lvl,
      'region' => $region,
		);
		$this->user->input_data($data,'user');
		redirect('crud/index');
	}

  function hapus($id){
		$where = array('id' => $id);
		$this->user->delete_user($where,'user');
		redirect('crud/index');
	}

  function edit($id){ //ini sukses
		$where = array('id' => $id);
		$data['user'] = $this->user->edit_data($where,'user')->result();
		$this->load->view('crud/v_edit',$data);
	}

  function update(){ //ini kenapa?
		$id = $this->input->post('id');
    $username = $this->input->post('user');
    //$pass = md5($this->input->post('pass'));
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$lvl = $this->input->post('lvl');
    $region = $this->input->post('region');

		$data = array(
			'username' => $username,
			'password' => $pass,
			'nama' => $nama,
      'email' => $email,
      'level_user' => $lvl,
      'region' => $region,
		);
		$where = array(
			'id' => $id
		);

		$this->user->update_data($where,$data,'user');
		redirect('crud/index');
	}

}
