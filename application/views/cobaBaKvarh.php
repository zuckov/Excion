<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
-->

<?php //print "<pre>"; echo "total kvar kirim pbs1 \n"; print_r(number_format($hasilkvarkpbs1)); print "</pre>"; ?>
<?php //print "<pre>"; echo "total kvar terima pbs1 \n"; print_r(number_format($hasilkvartpbs1)); print "</pre>"; ?>
<?php //print "<pre>"; echo "total kvar kirim pbs2 \n"; print_r(number_format($hasilkvarkpbs2)); print "</pre>"; ?>
<?php //print "<pre>"; echo "total kvar terima pbs2 \n"; print_r(number_format($hasilkvartpbs2)); print "</pre>"; ?>
<?php //print "<pre>"; echo "total kvar kirim pbs3 \n"; print_r(number_format($hasilkvarkpbs3)); print "</pre>"; ?>
<?php //print "<pre>"; echo "total kvar terima pbs3 \n"; print_r(number_format($hasilkvartpbs3)); print "</pre>"; ?>
<?php ini_set('memory_limit','256M');
print "<pre>"; echo " jumlah array hasilPbs1 : "; print_r(count($hasilpbs['date']))."\n"; echo "\n memory usage : ".$this->benchmark->memory_usage(); print "</pre>"; ?>

<?php
ini_set('memory_limit','256M');
print "<pre>"; echo "array hasilPbs1 \n"; print_r($hasilpbs['date']); echo "memory usage : ".$this->benchmark->memory_usage(); print "</pre>"; ?>

<?php print "<pre>"; echo " nilai hasilPbs1 kwh_k key=15 \n"; print_r($hasilpbs['kwh_k'][15]); print "</pre>"; ?>
<?php print "<pre>"; echo " nilai mw key=15 \n"; print_r($mw[15]); print "</pre>"; ?>
<?php print "<pre>"; echo " nilai mvarout key=15 \n"; print_r($mvarOut[15]); print "</pre>"; ?>
<?php print "<pre>"; echo " nilai mvarin key=15 \n"; print_r($mvarIn[15]); print "</pre>"; ?>
<?php print "<pre>"; echo "nilai cosphiLead key=15 \n"; print_r($cosphiLead[15]); print "</pre>"; ?>
<?php print "<pre>"; echo "nilai cosphiLag key=15 \n"; print_r($cosphiLag[15]); print "</pre>"; ?>
<?php print "<pre>"; echo "nilai consLead key=15 \n"; print_r($consLead[15]); print "</pre>"; ?>
<?php print "<pre>"; echo "nilai consLag key=15 \n"; print_r($consLag[15]); print "</pre>"; ?>
<?php print "<pre>"; echo "nilai mvarLead key=15 \n"; print_r($mvarLead[15]); print "</pre>"; ?>
<?php print "<pre>"; echo "nilai mvarLag key=15 \n"; print_r($mvarLag[15]); print "</pre>"; ?>
<?php //print "<pre>"; echo "total kvar kirim pbs2 \n"; print_r(number_format($hasilkvarkpbs2)); print "</pre>"; ?>
<?php //print "<pre>"; echo "total kvar terima pbs2 \n"; print_r(number_format($hasilkvartpbs2)); print "</pre>"; ?>
<?php //print "<pre>"; echo "total kvar kirim pbs3 \n"; print_r(number_format($hasilkvarkpbs3)); print "</pre>"; ?>
<?php //print "<pre>"; echo "total kvar terima pbs3 \n"; print_r(number_format($hasilkvartpbs3)); print "</pre>"; ?>
<?php //print "<pre>"; echo "total kvar terima pbs3 \n"; print_r(number_format($hasilkvartpbs3)); print "</pre>"; ?>
<?php print "<pre>"; echo " nilai hasilPbs1 kwh_k ke - 416 di ba_kv, ke - 412 di pbs1 \n"; print_r($hasilpbs['kwh_k'][410]); print "</pre>"; ?>
<?php print "<pre>"; echo " nilai hasilPbs1 kvarh_k ke 416 \n"; print_r($hasilpbs['kvarh_k'][410]); print "</pre>"; ?>
<?php print "<pre>"; echo " nilai hasilPbs1 kvarh_t ke 416 \n"; print_r($hasilpbs['kvarh_t'][410]); print "</pre>"; ?>
<?php print "<pre>"; echo " nilai mw ke 416 \n"; print_r($mw[410]); print "</pre>"; ?>
<?php print "<pre>"; echo " nilai mvarout ke 416 \n"; print_r($mvarOut[410]); print "</pre>"; ?>
<?php print "<pre>"; echo " nilai mvarin ke 416 \n"; print_r($mvarIn[410]); print "</pre>"; ?>
<?php print "<pre>"; echo "nilai cosphiLead ke 416 \n"; print_r($cosphiLead[410]); print "</pre>"; ?>
<?php print "<pre>"; echo "nilai cosphiLag ke 416 \n"; print_r($cosphiLag[410]); print "</pre>"; ?>
<?php print "<pre>"; echo "nilai consLead ke 416 \n"; print_r($consLead[410]); print "</pre>"; ?>
<?php print "<pre>"; echo "nilai consLag ke 416 \n"; print_r($consLag[410]); print "</pre>"; ?>
<?php print "<pre>"; echo "nilai mvarLead ke 416 \n"; print_r($mvarLead[410]); print "</pre>"; ?>
<?php print "<pre>"; echo "nilai mvarLag ke 416 \n"; echo "nilai mvarLag : \n if (mvarOut[] > consLag[]) {
  mvarLag[] = mvarOut[] - consLag[];
}
else {
  mvarLag[] = 0;
} \n";print_r($mvarLag[410]); print "</pre>"; ?>

<!--
</body>
</html>
 -->
