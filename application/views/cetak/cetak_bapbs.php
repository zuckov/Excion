<?php
$pdf = new FPDF('p','mm','A4');
  //================================================================
  // membuat halaman baru
  $pdf->AddPage();
  // setting jenis font yang akan digunakan
  $pdf->SetFont('Arial','',6);
  // mencetak string
  $pdf->Cell(45,3,'','0',1,'C');
  //$pdf->Cell(110,3,'PT. XYZ','',0,'C');
  //$pdf->Cell(45,3,'Nomor Dokumen : '.$nosurat,'',1,'C');
  //$pdf->Cell(45,3,'','',0,'C');
  $pdf->Cell(190,3,'BERITA ACARA','0',1,'C');
  $pdf->Cell(190,3,'NO :  '.$nosurat,'0',1,'C');
  $pdf->Cell(190,3,'PENGIRIMAN ENERGI LISTRIK','0',1,'C');
  $pdf->Cell(190,3,'','0',1,'C');
  $pdf->Cell(190,3,'','0',1,'C');

  $pdf->Cell(12,3,'Lokasi ','0',0,'L');
  $pdf->Cell(150,3,': PLTA PBS','0',1,'L');
  $pdf->Cell(12,3,'Periode ','0',0,'L');
  $pdf->Cell(150,3,': ....................','0',1,'L');
  $pdf->Cell(12,3,'Waktu ','0',0,'L');
  $pdf->Cell(150,3,': ....................','0',1,'L');
  $pdf->Image('content/excionlogo1.png', 15,8,18,18);
  $pdf->Ln(2);

  //======================================================================================== total : 190
  $pdf->Cell(8,5,'No','LTR',0,'C');
  $pdf->Cell(27,5,'Titik Ukur','TR',0,'C');
  $pdf->Cell(32,5,'Jenis','TR',0,'C');
  $pdf->Cell(32,5,'Meter Utama','BTR',0,'C');
  $pdf->Cell(32,5,'Meter Banding','BTR',0,'C');
  $pdf->Cell(29,5,'Deviasi','TR',0,'C');
  $pdf->Cell(29,5,'Meter Transaksi','TR',1,'C');
  //========================================================================================
  $pdf->Cell(8,5,'','LR',0,'C');
  $pdf->Cell(27,5,'','R',0,'C');
  $pdf->Cell(32,5,'','BR',0,'C');
  $pdf->Cell(16,5,'ID Meter','BTR',0,'C');
  $pdf->Cell(16,5,'kWh','BTR',0,'C');
  $pdf->Cell(16,5,'ID Meter','BTR',0,'C');
  $pdf->Cell(16,5,'kWh','BTR',0,'C');
  $pdf->Cell(29,5,'(%)','BR',0,'C');
  $pdf->Cell(29,5,'kWh','BR',1,'C');

  //========================================================================================  //01
  $pdf->Cell(8,5,'1','LTR',0,'C');
  $pdf->Cell(27,5,'Unit 1','TR',0,'C');
  $pdf->Cell(32,5,'KWh OUT','R',0,'C');
  $pdf->Cell(16,5,'0707A639-01','R',0,'C');
  $pdf->Cell(16,5,number_format($sumPbs1kwhk = $query['sumPbs1kwhk'], 2),'R',0,'C');
  $pdf->Cell(16,5,'071008506','R',0,'C');
  $pdf->Cell(16,5,'','R',0,'C');
  $pdf->Cell(29,5,'100','R',0,'C');
  $pdf->Cell(29,5,number_format($sumPbs1kwhk, 2),'R',1,'C');
  //========================================================================================
  $pdf->Cell(8,5,'','LR',0,'C');
  $pdf->Cell(27,5,'','R',0,'C');
  $pdf->Cell(32,5,'KVarh OUT','R',0,'C');
  $pdf->Cell(16,5,'','R',0,'C');
  $pdf->Cell(16,5,number_format($sumPbs1kvarhk = $query['sumPbs1kvarhk'],2),'R',0,'C');
  $pdf->Cell(16,5,'','R',0,'C');
  $pdf->Cell(16,5,'','R',0,'C');
  $pdf->Cell(29,5,'100','R',0,'C');
  $pdf->Cell(29,5,number_format($sumPbs1kvarhk, 2),'R',1,'C');
  //========================================================================================
  $pdf->Cell(8,5,'','LR',0,'C');
  $pdf->Cell(27,5,'','R',0,'C');
  $pdf->Cell(32,5,'KVarh OUT','R',0,'C');
  $pdf->Cell(16,5,'','R',0,'C');
  $pdf->Cell(16,5,number_format($sumPbs1kwht = $query['sumPbs1kwht'],2),'R',0,'C');
  $pdf->Cell(16,5,'','R',0,'C');
  $pdf->Cell(16,5,'','R',0,'C');
  $pdf->Cell(29,5,'100','R',0,'C');
  $pdf->Cell(29,5,number_format($sumPbs1kwht, 2),'R',1,'C');
  //========================================================================================
  $pdf->Cell(8,5,'','LR',0,'C');
  $pdf->Cell(27,5,'','R',0,'C');
  $pdf->Cell(32,5,'KVarh OUT','R',0,'C');
  $pdf->Cell(16,5,'','R',0,'C');
  $pdf->Cell(16,5,number_format($sumPbs1kvarht = $query['sumPbs1kvarht'],2),'R',0,'C');
  $pdf->Cell(16,5,'','R',0,'C');
  $pdf->Cell(16,5,'','R',0,'C');
  $pdf->Cell(29,5,'100','R',0,'C');
  $pdf->Cell(29,5,number_format($sumPbs1kvarht, 2),'R',1,'C');
  //======================================================================================== //baris baris  1

  //========================================================================================  //02
  $pdf->Cell(8,5,'2','LTR',0,'C');
  $pdf->Cell(27,5,'Unit 2','TR',0,'C');
  $pdf->Cell(32,5,'KWh OUT','TR',0,'C');
  $pdf->Cell(16,5,'0707A641-01','TR',0,'C');
  $pdf->Cell(16,5,number_format($sumPbs2kwhk = $query['sumPbs2kwhk'], 2),'TR',0,'C');
  $pdf->Cell(16,5,'071008501','TR',0,'C');
  $pdf->Cell(16,5,'','TR',0,'C');
  $pdf->Cell(29,5,'100','TR',0,'C');
  $pdf->Cell(29,5,number_format($sumPbs2kwhk, 2),'TR',1,'C');
  //========================================================================================
  $pdf->Cell(8,5,'','LR',0,'C');
  $pdf->Cell(27,5,'','R',0,'C');
  $pdf->Cell(32,5,'KVarh OUT','R',0,'C');
  $pdf->Cell(16,5,'','R',0,'C');
  $pdf->Cell(16,5,number_format($sumPbs2kvarhk = $query['sumPbs2kvarhk'],2),'R',0,'C');
  $pdf->Cell(16,5,'','R',0,'C');
  $pdf->Cell(16,5,'','R',0,'C');
  $pdf->Cell(29,5,'100','R',0,'C');
  $pdf->Cell(29,5,number_format($sumPbs2kvarhk, 2),'R',1,'C');
  //========================================================================================
  $pdf->Cell(8,5,'','LR',0,'C');
  $pdf->Cell(27,5,'','R',0,'C');
  $pdf->Cell(32,5,'KVarh OUT','R',0,'C');
  $pdf->Cell(16,5,'','R',0,'C');
  $pdf->Cell(16,5,number_format($sumPbs2kwht = $query['sumPbs2kwht'],2),'R',0,'C');
  $pdf->Cell(16,5,'','R',0,'C');
  $pdf->Cell(16,5,'','R',0,'C');
  $pdf->Cell(29,5,'100','R',0,'C');
  $pdf->Cell(29,5,number_format($sumPbs2kwht, 2),'R',1,'C');
  //========================================================================================
  $pdf->Cell(8,5,'','LR',0,'C');
  $pdf->Cell(27,5,'','R',0,'C');
  $pdf->Cell(32,5,'KVarh OUT','R',0,'C');
  $pdf->Cell(16,5,'','R',0,'C');
  $pdf->Cell(16,5,number_format($sumPbs2kvarht = $query['sumPbs2kvarht'],2),'R',0,'C');
  $pdf->Cell(16,5,'','R',0,'C');
  $pdf->Cell(16,5,'','R',0,'C');
  $pdf->Cell(29,5,'100','R',0,'C');
  $pdf->Cell(29,5,number_format($sumPbs2kvarht, 2),'R',1,'C');
  //======================================================================================== //baris baris  2
  //========================================================================================  //03
  $pdf->Cell(8,5,'3','LTR',0,'C');
  $pdf->Cell(27,5,'Unit 3','TR',0,'C');
  $pdf->Cell(32,5,'KWh OUT','TR',0,'C');
  $pdf->Cell(16,5,'0707A641-01','TR',0,'C');
  $pdf->Cell(16,5,number_format($sumPbs3kwhk = $query['sumPbs3kwhk'], 2),'TR',0,'C');
  $pdf->Cell(16,5,'071008501','TR',0,'C');
  $pdf->Cell(16,5,'','TR',0,'C');
  $pdf->Cell(29,5,'100','TR',0,'C');
  $pdf->Cell(29,5,number_format($sumPbs3kwhk, 2),'TR',1,'C');
  //========================================================================================
  $pdf->Cell(8,5,'','LR',0,'C');
  $pdf->Cell(27,5,'','R',0,'C');
  $pdf->Cell(32,5,'KVarh OUT','R',0,'C');
  $pdf->Cell(16,5,'','R',0,'C');
  $pdf->Cell(16,5,number_format($sumPbs3kvarhk = $query['sumPbs3kvarhk'],2),'R',0,'C');
  $pdf->Cell(16,5,'','R',0,'C');
  $pdf->Cell(16,5,'','R',0,'C');
  $pdf->Cell(29,5,'100','R',0,'C');
  $pdf->Cell(29,5,number_format($sumPbs3kvarhk, 2),'R',1,'C');
  //========================================================================================
  $pdf->Cell(8,5,'','LR',0,'C');
  $pdf->Cell(27,5,'','R',0,'C');
  $pdf->Cell(32,5,'KVarh OUT','R',0,'C');
  $pdf->Cell(16,5,'','R',0,'C');
  $pdf->Cell(16,5,number_format($sumPbs3kwht = $query['sumPbs3kwht'],2),'R',0,'C');
  $pdf->Cell(16,5,'','R',0,'C');
  $pdf->Cell(16,5,'','R',0,'C');
  $pdf->Cell(29,5,'100','R',0,'C');
  $pdf->Cell(29,5,number_format($sumPbs3kwht, 2),'R',1,'C');
  //========================================================================================
  $pdf->Cell(8,5,'','LR',0,'C');
  $pdf->Cell(27,5,'','R',0,'C');
  $pdf->Cell(32,5,'KVarh OUT','R',0,'C');
  $pdf->Cell(16,5,'','R',0,'C');
  $pdf->Cell(16,5,number_format($sumPbs3kvarht = $query['sumPbs3kvarht'],2),'R',0,'C');
  $pdf->Cell(16,5,'','R',0,'C');
  $pdf->Cell(16,5,'','R',0,'C');
  $pdf->Cell(29,5,'100','R',0,'C');
  $pdf->Cell(29,5,number_format($sumPbs3kvarht, 2),'R',1,'C');
  //======================================================================================== //baris baris  4
  $pdf->Cell(8,5,'4','LTR',0,'C');
  $pdf->Cell(27,5,'MSGI 1','TR',0,'C');
  $pdf->Cell(32,5,'PS GI','TR',0,'C');
  $pdf->Cell(16,5,'','TR',0,'C');
  $pdf->Cell(16,5,'','TR',0,'C');
  $pdf->Cell(16,5,'','TR',0,'C');
  $pdf->Cell(16,5,'','TR',0,'C');
  $pdf->Cell(29,5,'','TR',0,'C');
  $pdf->Cell(29,5,'-','TR',1,'C');
  //======================================================================================== //baris baris  5
  $pdf->Cell(8,5,'5','BLTR',0,'C');
  $pdf->Cell(27,5,'MSGI 2','BTR',0,'C');
  $pdf->Cell(32,5,'PS GI','BTR',0,'C');
  $pdf->Cell(16,5,'','BTR',0,'C');
  $pdf->Cell(16,5,'','BTR',0,'C');
  $pdf->Cell(16,5,'','BTR',0,'C');
  $pdf->Cell(16,5,'','BTR',0,'C');
  $pdf->Cell(29,5,'','BTR',0,'C');
  $pdf->Cell(29,5,'-','BTR',1,'C');
  //======================================================================================== //baris baris  6
  $pdf->Cell(35,5,'  Jumlah kWh out ','LB',0,'L');
  $pdf->Cell(125,5,'=  kWh out ( Unit1 + Unit2 + Unit 3)','B',0,'L');
  $pdf->Cell(29,5,number_format($totalKwhK = $sumPbs1kwhk + $sumPbs2kwhk + $sumPbs3kwhk, 2),'LBR',1,'C');
  //======================================================================================== //baris baris  6
  $pdf->Cell(35,5,'  Jumlah kVArh out ','LB',0,'L');
  $pdf->Cell(125,5,'=  kVARh out (Unit1 + Unit2 + Unit 3)','B',0,'L');
  $pdf->Cell(29,5,number_format($totalKvarhK = $sumPbs1kvarhk + $sumPbs2kvarhk + $sumPbs3kvarhk, 2),'LBR',1,'C');
  //======================================================================================== //baris baris  6
  $pdf->Cell(35,5,'   Jumlah kWh in','LB',0,'L');
  $pdf->Cell(125,5,'=  kVARh out (Unit1 + Unit2 + Unit 3)','B',0,'L');
  $pdf->Cell(29,5,number_format($totalKwhT = $sumPbs1kwht + $sumPbs2kwht + $sumPbs3kwht, 2),'LBR',1,'C');
  //======================================================================================== //baris baris  6
  $pdf->Cell(35,5,'  Jumlah kVArh in ','LB',0,'L');
  $pdf->Cell(125,5,'=  kVARh out (Unit1 + Unit2 + Unit 3)','B',0,'L');
  $pdf->Cell(29,5,number_format($totalKvarhT = $sumPbs1kvarht + $sumPbs2kvarht + $sumPbs3kvarht, 2),'LBR',1,'C');
  //======================================================================================== //baris baris  6
  //======================================================================================== //baris baris  6
  $pdf->Cell(35,5,'  Jumlah kWh in (net) ','LB',0,'L');
  $pdf->Cell(125,5,'=  kVARh out (Unit1 + Unit2 + Unit 3)','B',0,'L');
  $pdf->Cell(29,5,number_format($sumPbs1kwht + $sumPbs2kwht + $sumPbs3kwht + $MSGI1=0 + $MSGI2=0, 2),'LBR',1,'C');
  //======================================================================================== //baris baris  6
  //======================================================================================== //baris baris  6
  $pdf->Cell(35,5,'  Total kWh (Net) ','LB',0,'L');
  $pdf->Cell(125,5,'=  kVARh out (Unit1 + Unit2 + Unit 3)','B',0,'L');
  $pdf->Cell(29,5,number_format(($totalKwhK - $totalKwhT) + ($MSGI1 - $MSGI2), 2),'LBR',1,'C');
  //======================================================================================== //baris baris  6
  $pdf->ln(2);
  $pdf->Cell(85,3,'Catatan ',0,0,'L');
  $pdf->Cell(85,3,'Banjarnegara _____________________________',0,1,'R');
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










  $pdf->output();
