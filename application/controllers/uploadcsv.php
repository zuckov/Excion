<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uploadcsv extends CI_Controller {

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

   public function __construct(){
      parent::__construct();
      $this->load->helper('url');
      $this->load->model('meter_utama');
      if($this->session->userdata('status') != "login"){
  			redirect(base_url());
  		}
    }


  public function start($path){
		//$this->load->view('upload/hasilUpload');
    $where = array(
      'asal_folder' => $path,
    );

    $result = $this->meter_utama->tampil_data($where)->num_rows();
		if ($result > 0) {
      $data['datameter'] = $this->meter_utama->get_data($where)->result();
      //$this->load->view('templates/gen/header');
			$this->load->view('upload/hasilUpload',$data);
			//$this->load->view('templates/gen/footer');
		}
		else {
      $this->load->view('templates/gen/header');
			$this->load->view('history/404_his');
			$this->load->view('templates/gen/footer');
		}

	}

  public function insert($folder){
    if ($this->session->userdata('user_id') == 1) {
      $csv = "/PBS_1.csv";
    }
    elseif ($this->session->userdata('user_id') == 2) {
      $csv = "/PBS_2.csv";
    }
    else {
      $csv = "/PBS_3.csv";
    }
    //$getPath = str_replace("-", "/", $data);
    //$realPath = base_url().'upload/'.$getPath;
    $realPath = base_url().'upload/'.$folder.$csv;
    $file = fopen($realPath, "r");
    $importdata = fgetcsv($file, 10000, ",");
    $baris = 0;
    //*
    while (($importdata = fgetcsv($file, 10000, ",")) !== FALSE){

      if($baris > 0){
      $data = array(
        //kwh del int = pbskwhkirim
        //kwh rec
        'date' => $importdata[0],
        'kwh_kirim' => $importdata[1],
        'kvarh_kirim' => $importdata[2],
        'kwh_terima' => $importdata[3],
        'kvarh_terima' => $importdata[4],
        'pengirim' => $this->session->userdata('user_id'),
        'asal_folder' => $folder,
        'tgl_upload' => $show_date = DateTime::createFromFormat('dmY_his', $folder)->format('d/m/Y_h:i:s'),
        );
        //print "<pre>"; echo "file ".$realPath." \n"; print_r($data); print "</pre>";
        $this->meter_utama->insert_data($data);
      }
      $baris++;
    }
    fclose($file);
    //$this->session->set_flashdata('message', 'Import berhasil !');
    redirect('uploadcsv/start/'.$folder);
    //print "<pre>"; echo "file ".$realPath." \n"; print_r($data); print "</pre>";
    //print "<pre>"; echo "file ".$realPath." \n"; print_r($importdata); print "</pre>";

    //$this->session->set_flashdata('message', 'Import berhasil !');
    //redirect('uploadcsv/start/'.$data);
  }

  public function uploads(){
	      $data = array();
				date_default_timezone_set('Asia/Jakarta');
		    $currentDate = date('dmY_his');
        $show_date = DateTime::createFromFormat('dmY_his', $currentDate)->format('d/m/Y_h:i:s');
        //simpan di db history

				//Directory where files will be uploaded
				$folder = 'upload/'.$currentDate;
        //validasi buat folder disini
        //......
				mkdir($folder);
	      if (!empty($_FILES['file']['name'])) {
	          $filesCount = count($_FILES['file']['name']);
	          for ($i = 0; $i < $filesCount; $i++) {
	              $_FILES['uploadFile']['name'] = str_replace(",","_",$_FILES['file']['name'][$i]);
								//$_FILES['uploadFile']['name'] = $_FILES['file']['name'][$i];
	              $_FILES['uploadFile']['type'] = $_FILES['file']['type'][$i];
	              $_FILES['uploadFile']['tmp_name'] = $_FILES['file']['tmp_name'][$i];
	              $_FILES['uploadFile']['error'] = $_FILES['file']['error'][$i];
	              $_FILES['uploadFile']['size'] = $_FILES['file']['size'][$i];
								//Directory where files will be uploaded
	              $config['upload_path'] = $folder.'/';
	              // Specifying the file formats that are supported.
	              $config['allowed_types'] = 'csv';
	              $this->load->library('upload', $config);
	              //$this->upload->initialize($config);
	              if ($this->upload->do_upload('uploadFile')) {
	                  $fileData = $this->upload->data();
	                  $uploadData[$i]['file_name'] = $fileData['file_name'];
                    //insert file di database?
										//echo "sukses";
	              }
	          }

          $data = array(
            //'path' => $path,
            'nama_file' => $fileData['file_name'],
            'folder' => $currentDate,
            'date' => $show_date,
            'dari' => $this->session->userdata('user_id'),
          );
          if($this->h_operator->input_data($data)){
            if($this->meter_utama->insert_data($data)){

              echo $currentDate;
            }
          }


          //echo $dateReplace;
          //redirect('uploadcsv/insert/'.$data);
      }
      //validasi kalo file nya kosong disini....
      //else {
        // code...
      //}
	   }


}
