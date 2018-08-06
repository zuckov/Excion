<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Upload extends CI_Controller
{

  function __construct(){
    parent::__construct();
    //$this->load->model('meter_utama');
    if($this->session->userdata('status') != "login"){
			redirect(base_url());
		}
    $this->load->model('h_operator');
    $this->load->helper('url_helper');
  		  //$this->load->helper(array('form', 'url'));
  	}

  public function index(){
		//$this->load->view('upload_view', array('error' => ' ' ));

    $this->load->view('templates/gen/header');
    $this->load->view('templates/indexUpload');
    $this->load->view('templates/gen/footer');
	}

	public function aksi_upload(){
		$config['upload_path']          = './upload/';
		//$config['allowed_types']        = 'gif|jpg|png';
    	$config['allowed_types']        = 'rar|zip';
		$config['max_size']             = 250;
		//$config['max_width']            = 1024;
		//$config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('berkas')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('upload_view', $error);
		}else{
      //$data = array('upload_data' => $this->upload->data());
      //ambil file name
      $upload_file = $this->upload->data();
      $file_name = $upload_file['file_name'];

      //cari path di local servers
      $path = './upload/'.$file_name;
      //$path = $upload_file['full_path'];

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
      $destination = './upload/'.$file_name;

      //upload file ke remote server
      $this->ftp->upload($path, ".".$destination);

      //tutup koneksi ftp
      $this->ftp->close();

      //hapus file di local server
      //@unlink($source);

      //coba upload ke ftp
      $data = array('upload_data' => $upload_file);

			$this->load->view('upload_sukses', $data);
		}
	}

  public function extract_upload(){
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'zip|rar';
        $config['max_size']    = '20050';
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('berkas'))
        {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('upload_view', $error);
        }
        else
        {
            $upload_file = $this->upload->data();
            $file = $upload_file['file_name'];
            $path = './upload/'.$file;
            //$data = array('upload_data' => $this->upload->data());
            $rar = RarArchive::open($file);
            $entries = $rar->getEntries();
            foreach ($entries as $entry) {
              $entry->extract($path);
            }
            $rar->close();
            /*
            $zip = new ZipArchive;
            $file = $data['upload_data']['full_path'];
            chmod($file,0777);
            if ($zip->open($file) === TRUE) {
                    $zip->extractTo('./uploads/');
                    $zip->close();
                    echo "<script type='text/javascript'>alert('ok');</script>";
            } else {
                    echo "<script type='text/javascript'>alert('gagal');</script>";
            }
            */

            $this->load->view('upload_success_view', $data);
        }
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
            /*
            //validasi file disini.
            $status? -> 0 - 5
	          if (!empty($uploadData)) {
	             $list=array();
	             foreach ($uploadData as $value) {
	                array_push($list, $value['file_name']);
	             }
               if (count($list) < 14) { //jumlah file kurang
                 echo "Jumlah file yang diupload kurang.";
               }
               else if (count($list) > 14) {
                 echo "Jumlah file yang diupload terlalu banyak.";
               }
               else {
                 // code...
               }
               {
                  $unik = array_unique($list);
                  if (count) {
                    // code...
                  }
               }

               if (condition) { //disini file validasi file.
                 // code...
               }
               //check list array
	             //echo json_encode($list);//Returns the JSON representation of a value
					     //echo "sukses";
            }*/

          //$path = 'upload-'.$currentDate;

          //$dateReplace = date_format($currentDate, "d-m-Y_h:i:s");
          /*
          $response = array(
            'path' => $path,
            'status' => $status,
          );
          echo $response;
          */
          $data = array(
            //'path' => $path,
            'folder' => $currentDate,
            'date' => $show_date,
            //'dari' => $this->session->userdata('user_id'),
          );
          $this->h_operator->input_data($data);
          echo $currentDate;
          //echo $dateReplace;
      }
      //validasi kalo file nya kosong disini....
      //else {
        // code...
      //}
	   }

}
?>
