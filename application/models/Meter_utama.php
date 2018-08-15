<?php

class Meter_utama extends CI_Model {

       public function __construct()
       {
          $this->load->database();
       }

       public function get_cek($where, $table){
         return $this->db->get_where($table,$where);
       }
//===================================================================================================================
//GET_BAKV
//===================================================================================================================

       public function get_bakv($path = null){
         if ($path == null) {
           //$getPath = str_replace("-", "/", $path);
           $realPath = "C:/EXCION_GACA/ION DL";
           $pbs1 = $realPath."/PBS 1.csv";
           $pbs2 = $realPath."/PBS 2.csv";
           $pbs3 = $realPath."/PBS 3.csv";

         }
         else {
           $getPath = str_replace("-", "/", $path);
           $realPath = base_url().'upload/'.$getPath;
           //$realPath =$getPath;
           $pbs1 = $realPath."/PBS_1.csv";
           $pbs2 = $realPath."/PBS_2.csv";
           $pbs3 = $realPath."/PBS_3.csv";
         }
         		//
         		//*

         		$hasilPbs1 = $hasilPbs2 = $hasilPbs3 = array();
         		$kwh_k = $kwh_t = $kvar_k = $kvar_t =	$mw = $mvarIn = $mvarOut = $cosphiLead = $cosphiLag = array();
         		$consLead = $consLag = $mvarLead = $mvarLag = array();
         		$pbs1Lead = $pbs2Lead = $pbs3Lead = array();
         		//$pbs1Lag = $pbs2Lag = $pbs3Lag = array();

         //hasil PBS1
         		//hasil PBS 1 kvark dan kvart
         		$hasilPbs1 = $this->pronia($pbs1);
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


         //hasil PBS 2 kvark dan kvart
         		$hasilPbs2 = $this->pronia($pbs2);
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
         		$hasilPbs3 = $this->pronia($pbs3);
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

         		$data = array
         		(
         			//pbs1
         			'hasilkvarkpbs1' => $sumKvarKPbs1,
         			'hasilkvartpbs1' => $sumKvarTPbs1,
         			'hasilleadpbs1' => $pbs1Lead,
         			'hasillagpbs1' => $pbs1Lag,
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
         		return $data;
       }

       //===================================================================================================================
       //PRONIA
       //===================================================================================================================


       //public function pronia($path = "C:/EXCION_GACA/ION DL/" ){
       public function pronia($path){

     	  //PBS 1
     	  $filePbs = fopen($path, "r");
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

      return $data;
     }


     //===================================================================================================================
     //GET_BA
     //===================================================================================================================
       public function get_ba($path = null){
         //coba fungsi simulasi BApbs
     		//not based on neraca energi, semua itungan asalanya dari file mentah PBS.
     		//array_sum
        if ($path == null) {
          $realPath = "C:/EXCION_GACA/ION DL";
          $pbs1 = $realPath."/PBS 1.csv";
          $pbs2 = $realPath."/PBS 2.csv";
          $pbs3 = $realPath."/PBS 3.csv";

        }
        else {
          $getPath = str_replace("-", "/", $path);
          $realPath = base_url().'upload/'.$getPath;
          //$realPath = $getPath;
          $pbs1 = $realPath."/PBS_1.csv";
          $pbs2 = $realPath."/PBS_2.csv";
          $pbs3 = $realPath."/PBS_3.csv";
        }
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
     		return $data;
       }


       function tampil_data($data){
         return $this->db->get_where('meter_utama', $data);
       }

       function tampil_data_join(){
         $this->db->select('*');
         $this->db->from('meter_utama');
         $this->db->join('region', 'meter_utama.id_region = region.id', 'left');
         return $this->db->get();
       }

       function insert_data($data){
         $this->db->insert('meter_utama',$data);
       }

       function create_data($data,$table){
         $this->db->insert($table,$data);
       }

       function update_data($data,$table){

       }

       function edit_data($where,$table){
         return $this->db->get_where($table,$where);
       }


       function delete_user($where, $table){
         $this->db->where($where);
         $this->db->delete($table);
       }


       public function ba2(){

       }

       function get_data($where){
     		return $this->db->get_where('meter_utama',$where);
     	}
}

?>
