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
	public function __construct()
       {
          parent::__construct();
          $this->load->model('meter_utama');

       }

	public function start()
	{
		//$this->load->view('welcome_message');
		$path = "C:/EXCION_GACA/ION DL/PBS 1.csv";
		$bareg = $bakv = $bapbs = array();
		$bareg = $this->meter_utama->ba($path);
		//$this->load->view('hasil', $bareg);
		$this->load->view('templates/agency/blogview', $bareg);

	}

	public function coba_array(){
		$this->load->view('cobaArray');
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



	public function ba(){ //tabel tampilan ba region
		$this->load->view('tabelBa');
	}

	public function baRegion($path = "C:/EXCION_GACA/ION DL/"){ //tampilan ba pbs
		//coba fungsi simulasi BApbs
		//not based on neraca energi, semua itungan asalanya dari file mentah PBS.
		//array_sum
		$pbs1 = $path."PBS 1.csv";
	  $pbs2 = $path."PBS 2.csv";
	  $pbs3 = $path."PBS 3.csv";
		//pbs1
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
		//pbs2
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
		//pbs3
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

	public function pronia($path = "C:/EXCION_GACA/ION DL/" ){ //ambil neraca energi dari sini
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

//get_pronia
	public function get_pronia($path = "C:/EXCION_GACA/ION DL/PBS 1.csv"){
		$pbsArray = array();
		$pbsArray = $this->meter_utama->pronia($path);
		$this->load->view('tabel', $pbsArray);
	}

	public function get_hakv(){
		$this->load->view('tabelHasilKvarh');
	}

//get_bakv
	public function get_bakv(){
		//*
		$pbs1 = "C:/EXCION_GACA/ION DL/PBS 1.csv";
		$pbs2 = "C:/EXCION_GACA/ION DL/PBS 2.csv";
		$pbs3 = "C:/EXCION_GACA/ION DL/PBS 3.csv";
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
		//hasil PBS 2
		//*
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
		//hasil PBS 3
		//*
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
			//sumKwhKPbs1
			//sumKwhKPbs2
			//sumKwhKPbs3
			//*/
			//'leadingKvarPBS1' => $kvar_k,
			//'leadingKvarPBS2' => $hasilPbs2,
			//'leadingKvarPBS3' => $hasilPbs3,
			//'laggingKvarPBS1' => $kvar_k,
			//'laggingKvarPBS2' => $hasilPbs2,
			//'laggingKvarPBS3' => $hasilPbs3,
		);

		//*/
		$this->load->view('tabelBaKvarh', $data);
		//$this->load->view('cobaBaKvarh', $data);
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
		//$this->load->view('tabelBaKvarh', $data);
		$this->load->view('cobaBaKvarh', $data);
	}



    /*public function multiCsv($bukaFile="C:\EXCION_GACA\ION DL\*.csv"){
      /*
      foreach (glob("myfiles/*.html") as $file) {
        $file_handle = fopen($file, "r");
        while (!feof($file_handle)) {
          $line = fgets($file_handle);
          echo $line;
        }
        fclose($file_handle);
      }*/
			/*
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
    }*/
		/*
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
			/*
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
			/*
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
      }*/


}//tutup class controller

?>
