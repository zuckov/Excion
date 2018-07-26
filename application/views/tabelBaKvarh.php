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
        <td>"0/-"</td>
        <td>=(D15-F15)/D15*100</td>
        <td>0707A639-01</td>
        <td><?php echo number_format($hasilkvarkpbs1); ?></td>
        <td> METER UTAMA ( MU )</td>
      </tr>
      <tr>
        <td>PB SOEDIRMAN 2</td>
        <td>0707A641-01</td>
        <td><?php echo number_format($hasilkvarkpbs2); ?></td>
        <td>071008501</td>
        <td>"0/-"</td>
        <td>=(D16-F16)/D16*100</td>
        <td>0707A641-01</td>
        <td><?php echo number_format($hasilkvarkpbs2); ?></td>
        <td> METER UTAMA ( MU )</td>
      </tr>
      <tr>
        <td>PB SOEDIRMAN 3</td>
        <td>0707A642-01</td>
        <td><?php echo number_format($hasilkvarkpbs3); ?></td>
        <td>071008505</td>
        <td>"0/-"</td>
        <td>=(D17-F17)/D17*100</td>
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
        <td>"0/-"</td>
        <td>=(D20-F20)/D20*100</td>
        <td>0707A639-01</td>
        <td><?php echo number_format($hasilkvartpbs1); ?></td>
        <td> METER UTAMA ( MU )</td>
      </tr>
      <tr>
        <td>PB SOEDIRMAN 2</td>
        <td>0707A641-01</td>
        <td><?php echo number_format($hasilkvartpbs2); ?></td>
        <td>071008501</td>
        <td>"0/-"</td>
        <td>=(D21-F21)/D21*100</td>
        <td>0707A641-01</td>
        <td><?php echo number_format($hasilkvartpbs2); ?></td>
        <td> METER UTAMA ( MU )</td>
      </tr>
      <tr>
        <td>PB SOEDIRMAN 3</td>
        <td>0707A642-01</td>
        <td><?php echo number_format($hasilkvartpbs3); ?></td>
        <td>071008505</td>
        <td>"0/-"</td>
        <td>=(D22-F22)/D22*100</td>
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
        <td>=+hasil!F6</td>
        <td>071008506</td>
        <td>"0/-"</td>
        <td>=(D32-F32)/D32*100</td>
        <td>0707A639-01</td>
        <td>=D32</td>
        <td> METER UTAMA ( MU )</td>
      </tr>
      <tr>
        <td>PB SOEDIRMAN 2</td>
        <td>0707A641-01</td>
        <td>=+hasil!F7</td>
        <td>071008501</td>
        <td>"0/-"</td>
        <td>=(D33-F33)/D33*100</td>
        <td>0707A641-01</td>
        <td>=D33</td>
        <td> METER UTAMA ( MU )</td>
      </tr>
      <tr>
        <td>PB SOEDIRMAN 3</td>
        <td>0707A642-01</td>
        <td>=+hasil!F8</td>
        <td>071008505</td>
        <td>"0/-"</td>
        <td>=(D34-F34)/D34*100</td>
        <td>0707A642-01</td>
        <td>=D34</td>
        <td> METER UTAMA ( MU )</td>
      </tr>
      <tr>
        <td></td>
        <td>Sub Total (1)</td>
        <td></td>
        <td>=SUM(D33:D35)</td>
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
        <td>=+hasil!E6</td>
        <td>071008506</td>
        <td>"0/-"</td>
        <td>=(D38-F38)/D38*100</td>
        <td>0707A639-01</td>
        <td>=D38</td>
        <td> METER UTAMA ( MU )</td>
      </tr>
      <tr>
        <td>PB SOEDIRMAN 2</td>
        <td>0707A641-01</td>
        <td>=+hasil!E7</td>
        <td>071008501</td>
        <td>"0/-"</td>
        <td>=(D39-F39)/D39*100</td>
        <td>0707A641-01</td>
        <td>=D39</td>
        <td> METER UTAMA ( MU )</td>
      </tr>
      <tr>
        <td>PB SOEDIRMAN 3</td>
        <td>0707A642-01</td>
        <td>=+hasil!E8</td>
        <td>071008505</td>
        <td>"0/-"</td>
        <td>=(D40-F40)/D40*100</td>
        <td>0707A642-01</td>
        <td>=D40</td>
        <td> METER UTAMA ( MU )</td>
      </tr>
      <tr>
        <td></td>
        <td>Sub Total (2)</td>
        <td></td>
        <td>=SUM(D38:D40)</td>
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
<!--
</body>
</html>
 -->
