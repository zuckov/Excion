<?php


class Allview extends CI_Controller{


public function user_kosong(){
  $this->load->view('templates/gen/header');
  $this->load->view('user/404_user');
  $this->load->view('templates/gen/footer');
}

public function history_kosong(){
  $this->load->view('templates/gen/header');
  $this->load->view('history/404_his');
  $this->load->view('templates/gen/footer');
}

public function pejabat_kosong(){
  $this->load->view('templates/gen/header');
  $this->load->view('pejabat/404_peja');
  $this->load->view('templates/gen/footer');
}


}

?>
