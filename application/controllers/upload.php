<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Upload extends CI_Controller
{

  function __construct(){
  		parent::__construct();
  		  $this->load->helper(array('form', 'url'));
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
			$data = array('upload_data' => $this->upload->data());
			$this->load->view('upload_sukses', $data);
		}
	}

    /*public function index(){
        if($this->input->post('submit')){
            //Upload to the local server
            $config['upload_path'] = 'uploads/';
            $config['allowed_types'] = '*';
            $this->load->library('upload', $config);

            if($this->upload->do_upload('file'))
            {
                //Get uploaded file information
                $upload_data = $this->upload->data();
                $fileName = $upload_data['file_name'];

                //File path at local server
                $source = 'uploads/'.$fileName;

                //Load codeigniter FTP class
                $this->load->library('ftp');

                //FTP configuration
                $ftp_config['hostname'] = 'ftp.example.com';
                $ftp_config['username'] = 'ftp_username';
                $ftp_config['password'] = 'ftp_password';
                $ftp_config['debug']    = TRUE;

                //Connect to the remote server
                $this->ftp->connect($ftp_config);

                //File upload path of remote server
                $destination = '/assets/'.$fileName;

                //Upload file to the remote server
                $this->ftp->upload($source, ".".$destination);

                //Close FTP connection
                $this->ftp->close();

                //Delete file from local server
                @unlink($source);
            }
        }
        $this->load->view('upload_view');
    }*/
}
?>
