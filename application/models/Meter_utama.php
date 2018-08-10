<?php

class Meter_utama extends CI_Model {

       public function __construct()
       {
          $this->load->database();
       }

       public function get_cek($where, $table){
         return $this->db->get_where($table,$where);
       }

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

       public function ne(){
         //
       }

       public function ba($path = "C:/EXCION_GACA/ION DL/"){
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
     		return $data;
       }


       function tampil_data(){
         return $this->db->get('meter_utama');
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

/*
       function update_data($where,$data,$table){
         $this->db->where($where);
         $this->db->update($table,$data);
       }
       */

       function delete_user($where, $table){
         $this->db->where($where);
         $this->db->delete($table);
       }


       public function ba2(){

       }

       function get_data($where,$table){
     		return $this->db->get_where($table,$where);
     	}

       public function get_pbs1(){
		$pbsArray = array();
		//$pbsArray = $this->model->

       }
       public function get_pbs2(){

       }
       public function get_pbs3(){

       }
       public function get_jelok1(){

       }
       public function get_jelok2(){

       }
       public function get_jelok3(){

       }
       public function get_jelok4(){
}



?>
