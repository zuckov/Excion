<!-- -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laporan Ba PBS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<!-- -->
<div class="container">
  <h1>BERITA ACARA</h1>
  <p>PENGIRIMAN ENERGI REAKTIF JAM (kVarh)</p>
  <p>P3B JAWA BALI, APB JAWA TENGAH DAN DIY</p>
  <br>
  <br>
  <h3>TOTAL ENERGI REAKTIF JAM (Kvarh) :</h3>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th rowspan="2">No</th>
        <th rowspan="2">ENTITAS</th>
        <th colspan="2">Meter Utama</th>
        <th colspan="2">Meter Pembanding</th>
        <th rowspan="2">Deviasi (%)</th>
        <th colspan="2">Meter Transaksi</th>
        <th rowspan="2">KETERANGAN</th>
      </tr>
      <tr>
        <th>TITIK UKUR</th>
        <th>kVarh</th>
        <th>TITIK UKUR</th>
        <th>kVarh</th>
        <th>TITIK UKUR</th>
        <th>KWH</th>
      </tr>
    </thead>
    <tbody>
      <?php
        //$num = count($kwh_k);
        //for ($i=0; $i < $num; $i++) {
        //$var = $i + 1;
      ?>
      <tr>
        <td rowspan="4">01</td>
        <td colspan="9">KVarh dari Pembangkit (kVar out) - (Lagging)</td>
        <!-- <td colspan="8"></td> -->
      </tr>
      <tr>
        <td>PB SOEDIRMAN 1</td>
        <td>0707A639-01</td>
        <!--<td>=+'pb. sudirman 1'!D4</td> -->
        <td><?php echo number_format($hasilkvarkpbs1); ?></td>
        <td>071008506</td>
        <td><?php echo $a = 0; ?></td>
        <td>100</td>
        <td>0707A639-01</td>
        <td><?php echo number_format($hasilkvarkpbs1); ?></td>
        <td> METER UTAMA ( MU )</td>
      </tr>
      <tr>
        <td>PB SOEDIRMAN 2</td>
        <td>0707A641-01</td>
        <td><?php echo number_format($hasilkvarkpbs2); ?></td>
        <td>071008501</td>
        <td><?php echo $a; ?></td>
        <td>100</td>
        <td>0707A641-01</td>
        <td><?php echo number_format($hasilkvarkpbs2); ?></td>
        <td> METER UTAMA ( MU )</td>
      </tr>
      <tr>
        <td>PB SOEDIRMAN 3</td>
        <td>0707A642-01</td>
        <td><?php echo number_format($hasilkvarkpbs3); ?></td>
        <td>071008505</td>
        <td><?php echo $a; ?></td>
        <td>100</td>
        <td>0707A642-01</td>
        <td><?php echo number_format($hasilkvarkpbs3); ?></td>
        <td> METER UTAMA ( MU )</td>
      </tr>
      <tr>
        <td></td>
        <td>Sub Total (1)</td>
        <td></td>
        <!-- <td>=SUM(D15:D17)</td> -->
        <td><?php echo number_format($hasilkvarkpbs1 + $hasilkvarkpbs2 + $hasilkvarkpbs3); ?></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td rowspan="4">02</td>
          <td colspan="9">KVarh ke Pembangkit (kVar in) - (Leading)</td>
      </tr>
      <tr>
        <td>PB SOEDIRMAN 1</td>
        <td>0707A639-01</td>
        <td><?php echo number_format($hasilkvartpbs1); ?></td>
        <td>071008506</td>
        <td><?php echo $a; ?></td>
        <td>100</td>
        <td>0707A639-01</td>
        <td><?php echo number_format($hasilkvartpbs1); ?></td>
        <td> METER UTAMA ( MU )</td>
      </tr>
      <tr>
        <td>PB SOEDIRMAN 2</td>
        <td>0707A641-01</td>
        <td><?php echo number_format($hasilkvartpbs2); ?></td>
        <td>071008501</td>
        <td><?php echo $a; ?></td>
        <td>100</td>
        <td>0707A641-01</td>
        <td><?php echo number_format($hasilkvartpbs2); ?></td>
        <td> METER UTAMA ( MU )</td>
      </tr>
      <tr>
        <td>PB SOEDIRMAN 3</td>
        <td>0707A642-01</td>
        <td><?php echo number_format($hasilkvartpbs3); ?></td>
        <td>071008505</td>
        <td><?php echo $a; ?></td>
        <td>100</td>
        <td>0707A642-01</td>
        <td><?php echo number_format($hasilkvartpbs3); ?></td>
        <td> METER UTAMA ( MU )</td>
      </tr>
      <tr>
        <td></td>
        <td>Sub Total (2)</td>
        <td></td>
        <td><?php echo number_format($hasilkvartpbs1 + $hasilkvartpbs2 + $hasilkvartpbs3); ?></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    <?php //} ?>
    </tbody>
  </table>
  <br>
  <h3>ENERGI REAKTIF JAM (kVarh) YANG DIPERHITUNGKAN DALAM SETELMEN :</h3>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th rowspan="2">No</th>
        <th rowspan="2">ENTITAS</th>
        <th colspan="2">Meter Utama</th>
        <th colspan="2">Meter Pembanding</th>
        <th rowspan="2">Deviasi (%)</th>
        <th colspan="2">Meter Transaksi</th>
        <th rowspan="2">KETERANGAN</th>
      </tr>
      <tr>
        <th>TITIK UKUR</th>
        <th>kVarh</th>
        <th>TITIK UKUR</th>
        <th>kVarh</th>
        <th>TITIK UKUR</th>
        <th>KWH</th>
      </tr>
    </thead>
    <tbody>
      <?php
        //$num = count($kwh_k);
        //for ($i=0; $i < $num; $i++) {
        //$var = $i + 1;
      ?>
      <tr>
        <td rowspan="4">01</td>
        <td colspan="9">KVarh dari Pembangkit (kVar out) - (Lagging)</td>
      </tr>
      <tr>
        <td>PB SOEDIRMAN 1</td>
        <td>0707A639-01</td>
        <!-- <td>=+hasil!F6</td> -->
        <td><?php echo number_format($lagpbs1 = $hasillagpbs1 * 1000 * 0.5, 2); ?></td>
        <td>071008506</td>
        <td><?php echo $a; ?></td>
        <td><?php
        if ($lagpbs1==0) {
          echo $dev2lagpbs1 = 100;
        }
        else {
          echo $dev2lagpbs1 = ($lagpbs1-$a)/$lagpbs1*100;
        }
        ?></td>
        <td>0707A639-01</td>
        <td><?php echo number_format($lagpbs1, 2); ?></td>
        <td> METER UTAMA ( MU )</td>
      </tr>
      <tr>
        <td>PB SOEDIRMAN 2</td>
        <td>0707A641-01</td>
        <td><?php echo number_format($lagpbs2 = $hasillagpbs2*1000*0.5, 2); ?></td>
        <td>071008501</td>
        <td><?php echo $a; ?></td>
        <td><?php
        if ($lagpbs2==0) {
          echo $dev2lagpbs2 = 100;
        }
        else {
          echo $dev2agpbs2 = ($lagpbs2-$a)/$lagpbs2*100;
        }
        ?></td>
        <td>0707A641-01</td>
        <td><?php echo number_format($lagpbs2, 2); ?></td>
        <td> METER UTAMA ( MU )</td>
      </tr>
      <tr>
        <td>PB SOEDIRMAN 3</td>
        <td>0707A642-01</td>
        <td><?php echo number_format($lagpbs3 = $hasillagpbs3*1000*0.5, 2); ?></td>
        <td>071008505</td>
        <td><?php echo $a; ?></td>
        <td><?php
        if ($lagpbs3==0) {
          echo $dev2lagpbs3 = 100;
        }
        else {
          echo $dev2lagpbs3 = ($lagpbs3-$a)/$lagpbs3*100;
        }
        ?></td>
        <td>0707A642-01</td>
        <td><?php echo number_format($lagpbs3, 2); ?></td>
        <td> METER UTAMA ( MU )</td>
      </tr>
      <tr>
        <td></td>
        <td>Sub Total (1)</td>
        <td></td>
        <td><?php echo number_format($lagpbs1 + $lagpbs2 + $lagpbs3, 2); ?></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td rowspan="4">02</td>
        <td colspan="9">KVarh ke Pembangkit (kVar in) - (Leading)</td>
      </tr>
      <tr>
        <td>PB SOEDIRMAN 1</td>
        <td>0707A639-01</td>
        <td><?php echo number_format($leadpbs1 = $hasilleadpbs1 * 1000 * 0.5, 2); ?></td>
        <td>071008506</td>
        <td><?php echo $a; ?></td>
        <td><?php
        if ($leadpbs1==0) {
          echo $dev2leadpbs1 = 100;
        }
        else {
          echo $dev2leadpbs1 = ($leadpbs1-$a)/$leadpbs1*100;
        }
        ?></td>
        <td>0707A639-01</td>
        <td><?php echo number_format($leadpbs1, 2); ?></td>
        <td> METER UTAMA ( MU )</td>
      </tr>
      <tr>
        <td>PB SOEDIRMAN 2</td>
        <td>0707A641-01</td>
        <td><?php echo number_format($leadpbs2 = $hasilleadpbs2 * 1000 * 0.5, 2); ?></td>
        <td>071008501</td>
        <td><?php echo $a; ?></td>
        <td><?php
        if ($leadpbs2==0) {
          echo $dev2leadpbs2 = 100;
        }
        else {
          echo $dev2leadpbs2 = ($leadpbs2-$a)/$leadpbs2*100;
        }
        ?></td>
        <td>0707A641-01</td>
        <td><?php echo number_format($leadpbs2, 2); ?></td>
        <td> METER UTAMA ( MU )</td>
      </tr>
      <tr>
        <td>PB SOEDIRMAN 3</td>
        <td>0707A642-01</td>
        <td><?php echo number_format($leadpbs3 = $hasilleadpbs3 * 1000 * 0.5, 2); ?></td>
        <td>071008505</td>
        <td><?php echo $a; ?></td>
        <td><?php
        if ($leadpbs3==0) {
          echo $dev2leadpbs3 = 100;
        }
        else {
          echo $dev2leadpbs3 = ($leadpbs3-$a)/$leadpbs3*100;
        }
        ?></td>
        <td>0707A642-01</td>
        <td><?php echo number_format($leadpbs3, 2); ?></td>
        <td> METER UTAMA ( MU )</td>
      </tr>
      <tr>
        <td></td>
        <td>Sub Total (2)</td>
        <td></td>
        <td><?php echo number_format($leadpbs1 + $leadpbs2 + $leadpbs3, 2); ?></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    <?php //} ?>
    </tbody>
  </table>
</div>
<!-- -->
</body>
</html>
 <!-- -->
