<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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

 		$this->load->model('m_user');
		$this->load->model('m_region');

		$this->load->helper(array('form', 'url'));

    $this->load->library('form_validation');


 	}
	public function index()
	{
		if($this->session->userdata('lvl') != 1){
			redirect(base_url());
		}

    $result =$this->m_user->tampil_data_join()->num_rows();
		//*
		if ($result > 0) {
      $data['user'] = $this->m_user->tampil_data_join()->result();
			$data['region'] = $this->m_region->tampil_data()->result();
      $this->load->view('templates/gen/header');
			$this->load->view('user/index_user',$data);
			$this->load->view('templates/gen/footer');
		}
		else {
      $this->load->view('templates/gen/header');
			$this->load->view('user/404_user');
			$this->load->view('templates/gen/footer');
		}
	}


	function tambah(){
		$this->load->view('user/v_input');
	}

	function tambah_aksi(){
		if($this->session->userdata('lvl') != 1){
			redirect(base_url());
		}
		//*
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','password','required');
		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('email','email','required|valid_email');
		$this->form_validation->set_rules('lvl','level_user','required');
		$this->form_validation->set_rules('region','id_region','required|callback_select_validate');
		//$this->form_validation->set_rules('city', 'city', 'required|callback_select_validate'); // Validating select option field.

		if($this->form_validation->run()==FALSE){
				$this->session->set_flashdata('pesan1','Data input masih ada yang kosong');
				redirect('user');
		}else{//*/
		$pass = $this->input->post('password');
		$username = $this->input->post('username');
		$password = md5($pass);
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$lvl = $this->input->post('lvl');
		$reg = $this->input->post('region');

		$data = array(
			'username' => $username,
			'password' => $password,
			'nama' => $nama,
			'email' => $email,
			'level_user' => $lvl,
			'id_region' => $reg,
		);
		$this->m_user->input_data($data, "user");
		$this->session->set_flashdata('pesan2','Data input berhasil');
		redirect('user');
		}
	}

  function hapus($id){
		if($this->session->userdata('lvl') != 1){
			redirect(base_url());
		}
		$where = array('id' => $id);
		$this->m_user->delete_user($where,'user');
		redirect('user/index');
	}

  function edit($id){ //ini sukses
		if($this->session->userdata('lvl') != 1){
			redirect(base_url());
		}
		$where = array('id' => $id);
		$data['user'] = $this->m_user->edit_data($where,'user')->result();
		$this->load->view('user/v_edit',$data);
	}

  function update($id){ //ini kenapa?
		if($this->session->userdata('lvl') != 1){
			redirect(base_url());
		}
		//$id = $this->input->post('id');
		$pass = $this->input->post('password');
		$username = $this->input->post('username');
		$password = md5($pass);
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$lvl = $this->input->post('lvl');
		$reg = $this->input->post('region');

		$data = array(
			'username' => $username,
			'password' => $password,
			'nama' => $nama,
			'email' => $email,
			'level_user' => $lvl,
			'id_region' => $reg,
		);
		$where = array(
			'id' => $id
		);

		$this->m_user->update_data($where,$data,'user');
		$this->session->set_flashdata('pesan2','Data input berhasil');
		redirect('user');
	}

	function update_profile($id){
		$username = $this->input->post('username');
		$pass = $this->input->post('password');
		$password = md5($pass);
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$lvl = $this->input->post('lvl');
		$reg = $this->input->post('region');

		$data = array(
			'username' => $username,
			'password' => $password,
			'nama' => $nama,
			'email' => $email,
			'level_user' => $lvl,
			'id_region' => $reg,
		);
		$where = array(
			'id' => $id
		);

		$this->m_user->update_data($where,$data,'user');
		$this->session->set_flashdata('pesan2','Data input berhasil');
		redirect('user');

	}

	// Below function is called for validating select option field.
	function select_validate($abcd){
		// 'none' is the first option that is default "-------Choose City-------"
	if($abcd=="none"){
		$this->form_validation->set_message('select_validate', 'Please Select Your City.');
		return false;
	} else{
// User picked something.
		return true;
	}
	}
}
