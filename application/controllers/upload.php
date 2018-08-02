<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Upload extends CI_Controller
{
  function __construct(){
  		parent::__construct();
  		  //$this->load->helper(array('form', 'url'));
  	}
  public function index(){
		$this->load->view('upload_view', array('error' => ' ' ));
	}
  public function multi_upload(){
    $data = array();
    date_default_timezone_set('Asia/Jakarta');
    $currentDate = date('dmY_his');
    //Directory where files will be uploaded
    $folder = 'upload/'.$currentDate;
    //validasi buat folder disini
    //......
    //validasi end.
    mkdir($folder);
    if (!empty($_FILES['file']['name'])) {
      $count = count($_FILES['file']['name']);
      for ($i=0; $i < $count; $i++) {
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
        if ($this->upload->do_upload('uploadfile')) {
          // /should i use this?
          $fileData = $this->upload->data();
          $uploadData[$i]['file_name'] = $fileData['file_name'];
          echo "sukses";
        }
      }
    }
  }
  public function uploads(){
	      $data = array();
				date_default_timezone_set('Asia/Jakarta');
		    $currentDate = date('dmY-his');
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
										//echo "sukses";
	              }
	          }
            $path = 'upload_'.$currentDate;
            echo $path;//$folder.'/';
            /*
            //validasi semua file disini!
	          if (!empty($uploadData)) {
	              $list=array();
	              foreach ($uploadData as $value) {
	                  array_push($list, $value['file_name']);
	              }
	        echo json_encode($list);//Returns the JSON representation of a value
					//echo "sukses";
        }*/
        //redirect('/csv/pronia'.$folder, 'refresh');
      }
      //validasi kalo file nya kosong disini....
      //else {
        // code...
      //}
	}
/*
  public function buat_tombol(){
    date_default_timezone_set('Asia/Jakarta');
    $currentDate = date('dmY_h.i.s');
    $folder = 'upload/'.$currentDate;
    mkdir($folder);
    if (file_exists($folder)) {
      $status = "berhasil";
    }
    else {
      $status = "gagal";
    }
    $data = array('status' => $status);
    $this->load->view('buat_tombol', $data);
  }
*/
  public function aksi_multi_upload(){
    date_default_timezone_set('Asia/Jakarta');
    $currentDate = date('dmY_his');
    $folder = 'upload/csv/'.$currentDate;
    mkdir($folder);
    $config['upload_path']          = $folder . '/';//'./upload/csv/';//$folder;//'./upload/'.$currentDate;
    $config['allowed_types']        = 'csv';
    $this->load->library('upload', $config);
    //^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
    //^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
    //$this->upload->do_upload('file[]');
    //*
    if ( ! $this->upload->do_upload('file')){ //uploadnya disini
			$error = array('error' => $this->upload->display_errors());
      $this->load->view('templates/agency/header');
  	  $this->load->view('templates/agency/index', $error);
      //$this->load->view('templates/index', $data);
  	  $this->load->view('templates/agency/footer');
		}
    else{
      //need to do foreach here sortof
      //$token = $this->input->post('token_file');
      //$upload_file = $this->upload->data();
      //$nama = $upload_file['file_name'.$currentDate];
      //*/
      //masukin validasi disini
      //..........
      //mulai coba upload ke $ftp_upload
      /*
      //cari path di local servers
      $path = './upload/'.$nama;
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
      $destination = './upload/'.$nama;
      //upload file ke remote server
      $this->ftp->upload($path, ".".$destination);
      //tutup koneksi ftp
      $this->ftp->close();
      //hapus file di local server
      //@unlink($source);
      //coba upload ke ftp
      $data = array('upload_data' => $upload_file);
      */
      $this->load->view('upload_sukses', $data);
    }
  }
  public function aksi_hapus_upload(){
    //$token = $this->input->post('token');
    //$file = $this->db->get_where('foto',array('token'=>$token));
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
      //masukin validasi disini
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
  public function uploadDz(){
    $this->load->view('cobaDropzone');
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
}
?>
