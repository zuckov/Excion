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
	public function index(){
		$cek =$this->m_pejabat->tampil_data()->num_rows();
		//$cek = count($data);
		if ($cek > 0) {
			$data['pejabat'] = $this->m_pejabat->tampil_data()->result();
			$this->load->view('templates/gen/header');
			$this->load->view('pejabat/index_peja',$data);
			$this->load->view('templates/gen/footer');
			}
		else {
			$this->load->view('templates/gen/header');
			$this->load->view('pejabat/404_peja');
			$this->load->view('templates/gen/footer');
		}
	}

		public function tambah(){
			$this->load->view('pejabat/v_input');
			}

		public function tambah_aksi(){
			$this->form_validation->set_rules('nama','nama','required|trim');
			$this->form_validation->set_rules('jabatan','jabatan','required|trim');
			$this->form_validation->set_rules('nopeg','nomor pegawai','required|trim');

			if($this->form_validation->run()==FALSE){
					$this->session->set_flashdata('pesan1','Data input masih ada yang kosong');
					redirect('pejabat');
			}else{
	    $nama = $this->input->post('nama');
			$jabatan = $this->input->post('jabatan');
			$nopeg = $this->input->post('nopeg');

			$data = array(
				'nama' => $nama,
				'jabatan' => $jabatan,
				'no_pegawai' => $nopeg,
			);
			$this->m_pejabat->input_data($data);
			$this->session->set_flashdata('pesan2','Data input berhasil');
		redirect('pejabat/index');
		}
}
	  public function hapus($id){
			$where = array('id' => $id);
			$this->m_pejabat->delete_data($where,'pejabat');
			redirect('pejabat/index');
		}

	  public function edit($id){ //ini sukses
			$where = array('id' => $id);
			$data['pejabat'] = $this->m_pejabat->edit_data($where,'pejabat')->result();
			$this->load->view('pejabat/v_edit',$data);
		}

	  public function update($id){ //ini kenapa?
			//$id = $this->input->post('id');
			$nama = $this->input->post('nama');
			$jabatan = $this->input->post('jabatan');
			$nopeg = $this->input->post('nopeg');

			$data = array(
				'id' => $id,
				'nama' => $nama,
				'jabatan' => $jabatan,
				'no_pegawai' => $nopeg,
			);
			$where = array(
				'id' => $id
			);
			$this->m_pejabat->update_data($where,$data,'pejabat');
			redirect('pejabat/index');
		}
	}
