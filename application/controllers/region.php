<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Region extends CI_Controller {

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
 		$this->load->model('m_region');
 		$this->load->helper('url');

 	}
	public function index()
	{
		//$this->load->view('welcome_message');
		//$this->load->view('view');
		$data['region'] = $this->m_region->tampil_data()->result();
		//$data
		if ($data == 0) {
			$this->load->view('templates/gen/header');
			$this->load->view('region/404_reg');
			$this->load->view('templates/gen/footer');
		}
		else {
			$this->load->view('templates/gen/header');
			$this->load->view('region/index_reg',$data);
			$this->load->view('templates/gen/footer');
		}
		//$this->load->view('region/v_tampil',$data);
	}


	function tambah(){
		$this->load->view('region/v_input');
	}

	function tambah_aksi(){
    $region = $this->input->post('region');

		$data = array(
			'region' => $region,
		);
		$this->region->input_data($data,'region');
		redirect('region/index');
	}

  function hapus($id){
		$where = array('id' => $id);
		$this->region->delete_data($where,'region');
		redirect('region/index');
	}

  function edit($id){ //ini sukses
		$where = array('id' => $id);
		$data['region'] = $this->m_region->edit_data($where,'region')->result();
		$this->load->view('region/v_edit',$data);
	}

  function update(){ //ini kenapa?
		$id = $this->input->post('id');
    $region = $this->input->post('region');

		$data = array(
			//'id' => $id,
			'region' => $region,
		);
		$where = array(
			'id' => $id
		);

		$this->m_region->update_data($where,$data,'region');
		redirect('region/index');
	}
}
