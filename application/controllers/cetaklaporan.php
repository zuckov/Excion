<?php
Class Cetaklaporan extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
        $this->load->model('meter_utama');
        $this->load->model('M_pejabat');
    }

    public function cetak_bakv($path){
      if($this->session->userdata('lvl') != 1){
  			redirect(base_url());
  		}
      if ($path == "C:/EXCION_GACA/ION DL") {
  			$sendpath = $path;
  		}
  		else {
  			$getPath = str_replace("-", "/", $path);
  			$sendpath = base_url().'upload/'.$getPath;
  		}
  		$this->form_validation->set_rules('nosurat','nosurat','required|trim');
  		$this->form_validation->set_rules('pejabat1','pejabat1','required|trim');
      $this->form_validation->set_rules('pejabat2','pejabat2','required|trim');

  		//$this->form_validation->set_rules('city', 'city', 'required|callback_select_validate'); // Validating select option field.

  		if($this->form_validation->run()==FALSE){
  				$this->session->set_flashdata('pesan1','Data input masih ada yang kosong');
  				redirect('main/start/'.$path);
  		}else{
  		$nosurat = $this->input->post('nosurat');
  		$jabat1 = $this->input->post('pejabat1');
  		$jabat2 = $this->input->post('pejabat2');

      $where1 = array(
        'id'=>$jabat1,
      );
      $where2 = array(
        'id'=>$jabat2,
      );
      $query = $this->meter_utama->get_bakv($sendpath);
  		$pejabat1 = $this->M_pejabat->edit_data($where1, "pejabat")->result();
      $pejabat2 = $this->M_pejabat->edit_data($where2, "pejabat")->result();
      //$query = $this->meter_utama->ba($path);

      $data = array(
        'pejabat1'=>$pejabat1,
        'pejabat2'=>$pejabat2,
        'query'=>$query,
      );

  		$this->session->set_flashdata('pesan2','cetak dalam proses');
  		//redirect('user');
      $this->load->view('cetak/cetak_bakv', $data);
  		}

    }
/*
    public function cetak_bakv($path){
      if($this->session->userdata('lvl') != 1){
  			redirect(base_url());
  		}
      if ($path == "C:/EXCION_GACA/ION DL") {
  			$sendpath = $path;
  		}
  		else {
  			$getPath = str_replace("-", "/", $path);
  			$sendpath = base_url().'upload/'.$getPath;
  		}
  		$this->form_validation->set_rules('nosurat','nosurat','required|trim');
  		$this->form_validation->set_rules('pejabat1','pejabat1','required|trim');
      $this->form_validation->set_rules('pejabat2','pejabat2','required|trim');

  		//$this->form_validation->set_rules('city', 'city', 'required|callback_select_validate'); // Validating select option field.

  		if($this->form_validation->run()==FALSE){
  				$this->session->set_flashdata('pesan1','Data input masih ada yang kosong');
  				redirect('main/start/'.$path);
  		}else{
  		$nosurat = $this->input->post('nosurat');
  		$jabat1 = $this->input->post('pejabat1');
  		$jabat2 = $this->input->post('pejabat2');

      $where1 = array(
        'id'=>$jabat1,
      );
      $where2 = array(
        'id'=>$jabat2,
      );
      $query = $this->meter_utama->get_bakv($sendpath);
  		$pejabat1 = $this->M_pejabat->edit_data($where1, "pejabat")->result();
      $pejabat2 = $this->M_pejabat->edit_data($where2, "pejabat")->result();
      //$query = $this->meter_utama->ba($path);

      $data = array(
        'pejabat1'=>$pejabat1,
        'pejabat2'=>$pejabat2,
        'query'=>$query,
      );

  		$this->session->set_flashdata('pesan2','cetak dalam proses');
  		//redirect('user');
      $this->load->view('cetak/cetak_bakv', $data);
  		}

    }*/


}
