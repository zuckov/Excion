<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set('memory_limit','256M');

/*
notes :
ajax jquery punya limit di css load

daftar isi/index :

- ba() -> tabel tampilan ba region
- baRegion() -> tabel tampilan ba pbs
- ????????() -> tabel tampilan ba kvarh


*/

class Csv extends CI_Controller {
	public function __construct(){
      parent::__construct();
      $this->load->model('meter_utama');
  }

	public function start()
	{

	}

	public function ba(){ //tabel tampilan ba region
		$this->load->view('tabelBa');
	}

	public function baRegion($path = "C:/EXCION_GACA/ION DL/"){ //tampilan ba pbs
		//coba fungsi simulasi BApbs
		//not based on neraca energi, semua itungan asalanya dari file mentah PBS.
		//get string path dari ajax. tambah validasi disini! pakai kapan :
			//1. harus pake C:/EXCION_GACA/ION DL/
			//2. harus pake get string path dari ajax
		//$getPath = str_replace("-", "/", $path);
		//$realPath = base_url().$getPath; //bisa ga tanpa base_url?
		$getPath = str_replace("-", "/", $path);
		$realPath = base_url().'upload/'.$getPath;
		//
		$pbs1 = $realPath."/PBS_1.csv";
	  $pbs2 = $realPath."/PBS_2.csv";
	  $pbs3 = $realPath."/PBS_3.csv";
		//================================================================
		// PBS 1
		//================================================================
		$filePbs = fopen($pbs1, "r");
	  $data = fgetcsv($filePbs, 1000, ",");
		$kwhk = array_search("kWh del int", $data);
		$kwht = array_search("kWh rec int", $data);
		$kvarhk = array_search("kVARh del int", $data);
		$kvarht = array_search("kVARh rec int", $data);
		//loop mulai disini
		$kwh_k = $kwh_t = $kvarh_k = $kvarh_t = array();
	  $a = $b = $c = $d = 0;
		while (($list= fgetcsv($filePbs, 1000, ",")) !=FALSE){ //setiap baris
  		foreach ($list as $index=>$val){ //tiap kolom
			if($index==$kwhk){
				$kwh_k[$a]=$val;
  				$a++;
			}
			else if($index==$kwht){
				$kwh_t[$b]=$val;
  				$b++;
			}
			else if($index==$kvarhk){//if index sama dengan kVARh del int
				$kvarh_k[$c]=$val;// buat nangkep nilai satu
  				$c++;
			}
			else if($index==$kvarht){
				$kvarh_t[$d]=$val;
  				$d++;
			}
		}
	  }
		$sumPbs1kwhk = array_sum($kwh_k);
		$sumPbs1kwht = array_sum($kwh_t);
		$sumPbs1kvarhk = array_sum($kvarh_k);
		$sumPbs1kvarht = array_sum($kvarh_t);
		fclose($filePbs);
		//================================================================
		// PBS 2
		//================================================================
		$filePbs = fopen($pbs2, "r");
	  $data = fgetcsv($filePbs, 1000, ",");
		$kwhk = array_search("kWh del int", $data);
		$kwht = array_search("kWh rec int", $data);
		$kvarhk = array_search("kVARh del int", $data);
		$kvarht = array_search("kVARh rec int", $data);
		//loop mulai disini
		$kwh_k = $kwh_t = $kvarh_k = $kvarh_t = array();
	  $a = $b = $c = $d = 0;
		while (($list= fgetcsv($filePbs, 1000, ",")) !=FALSE){ //setiap baris
  		foreach ($list as $index=>$val){ //tiap kolom
			if($index==$kwhk){
				$kwh_k[$a]=$val;
  				$a++;
			}
			else if($index==$kwht){
				$kwh_t[$b]=$val;
  				$b++;
			}
			else if($index==$kvarhk){//if index sama dengan kVARh del int
				$kvarh_k[$c]=$val;// buat nangkep nilai satu
  				$c++;
			}
			else if($index==$kvarht){
				$kvarh_t[$d]=$val;
  				$d++;
			}
		}
	  }
		$sumPbs2kwhk = array_sum($kwh_k);
		$sumPbs2kwht = array_sum($kwh_t);
		$sumPbs2kvarhk = array_sum($kvarh_k);
		$sumPbs2kvarht = array_sum($kvarh_t);
		fclose($filePbs);
		//================================================================
		// PBS 3
		//================================================================
		$filePbs = fopen($pbs3, "r");
	  $data = fgetcsv($filePbs, 1000, ",");
		$kwhk = array_search("kWh del int", $data);
		$kwht = array_search("kWh rec int", $data);
		$kvarhk = array_search("kVARh del int", $data);
		$kvarht = array_search("kVARh rec int", $data);
		//loop mulai disini
		$kwh_k = $kwh_t = $kvarh_k = $kvarh_t = array();
	  $a = $b = $c = $d = 0;
		while (($list= fgetcsv($filePbs, 1000, ",")) !=FALSE){ //setiap baris
  		foreach ($list as $index=>$val){ //tiap kolom
			if($index==$kwhk){
				$kwh_k[$a]=$val;
  				$a++;
			}
			else if($index==$kwht){
				$kwh_t[$b]=$val;
  				$b++;
			}
			else if($index==$kvarhk){//if index sama dengan kVARh del int
				$kvarh_k[$c]=$val;// buat nangkep nilai satu
  				$c++;
			}
			else if($index==$kvarht){
				$kvarh_t[$d]=$val;
  				$d++;
			}
		}
	  }
		$sumPbs3kwhk = array_sum($kwh_k);
		$sumPbs3kwht = array_sum($kwh_t);
		$sumPbs3kvarhk = array_sum($kvarh_k);
		$sumPbs3kvarht = array_sum($kvarh_t);

		$data = array(
          'sumPbs1kwhk' => $sumPbs1kwhk,
          'sumPbs2kwhk' => $sumPbs2kwhk,
          'sumPbs3kwhk' => $sumPbs3kwhk,
					//
					'sumPbs1kwht' => $sumPbs1kwht,
          'sumPbs2kwht' => $sumPbs2kwht,
          'sumPbs3kwht' => $sumPbs3kwht,
					//
					'sumPbs1kvarhk' => $sumPbs1kvarhk,
          'sumPbs2kvarhk' => $sumPbs2kvarhk,
          'sumPbs3kvarhk' => $sumPbs3kvarhk,
					//
					'sumPbs1kvarht' => $sumPbs1kvarht,
          'sumPbs2kvarht' => $sumPbs2kvarht,
          'sumPbs3kvarht' => $sumPbs3kvarht,
      );
		//$this->load->view('tabelBaKvarh');
		$this->load->view('tabelBaPBS', $data);
		//$this->load->view('tabelBaAjax', $data);
	}

