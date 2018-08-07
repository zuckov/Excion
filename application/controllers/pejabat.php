<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pejabat extends CI_Controller {

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
 		$this->load->model('m_pejabat');
 		$this->load->helper('url');

 	}
	public function index()
	{
		//$this->load->view('welcome_message');
		//$this->load->view('view');
		//$data['region'] = $this->m_region->tampil_data()->result();
		//$this->load->view('region/v_tampil',$data);
		//$data['pejabat'] = $this->pejabat->tampil_data()->result();
		$data['pejabat'] = $this->m_pejabat->tampil_data()->result();
		$cek = count($data);
		if ($cek > 0) {
			$this->load->view('templates/gen/header');
			$this->load->view('pejabat/index_pej',$data);
			$this->load->view('templates/gen/footer');
			}
		else {
			$this->load->view('templates/gen/header');
			$this->load->view('pejabat/404_pej');
			$this->load->view('templates/gen/footer');
		}

	}

}
