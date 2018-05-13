<?php

/**
 *
 */
 defined('BASEPATH') OR exit('No direct script access allowed');
class Main extends CI_Controller {


    public function index()
    {
      $this->load->view('view');
    }

    public function view($page='home') {
      if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
        # kalo ga nemu
        show_404();
      }
      $data['title'] =ucfirst($page); //biar huruf besar awalannya

	  //*
      //$this->load->view('templates/header', $data);
      //$this->load->view('pages/'.$page, $data);
      //$this->load->view('templates/footer', $data);
	  //*/
	  $this->load->view('templates/index', $data);
	  
    }


    public function fgetcsv(){
      echo "halo";

    }

}


?>
