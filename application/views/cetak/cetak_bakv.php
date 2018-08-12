<?php
	$pdf = new Pdf('L', 'mm', 'A4', true, 'UTF-8', false);

// set default header data
$pdf->SetHeaderData("../tcpdf_logo.jpg", 40, 'Judul Header', "codedb.co \nblog.code.co", array(0,64,255),array(0,64,128));
$pdf->setFooterData(array(255,64,0), array(0,64,128));

// set margins
$pdf->SetMargins(10, 25, 10); // kiri, atas, kanan
$pdf->SetHeaderMargin(5); // mengatur jarak antara header dan top margin
$pdf->SetFooterMargin(10); //  mengatur jarak minimum antara footer dan bottom margin

	$pdf->Output('contoh1.pdf', 'I');
?>
