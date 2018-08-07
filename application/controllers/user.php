<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
	function __construct(){
 		parent::__construct();
		if($this->session->userdata('lvl') != 1){
			redirect(base_url());
		}
 		$this->load->model('m_user');
		$this->load->model('m_region');

 		$this->load->helper('url');

 	}
	public function index()
	{
		//$this->load->view('welcome_message');
		//$this->load->view('view');
    //$data['region'] = $this->m_user->tampil_data()->result();
    //$cek =$this->m_user->tampil_data()->num_rows();
    //$data['user'] = $this->m_user->tampil_data();
		//$data['region'] = $this->m_user->tampil_data()->result();
		//$data
    $result =$this->m_user->tampil_data_join()->num_rows();
		//*
		if ($result > 0) {
    //if ($data == 0) {
      //$data['user'] = $this->m_user->tampil_data()->result();
      $data['user'] = $this->m_user->tampil_data_join()->result();
			$data['region'] = $this->m_region->tampil_data()->result();
      $this->load->view('templates/gen/header');
			$this->load->view('user/index_user',$data);
			$this->load->view('templates/gen/footer');
		}
		else {
      $this->load->view('templates/gen/header');
			$this->load->view('user/404_user');
			$this->load->view('templates/gen/footer');
		}//*/
		//$this->load->view('user/v_tampil',$data);
	}


	function tambah(){
		$this->load->view('user/v_input');
	}

	function tambah_aksi(){
    $region = $this->input->post('user');

		$data = array(
			'user' => $region,
		);
		$this->m_user->input_data($data);
		redirect('user/index');
	}

  function hapus($id){
		$where = array('id' => $id);
		$this->m_user->delete_data($where,'user');
		redirect('user/index');
	}

  function edit($id){ //ini sukses
		$where = array('id' => $id);
		$data['user'] = $this->m_user->edit_data($where,'user')->result();
		$this->load->view('user/v_edit',$data);
	}

  function update($id){ //ini kenapa?
		//$id = $this->input->post('id');
    $region = $this->input->post('region');

		$data = array(
			'id' => $id,
			'region' => $region,
		);
		$where = array(
			'id' => $id
		);

		$this->m_user->update_data($where,$data,'user');
		redirect('user/index_user');
	}
}
