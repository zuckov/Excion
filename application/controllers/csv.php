<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Csv extends CI_Controller {
	
	public function index()
	{
		//$this->load->view('welcome_message');
		//$this->load->view('view');
	}
	
	public function cetak()
	{
		$row = 1;
		if (($handle = fopen("/upload/jam 24.00/GRG1=24.00.csv", "r")) !== FALSE) {
		while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
			$num = count($data);
			echo "<p> $num fields in line $row: <br /></p>\n";
			$row++;
			for ($c=0; $c < $num; $c++) {
				echo $data[$c] . "<br />\n";
			}
		}
		fclose($handle);
		}
		//$this->load->view('welcome_message');
		//$this->load->view('view');
	}
}
?>