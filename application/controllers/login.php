<?php
class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('user');
		//$this->load->model('m_login');
	}
	function index(){
		//$this->load->view('v_login');
	}

	//login utama
	function login(){
		$pass = $this->input->post('password');
		$username = $this->input->post('username');
		$password = md5($pass);
		//buat di laptop
		$where = array(
			'username' => $username,
			'password' => $password,
		);
		//*/
		$cek = $this->user->cek_login("user",$where)->num_rows();//buat di laptop
		//$cek = $this->m_login->cek_login("User",$where)->num_rows();//buat di pc
		if($cek > 0){
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
			$this->session->set_userdata($data_session);
			redirect(base_url());//redirect ke hal utama
			//redirect(base_url("index.php/admin"));
		}else{
			$message = "Username dan password salah";
			redirect(base_url());
			echo "<script type='text/javascript'>alert('$message');</script>";
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
	//end of login utama
	/*
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
}*/

?>
