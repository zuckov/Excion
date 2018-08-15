<?php
$pdf = new FPDF('l','mm','A5');
  //================================================================
  // membuat halaman baru
  $pdf->AddPage();
  // setting jenis font yang akan digunakan
  $pdf->SetFont('Arial','',6);
  // mencetak string
  $pdf->Cell(45,3,'','0',0,'C');
  $pdf->Cell(110,3,'PT. XYZ','',0,'C');
  $pdf->Cell(45,3,'Nomor Dokumen : '.$nosurat,'',1,'C');
  $pdf->Cell(45,3,'','',0,'C');
  $pdf->Cell(110,3,'UNIT BISNIS PEMBANGKITAN JATENG','0',0,'C');
  $pdf->Cell(45,3,'','',1,'C');

  $pdf->Image('content/excionlogo1.png', 15,8,18,18);
  $pdf->Ln(2);

  $pdf->SetFont('Arial','B',5);
  $pdf->Ln(4);
  $pdf->Cell(190,3,'PENGIRIMAN ENERGI REAKTIF JAM (kVarh)',0,1,'C');
  $pdf->Cell(190,3,'DARI PT INDONESIA POWER UBP MRICA KE PT PLN (Persero) P3B JAWA BALI, APB JAWA TENGAH DAN DIY',0,1,'C');
  $pdf->Cell(190,7,'Periode : ___________________________',0,1,'C');
  $pdf->Ln(1);
  $pdf->Cell(175,3,'TOTAL ENERGI REAKTIF JAM (Kvarh) :',0,1,'L');
  //======================================================================================== total : 190
  $pdf->Cell(8,5,'No','LTR',0,'C');
  $pdf->Cell(27,5,'Entitas','TR',0,'C');
  $pdf->Cell(32,5,'Meter Utama','BTR',0,'C');
  $pdf->Cell(32,5,'Meter banding','BTR',0,'C');
  $pdf->Cell(15,5,'Deviasi','TR',0,'C');
  $pdf->Cell(38,5,'Meter Transaksi','BTR',0,'C');
  $pdf->Cell(38,5,'Keterangan','TR',1,'C');
  //========================================================================================
  $pdf->Cell(8,5,'','LBR',0,'C');
  $pdf->Cell(27,5,'','B',0,'C');
  $pdf->Cell(16,5,'Titik Ukur','LBR',0,'C');
  $pdf->Cell(16,5,'kVarh','BR',0,'C');
  $pdf->Cell(16,5,'Titik Ukur','BR',0,'C');
  $pdf->Cell(16,5,'kVarh','BR',0,'C');
  $pdf->Cell(15,5,'','BR',0,'C');
  $pdf->Cell(19,5,'Titik Ukur','BR',0,'C');
  $pdf->Cell(19,5,'KWH','BR',0,'C');
  $pdf->Cell(38,5,'','BR',1,'C');
  //========================================================================================  //01
  $pdf->Cell(8,5,'01','L',0,'C');
  $pdf->Cell(27,5,' KVarh dari Pembangkit (kVar out) - (Lagging)','L',0,'L');
  $pdf->Cell(16,5,'','0',0,'C');
  $pdf->Cell(16,5,'','L',0,'C');
  $pdf->Cell(16,5,'','L',0,'C');
  $pdf->Cell(16,5,'','L',0,'C');
  $pdf->Cell(15,5,'','L',0,'C');
  $pdf->Cell(19,5,'','L',0,'C');
  $pdf->Cell(19,5,'','L',0,'C');
  $pdf->Cell(38,5,'','LR',1,'C');

  //========================================================================================PB SOEDIRMAN 1
  $pdf->Cell(8,5,'','L',0,'C');
  $pdf->Cell(27,5,'PB SOEDIRMAN 1','L',0,'C');
  $pdf->Cell(16,5,'0707A639-01','L',0,'C');
  $pdf->Cell(16,5,number_format($hasilkvarkpbs1 = $query['hasilkvarkpbs1']),'L',0,'C');
  $pdf->Cell(16,5,'071008506','L',0,'C');
  $pdf->Cell(16,5,'0','L',0,'C');
  $pdf->Cell(15,5,'100','L',0,'C');
  $pdf->Cell(19,5,'0707A639-01','L',0,'C');
  $pdf->Cell(19,5,number_format($hasilkvarkpbs1),'L',0,'C');
  $pdf->Cell(38,5,'','LR',1,'C');
  //========================================================================================PB SOEDIRMAN 1
  $pdf->Cell(8,5,'','L',0,'C');
  $pdf->Cell(27,5,'PB SOEDIRMAN 2','L',0,'C');
  $pdf->Cell(16,5,'0707A641-01','L',0,'C');
  $pdf->Cell(16,5,number_format($hasilkvarkpbs2 = $query['hasilkvarkpbs2']),'L',0,'C');
  $pdf->Cell(16,5,'071008501','L',0,'C');
  $pdf->Cell(16,5,'0','L',0,'C');
  $pdf->Cell(15,5,'100','L',0,'C');
  $pdf->Cell(19,5,'0707A641-01','L',0,'C');
  $pdf->Cell(19,5,number_format($hasilkvarkpbs2),'L',0,'C');
  $pdf->Cell(38,5,'','LR',1,'C');
  //========================================================================================PB SOEDIRMAN 1
  $pdf->Cell(8,5,'','L',0,'C');
  $pdf->Cell(27,5,'PB SOEDIRMAN 3','L',0,'C');
  $pdf->Cell(16,5,'0707A642-01','L',0,'C');
  $pdf->Cell(16,5,number_format($hasilkvarkpbs3 = $query['hasilkvarkpbs3']),'L',0,'C');
  $pdf->Cell(16,5,'071008505','L',0,'C');
  $pdf->Cell(16,5,'0','L',0,'C');
  $pdf->Cell(15,5,'100','L',0,'C');
  $pdf->Cell(19,5,'0707A642-01','L',0,'C');
  $pdf->Cell(19,5,number_format($hasilkvarkpbs3),'L',0,'C');
  $pdf->Cell(38,5,'','LR',1,'C');
  //========================================================================================PB SOEDIRMAN 1
  $pdf->Cell(8,5,'','TBL',0,'C');
  $pdf->Cell(27,5,'Sub total()','TBL',0,'C');
  $pdf->Cell(16,5,'','TBL',0,'C');
  $pdf->Cell(16,5,number_format($hasilkvarkpbs1 + $hasilkvarkpbs2 + $hasilkvarkpbs3),'TBL',0,'C');
  $pdf->Cell(16,5,'','TBL',0,'C');
  $pdf->Cell(16,5,'','TBL',0,'C');
  $pdf->Cell(15,5,'','TBL',0,'C');
  $pdf->Cell(19,5,'','TBL',0,'C');
  $pdf->Cell(19,5,'','TBL',0,'C');
  $pdf->Cell(38,5,'','TBLR',1,'C');
  //========================================================================================PB SOEDIRMAN 1

