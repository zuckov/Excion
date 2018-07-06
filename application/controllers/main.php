<?php

/**
 *
 */
 defined('BASEPATH') OR exit('No direct script access allowed');
 class Main extends CI_Controller {
	function __construct(){
		parent::__construct();
		//if($this->session->userdata('status') = "login"){
			//echo "login sukses";
		//}
	}


    public function index($status=0)
    {
      //$this->load->view('view');
	  //*
	  $data = array ('status' => $status);
	  $this->load->view('templates/agency/header');
	  $this->load->view('templates/agency/index', $data);
    //$this->load->view('templates/index', $data);
	  $this->load->view('templates/agency/footer');
	  //*/
	  //$this->load->view('templates/gentellela/gen');
	  //$this->load->view('templates/supablog/supa');
    }

	public function coba_gentellela(){
		$this->load->view('templates/gentellela/gen');
	}

	public function coba_supablog(){
		$this->load->view('templates/supablog/supa');
	}

  public function about(){
    $this->load->view('templates/supablog/aboutsupa');
  }

	public function upload()
	{
		if($this->input->post('submit')){
			//mulai upload
			$ftp_upload['upload_path'] = 'uploads/';
			$ftp_upload['allowed_types'] = '*';
			$this->load->library('upload', $ftp_upload);

			if($this->upload->do_upload('file')){
				//ambil informasi file yg diupload
				$upload_data = $this->upload->data();
				$filename = $upload_data['file_name'];

				//path file di local server
				$source = 'uploads/'.$filename;

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
				$destination = '/uploads/'.$filename;

				//upload file ke remote server
				$this->ftp->upload($source, ".".$destination);

				//tutup koneksi ftp
				$this->ftp->close();

				//hapus file di local server
				@unlink($source);

				//redirect ke home
				redirect(base_url());
			}
		}
		$this->load->view('templates/upload');
	}

    /*
	public function view($page='home') {
      if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
        # kalo ga nemu
        show_404();
      }
      $data['title'] =ucfirst($page); //biar huruf besar awalannya

	  //*
      //$this->load->view('templates/header', $data);
      //$this->load->view('pages/'.$page, $data);
      //$this->load->view('templates/footer', $data);
	  //
	  $this->load->view('templates/index', $data);

    }
	*/


    public function multiCsv($bukaFile="C:\EXCION_GACA\ION DL\*.csv"){
      /*
      foreach (glob("myfiles/*.html") as $file) {
        $file_handle = fopen($file, "r");
        while (!feof($file_handle)) {
          $line = fgets($file_handle);
          echo $line;
        }
        fclose($file_handle);
      }*/
      $ke=1;
      foreach (glob($bukaFile) as $file) { //glob() = mengembalikan array nama file atau direktori yang cocok dengan pola yang telah ditentukan.
        $fileHandle = fopen($file, "r"); // fopen = buka file.
        //while (!feof($file_handle)) { //feof = ngecek kursor nya ada di end-of-file atau engga. Return true/false.
          $line = fgets($fileHandle); //fgets() = fungsi yang digunakan untuk membaca satu baris dari sebuah file. Return satu baris.
          echo "file ke-".$ke." baris pertama<br />\n";
          echo $file."<br />\n";
          echo $line."<br />\n";
          echo "<br />\n";
          $ke++;
        //}
        fclose($fileHandle);
      }
    }

    public function tablecsv(){
      $row = 1;
  	  $path = "/upload/jam 24.00/GRG1=24.00.csv";
  	  $path2 = "C:\EXCION_GACA\ION DL\GARNG 12.csv";
  	  $path3 = "C:\EXCION_GACA\ION DL\JELOK 3.csv";
  	  $path4 = "C:\EXCION_GACA\ION DL\JELOK 124.csv";
  	  $path5 = "C:\EXCION_GACA\ION DL\KDOMBO.csv";
  	  $path6 = "C:\EXCION_GACA\ION DL\KTG 1.csv";
  	  $path7 = "C:\EXCION_GACA\ION DL\KTG 2.csv";
  	  $path8 = "C:\EXCION_GACA\ION DL\PBS 1.csv";
	  $path9 = "C:\EXCION_GACA\ION DL\PBS 2.csv";

	  /*
	  Workbooks.Open Filename:="C:\EXCION_GACA\ION DL\KTG 2.csv" 1
    Workbooks.Open Filename:="C:\EXCION_GACA\ION DL\KTG 1.csv" 2
    Workbooks.Open Filename:="C:\EXCION_GACA\ION DL\GARNG 12.csv" 3
    Workbooks.Open Filename:="C:\EXCION_GACA\ION DL\WADAS 2.csv" 4
    Workbooks.Open Filename:="C:\EXCION_GACA\ION DL\WADAS 1.csv" 5
    Workbooks.Open Filename:="C:\EXCION_GACA\ION DL\KDOMBO.csv" 6
    Workbooks.Open Filename:="C:\EXCION_GACA\ION DL\TIMO 13.csv" 7
    Workbooks.Open Filename:="C:\EXCION_GACA\ION DL\TIMO 2.csv" 8
    Workbooks.Open Filename:="C:\EXCION_GACA\ION DL\JELOK 3.csv" 9
    Workbooks.Open Filename:="C:\EXCION_GACA\ION DL\JELOK 124.csv" 10
    Workbooks.Open Filename:="C:\EXCION_GACA\ION DL\PBS 3.csv" 11
    Workbooks.Open Filename:="C:\EXCION_GACA\ION DL\PBS 2.csv" 12
    Workbooks.Open Filename:="C:\EXCION_GACA\ION DL\PBS 1.csv" 13
    Workbooks.Open Filename:="C:\EXCION_GACA\ION DL\WONOGRI.csv" 14
	*/

      //file 1
  	  $handle = fopen($path2, "r");
  	  $data = fgetcsv($handle, 1000, ",");
  	  $key = array_search("kVARh del int", $data);
  	  fclose($handle);
  	  $handle = fopen($path2, "r");
  	  $catch = array();
  	  $a=0;

      while (($list= fgetcsv($handle, 1000, ",")) !=FALSE){
  		foreach ($list as $index=>$val){
  			if($index==$key){
  				$catch[$a]=$val; // buat nangkep nilai satu
  				$a++;
  			}
  		}
      }

      //file 2
  	  $handle2 = fopen($path3, "r");
  	  $data = fgetcsv($handle2, 1000, ",");
  	  $key2 = array_search("kWh del int", $data);
  	  fclose($handle2);
  	  $handle2 = fopen($path3, "r");
  	  $catch2 = array();
  	  $b=0;

      while (($list= fgetcsv($handle2, 1000, ",")) !=FALSE){
  		foreach ($list as $index=>$val){
  			if($index==$key2){
  				$catch2[$b]=$val;
  				$b++;
  			}
  		}
  	  }

  	  //*
  	  //file 4
  	  $handle4 = fopen($path5, "r");
  	  $data = fgetcsv($handle4, 1000, ",");
  	  $key4 = array_search("kWh del int", $data);
  	  fclose($handle4);
  	  $handle4 = fopen($path5, "r");
  	  $catch4 = array();
  	  $d=0; //*/

      while (($list= fgetcsv($handle4, 1000, ",")) !=FALSE){
  		foreach ($list as $index=>$val){
  			if($index==$key4){
  				$catch4[$d]=$val;
  				$d++;
  			}
  		}
  	  }

  	  //file 3
  	  $handle3 = fopen($path4, "r");
  	  $data = fgetcsv($handle3, 1000, ",");
  	  $key3 = array_search("kWh del int", $data);
  	  fclose($handle3);
  	  $handle3 = fopen($path4, "r");
  	  $catch3 = array();
  	  $c=0;

      while (($list= fgetcsv($handle3, 1000, ",")) !=FALSE){
    		foreach ($list as $index=>$val){
    			if($index==$key3){
    				$catch3[$c]=$val;
    				$c++;
    			}
    		}
    	  }

  	  ///*
  	  //file 5
  	  $handle5 = fopen($path6, "r");
  	  $data = fgetcsv($handle5, 1000, ",");
  	  $key5 = array_search("kWh del int", $data);
  	  fclose($handle5);
  	  $handle5 = fopen($path6, "r");
  	  $catch5 = array();
  	  $e=0;

      while (($list= fgetcsv($handle5, 1000, ",")) !=FALSE){
  		foreach ($list as $index=>$val){
  			if($index==$key5){
  				$catch5[$e]=$val;
  				$e++;
  			}
  		}
  	  }

  	  //file 6
  	  $handle6 = fopen($path7, "r");
  	  $data = fgetcsv($handle6, 1000, ",");
  	  $key6 = array_search("kWh del int", $data);
  	  fclose($handle6);
  	  $handle6 = fopen($path7, "r");
  	  $catch6 = array();
  	  $f=0;
  	  //*/

      while (($list= fgetcsv($handle6, 1000, ",")) !=FALSE){
  		foreach ($list as $index=>$val){
  			if($index==$key6){
  				$catch6[$f]=$val;
  				$f++;
  			}
  		}
      }
      /*
      echo "<table>";
        echo "<thead>";
          echo "<tr>";
            echo "<th>Kode</th>";
            echo "<th>Meter ID</th>";
            echo "<th>Tanggal dan Jam</th>";
            echo "<th>kWh Kirim</th>";
            echo "<th>kWh Terima</th>";
            echo "<th>kVArh Kirim</th>";
            echo "<th>kVArh Terima</th>";
            echo "<th>Kapasitas MW</th>";
            echo "<th>Kapasitas MVAR</th>";
          echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        $num = count($catch);
        for ($i=0; $i < $num; $i++) {
          $val = $i + 1;
          echo "<tr>";
          echo "<td>";
            echo "2";
          echo "</td>";
          echo "<td>";
            echo "19854071";
          echo "</td>";
          echo "<td>";
            echo "1/11/2013  10:30:00 AM";
          echo "</td>";
            echo "<td>";
              echo $catch[$val];
            echo "</td>";
            echo "<td>";
              echo $catch2[$val];
            echo "</td>";
            echo "<td>";
              echo $catch3[$val];
            echo "</td>";
            echo "<td>";
              echo $catch4[$val];
            echo "</td>";
            echo "<td>";
              echo $catch5[$val];
            echo "</td>";
          echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        }
        */
        $data = array(
          'kwh_k' => $catch,
          'kwh_t' => $catch2,
          'kvarh_k' => $catch3,
          'kvarh_t' => $catch4,
          'sss' => $catch5,
        );

        $this->load->view('tabel', $data);
      }

  }
?>
