<?php

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();
		// Load model/database
		//$this->load->model('user');
		// Load form helper library
		//$this->load->helper('form');
		// Load session library
		//$this->load->library('form_validation');
		// Load form helper library
		//$this->load->library('session');

	}

	function index(){
		$this->load->view('v_login');
	}

	function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->m_login->cek_login("admin",$where)->num_rows();
		if($cek > 0){
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
			$this->session->set_userdata($data_session);

			redirect(base_url("admin"));

		}else{
			echo "Username dan password salah";
		}
	}

	function validation(){
		$value = $_GET['query'];
		$field = $_GET['field'];

		//Cek Validasi
		if($field == "username")
		{
			if(strlen($value) < 4)
			{
				echo "Harus lebih dari 3 huruf";
			}
			else
			{
				echo "<span>Valid</span>";
			}
		}

		if($field == 'password')
		{
			if(strlen($value) < 6)
			{
				echo "Password terlalu pendek";
			}
			else
			{
				echo "<span>Valid</span>";
			}
		}

		if($field == 'email')
		{
			if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $value))
			{
				echo "Format email salah!";
			}
			else
			{
				echo "<span>Valid</span>";
			}
		}

		if($field == 'website')
		{
			if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $value))
			{
				echo "Website tidak valid";
			}
			else
			{
				echo "<span>Valid</span>";
			}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}

	function ok(){
		echo "ok";
	}
}