//======================================================================================== //02
$pdf->Cell(8,5,'02','L',0,'C');
$pdf->Cell(27,5,'KVarh ke Pembangkit (kVar in) - (Leading)','L',0,'L');
$pdf->Cell(16,5,'','0',0,'C');
$pdf->Cell(16,5,'','L',0,'C');
$pdf->Cell(16,5,'','L',0,'C');
$pdf->Cell(16,5,'','L',0,'C');
$pdf->Cell(15,5,'','L',0,'C');
$pdf->Cell(19,5,'','L',0,'C');
$pdf->Cell(19,5,'','L',0,'C');
$pdf->Cell(38,5,'','LR',1,'C');

//========================================================================================PB SOEDIRMAN 1
$pdf->Cell(8,5,'','L',0,'C');
$pdf->Cell(27,5,'PB SOEDIRMAN 1','L',0,'C');
$pdf->Cell(16,5,'0707A639-01','L',0,'C');
$pdf->Cell(16,5,number_format($hasilkvartpbs1 = $query['hasilkvartpbs1']),'L',0,'C');
$pdf->Cell(16,5,'071008506','L',0,'C');
$pdf->Cell(16,5,'0','L',0,'C');
$pdf->Cell(15,5,'100','L',0,'C');
$pdf->Cell(19,5,'0707A639-01','L',0,'C');
$pdf->Cell(19,5,number_format($hasilkvartpbs1),'L',0,'C');
$pdf->Cell(38,5,'','LR',1,'C');
//========================================================================================PB SOEDIRMAN 1
$pdf->Cell(8,5,'','L',0,'C');
$pdf->Cell(27,5,'PB SOEDIRMAN 2','L',0,'C');
$pdf->Cell(16,5,'0707A641-01','L',0,'C');
$pdf->Cell(16,5,number_format($hasilkvartpbs2 = $query['hasilkvartpbs2']),'L',0,'C');
$pdf->Cell(16,5,'071008501','L',0,'C');
$pdf->Cell(16,5,'0','L',0,'C');
$pdf->Cell(15,5,'100','L',0,'C');
$pdf->Cell(19,5,'0707A641-01','L',0,'C');
$pdf->Cell(19,5,number_format($hasilkvartpbs2),'L',0,'C');
$pdf->Cell(38,5,'','LR',1,'C');
//========================================================================================PB SOEDIRMAN 1
$pdf->Cell(8,5,'','L',0,'C');
$pdf->Cell(27,5,'PB SOEDIRMAN 3','L',0,'C');
$pdf->Cell(16,5,'0707A642-01','L',0,'C');
$pdf->Cell(16,5,number_format($hasilkvartpbs3 = $query['hasilkvartpbs3']),'L',0,'C');
$pdf->Cell(16,5,'071008505','L',0,'C');
$pdf->Cell(16,5,'0','L',0,'C');
$pdf->Cell(15,5,'100','L',0,'C');
$pdf->Cell(19,5,'0707A642-01','L',0,'C');
$pdf->Cell(19,5,number_format($hasilkvartpbs3),'L',0,'C');
$pdf->Cell(38,5,'','LR',1,'C');
//========================================================================================PB SOEDIRMAN 1
$pdf->Cell(8,5,'','TBL',0,'C');
$pdf->Cell(27,5,'Sub total()','TBL',0,'C');
$pdf->Cell(16,5,'','TBL',0,'C');
$pdf->Cell(16,5,number_format($hasilkvartpbs1 + $hasilkvartpbs2 + $hasilkvartpbs3),'TBL',0,'C');
$pdf->Cell(16,5,'','TBL',0,'C');
$pdf->Cell(16,5,'','TBL',0,'C');
$pdf->Cell(15,5,'','TBL',0,'C');
$pdf->Cell(19,5,'','TBL',0,'C');
$pdf->Cell(19,5,'','TBL',0,'C');
$pdf->Cell(38,5,'','TBLR',1,'C');


  // Memberikan space kebawah agar tidak terlalu rapat
  $pdf->Cell(10,7,'',0,1);
  $pdf->AddPage();


  //========================================================================================
  $pdf->Cell(175,3,'ENERGI REAKTIF JAM (kVarh) YANG DIPERHITUNGKAN DALAM SETELMEN :',0,1,'L');
  //======================================================================================== total : 190
  $pdf->Cell(8,5,'No','LTR',0,'C');
  $pdf->Cell(27,5,'Entitas','TR',0,'C');
  $pdf->Cell(32,5,'Meter Utama','BTR',0,'C');
  $pdf->Cell(32,5,'Meter banding','BTR',0,'C');
  $pdf->Cell(15,5,'Deviasi','TR',0,'C');
  $pdf->Cell(38,5,'Meter Transaksi','BTR',0,'C');
  $pdf->Cell(38,5,'Keterangan','TR',1,'C');
  //========================================================================================
  $pdf->Cell(8,5,'','LBR',0,'C');
  $pdf->Cell(27,5,'','B',0,'C');
  $pdf->Cell(16,5,'Titik Ukur','LBR',0,'C');
  $pdf->Cell(16,5,'kVarh','BR',0,'C');
  $pdf->Cell(16,5,'Titik Ukur','BR',0,'C');
  $pdf->Cell(16,5,'kVarh','BR',0,'C');
  $pdf->Cell(15,5,'','BR',0,'C');
  $pdf->Cell(19,5,'Titik Ukur','BR',0,'C');
  $pdf->Cell(19,5,'KWH','BR',0,'C');
  $pdf->Cell(38,5,'','BR',1,'C');
  //========================================================================================  //01
  $pdf->Cell(8,5,'01','L',0,'C');
  $pdf->Cell(27,5,' KVarh dari Pembangkit (kVar out) - (Lagging)','L',0,'L');
  $pdf->Cell(16,5,'','0',0,'C');
  $pdf->Cell(16,5,'','L',0,'C');
  $pdf->Cell(16,5,'','L',0,'C');
  $pdf->Cell(16,5,'','L',0,'C');
  $pdf->Cell(15,5,'','L',0,'C');
  $pdf->Cell(19,5,'','L',0,'C');
  $pdf->Cell(19,5,'','L',0,'C');
  $pdf->Cell(38,5,'','LR',1,'C');

  //========================================================================================PB SOEDIRMAN 1
  $pdf->Cell(8,5,'','L',0,'C');
  $pdf->Cell(27,5,'PB SOEDIRMAN 1','L',0,'C');
  $pdf->Cell(16,5,'0707A639-01','L',0,'C');
  $pdf->Cell(16,5,number_format($lagpbs1 = $query['hasillagpbs1'] * 1000 * 0.5, 2),'L',0,'C');
  $pdf->Cell(16,5,'071008506','L',0,'C');
  $pdf->Cell(16,5,$a=0,'L',0,'C');
  if ($lagpbs1==0) {
    $dev2lagpbs1 = 100;
  }
  else {
    $dev2lagpbs1 = ($lagpbs1-$a)/$lagpbs1*100;
  }
  $pdf->Cell(15,5,'100','L',0,'C');
  $pdf->Cell(19,5,'0707A639-01','L',0,'C');
  $pdf->Cell(19,5,number_format($lagpbs1),'L',0,'C');
  $pdf->Cell(38,5,'','LR',1,'C');
  //========================================================================================PB SOEDIRMAN 1
  $pdf->Cell(8,5,'','L',0,'C');
  $pdf->Cell(27,5,'PB SOEDIRMAN 2','L',0,'C');
  $pdf->Cell(16,5,'0707A641-01','L',0,'C');
  $pdf->Cell(16,5,number_format($lagpbs2 = $query['hasillagpbs2'] * 1000 * 0.5, 2),'L',0,'C');
  $pdf->Cell(16,5,'071008501','L',0,'C');
  $pdf->Cell(16,5,$a,'L',0,'C');
  if ($lagpbs2==0) {
    $dev2lagpbs2 = 100;
  }
  else {
    $dev2lagpbs2 = ($lagpbs2-$a)/$lagpbs2*100;
  }
  $pdf->Cell(15,5,$dev2lagpbs2,'L',0,'C');
  $pdf->Cell(19,5,'0707A641-01','L',0,'C');
  $pdf->Cell(19,5,number_format($lagpbs2),'L',0,'C');
  $pdf->Cell(38,5,'','LR',1,'C');
  //========================================================================================PB SOEDIRMAN 1
  $pdf->Cell(8,5,'','L',0,'C');
  $pdf->Cell(27,5,'PB SOEDIRMAN 3','L',0,'C');
  $pdf->Cell(16,5,'0707A642-01','L',0,'C');
  $pdf->Cell(16,5,number_format($lagpbs3 = $query['hasillagpbs3'] * 1000 * 0.5, 2),'L',0,'C');
  $pdf->Cell(16,5,'071008505','L',0,'C');
  $pdf->Cell(16,5, $a,'L',0,'C');
  if ($lagpbs3==0) {
    $dev2lagpbs3 = 100;
  }
  else {
    $dev2lagpbs3 = ($lagpbs3-$a)/$lagpbs3*100;
  }
  $pdf->Cell(15,5,'100','L',0,'C');
  $pdf->Cell(19,5,'0707A642-01','L',0,'C');
  $pdf->Cell(19,5,number_format($lagpbs3),'L',0,'C');
  $pdf->Cell(38,5,'','LR',1,'C');
  //========================================================================================PB SOEDIRMAN 1
  $pdf->Cell(8,5,'','TBL',0,'C');
  $pdf->Cell(27,5,'Sub total()','TBL',0,'C');
  $pdf->Cell(16,5,'','TBL',0,'C');
  $pdf->Cell(16,5,number_format($lagpbs1 + $lagpbs2 + $lagpbs3),'TBL',0,'C');
  $pdf->Cell(16,5,'','TBL',0,'C');
  $pdf->Cell(16,5,'','TBL',0,'C');
  $pdf->Cell(15,5,'','TBL',0,'C');
  $pdf->Cell(19,5,'','TBL',0,'C');
  $pdf->Cell(19,5,'','TBL',0,'C');
  $pdf->Cell(38,5,'','TBLR',1,'C');
  //========================================================================================PB SOEDIRMAN 1

  //======================================================================================== //02
  $pdf->Cell(8,5,'02','L',0,'C');
  $pdf->Cell(27,5,'KVarh ke Pembangkit (kVar in) - (Leading)','L',0,'L');
  $pdf->Cell(16,5,'','0',0,'C');
  $pdf->Cell(16,5,'','L',0,'C');
  $pdf->Cell(16,5,'','L',0,'C');
  $pdf->Cell(16,5,'','L',0,'C');
  $pdf->Cell(15,5,'','L',0,'C');
  $pdf->Cell(19,5,'','L',0,'C');
  $pdf->Cell(19,5,'','L',0,'C');
  $pdf->Cell(38,5,'','LR',1,'C');

  //========================================================================================PB SOEDIRMAN 1
  $pdf->Cell(8,5,'','L',0,'C');
  $pdf->Cell(27,5,'PB SOEDIRMAN 1','L',0,'C');
  $pdf->Cell(16,5,'0707A639-01','L',0,'C');
  $pdf->Cell(16,5, number_format($leadpbs1 = $query['hasilleadpbs1'] * 1000 * 0.5, 2),'L',0,'C');
  $pdf->Cell(16,5,'071008506','L',0,'C');
  $pdf->Cell(16,5,$a,'L',0,'C');
  if ($leadpbs1==0) {
    $dev2leadpbs1 = 100;
  }
  else {
    $dev2leadpbs1 = ($leadpbs1-$a)/$leadpbs1*100;
  }
  $pdf->Cell(15,5,$dev2leadpbs1,'L',0,'C');
  $pdf->Cell(19,5,'0707A639-01','L',0,'C');
  $pdf->Cell(19,5,number_format($leadpbs1),'L',0,'C');
  $pdf->Cell(38,5,'','LR',1,'C');
  //========================================================================================PB SOEDIRMAN 1
  $pdf->Cell(8,5,'','L',0,'C');
  $pdf->Cell(27,5,'PB SOEDIRMAN 2','L',0,'C');
  $pdf->Cell(16,5,'0707A641-01','L',0,'C');
  $pdf->Cell(16,5,number_format($leadpbs2 = $query['hasilleadpbs2'] * 1000 * 0.5, 2),'L',0,'C');
  $pdf->Cell(16,5,'071008501','L',0,'C');
  $pdf->Cell(16,5,$a,'L',0,'C');
  if ($leadpbs2==0) {
    $dev2leadpbs2 = 100;
  }
  else {
    $dev2leadpbs2 = ($leadpbs2-$a)/$leadpbs2*100;
  }
  $pdf->Cell(15,5,$dev2leadpbs2,'L',0,'C');
  $pdf->Cell(19,5,'0707A641-01','L',0,'C');
  $pdf->Cell(19,5,number_format($leadpbs2),'L',0,'C');
  $pdf->Cell(38,5,'','LR',1,'C');
  //========================================================================================PB SOEDIRMAN 1
  $pdf->Cell(8,5,'','L',0,'C');
  $pdf->Cell(27,5,'PB SOEDIRMAN 2','L',0,'C');
  $pdf->Cell(16,5,'0707A641-01','L',0,'C');
  $pdf->Cell(16,5,number_format($leadpbs3 = $query['hasilleadpbs3'] * 1000 * 0.5, 2),'L',0,'C');
  $pdf->Cell(16,5,'071008501','L',0,'C');
  $pdf->Cell(16,5,$a,'L',0,'C');
  if ($leadpbs3==0) {
    $dev2leadpbs3 = 100;
  }
  else {
    $dev2leadpbs3 = ($leadpbs3-$a)/$leadpbs3*100;
  }
  $pdf->Cell(15,5,$dev2leadpbs3,'L',0,'C');
  $pdf->Cell(19,5,'0707A641-01','L',0,'C');
  $pdf->Cell(19,5,number_format($leadpbs3),'L',0,'C');
  $pdf->Cell(38,5,'','LR',1,'C');
  //========================================================================================PB SOEDIRMAN 1
  $pdf->Cell(8,5,'','TBL',0,'C');
  $pdf->Cell(27,5,'Sub total()','TBL',0,'C');
  $pdf->Cell(16,5,'','TBL',0,'C');
  $pdf->Cell(16,5,number_format($leadpbs1 + $leadpbs2 + $leadpbs3),'TBL',0,'C');
  $pdf->Cell(16,5,'','TBL',0,'C');
  $pdf->Cell(16,5,'','TBL',0,'C');
  $pdf->Cell(15,5,'','TBL',0,'C');
  $pdf->Cell(19,5,'','TBL',0,'C');
  $pdf->Cell(19,5,'','TBL',0,'C');
  $pdf->Cell(38,5,'','TBLR',1,'C');

  $pdf->ln(2);
  $pdf->Cell(85,3,'Catatan ',0,0,'L');
  $pdf->Cell(85,3,'Banjarnegara, _______________________________',0,1,'R');
  $pdf->Cell(85,3,'Berita Acara akan dikoreksi bila terjadi kesalahan Pembacaan. ',0,0,'L');
$pdf->ln(9);
$pdf->Cell(85,3,'Mengetahui ',0,0,'C');
$pdf->Cell(85,3,'Dibuat oleh',0,1,'C');
$pdf->Cell(85,3,$pejabat1[0]['jabatan'],0,0,'C');///betulin ini!
$pdf->Cell(85,3,'PT. XYZ',0,1,'C');
$pdf->Cell(85,3,' ',0,0,'C');
$pdf->Cell(85,3,$pejabat2[0]['jabatan'],0,1,'C');
$pdf->Cell(190,3,'',0,1,'C');///betulin ini!
$pdf->Cell(190,3,'',0,1,'C');///betulin ini!
$pdf->Cell(190,3,'',0,1,'C');///betulin ini!
$pdf->Cell(85,3,$pejabat1[0]['nama'],0,0,'C');
$pdf->Cell(85,3,$pejabat2[0]['nama'],0,1,'C');


  $pdf->Output();
