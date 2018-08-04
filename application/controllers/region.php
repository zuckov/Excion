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
 		$this->load->model('region');
 		$this->load->helper('url');

 	}
	public function index()
	{
		//$this->load->view('welcome_message');
		//$this->load->view('view');
		$data['region'] = $this->region->tampil_data()->result();
		$this->load->view('region/v_region',$data);
	}


	function tambah(){
		$this->load->view('region/i_region');
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
		$data['region'] = $this->region->edit_data($where,'region')->result();
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

		$this->region->update_data($where,$data,'region');
		redirect('region/index');
	}
}
