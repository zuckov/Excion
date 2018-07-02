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

	public function pronia($path = "C:/EXCION_GACA/ION DL/" ){

	  $row = 1;	  
	  $garng12 = $path."GARNG 12.csv";
	  $jelok3 = $path."JELOK 3.csv";
	  $jelok124 = $path."JELOK 124.csv";
	  $kdombo = $path."KDOMBO.csv";
	  $ktg1 = $path."KTG 1.csv";
	  $ktg2 = $path."KTG 2.csv";
	  $pbs1 = $path."PBS 1.csv";
	  $pbs2 = $path."PBS 2.csv";
	  $pbs3 = $path."PBS 3.csv";
	  $wonogri = $path."WONOGRI.csv";
	  $wadas2 = $path."WADAS 2.csv";
	  $wadas1 = $path."WADAS 1.csv";
	  $timo13 = $path."TIMO 13.csv";
	  $timo2 = $path."TIMO 2.csv";

	  //PBS 1
	  $filePbs = fopen($pbs1, "r");
	  $data = fgetcsv($filePbs, 1000, ",");	  
	  $pbsA/*pbsDate*/ = array_search("Date/Time", $data);
	  $pbsB/*pbsKwhDel*/ = array_search("kWh del int", $data);
	  $pbsC/*pbsKwhRec*/ = array_search("kVARh del int", $data);
	  $pbsD/*pbsKvarhDel*/ = array_search("kWh rec int", $data);
	  $pbsE/*pbsKvarhInt*/ = array_search("kVARh rec int", $data);
	  $pbsF/*pbsLpKvA*/ = array_search("LP-KV_A", $data);
	  $pbsG/*pbsLpKvB*/ = array_search("LP-KV_B", $data);
	  
	  $pbsDate = $pbsKwhKir = $pbsKwhTer = $pbsKvarhKir = $pbsKvarhTer = $pbsKapMw = $pbsKapMvar = array();
	  $a = $b = $c = $d = $e = $f = $g=0;
	  while (($list= fgetcsv($filePbs, 1000, ",")) !=FALSE){ //setiap baris
  		foreach ($list as $index=>$val){ //tiap kolom
			if($index==$pbsA){ //if index sama dengan kVARh del int
  				$pbsDate[$a]=$val; // buat nangkep nilai satu
  				$a++;
			}	
			else if($index==$pbsB){
				$pbsKwhKir[$b]=$val;
  				$b++;
			}
			else if($index==$pbsD){
				$pbsKwhTer[$c]=$val;
  				$c++;
			}
			else if($index==$pbsC){
				$pbsKvarhKir[$d]=$val;
  				$d++;
			}
			else if($index==$pbsE){
				$pbsKvarhTer[$e]=$val;
  				$e++;
			}
			else if($index==$pbsF){
				$pbsKapMw[$f]=$val;
  				$f++;
			}
			else {
				$pbsKapMvar[$g]=$val;
  				$g++;
			}
		}
	  }
	  
	 fclose($filePbs);
	 
	 $data = array(
		 'date' => $pbsDate,
         'kwh_k' => $pbsKwhKir,
         'kwh_t' => $pbsKwhTer,
         'kvarh_k' => $pbsKvarhKir,
         'kvarh_t' => $pbsKvarhTer,
         'kap_mw' => $pbsKapMw,
		 'kap_mvar' => $pbsKapMvar,		  
     );

	 $this->load->view('tabel', $data);	 
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
  				$catch[$a]=$val;
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
