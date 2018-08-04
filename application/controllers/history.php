<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
 		parent::__construct();
 		$this->load->model('h_operator');
 		$this->load->helper('url');

 	}
	public function index()
	{
		//$this->load->view('welcome_message');
		//$this->load->view('view');
		$data['history'] = $this->h_operator->tampil_data()->result();
		$this->load->view('history/tabel_history',$data);
	}

  public function history(){

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
