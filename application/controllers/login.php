<?php

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_login');
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
	//login utama
	function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		//buat di laptop
		/*
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
			*/
			//buat di pc
			//*
			$where = array(
				'username' => $username,
				'password' => $password,
				);
				//*/
		//$cek = $this->m_login->cek_login("admin",$where)->num_rows();//buat di laptop
		$cek = $this->m_login->cek_login("user",$where)->num_rows();//buat di pc
		if($cek > 0){
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
			$this->session->set_userdata($data_session);

			redirect(base_url());//redirect ke hal utama
			//redirect(base_url("index.php/admin"));

		}else{
			echo "Username dan password salah";
			//redirect(base_url());
		}
	}
	//end of login utama


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
}

	public function logout(){
		$this->session->sess_destroy();
		//redirect(base_url('index.php'));
		redirect('', refresh);
	}

	function ok(){
		echo "ok";
	}
	}

?>
