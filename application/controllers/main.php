<?php

/**
 *
 */
 defined('BASEPATH') OR exit('No direct script access allowed');
class Main extends CI_Controller {


    public function index()
    {
      //$this->load->view('view');
	   $this->load->view('templates/index');
    }

    /*
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
	  //
	  $this->load->view('templates/index', $data);

    }
	*/

    public function fgetcsv(){
      //$data = echo "halo";
      echo "csv";
      $row = 1;
      $handle = fopen(base_url('content/WONOGIRI.csv'), "r");

      while (($data = fgetcsv($handle, 10000, ",")) !== FALSE) {
        $num = count($data);
        echo "<p> $num fields in line $row: <br /></p>\n";

        $row++;
        for ($c=0; $c < $num; $c++) {
          echo $data[$c] . "<br />\n";
        }
      }

      fclose($handle);
	    //$this->load->view('templates/csv');

    }

}


?>
