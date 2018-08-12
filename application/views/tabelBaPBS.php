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
  <h1>BERITA ACARA PBS</h1>
  <p>Pengiriman Energi Listrik</p>
  <p>Jawa Tengah dan DIY</p>
  <br>
  <!--
  <a href="#" class="btn btn-info btn-lg" data-toggle="modal" data-target="#cetak">Cetak</a><br> -->

  <!-- Modal Cetak Data -->
  <div class="modal fade" id="cetak" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-print"></span> Cetak Laporan Berita Acara PBS</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form action="<?php echo base_url().'index.php/cetaklaporan/cetak_bapbs/'.$folder; ?>" method="post">
            <div class="form-group">
              <label for="username" class=""><span class="glyphicon glyphicon-book"></span> No. Dokumen</label>
              <input type="text" name="nosurat" class="form-control" placeholder="Masukan no. dokumen" ><br>

              <label for="lvl" class=""><span class="glyphicon glyphicon-user"></span> Pejabat 1</label>
              <select class="form-control" name="pejabat1">
                <option value="none" selected = "selected">-- Pilih Pejabat 1 --</option>
                <?php foreach ($jabat as $value) { ?>
                  <option value="<?php echo $value->id ?>"><?php echo $value->nama ?></option>
                <?php } ?>
              </select>
              <br>

              <label for="username" class=""><span class="glyphicon glyphicon-user"></span> Pejabat 2</label>
              <select class="form-control" name="pejabat2">
                <option value="none" selected = "selected">-- Pilih Pejabat 2 --</option>
                <?php foreach ($jabat as $value) { ?>
                  <option value="<?php echo $value->id ?>"><?php echo $value->nama ?></option>
                <?php } ?>
              </select><br>
              <!-- <input type="text" name="id" id="username" class="form-control" placeholder="Region" ><br> -->
            </div>
            <button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-print  "></span> Cetak Laporan</button>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Batal</button>
          </form>
        </div>
      </div>
    </div>
  </div>
    <!-- /modal Cetak Data -->

  <!-- tabel pbs start-->
  <br><h3>PLTA SOD</h3>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th rowspan="2">No</th>
        <th rowspan="2">Titik Ukur</th>
        <th rowspan="2">Jenis</th>
        <th colspan="2">Meter Utama</th>
        <th colspan="2">Meter Pembanding</th>
        <th rowspan="2">Deviasi (%)</th>
        <th>Meter Transaksi</th>
      </tr>
      <tr>
        <th>ID Meter</th>
        <th>kWh</th>
        <th>ID Meter</th>
        <th>kWh</th>
        <th>kWh</th>
      </tr>
    </thead>
    <tbody>
      <?php
        //$num = count($kwh_k);
        //for ($i=0; $i < 3; $i++) {
        //$var = $i + 1;
      ?>
      <tr>
        <td rowspan="4">1</td>
        <td rowspan="4">UNIT - 1</td>
        <td>KWh OUT</td>
        <td rowspan="4">0707A639-01</td> <!-- id meter utama -->
        <td><?php echo number_format($sumPbs1kwhk = $query['sumPbs1kwhk'], 2); ?></td>
        <td rowspan="4">071008506</td> <!-- id meter banding -->
        <td><?php echo $a=0 ?></td>
        <!-- <td><?php echo number_format(($sumPbs1kwhk-$a)/$sumPbs1kwhk*100, 2); ?></td> -->
          <td>100</td>
        <td><?php echo number_format($sumPbs1kwhk, 2); ?></td>
      </tr>
      <tr>
        <td>KVarh OUT</td>
        <td><?php echo number_format($sumPbs1kvarhk = $query['sumPbs1kvarhk'],2); ?></td>
        <td><?php echo $a=0 ?></td>
        <!-- <td><?php //echo number_format(($sumPbs1kvarhk-$a)/$sumPbs1kvarhk*100, 2); ?></td> -->
        <td>100</td>
        <td><?php echo number_format($sumPbs1kvarhk,2); ?></td>
      </tr>
      <tr>
        <td>KWh IN</td>
        <td><?php echo number_format($sumPbs1kwht = $query['sumPbs1kwht'], 2); ?></td>
        <td><?php echo $a=0 ?></td>
        <!-- <td><?php// echo number_format(($sumPbs1kwht-$a)/$sumPbs1kwht*100, 2); ?></td> -->
        <td>100</td>
        <td><?php echo number_format($sumPbs1kwht, 2); ?></td>
      </tr>
      <tr>
        <td>KVarh IN</td>
        <td><?php echo number_format($sumPbs1kvarht = $query['sumPbs1kvarht'],2); ?></td>
        <td><?php echo $a=0 ?></td>
        <!-- <td><?php //echo number_format(($sumPbs1kvarht-$a)/$sumPbs1kvarht*100, 2); ?></td> -->
        <td>100</td>
        <td><?php echo number_format($sumPbs1kvarht,2); ?></td>
      </tr>
      <tr>
        <td rowspan="4">2</td>
        <td rowspan="4">UNIT - 2</td>
        <td>KWh OUT</td>
        <td rowspan="4">0707A641-01</td><!-- id meter utama -->
        <td><?php echo number_format($sumPbs2kwhk = $query['sumPbs2kwhk'], 2); ?></td>
        <td rowspan="4">071008501</td><!-- id meter banding -->
        <td><?php echo $a=0 ?></td>
        <!-- <td><?php //echo number_format(($sumPbs2kwhk-$a)/$sumPbs2kwhk*100, 2); ?></td> -->
        <td>100</td>
        <td><?php echo number_format($sumPbs2kwhk, 2); ?></td>
      </tr>
      <tr>
        <td>KVarh OUT</td>
        <td><?php echo number_format($sumPbs2kvarhk = $query['sumPbs2kvarhk'],2); ?></td>
        <td><?php echo $a=0 ?></td>
        <!--<td><?php echo number_format(($sumPbs2kvarhk-$a)/$sumPbs2kvarhk*100, 2); ?></td>-->
        <td>100</td>
        <td><?php echo number_format($sumPbs2kvarhk,2); ?></td>
      </tr>
      <tr>
        <td>KWh IN</td>
        <td><?php echo number_format($sumPbs2kwht = $query['sumPbs2kwht'], 2); ?></td>
        <td><?php echo $a=0 ?></td>
        <!--<td><?php echo number_format(($sumPbs2kwht-$a)/$sumPbs2kwht*100, 2); ?></td>-->
        <td>100</td>
        <td><?php echo number_format($sumPbs2kwht, 2); ?></td>
      </tr>
      <tr>
        <td>KVarh IN</td>
        <td><?php echo number_format($sumPbs2kvarht = $query['sumPbs2kvarht'],2); ?></td>
        <td><?php echo $a=0 ?></td>
        <td><?php echo number_format(($sumPbs2kvarht-$a)/$sumPbs2kvarht*100, 2); ?></td>
        <td><?php echo number_format($sumPbs2kvarht,2); ?></td>
      </tr>
      <tr>
        <td rowspan="4">3</td>
        <td rowspan="4">UNIT - 3</td>
        <td>KWh OUT</td>
        <td rowspan="4">0707A642-01</td><!-- id meter utama -->
        <td><?php echo number_format($sumPbs3kwhk = $query['sumPbs3kwhk'], 2); ?></td>
        <td rowspan="4">071008505</td><!-- id meter banding -->
        <td><?php echo $a=0 ?></td>
        <!--<td><?php echo number_format(($sumPbs3kwhk-$a)/$sumPbs3kwhk*100, 2); ?></td> -->
        <td>100</td>
        <td><?php echo number_format($sumPbs3kwhk, 2); ?></td>
      </tr>
      <tr>
        <td>KVarh OUT</td>
        <td><?php echo number_format($sumPbs3kvarhk = $query['sumPbs3kvarhk'],2); ?></td>
        <td><?php echo $a=0 ?></td>
      <!--  <td><?php echo number_format(($sumPbs3kvarhk-$a)/$sumPbs3kvarhk*100, 2); ?></td> -->
        <td>100</td>
        <td><?php echo number_format($sumPbs3kvarhk,2); ?></td>
      </tr>
      <tr>
        <td>KWh IN</td>
        <td><?php echo number_format($sumPbs3kwht = $query['sumPbs3kwht'], 2); ?></td>
        <td><?php echo $a=0 ?></td>
        <!--<td><?php echo number_format(($sumPbs3kwht-$a)/$sumPbs3kwht*100, 2); ?></td> -->
        <td>100</td>
        <td><?php echo number_format($sumPbs3kwht, 2); ?></td>
      </tr>
      <tr>
        <td>KVarh IN</td>
        <td><?php echo number_format($sumPbs3kvarht = $query['sumPbs3kvarht'],2); ?></td>
        <td><?php echo $a=0 ?></td>
      <!--  <td><?php echo number_format(($sumPbs3kvarht-$a)/$sumPbs3kvarht*100, 2); ?></td> -->
        <td>100</td>
        <td><?php echo number_format($sumPbs3kvarht,2); ?></td>
      </tr>

    <?php //} ?>

    <tr>
      <td>4</td>
      <td>MSGI 1</td>
      <td>PS GI</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>0.00</td>
    </tr>
    <tr>
      <td>5</td>
      <td>MSGI 2</td>
      <td>PS GI</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>0.00</td>
    </tr>
    <tr>
      <td colspan="8">Jumlah kWh out = kWh out ( Unit1 + Unit2 + Unit 3)</td>
      <td><?php echo number_format($totalKwhK = $sumPbs1kwhk + $sumPbs2kwhk + $sumPbs3kwhk, 2); ?></td>
    </tr>
    <tr>
      <td colspan="8">Jumlah kVArh out = kVArh out ( Unit1 + Unit2 + Unit 3)</td>
      <td><?php echo number_format($totalKvarhK = $sumPbs1kvarhk + $sumPbs2kvarhk + $sumPbs3kvarhk, 2); ?></td>
    </tr>
    <tr>
      <td colspan="8">Jumlah kWh in = kWh in ( Unit1 + Unit2 + Unit 3)</td>
      <td><?php echo number_format($totalKwhT = $sumPbs1kwht + $sumPbs2kwht + $sumPbs3kwht, 2); ?></td>
    </tr>
    <tr>
      <td colspan="8">Jumlah kVArh in = kVArh in ( Unit1 + Unit2 + Unit 3)</td>
      <td><?php echo number_format($totalKvarhT = $sumPbs1kvarht + $sumPbs2kvarht + $sumPbs3kvarht, 2); ?></td>
    </tr>
    <tr>
      <td colspan="8">Jumlah kWh in(net) = kWh in + 0 - (MS GI 1+ MS GI 2) </td>
      <td><?php echo number_format($sumPbs1kwht + $sumPbs2kwht + $sumPbs3kwht + $MSGI1=0 + $MSGI2=0, 2); ?></td>
    </tr>
    <tr>
      <td colspan="8">Total kWh (Net) =Jumlah kWh out - Jumlah kWh in (net) </td>
      <td><?php echo number_format(($totalKwhK - $totalKwhT) + ($MSGI1 - $MSGI2), 2); ?></td>
    </tr>
    </tbody>
  </table>
  <!-- tabel pbs end -->

</div>

<!-- -->
</body>
</html>
<!-- -->
