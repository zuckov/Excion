<?php

/**
 *
 */
 defined('BASEPATH') OR exit('No direct script access allowed');
 class Main extends CI_Controller {

    public function __construct(){
      parent::__construct();
      //$this->load->model('meter_utama');
      $this->load->model('h_operator');
      $this->load->model('m_user');

      $this->load->helper('url_helper');
    }

    public function index(){
        //$this->load->view('view');
       //$this->load->view('templates/header');
	     //$this->load->view('templates/index');
       $this->load->view('templates/trans/index');
       //$this->load->view('templates/trans/index_backup');
       //$this->load->view('templates/gen/login');
       //$this->load->view('templates/footer');
    }

    //=======================================================
    //tes template
    //=======================================================
    public function cek_trans(){
      //$this->load->view('templates/trans/hasil');
      $this->load->view('templates/hasil');
    }

    public function cek_gen(){
      $this->load->view('templates/gen/index.php');
    }
    public function cek_tabelgen1(){
      $this->load->view('templates/gen/tables.php');
    }
    public function cek_tabelgen2(){
      $history = count($this->h_operator->tampil_data_count()->result_array());
      $user = count($this->m_user->tampil_data()->result_array());

      $data = array(
        'history' => $history,
        'user' => $user,
      );
      $this->load->view('templates/gen/header');
      $this->load->view('templates/gen/index_gen', $data);
      //$this->load->view('templates/gen/tables_dynamic_big_backup');
      $this->load->view('templates/gen/footer');
    }
    public function cek_logingen(){
      $this->load->view('templates/gen/login.php');
    }
    //=======================================================
    //tes template end
    //=======================================================

    public function start($path = "C:/EXCION_GACA/ION DL"){
      $this->load->helper('directory');
      $this->load->helper('file');

      //insert ke database h_operator
      $date = DateTime::createFromFormat('dmY_his', $path)->format('d/m/Y_h:i:s');
      //$map = array();
      $map = directory_map('./upload/'.$path.'/');
      $data = array(
        //'path' => $path,
        'folder' => $path,
        'date' => $date,
        'map' => $map,
      );
      //$this->h_operator->input_data($data);


      //$pbs1 = $this->meter_utama->pronia();
      $this->load->view('templates/gen/header');
      $this->load->view('hasil', $data);
      //$this->load->view('hasil2');
      $this->load->view('templates/gen/footer');
      //$this->load->view('templates/header');
      //$this->load->view('templates/agency/blogview');
      //$this->load->view('templates/footer');
      //print_r($map);

    }

    public function start_default(){
      redirect('csv/pronia_default');
      //$this->load->view('hasil_default');
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

  public function fgetcsv(){

    $row = 1;
	  $path = "/upload/jam 24.00/GRG1=24.00.csv";
	  $path2 = "C:\EXCION_GACA\ION DL\GARNG 12.csv";
	  $path3 = "C:\EXCION_GACA\ION DL\JELOK 3.csv";
	  $path4 = "C:\EXCION_GACA\ION DL\JELOK 124.csv";
	  $path5 = "C:\EXCION_GACA\ION DL\KDOMBO.csv";
	  $path6 = "C:\EXCION_GACA\ION DL\KTG 1.csv";
	  $path7 = "C:\EXCION_GACA\ION DL\KTG 2.csv";
	  $path8 = "C:\EXCION_GACA\ION DL\PBS 1.csv";

	  //if(($handle = fopen($path2, "r")) != FALSE){
	  //coba mau pakai in_array  sama array_search
	  //array search : buat cari value array, return key arraynya
	  //in_array : cek apakah nilai tertentu ada di list array
	  //$data = fgetcsv($handle, 1000, ",");
	  //"kolom ke-$key di baris $row :<br /></p>\n";
	  //echo $key;

	  //tampilan 1, tampilin semua data pake tabel 2 dimensi
	  //file 1
	  $handle = fopen($path2, "r");
	  $data = fgetcsv($handle, 1000, ",");
	  $key = array_search("kVARh del int", $data);
	  fclose($handle);
	  $handle = fopen($path2, "r");
	  $catch = array();
	  $a=0;

	  //file 2
	  $handle2 = fopen($path3, "r");
	  $data = fgetcsv($handle2, 1000, ",");
	  $key2 = array_search("kWh del int", $data);
	  fclose($handle2);
	  $handle2 = fopen($path3, "r");
	  $catch2 = array();
	  $b=0;

	  //*
	  //file 4
	  $handle4 = fopen($path5, "r");
	  $data = fgetcsv($handle4, 1000, ",");
	  $key4 = array_search("kWh del int", $data);
	  fclose($handle4);
	  $handle4 = fopen($path5, "r");
	  $catch4 = array();
	  $d=0; //*/

	  //file 3
	  $handle3 = fopen($path4, "r");
	  $data = fgetcsv($handle3, 1000, ",");
	  $key3 = array_search("kWh del int", $data);
	  fclose($handle3);
	  $handle3 = fopen($path4, "r");
	  $catch3 = array();
	  $c=0;

	  ///*
	  //file 5
	  $handle5 = fopen($path6, "r");
	  $data = fgetcsv($handle5, 1000, ",");
	  $key5 = array_search("kWh del int", $data);
	  fclose($handle5);
	  $handle5 = fopen($path6, "r");
	  $catch5 = array();
	  $e=0;

	  //file 6
	  $handle6 = fopen($path7, "r");
	  $data = fgetcsv($handle6, 1000, ",");
	  $key6 = array_search("kWh del int", $data);
	  fclose($handle6);
	  $handle6 = fopen($path7, "r");
	  $catch6 = array();
	  $f=0;
	  //*/

	  //echo('<table>');
    echo "<table>";
	  while (($list= fgetcsv($handle, 1000, ",")) !=FALSE){//sumber masalah : fgetcsv nya harus dalam kondisi loop! harus!
		//echo("<tr>\r\n");
    echo "<tr>\r\n";
		foreach ($list as $index=>$val){
			//echo("\t<td>");
      echo("\t<td>");
			//echo htmlentities($val, ENT_QUOTES);
      echo htmlentities($val, ENT_QUOTES);
			//echo $val;
      echo $val;
			if($index==$key){
				$catch[$a]=$val;
				$a++;
			}
			//echo("</td>\r\n");
      echo "</td>\r\n";
		}
		//echo("</tr>\r\n");
    echo "</tr>\r\n";
	  }
    echo "</table>";

	  while (($list= fgetcsv($handle2, 1000, ",")) !=FALSE){
		foreach ($list as $index=>$val){
			if($index==$key2){
				$catch2[$b]=$val;
				$b++;
			}
		}
	  }

	while (($list= fgetcsv($handle3, 1000, ",")) !=FALSE){
		foreach ($list as $index=>$val){
			if($index==$key3){
				$catch3[$c]=$val;
				$c++;
			}
		}
	  }
	  while (($list= fgetcsv($handle4, 1000, ",")) !=FALSE){
		foreach ($list as $index=>$val){
			if($index==$key4){
				$catch4[$d]=$val;
				$d++;
			}
		}
	  }
	  while (($list= fgetcsv($handle5, 1000, ",")) !=FALSE){
		foreach ($list as $index=>$val){
			if($index==$key5){
				$catch5[$e]=$val;
				$e++;
			}
		}
	  }
	  while (($list= fgetcsv($handle6, 1000, ",")) !=FALSE){
		foreach ($list as $index=>$val){
			if($index==$key6){
				$catch6[$f]=$val;
				$f++;
			}
		}
	  }
	  //echo('</table>');

	  //tampilan 2, tampilin semua data pake list
	  //}
	  /*while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		$num = count($data);
		echo "<p> $num fields in line $row: <br /></p>\n";
		$row++;
		//for ($c=0; $c < $num; $c++) {
			echo $data[2] . "<br />\n";
		//}
	  }*/
	  //}
	  fclose($handle);

	  //coba print return value array catch
	  print "<pre>"; echo "file ke - 1 ".$path2." \n"; print_r($catch); print "</pre>";
	  print "<pre>"; echo "file ke - 2 ".$path3." \n"; print_r($catch2); print "</pre>";
	  print "<pre>"; echo "file ke - 3 ".$path4." \n"; print_r($catch3); print "</pre>";
	  print "<pre>"; echo "file ke - 4 ".$path5." \n"; print_r($catch4); print "</pre>";
	  print "<pre>"; echo "file ke - 5 ".$path6." \n"; print_r($catch5); print "</pre>";
	  print "<pre>"; echo "file ke - 6 ".$path7." \n"; print_r($catch6); print "</pre>";
	  //print "<pre>"; print_r($key); print "</pre>";
    }


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