	public function baRegion_default($path = "C:/EXCION_GACA/ION DL"){
		//$getPath = str_replace("-", "/", $path);
		//$realPath = base_url().'upload/'.$getPath;
		//
		$pbs1 = $path."/PBS 1.csv";
		$pbs2 = $path."/PBS 2.csv";
		$pbs3 = $path."/PBS 3.csv";
		//================================================================
		// PBS 1
		//================================================================
		$filePbs = fopen($pbs1, "r");
		$data = fgetcsv($filePbs, 1000, ",");
		$kwhk = array_search("kWh del int", $data);
		$kwht = array_search("kWh rec int", $data);
		$kvarhk = array_search("kVARh del int", $data);
		$kvarht = array_search("kVARh rec int", $data);
		//loop mulai disini
		$kwh_k = $kwh_t = $kvarh_k = $kvarh_t = array();
		$a = $b = $c = $d = 0;
		while (($list= fgetcsv($filePbs, 1000, ",")) !=FALSE){ //setiap baris
			foreach ($list as $index=>$val){ //tiap kolom
			if($index==$kwhk){
				$kwh_k[$a]=$val;
					$a++;
			}
			else if($index==$kwht){
				$kwh_t[$b]=$val;
					$b++;
			}
			else if($index==$kvarhk){//if index sama dengan kVARh del int
				$kvarh_k[$c]=$val;// buat nangkep nilai satu
					$c++;
			}
			else if($index==$kvarht){
				$kvarh_t[$d]=$val;
					$d++;
			}
		}
		}
		$sumPbs1kwhk = array_sum($kwh_k);
		$sumPbs1kwht = array_sum($kwh_t);
		$sumPbs1kvarhk = array_sum($kvarh_k);
		$sumPbs1kvarht = array_sum($kvarh_t);
		fclose($filePbs);
		//================================================================
		// PBS 2
		//================================================================
		$filePbs = fopen($pbs2, "r");
		$data = fgetcsv($filePbs, 1000, ",");
		$kwhk = array_search("kWh del int", $data);
		$kwht = array_search("kWh rec int", $data);
		$kvarhk = array_search("kVARh del int", $data);
		$kvarht = array_search("kVARh rec int", $data);
		//loop mulai disini
		$kwh_k = $kwh_t = $kvarh_k = $kvarh_t = array();
		$a = $b = $c = $d = 0;
		while (($list= fgetcsv($filePbs, 1000, ",")) !=FALSE){ //setiap baris
			foreach ($list as $index=>$val){ //tiap kolom
			if($index==$kwhk){
				$kwh_k[$a]=$val;
					$a++;
			}
			else if($index==$kwht){
				$kwh_t[$b]=$val;
					$b++;
			}
			else if($index==$kvarhk){//if index sama dengan kVARh del int
				$kvarh_k[$c]=$val;// buat nangkep nilai satu
					$c++;
			}
			else if($index==$kvarht){
				$kvarh_t[$d]=$val;
					$d++;
			}
		}
		}
		$sumPbs2kwhk = array_sum($kwh_k);
		$sumPbs2kwht = array_sum($kwh_t);
		$sumPbs2kvarhk = array_sum($kvarh_k);
		$sumPbs2kvarht = array_sum($kvarh_t);
		fclose($filePbs);
		//================================================================
		// PBS 3
		//================================================================
		$filePbs = fopen($pbs3, "r");
		$data = fgetcsv($filePbs, 1000, ",");
		$kwhk = array_search("kWh del int", $data);
		$kwht = array_search("kWh rec int", $data);
		$kvarhk = array_search("kVARh del int", $data);
		$kvarht = array_search("kVARh rec int", $data);
		//loop mulai disini
		$kwh_k = $kwh_t = $kvarh_k = $kvarh_t = array();
		$a = $b = $c = $d = 0;
		while (($list= fgetcsv($filePbs, 1000, ",")) !=FALSE){ //setiap baris
			foreach ($list as $index=>$val){ //tiap kolom
			if($index==$kwhk){
				$kwh_k[$a]=$val;
					$a++;
			}
			else if($index==$kwht){
				$kwh_t[$b]=$val;
					$b++;
			}
			else if($index==$kvarhk){//if index sama dengan kVARh del int
				$kvarh_k[$c]=$val;// buat nangkep nilai satu
					$c++;
			}
			else if($index==$kvarht){
				$kvarh_t[$d]=$val;
					$d++;
			}
		}
		}
		$sumPbs3kwhk = array_sum($kwh_k);
		$sumPbs3kwht = array_sum($kwh_t);
		$sumPbs3kvarhk = array_sum($kvarh_k);
		$sumPbs3kvarht = array_sum($kvarh_t);

		$data = array(
					'sumPbs1kwhk' => $sumPbs1kwhk,
					'sumPbs2kwhk' => $sumPbs2kwhk,
					'sumPbs3kwhk' => $sumPbs3kwhk,
					//
					'sumPbs1kwht' => $sumPbs1kwht,
					'sumPbs2kwht' => $sumPbs2kwht,
					'sumPbs3kwht' => $sumPbs3kwht,
					//
					'sumPbs1kvarhk' => $sumPbs1kvarhk,
					'sumPbs2kvarhk' => $sumPbs2kvarhk,
					'sumPbs3kvarhk' => $sumPbs3kvarhk,
					//
					'sumPbs1kvarht' => $sumPbs1kvarht,
					'sumPbs2kvarht' => $sumPbs2kvarht,
					'sumPbs3kvarht' => $sumPbs3kvarht,
			);
		//$this->load->view('tabelBaKvarh');
		$this->load->view('tabelBaPBS', $data);
		//$this->load->view('tabelBaAjax', $data);
	}


