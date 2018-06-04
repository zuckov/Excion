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

	public function aksi_upload(){
		$config['upload_path']          = './upload/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;

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
      
}
?>
