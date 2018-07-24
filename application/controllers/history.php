<?php

class History extends CI_Controller{

	function __construct(){
		parent::__construct();

		if($this->session->userdata('status') != "login"){
			redirect(base_url());
		}
	}

	function index(){
    //$this->load->view('templates/agency/header');
	  $this->load->view('cobatabs');
    //$this->load->view('templates/index', $data);
	  //$this->load->view('templates/agency/footer');
	}
}

?>
