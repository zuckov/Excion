<?php

class Tutor_admin extends CI_Controller{

	function __construct(){
		parent::__construct();

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	function index(){
		$this->load->view('login/v_admin');
	}
}

?>