	public function pronia_default_2($file){
		//$row = 1;
		//get string path dari ajax. tambah validasi disini! pakai kapan :
			//1. harus pake C:/EXCION_GACA/ION DL/
			//2. harus pake get string path dari ajax
		$getPath = str_replace("_", " ", $file);
		$realPath = 'C:/EXCION_GACA/ION DL/'.$getPath;
		//PBS
		$file = fopen($realPath, "r");
		$data = fgetcsv($file, 1000, ",");
		$pbsA/*pbsDate*/ = array_search("Date/Time", $data);
		$pbsB/*pbsKwhDel*/ = array_search("kWh del int", $data);
		$pbsC/*pbsKwhRec*/ = array_search("kVARh del int", $data);
		$pbsD/*pbsKvarhDel*/ = array_search("kWh rec int", $data);
		$pbsE/*pbsKvarhInt*/ = array_search("kVARh rec int", $data);
		$pbsF/*pbsLpKvA*/ = array_search("LP-KV_A", $data);
		$pbsG/*pbsLpKvB*/ = array_search("LP-KV_B", $data);

		$pbsDate = $pbsKwhKir = $pbsKwhTer = $pbsKvarhKir = $pbsKvarhTer = $pbsKapMw = $pbsKapMvar = array();
		$a = $b = $c = $d = $e = $f = $g=0;
		while (($list= fgetcsv($file, 1000, ",")) !=FALSE){ //setiap baris
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

	 fclose($file);

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

	public function pronia_default(){
		$row = 1;
		//get string path dari ajax. tambah validasi disini! pakai kapan :
			//1. harus pake C:/EXCION_GACA/ION DL/
			//2. harus pake get string path dari ajax
		//$getPa 1 Cth = str_replace("_", " ", $file);
		$filePbs1 = "PBS 1.csv";
		$filePbs2 = "PBS 2.csv";
		$filePbs3 = "PBS 3.csv";
		//PBS1=====================================================================
		//$realpath = 'C:/EXCION_GACA/ION DL/'.$getPath;
		$path = 'C:/EXCION_GACA/ION DL/'.$filePbs1;
		//PBS
		$file = fopen($path, "r");
		$data = fgetcsv($file, 1000, ",");
		$pbsA/*pbsDate*/ = array_search("Date/Time", $data);
		$pbsB/*pbsKwhDel*/ = array_search("kWh del int", $data);
		$pbsC/*pbsKwhRec*/ = array_search("kVARh del int", $data);
		$pbsD/*pbsKvarhDel*/ = array_search("kWh rec int", $data);
		$pbsE/*pbsKvarhInt*/ = array_search("kVARh rec int", $data);
		$pbsF/*pbsLpKvA*/ = array_search("LP-KV_A", $data);
		$pbsG/*pbsLpKvB*/ = array_search("LP-KV_B", $data);

		$pbsDate = $pbsKwhKir = $pbsKwhTer = $pbsKvarhKir = $pbsKvarhTer = $pbsKapMw = $pbsKapMvar = array();
		$a = $b = $c = $d = $e = $f = $g=0;
		while (($list= fgetcsv($file, 1000, ",")) !=FALSE){ //setiap baris
			foreach ($list as $index=>$val){ //tiap kolom
			if($index==$pbsA){ //if index sama dengan kVARh del int
					$pbs1Date[$a]=$val; // buat nangkep nilai satu
					$a++;
			}
			else if($index==$pbsB){
				$pbs1KwhKir[$b]=$val;
					$b++;
			}
			else if($index==$pbsD){
				$pbs1KwhTer[$c]=$val;
					$c++;
			}
			else if($index==$pbsC){
				$pbs1KvarhKir[$d]=$val;
					$d++;
			}
			else if($index==$pbsE){
				$pbs1KvarhTer[$e]=$val;
					$e++;
			}
			else if($index==$pbsF){
				$pbs1KapMw[$f]=$val;
					$f++;
			}
			else {
				$pbs1KapMvar[$g]=$val;
					$g++;
			}
		}
		}
	 fclose($file);
//PBS2=====================================================================
$path = 'C:/EXCION_GACA/ION DL/'.$filePbs2;
//PBS
$file = fopen($path, "r");
$data = fgetcsv($file, 1000, ",");
$pbsA/*pbsDate*/ = array_search("Date/Time", $data);
$pbsB/*pbsKwhDel*/ = array_search("kWh del int", $data);
$pbsC/*pbsKwhRec*/ = array_search("kVARh del int", $data);
$pbsD/*pbsKvarhDel*/ = array_search("kWh rec int", $data);
$pbsE/*pbsKvarhInt*/ = array_search("kVARh rec int", $data);
$pbsF/*pbsLpKvA*/ = array_search("LP-KV_A", $data);
$pbsG/*pbsLpKvB*/ = array_search("LP-KV_B", $data);

$pbsDate = $pbsKwhKir = $pbsKwhTer = $pbsKvarhKir = $pbsKvarhTer = $pbsKapMw = $pbsKapMvar = array();
$a = $b = $c = $d = $e = $f = $g=0;
while (($list= fgetcsv($file, 1000, ",")) !=FALSE){ //setiap baris
	foreach ($list as $index=>$val){ //tiap kolom
	if($index==$pbsA){ //if index sama dengan kVARh del int
			$pbs2Date[$a]=$val; // buat nangkep nilai satu
			$a++;
	}
	else if($index==$pbsB){
		$pbs2KwhKir[$b]=$val;
			$b++;
	}
	else if($index==$pbsD){
		$pbs2KwhTer[$c]=$val;
			$c++;
	}
	else if($index==$pbsC){
		$pbs2KvarhKir[$d]=$val;
			$d++;
	}
	else if($index==$pbsE){
		$pbs2KvarhTer[$e]=$val;
			$e++;
	}
	else if($index==$pbsF){
		$pbs2KapMw[$f]=$val;
			$f++;
	}
	else {
		$pbs2KapMvar[$g]=$val;
			$g++;
	}
}
}
fclose($file);
//PBS3=====================================================================
//$getPath = str_replace("_", " ", $file3);
$path = 'C:/EXCION_GACA/ION DL/'.$filePbs3;
//PBS
$file = fopen($path, "r");
$data = fgetcsv($file, 1000, ",");
$pbsA/*pbsDate*/ = array_search("Date/Time", $data);
$pbsB/*pbsKwhDel*/ = array_search("kWh del int", $data);
$pbsC/*pbsKwhRec*/ = array_search("kVARh del int", $data);
$pbsD/*pbsKvarhDel*/ = array_search("kWh rec int", $data);
$pbsE/*pbsKvarhInt*/ = array_search("kVARh rec int", $data);
$pbsF/*pbsLpKvA*/ = array_search("LP-KV_A", $data);
$pbsG/*pbsLpKvB*/ = array_search("LP-KV_B", $data);

$pbsDate = $pbsKwhKir = $pbsKwhTer = $pbsKvarhKir = $pbsKvarhTer = $pbsKapMw = $pbsKapMvar = array();
$a = $b = $c = $d = $e = $f = $g=0;
while (($list= fgetcsv($file, 1000, ",")) !=FALSE){ //setiap baris
	foreach ($list as $index=>$val){ //tiap kolom
	if($index==$pbsA){ //if index sama dengan kVARh del int
			$pbs3Date[$a]=$val; // buat nangkep nilai satu
			$a++;
	}
	else if($index==$pbsB){
		$pbs3KwhKir[$b]=$val;
			$b++;
	}
	else if($index==$pbsD){
		$pbs3KwhTer[$c]=$val;
			$c++;
	}
	else if($index==$pbsC){
		$pbs3KvarhKir[$d]=$val;
			$d++;
	}
	else if($index==$pbsE){
		$pbs3KvarhTer[$e]=$val;
			$e++;
	}
	else if($index==$pbsF){
		$pbs3KapMw[$f]=$val;
			$f++;
	}
	else {
		$pbs3KapMvar[$g]=$val;
			$g++;
	}
}
}
fclose($file);
//==================================================================================
	 $data = array(
		 //pbs1
				 'pbs1date' => $pbs1Date,
				 'pbs1kwh_k' => $pbs1KwhKir,
				 'pbs1kwh_t' => $pbs1KwhTer,
				 'pbs1kvarh_k' => $pbs1KvarhKir,
				 'pbs1kvarh_t' => $pbs1KvarhTer,
				 'pbs1kap_mw' => $pbs1KapMw,
				 'pbs1kap_mvar' => $pbs1KapMvar,

			//pbs2
				 'pbs2date' => $pbs2Date,
				 'pbs2kwh_k' => $pbs2KwhKir,
				 'pbs2kwh_t' => $pbs2KwhTer,
				 'pbs2kvarh_k' => $pbs2KvarhKir,
				 'pbs2kvarh_t' => $pbs2KvarhTer,
				 'pbs2kap_mw' => $pbs2KapMw,
				 'pbs2kap_mvar' => $pbs2KapMvar,

		 //pbs3
				'pbs3date' => $pbs3Date,
				'pbs3kwh_k' => $pbs3KwhKir,
				'pbs3kwh_t' => $pbs3KwhTer,
				'pbs3kvarh_k' => $pbs3KvarhKir,
				'pbs3kvarh_t' => $pbs3KvarhTer,
				'pbs3kap_mw' => $pbs3KapMw,
				'pbs3kap_mvar' => $pbs3KapMvar,
		 );

		 $this->load->view('hasil_default', $data);
	}

public function pronia($date /* = "C:/EXCION_GACA/ION DL/PBS 1.csv"*/ ){ //bisa lebih streamline lagi?

		$row = 1;
		//get string path dari ajax. tambah validasi disini! pakai kapan :
			//1. harus pake C:/EXCION_GACA/ION DL/
			//2. harus pake get string path dari ajax
		$getPath = str_replace("-", "/", $date);
		$realPath = base_url().'upload/'.$getPath;
	  //PBS
	  $file = fopen($realPath, "r");
	  $data = fgetcsv($file, 1000, ",");
	  $pbsA/*pbsDate*/ = array_search("Date/Time", $data);
	  $pbsB/*pbsKwhDel*/ = array_search("kWh del int", $data);
	  $pbsC/*pbsKwhRec*/ = array_search("kVARh del int", $data);
	  $pbsD/*pbsKvarhDel*/ = array_search("kWh rec int", $data);
	  $pbsE/*pbsKvarhInt*/ = array_search("kVARh rec int", $data);
	  $pbsF/*pbsLpKvA*/ = array_search("LP-KV_A", $data);
	  $pbsG/*pbsLpKvB*/ = array_search("LP-KV_B", $data);

	  $pbsDate = $pbsKwhKir = $pbsKwhTer = $pbsKvarhKir = $pbsKvarhTer = $pbsKapMw = $pbsKapMvar = array();
	  $a = $b = $c = $d = $e = $f = $g=0;
	  while (($list= fgetcsv($file, 1000, ",")) !=FALSE){ //setiap baris
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

	 fclose($file);

	 $data = array(
		 		 'date' => $pbsDate,
         'kwh_k' => $pbsKwhKir,
         'kwh_t' => $pbsKwhTer,
         'kvarh_k' => $pbsKvarhKir,
         'kvarh_t' => $pbsKvarhTer,
         'kap_mw' => $pbsKapMw,
		 	 	 'kap_mvar' => $pbsKapMvar,
     );

		 $insert = array(
			 'date' => $pbsDate,
			 'kwh_kirim' => $pbsKwhKir,
			 'kwh_terima' => $pbsKwhTer,
			 'kvarh_kirim' => $pbsKvarhKir,
			 'kvarh_terima' => $pbsKvarhTer,
			 'region' => 'PBS',
			 'pengirim' => $this->session->userdata('user_id'),
			 'asal_folder' => $date,
		 );
		 $where =array(
			 'asal_folder' => $date,
		 );
		 $this->load->view('tabel', $data);

		 /*
		 $cek = $this->meter_utama->get_cek($where, "meter_utama")->num_rows();
		 if ($cek > 0) {
			 //tampilin pesan error
			 //tampilin hasil nya
		 	//redirect('csv/tampil_selected')
		 }
		 else {
		 	// masukin data ygditampilin ke dalam db.
			//tampilin hasilnya.
		 }
		 */

	}

//get_pronia
	public function get_pronia($path = "C:/EXCION_GACA/ION DL/PBS 1.csv"){
		$pbsArray = array();
		$pbsArray = $this->meter_utama->pronia($path);
		$this->load->view('tabel_json', $pbsArray);
	}

	public function get_hakv(){
		$this->load->view('tabelHasilKvarh');
	}

//get_bakv
	public function get_bakv($path = "C:/EXCION_GACA/ION DL"){
		//get string path dari ajax. tambah validasi disini! pakai kapan :
			//1. harus pake C:/EXCION_GACA/ION DL/
			//2. harus pake get string path dari ajax
		//$getPath = str_replace("-", "/", $path);
		//$realPath = base_url().$getPath; //bisa ga tanpa base_url?

		$getPath = str_replace("-", "/", $path);
		$realPath = base_url().'upload/'.$getPath;
		//
		//*
		$pbs1 = $realPath."/PBS_1.csv";
	  $pbs2 = $realPath."/PBS_2.csv";
	  $pbs3 = $realPath."/PBS_3.csv";
		$hasilPbs1 = $hasilPbs2 = $hasilPbs3 = array();
		$kwh_k = $kwh_t = $kvar_k = $kvar_t =	$mw = $mvarIn = $mvarOut = $cosphiLead = $cosphiLag = array();
		$consLead = $consLag = $mvarLead = $mvarLag = array();
		$pbs1Lead = $pbs2Lead = $pbs3Lead = array();
		//$pbs1Lag = $pbs2Lag = $pbs3Lag = array();

//hasil PBS1
		//hasil PBS 1 kvark dan kvart
		$hasilPbs1 = $this->meter_utama->pronia($pbs1);
		foreach ($hasilPbs1['kvarh_k'] as $key => $value) {
			$kvar_k[$key] = round($value, 3)/1000;
		}
		foreach ($hasilPbs1['kvarh_t'] as $key => $value) {
			$kvar_t[$key] = round($value, 3)/1000;
		}
		$sumKvarKPbs1 = array_sum($kvar_k)*1000;
		$sumKvarTPbs1 = array_sum($kvar_t)*1000;

		//hasil hitung KHW
		//hasil KHW pbs1
		foreach ($hasilPbs1['kwh_k'] as $key => $value) {
			//assign nilai MW
			$mw[$key] = $value/1000/0.5;//sumber masalah! nilai mw engga dibagi 1000
			//assign nilai MVar out/in sama Cosphi lag/lead
			if ($value>0) { // artinya nilai mw gamungkin 0 kan?
				$mvarOut[$key] = $kvar_k[$key]/0.5;
				$mvarIn[$key] = $kvar_t[$key]/0.5;
				$cosphiLead[$key] = $mw[$key]/pow(pow($mw[$key], 2) + pow($mvarOut[$key], 2), 0.5);
				$cosphiLag[$key] = $mw[$key]/pow(pow($mw[$key], 2) + pow($mvarIn[$key], 2), 0.5);
				$consLead[$key] = $mw[$key]/0.95*pow((1-(0.95*0.95)), 0.5);
				$consLag[$key] = $mw[$key]/0.85*(pow(1-(0.85*0.85), 0.5));
				if ($mvarOut[$key] > $consLag[$key]) {
					$mvarLag[$key] = $mvarOut[$key] - $consLag[$key];
				}
				else {
					$mvarLag[$key] = 0;
				}
				if ($mvarIn[$key] > $consLead[$key]) { //perlu di debug
					$mvarLead[$key] = $mvarIn[$key] - $consLead[$key];
				}
				else {
					$mvarLead[$key] = 0;
				}
			}
			else { //artinya nilai mw = 0
				$mvarOut[$key] = 0;
				$mvarIn[$key] = 0;
				$cosphiLead[$key] = 0;
				$cosphiLag[$key] = 0;
				$consLead[$key] = 0;//sumber masalah
				$consLag[$key] = 0;
				$mvarLag[$key] = 0;
				$mvarLead[$key] = 0;
			}
		}

		//hasil hitung MVAR
		/*
		foreach ($mvarOut as $key => $value) {
			if ($value > $consLag[$key]) {
				$mvarLag[$key] = $value - $consLag[$key];
			}
			else {
				$mvarLag[$key] = 0;
			}
		}
		foreach ($mvarIn as $key => $value) {
			if ($value > $consLead[$key]) {
				$mvarLead[$key] = $value - $consLead[$key];
			}
			else {
				$mvarLead[$key] = 0;
			}
		}
		*/
		//hasil PBS 1
		$pbs1Lead = array_sum($mvarLead);
		$pbs1Lag = array_sum($mvarLag);
		//*
		//hasil hitung cos phi
		//hasil hitung cos phi pbs1
		//foreach ($mw as $key => $value) {
		/*
		foreach ($mw as $key => $value) {
			if ($value == 0) {
				$cosphiLead[$key] = 0;
				$cosphiLag[$key] = 0;
			}
			else {
				$cosphiLead[$key] = $value/pow(pow($value, 2) + pow($mvarOut[$key], 2), 2);
				$cosphiLag[$key] = $value/pow(pow($value, 2) + pow($mvarIn[$key], 2), 2);
			}
		}
		*/

//hasil PBS 2 kvark dan kvart
		$hasilPbs2 = $this->meter_utama->pronia($pbs2);
		foreach ($hasilPbs2['kvarh_k'] as $key => $value) {
			$kvar_k[$key] = $value/1000;
		}
		foreach ($hasilPbs2['kvarh_t'] as $key => $value) {
			$kvar_t[$key] = $value/1000;
		}
		$sumKvarKPbs2 = array_sum($kvar_k)*1000;
		$sumKvarTPbs2 = array_sum($kvar_t)*1000;

		//hasil hitung KHW
		//hasil KHW pbs2
		foreach ($hasilPbs2['kwh_k'] as $key => $value) {
			//assign nilai MW
			$mw[$key] = $value/1000/0.5;
			//assign nilai MVar out/in sama Cosphi lag/lead
			if ($value>0) { // artinya nilai mw gamungkin 0 kan?
				$mvarOut[$key] = $kvar_k[$key]/0.5;
				$mvarIn[$key] = $kvar_t[$key]/0.5;
				$cosphiLead[$key] = $mw[$key]/pow(pow($mw[$key], 2) + pow($mvarOut[$key], 2), 0.5);
				$cosphiLag[$key] = $mw[$key]/pow(pow($mw[$key], 2) + pow($mvarIn[$key], 2), 0.5);
				$consLead[$key] = ($mw[$key]/0.95)*(pow(1-(0.95*0.95), 0.5));
				$consLag[$key] =($mw[$key]/0.85)*(pow(1-(0.85*0.85), 0.5));
				if ($mvarOut[$key] > $consLag[$key]) {
					$mvarLag[$key] = $mvarOut[$key] - $consLag[$key];
				}
				else {
					$mvarLag[$key] = 0;
				}
				if ($mvarIn[$key] > $consLead[$key]) {
					$mvarLead[$key] = $mvarIn[$key] - $consLead[$key];
				}
				else {
					$mvarLead[$key] = 0;
				}
			}
			else { //artinya nilai mw = 0
				$mvarOut[$key] = 0;
				$mvarIn[$key] = 0;
				$cosphiLead[$key] = 0;
				$cosphiLag[$key] = 0;
				$consLead[$key] = 0;
				$consLag[$key] = 0;
				$mvarLag[$key] = 0;
				$mvarLead[$key] = 0;
			}
		}

				$pbs2Lead = array_sum($mvarLead);
				$pbs2Lag = array_sum($mvarLag);


//hasil PBS 3 kvark dan kvart
		$hasilPbs3 = $this->meter_utama->pronia($pbs3);
		foreach ($hasilPbs3['kvarh_k'] as $key => $value) {
			$kvar_k[$key] = $value/1000;
		}
		foreach ($hasilPbs3['kvarh_t'] as $key => $value) {
			$kvar_t[$key] = $value/1000;
		}
		$sumKvarKPbs3 = array_sum($kvar_k)*1000;
		$sumKvarTPbs3 = array_sum($kvar_t)*1000;

		//hasil hitung KHW
		//hasil KHW pbs3
		foreach ($hasilPbs3['kwh_k'] as $key => $value) {
			//assign nilai MW
			$mw[$key] = $value/1000/0.5;
			//assign nilai MVar out/in sama Cosphi lag/lead
			if ($value>0) { // artinya nilai mw gamungkin 0 kan?
				$mvarOut[$key] = $kvar_k[$key]/0.5;
				$mvarIn[$key] = $kvar_t[$key]/0.5;
				$cosphiLead[$key] = $mw[$key]/pow(pow($mw[$key], 2) + pow($mvarOut[$key], 2), 0.5);
				$cosphiLag[$key] = $mw[$key]/pow(pow($mw[$key], 2) + pow($mvarIn[$key], 2), 0.5);
				$consLead[$key] = ($mw[$key]/0.95)*(pow(1-(0.95*0.95), 0.5));
				$consLag[$key] =($mw[$key]/0.85)*(pow(1-(0.85*0.85), 0.5));
				if ($mvarOut[$key] > $consLag[$key]) {
					$mvarLag[$key] = $mvarOut[$key] - $consLag[$key];
				}
				else {
					$mvarLag[$key] = 0;
				}
				if ($mvarIn[$key] > $consLead[$key]) {
					$mvarLead[$key] = $mvarIn[$key] - $consLead[$key];
				}
				else {
					$mvarLead[$key] = 0;
				}
			}
			else { //artinya nilai mw = 0
				$mvarOut[$key] = 0;
				$mvarIn[$key] = 0;
				$cosphiLead[$key] = 0;
				$cosphiLag[$key] = 0;
				$consLead[$key] = 0;
				$consLag[$key] = 0;
				$mvarLag[$key] = 0;
				$mvarLead[$key] = 0;
			}
		}

				$pbs3Lead = array_sum($mvarLead);
				$pbs3Lag = array_sum($mvarLag);
//*/
		//$sum = array_sum($hasilPbs1['kwh_k']);
		//$hasilPbs2 = $this->meter_utama->get_pronia($pbs2);
		//$hasilPbs3 = $this->meter_utama->get_pronia($pbs3);

		$data = array
		(
			//pbs1
			//hasilpbs1 -> jangan lupa apus lol
			//'hasilpbs' => $hasilPbs1,
			'hasilkvarkpbs1' => $sumKvarKPbs1,
			'hasilkvartpbs1' => $sumKvarTPbs1,
			'hasilleadpbs1' => $pbs1Lead,
			'hasillagpbs1' => $pbs1Lag,
			//$mvarIn[$key] > $consLead[$key]
			//'mvarLead' => $mvarLead, // our endgame!
			//$mvarOut[$key] > $consLag[$key]
			//'mvarLag' => $mvarLag, // our endgame!
			/*
			'mw' => $mw,
			'mvarOut' => $mvarOut, //-> butuh buat mvarLag
			'mvarIn' => $mvarIn, // -> butuh buat mvarLead
			'cosphiLead' => $cosphiLead,
			'cosphiLag' => $cosphiLag,//*/
			//'consLead' => $consLead, //-> butuh buat mvarLead
			//'consLag' => $consLag, //-> butuh buat mvarLag

			//*
			//pbs2
			'hasilkvarkpbs2' => $sumKvarKPbs2,
			'hasilkvartpbs2' => $sumKvarTPbs2,
			'hasilleadpbs2' => $pbs2Lead,
			'hasillagpbs2' => $pbs2Lag,
			//pbs3
			'hasilkvarkpbs3' => $sumKvarKPbs3,
			'hasilkvartpbs3' => $sumKvarTPbs3,
			'hasilleadpbs3' => $pbs3Lead,
			'hasillagpbs3' => $pbs3Lag,
		);

		//*/
		$this->load->view('tabelBaKvarh', $data);
		//$this->load->view('cobaBaKvarh', $data);
	}

	public function get_bakv_default($path = "C:/EXCION_GACA/ION DL"){
		//get string path dari ajax. tambah validasi disini! pakai kapan :
			//1. harus pake C:/EXCION_GACA/ION DL/
			//2. harus pake get string path dari ajax
		//$getPath = str_replace("-", "/", $path);
		//$realPath = base_url().$getPath; //bisa ga tanpa base_url?

		//$getPath = str_replace("-", "/", $path);
		//$realPath = base_url().'upload/'.$getPath;
		//
		//*
		$pbs1 = $path."/PBS 1.csv";
		$pbs2 = $path."/PBS 2.csv";
		$pbs3 = $path."/PBS 3.csv";
		$hasilPbs1 = $hasilPbs2 = $hasilPbs3 = array();
		$kwh_k = $kwh_t = $kvar_k = $kvar_t =	$mw = $mvarIn = $mvarOut = $cosphiLead = $cosphiLag = array();
		$consLead = $consLag = $mvarLead = $mvarLag = array();
		$pbs1Lead = $pbs2Lead = $pbs3Lead = array();
		//$pbs1Lag = $pbs2Lag = $pbs3Lag = array();

//hasil PBS1
		//hasil PBS 1 kvark dan kvart
		$hasilPbs1 = $this->meter_utama->pronia($pbs1);
		foreach ($hasilPbs1['kvarh_k'] as $key => $value) {
			$kvar_k[$key] = round($value, 3)/1000;
		}
		foreach ($hasilPbs1['kvarh_t'] as $key => $value) {
			$kvar_t[$key] = round($value, 3)/1000;
		}
		$sumKvarKPbs1 = array_sum($kvar_k)*1000;
		$sumKvarTPbs1 = array_sum($kvar_t)*1000;

		//hasil hitung KHW
		//hasil KHW pbs1
		foreach ($hasilPbs1['kwh_k'] as $key => $value) {
			//assign nilai MW
			$mw[$key] = $value/1000/0.5;//sumber masalah! nilai mw engga dibagi 1000
			//assign nilai MVar out/in sama Cosphi lag/lead
			if ($value>0) { // artinya nilai mw gamungkin 0 kan?
				$mvarOut[$key] = $kvar_k[$key]/0.5;
				$mvarIn[$key] = $kvar_t[$key]/0.5;
				$cosphiLead[$key] = $mw[$key]/pow(pow($mw[$key], 2) + pow($mvarOut[$key], 2), 0.5);
				$cosphiLag[$key] = $mw[$key]/pow(pow($mw[$key], 2) + pow($mvarIn[$key], 2), 0.5);
				$consLead[$key] = $mw[$key]/0.95*pow((1-(0.95*0.95)), 0.5);
				$consLag[$key] = $mw[$key]/0.85*(pow(1-(0.85*0.85), 0.5));
				if ($mvarOut[$key] > $consLag[$key]) {
					$mvarLag[$key] = $mvarOut[$key] - $consLag[$key];
				}
				else {
					$mvarLag[$key] = 0;
				}
				if ($mvarIn[$key] > $consLead[$key]) { //perlu di debug
					$mvarLead[$key] = $mvarIn[$key] - $consLead[$key];
				}
				else {
					$mvarLead[$key] = 0;
				}
			}
			else { //artinya nilai mw = 0
				$mvarOut[$key] = 0;
				$mvarIn[$key] = 0;
				$cosphiLead[$key] = 0;
				$cosphiLag[$key] = 0;
				$consLead[$key] = 0;//sumber masalah
				$consLag[$key] = 0;
				$mvarLag[$key] = 0;
				$mvarLead[$key] = 0;
			}
		}


		$pbs1Lead = array_sum($mvarLead);
		$pbs1Lag = array_sum($mvarLag);


//hasil PBS 2 kvark dan kvart
		$hasilPbs2 = $this->meter_utama->pronia($pbs2);
		foreach ($hasilPbs2['kvarh_k'] as $key => $value) {
			$kvar_k[$key] = $value/1000;
		}
		foreach ($hasilPbs2['kvarh_t'] as $key => $value) {
			$kvar_t[$key] = $value/1000;
		}
		$sumKvarKPbs2 = array_sum($kvar_k)*1000;
		$sumKvarTPbs2 = array_sum($kvar_t)*1000;

		//hasil hitung KHW
		//hasil KHW pbs2
		foreach ($hasilPbs2['kwh_k'] as $key => $value) {
			//assign nilai MW
			$mw[$key] = $value/1000/0.5;
			//assign nilai MVar out/in sama Cosphi lag/lead
			if ($value>0) { // artinya nilai mw gamungkin 0 kan?
				$mvarOut[$key] = $kvar_k[$key]/0.5;
				$mvarIn[$key] = $kvar_t[$key]/0.5;
				$cosphiLead[$key] = $mw[$key]/pow(pow($mw[$key], 2) + pow($mvarOut[$key], 2), 0.5);
				$cosphiLag[$key] = $mw[$key]/pow(pow($mw[$key], 2) + pow($mvarIn[$key], 2), 0.5);
				$consLead[$key] = ($mw[$key]/0.95)*(pow(1-(0.95*0.95), 0.5));
				$consLag[$key] =($mw[$key]/0.85)*(pow(1-(0.85*0.85), 0.5));
				if ($mvarOut[$key] > $consLag[$key]) {
					$mvarLag[$key] = $mvarOut[$key] - $consLag[$key];
				}
				else {
					$mvarLag[$key] = 0;
				}
				if ($mvarIn[$key] > $consLead[$key]) {
					$mvarLead[$key] = $mvarIn[$key] - $consLead[$key];
				}
				else {
					$mvarLead[$key] = 0;
				}
			}
			else { //artinya nilai mw = 0
				$mvarOut[$key] = 0;
				$mvarIn[$key] = 0;
				$cosphiLead[$key] = 0;
				$cosphiLag[$key] = 0;
				$consLead[$key] = 0;
				$consLag[$key] = 0;
				$mvarLag[$key] = 0;
				$mvarLead[$key] = 0;
			}
		}

				$pbs2Lead = array_sum($mvarLead);
				$pbs2Lag = array_sum($mvarLag);


//hasil PBS 3 kvark dan kvart
		$hasilPbs3 = $this->meter_utama->pronia($pbs3);
		foreach ($hasilPbs3['kvarh_k'] as $key => $value) {
			$kvar_k[$key] = $value/1000;
		}
		foreach ($hasilPbs3['kvarh_t'] as $key => $value) {
			$kvar_t[$key] = $value/1000;
		}
		$sumKvarKPbs3 = array_sum($kvar_k)*1000;
		$sumKvarTPbs3 = array_sum($kvar_t)*1000;

		//hasil hitung KHW
		//hasil KHW pbs3
		foreach ($hasilPbs3['kwh_k'] as $key => $value) {
			//assign nilai MW
			$mw[$key] = $value/1000/0.5;
			//assign nilai MVar out/in sama Cosphi lag/lead
			if ($value>0) { // artinya nilai mw gamungkin 0 kan?
				$mvarOut[$key] = $kvar_k[$key]/0.5;
				$mvarIn[$key] = $kvar_t[$key]/0.5;
				$cosphiLead[$key] = $mw[$key]/pow(pow($mw[$key], 2) + pow($mvarOut[$key], 2), 0.5);
				$cosphiLag[$key] = $mw[$key]/pow(pow($mw[$key], 2) + pow($mvarIn[$key], 2), 0.5);
				$consLead[$key] = ($mw[$key]/0.95)*(pow(1-(0.95*0.95), 0.5));
				$consLag[$key] =($mw[$key]/0.85)*(pow(1-(0.85*0.85), 0.5));
				if ($mvarOut[$key] > $consLag[$key]) {
					$mvarLag[$key] = $mvarOut[$key] - $consLag[$key];
				}
				else {
					$mvarLag[$key] = 0;
				}
				if ($mvarIn[$key] > $consLead[$key]) {
					$mvarLead[$key] = $mvarIn[$key] - $consLead[$key];
				}
				else {
					$mvarLead[$key] = 0;
				}
			}
			else { //artinya nilai mw = 0
				$mvarOut[$key] = 0;
				$mvarIn[$key] = 0;
				$cosphiLead[$key] = 0;
				$cosphiLag[$key] = 0;
				$consLead[$key] = 0;
				$consLag[$key] = 0;
				$mvarLag[$key] = 0;
				$mvarLead[$key] = 0;
			}
		}
		//*
				$pbs3Lead = array_sum($mvarLead);
				$pbs3Lag = array_sum($mvarLag);

		$data = array
		(
			//pbs1
			'hasilkvarkpbs1' => $sumKvarKPbs1,
			'hasilkvartpbs1' => $sumKvarTPbs1,
			'hasilleadpbs1' => $pbs1Lead,
			'hasillagpbs1' => $pbs1Lag,
			//*
			//pbs2
			'hasilkvarkpbs2' => $sumKvarKPbs2,
			'hasilkvartpbs2' => $sumKvarTPbs2,
			'hasilleadpbs2' => $pbs2Lead,
			'hasillagpbs2' => $pbs2Lag,
			//pbs3
			'hasilkvarkpbs3' => $sumKvarKPbs3,
			'hasilkvartpbs3' => $sumKvarTPbs3,
			'hasilleadpbs3' => $pbs3Lead,
			'hasillagpbs3' => $pbs3Lag,
		);

		//*/
		$this->load->view('tabelBaKvarh', $data);
	}


//coba_bakv
	public function coba_bakv(){

		$hasilPbs1 = array();
		$kwh_k = $kwh_t = $kvar_k = $kvar_t =	$mw = $mvarIn = $mvarOut = $cosphiLead = $cosphiLag = array();
		$consLead = $consLag = $mvarLead = $mvarLag = array();
		$pbs1Lead = $pbs2Lead = $pbs3Lead = array();
		//$pbs1Lag = $pbs2Lag = $pbs3Lag = array();

//hasil PBS1
		//ganti path file disini!
		///*
		$pbs1 = "C:/EXCION_GACA/ION DL/PBS 1.csv";
		$hasilPbs1 = $this->meter_utama->pronia($pbs1);
		//*/
		/*
		$pbs2 = "C:/EXCION_GACA/ION DL/PBS 2.csv";
		$hasilPbs1 = $this->meter_utama->pronia($pbs2);
		*/
		/*
		$pbs3 = "C:/EXCION_GACA/ION DL/PBS 3.csv";
		$hasilPbs1 = $this->meter_utama->pronia($pbs3);
		*/
		foreach ($hasilPbs1['kvarh_k'] as $key => $value) {
			$kvar_k[$key] = round($value, 3)/1000;
		}
		foreach ($hasilPbs1['kvarh_t'] as $key => $value) {
			$kvar_t[$key] = round($value, 3)/1000;
		}
		$sumKvarKPbs1 = array_sum($kvar_k)*1000;
		$sumKvarTPbs1 = array_sum($kvar_t)*1000;

		//hasil hitung KHW
		//hasil KHW pbs1
		foreach ($hasilPbs1['kwh_k'] as $key => $value) {
			//assign nilai MW
			$mw[$key] = $value/1000/0.5;//sumber masalah! nilai mw engga dibagi 1000
			//assign nilai MVar out/in sama Cosphi lag/lead
			if ($value>0) { // artinya nilai mw gamungkin 0 kan?
				$mvarOut[$key] = $kvar_k[$key]/0.5;
				$mvarIn[$key] = $kvar_t[$key]/0.5;
				$cosphiLead[$key] = $mw[$key]/pow(pow($mw[$key], 2) + pow($mvarOut[$key], 2), 0.5);
				$cosphiLag[$key] = $mw[$key]/pow(pow($mw[$key], 2) + pow($mvarIn[$key], 2), 0.5);
				$consLead[$key] = $mw[$key]/0.95*pow((1-(0.95*0.95)), 0.5);
				$consLag[$key] = $mw[$key]/0.85*(pow(1-(0.85*0.85), 0.5));
				if ($mvarOut[$key] > $consLag[$key]) {
					$mvarLag[$key] = $mvarOut[$key] - $consLag[$key];
				}
				else {
					$mvarLag[$key] = 0;
				}
				if ($mvarIn[$key] > $consLead[$key]) { //perlu di debug
					$mvarLead[$key] = $mvarIn[$key] - $consLead[$key];
				}
				else {
					$mvarLead[$key] = 0;
				}
			}
			else { //artinya nilai mw = 0
				$mvarOut[$key] = 0;
				$mvarIn[$key] = 0;
				$cosphiLead[$key] = 0;
				$cosphiLag[$key] = 0;
				$consLead[$key] = 0;//sumber masalah
				$consLag[$key] = 0;
				$mvarLag[$key] = 0;
				$mvarLead[$key] = 0;
			}
		}
		//hasil PBS 1
		$pbs1Lead = array_sum($mvarLead);
		$pbs1Lag = array_sum($mvarLag);
//
		$data = array
		(
			//pbs1
			//hasilpbs1 -> jangan lupa apus lol
			'hasilpbs' => $hasilPbs1,
			'hasilkvarkpbs1' => $sumKvarKPbs1,
			'hasilkvartpbs1' => $sumKvarTPbs1,
			'hasilleadpbs1' => $pbs1Lead,
			'hasillagpbs1' => $pbs1Lag,
			//*
			'mw' => $mw,
			'mvarOut' => $mvarOut, //-> butuh buat mvarLag
			'mvarIn' => $mvarIn, // -> butuh buat mvarLead
			'cosphiLead' => $cosphiLead,
			'cosphiLag' => $cosphiLag,//*/
			'consLead' => $consLead, //-> butuh buat mvarLead
			'consLag' => $consLag, //-> butuh buat mvarLag

			//$mvarIn[$key] > $consLead[$key]
			'mvarLead' => $mvarLead, // our endgame!
			//$mvarOut[$key] > $consLag[$key]
			'mvarLag' => $mvarLag, // our endgame!
		);


		//*/
		$this->load->view('tabelBaKvarh', $data);
		//$this->load->view('cobaBaKvarh', $data);
	}

}//tutup class controller

?>
