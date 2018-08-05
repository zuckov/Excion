<?php
class Tutor_login extends CI_Controller{

	function __construct(){
		parent::__construct();
		//$this->load->model('m_login');
    $this->load->model('user');

	}

	function index(){
		$this->load->view('login/v_login');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		//$cek = $this->m_login->cek_login("user",$where)->num_rows();
    $cek = $this->user->cek_login("user",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("index.php/tutor_admin"));

		}else{
			echo "Username dan password salah !";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/tutor_login'));
	}
}
