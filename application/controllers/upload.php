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
    $currentDate = date('d-m-Y_h.i.s');
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
