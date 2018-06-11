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
	
	public function upload()
	{
		if($this->input->post('submit')){
			//mulai upload
			$ftp_upload['upload_path'] = 'uploads/';
			$ftp_upload['allowed_types'] = '*';
			$this->load->library('upload', $ftp_upload);
			
			if($this->upload->do_upload('file')){
				//ambil informasi file yg diupload
				$upload_data = $this->upload->data();
				$filename = $upload_data['file_name'];
				
				//path file di local server
				$source = 'uploads/'.$filename;
				
				//mulai koneksi ftp
				$this->load->library('ftp');
				$config['hostname'] = '127.0.0.1';
				$config['username'] = 'exus';
				$config['password'] = '10tacle';
				$config['port']     = 21;
				$config['passive']  = FALSE;		
				$config['debug'] 	= TRUE;
		
				$this->ftp->connect($config);

				//file upload path di remote server
				$destination = '/uploads/'.$filename;
				
				//upload file ke remote server
				$this->ftp->upload($source, ".".$destination);
				
				//tutup koneksi ftp
				$this->ftp->close();
				
				//hapus file di local server
				@unlink($source);
				
				//redirect ke home
				redirect(base_url());
			}
		}
		$this->load->view('templates/upload');
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
  		if (($handle = fopen("C:\EXCION_GACA\ION DL\GARNG 12.csv", "r")) !== FALSE) {
      	while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
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

    public function multiCsv($bukaFile="C:\EXCION_GACA\ION DL\*.csv"){
      /*
      foreach (glob("myfiles/*.html") as $file) {
        $file_handle = fopen($file, "r");
        while (!feof($file_handle)) {
          $line = fgets($file_handle);
          echo $line;
        }
        fclose($file_handle);
      }*/
      $ke=1;
      foreach (glob($bukaFile) as $file) { //glob() = mengembalikan array nama file atau direktori yang cocok dengan pola yang telah ditentukan.
        $fileHandle = fopen($file, "r"); // fopen = buka file.
        //while (!feof($file_handle)) { //feof = ngecek kursor nya ada di end-of-file atau engga. Return true/false.
          $line = fgets($fileHandle); //fgets() = fungsi yang digunakan untuk membaca satu baris dari sebuah file. Return satu baris.
          echo "file ke-".$ke." baris pertama<br />\n";
          echo $file."<br />\n";
          echo $line."<br />\n";
          echo "<br />\n";
          $ke++;
        //}
        fclose($fileHandle);
      }
    }

  }

?>
