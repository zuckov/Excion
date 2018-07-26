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
<!-- container -->
<div class="container">
  <h1>BERITA ACARA</h1>
  <p>Pengiriman Energi Listrik</p>
  <p>Jawa Tengah dan DIY</p>
  <br>

  <!-- tabel pbs start-->
  <h3>PLTA SOD</h3>
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
        <td>value KWh OUT</td>
        <td rowspan="4">071008506</td> <!-- id meter banding -->
        <td>value KWh OUT pembanding</td>
        <td>value deviasi 1</td>
        <td>value meter transaksi 1</td>
      </tr>
      <tr>
        <td>KVarh OUT</td>
        <td>value KVarh OUT</td>
        <td>value KVarh OUT pembanding</td>
        <td>value deviasi 2</td>
        <td>value meter transaksi 2</td>
      </tr>
      <tr>
        <td>KWh IN</td>
        <td>value KWh IN</td>
        <td>value KWh IN pembanding</td>
        <td>value deviasi 3</td>
        <td>value meter transaksi 3</td>
      </tr>
      <tr>
        <td>KVarh IN</td>
        <td>value KVarh IN</td>
        <td>value KVarh IN pembanding</td>
        <td>value deviasi 4</td>
        <td>value meter transaksi 4</td>
      </tr>
      <tr>
        <td rowspan="4">2</td>
        <td rowspan="4">UNIT - 2</td>
        <td>KWh OUT</td>
        <td rowspan="4">0707A641-01</td><!-- id meter utama -->
        <td>value KWh OUT</td>
        <td rowspan="4">071008501</td><!-- id meter banding -->
        <td>value KWh OUT pembanding</td>
        <td>value deviasi 1</td>
        <td>value meter transaksi 1</td>
      </tr>
      <tr>
        <td>KVarh OUT</td>
        <td>value KVarh OUT</td>
        <td>value KVarh OUT pembanding</td>
        <td>value deviasi 2</td>
        <td>value meter transaksi 2</td>
      </tr>
      <tr>
        <td>KWh IN</td>
        <td>value KWh IN</td>
        <td>value KWh IN pembanding</td>
        <td>value deviasi 3</td>
        <td>value meter transaksi 3</td>
      </tr>
      <tr>
        <td>KVarh IN</td>
        <td>value KVarh IN</td>
        <td>value KVarh IN pembanding</td>
        <td>value deviasi 4</td>
        <td>value meter transaksi 4</td>
      </tr>
      <tr>
        <td rowspan="4">3</td>
        <td rowspan="4">UNIT - 3</td>
        <td>KWh OUT</td>
        <td rowspan="4">0707A642-01</td><!-- id meter utama -->
        <td>value KWh OUT</td>
        <td rowspan="4">071008505</td><!-- id meter banding -->
        <td>value KWh OUT pembanding</td>
        <td>value deviasi 1</td>
        <td>value meter transaksi 1</td>
      </tr>
      <tr>
        <td>KVarh OUT</td>
        <td>value KVarh OUT</td>
        <td>value KVarh OUT pembanding</td>
        <td>value deviasi 2</td>
        <td>value meter transaksi 2</td>
      </tr>
      <tr>
        <td>KWh IN</td>
        <td>value KWh IN</td>
        <td>value KWh IN pembanding</td>
        <td>value deviasi 3</td>
        <td>value meter transaksi 3</td>
      </tr>
      <tr>
        <td>KVarh IN</td>
        <td>value KVarh IN</td>
        <td>value KVarh IN pembanding</td>
        <td>value deviasi 4</td>
        <td>value meter transaksi 4</td>
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
      <td colspan="2">Jumlah kWh out</td>
      <td>=</td>
      <td colspan="5">kWh out ( Unit1 + Unit2 + Unit 3)</td>
      <td>value meter transaksi</td>
    </tr>
    <tr>
      <td colspan="8">Jumlah kVArh out = kVArh out ( Unit1 + Unit2 + Unit 3)</td>
      <td>value meter transaksi</td>
    </tr>
    <tr>
      <td colspan="8">Jumlah kWh in = kWh in ( Unit1 + Unit2 + Unit 3)</td>
      <td>value meter transaksi</td>
    </tr>
    <tr>
      <td colspan="8">Jumlah kVArh in = kVArh in ( Unit1 + Unit2 + Unit 3)</td>
      <td>value meter transaksi</td>
    </tr>
    <tr>
      <td colspan="8">Jumlah kWh in(net) = kWh in + 0 - (MS GI 1+ MS GI 2) </td>
      <td>value meter transaksi</td>
    </tr>
    <tr>
      <td colspan="8">Total kWh (Net) =Jumlah kWh out - Jumlah kWh in (net) </td>
      <td>value meter transaksi</td>
    </tr>
    </tbody>
  </table>
  <!-- tabel pbs end -->

  <!-- tabel jelok start-->
  <h3>PLTA JLK</h3>
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
      <tr>
        <td rowspan="4">1</td>
        <td rowspan="4">UNIT - 1</td>
        <td>KWh OUT</td>
        <td rowspan="4">0707A691-01</td> <!-- id meter utama -->
        <td>value KWh OUT</td>
        <td rowspan="4">054205709</td> <!-- id meter banding -->
        <td>value KWh OUT pembanding</td>
        <td>value deviasi 1</td>
        <td>value meter transaksi 1</td>
      </tr>
      <tr>
        <td>KVarh OUT</td>
        <td>value KVarh OUT</td>
        <td>value KVarh OUT pembanding</td>
        <td>value deviasi 2</td>
        <td>value meter transaksi 2</td>
      </tr>
      <tr>
        <td>KWh IN</td>
        <td>value KWh IN</td>
        <td>value KWh IN pembanding</td>
        <td>value deviasi 3</td>
        <td>value meter transaksi 3</td>
      </tr>
      <tr>
        <td>KVarh IN</td>
        <td>value KVarh IN</td>
        <td>value KVarh IN pembanding</td>
        <td>value deviasi 4</td>
        <td>value meter transaksi 4</td>
      </tr>
      <tr>
        <td rowspan="4">2</td>
        <td rowspan="4">UNIT - 2</td>
        <td>KWh OUT</td>
        <td rowspan="4">0202A008-01</td><!-- id meter utama -->
        <td>value KWh OUT</td>
        <td rowspan="4">054205712</td><!-- id meter banding -->
        <td>value KWh OUT pembanding</td>
        <td>value deviasi 1</td>
        <td>value meter transaksi 1</td>
      </tr>
      <tr>
        <td>KVarh OUT</td>
        <td>value KVarh OUT</td>
        <td>value KVarh OUT pembanding</td>
        <td>value deviasi 2</td>
        <td>value meter transaksi 2</td>
      </tr>
      <tr>
        <td>KWh IN</td>
        <td>value KWh IN</td>
        <td>value KWh IN pembanding</td>
        <td>value deviasi 3</td>
        <td>value meter transaksi 3</td>
      </tr>
      <tr>
        <td>KVarh IN</td>
        <td>value KVarh IN</td>
        <td>value KVarh IN pembanding</td>
        <td>value deviasi 4</td>
        <td>value meter transaksi 4</td>
      </tr>
      <tr>
        <td rowspan="4">3</td>
        <td rowspan="4">UNIT - 3</td>
        <td>KWh OUT</td>
        <td rowspan="4">05111A031-01</td><!-- id meter utama -->
        <td>value KWh OUT</td>
        <td rowspan="4">54205721</td><!-- id meter banding -->
        <td>value KWh OUT pembanding</td>
        <td>value deviasi 1</td>
        <td>value meter transaksi 1</td>
      </tr>
      <tr>
        <td>KVarh OUT</td>
        <td>value KVarh OUT</td>
        <td>value KVarh OUT pembanding</td>
        <td>value deviasi 2</td>
        <td>value meter transaksi 2</td>
      </tr>
      <tr>
        <td>KWh IN</td>
        <td>value KWh IN</td>
        <td>value KWh IN pembanding</td>
        <td>value deviasi 3</td>
        <td>value meter transaksi 3</td>
      </tr>
      <tr>
        <td>KVarh IN</td>
        <td>value KVarh IN</td>
        <td>value KVarh IN pembanding</td>
        <td>value deviasi 4</td>
        <td>value meter transaksi 4</td>
      </tr>
      <tr>
        <td rowspan="4">4</td>
        <td rowspan="4">UNIT - 4</td>
        <td>KWh OUT</td>
        <td rowspan="4">0202A016-01</td><!-- id meter utama -->
        <td>value KWh OUT</td>
        <td rowspan="4">054205722</td><!-- id meter banding -->
        <td>value KWh OUT pembanding</td>
        <td>value deviasi 1</td>
        <td>value meter transaksi 1</td>
      </tr>
      <tr>
        <td>KVarh OUT</td>
        <td>value KVarh OUT</td>
        <td>value KVarh OUT pembanding</td>
        <td>value deviasi 2</td>
        <td>value meter transaksi 2</td>
      </tr>
      <tr>
        <td>KWh IN</td>
        <td>value KWh IN</td>
        <td>value KWh IN pembanding</td>
        <td>value deviasi 3</td>
        <td>value meter transaksi 3</td>
      </tr>
      <tr>
        <td>KVarh IN</td>
        <td>value KVarh IN</td>
        <td>value KVarh IN pembanding</td>
        <td>value deviasi 4</td>
        <td>value meter transaksi 4</td>
      </tr>

    <?php //} ?>

    <tr>
      <td>5</td>
      <td>TRAFO PS 1</td>
      <td>PS KIT 1</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>0.00</td>
    </tr>
    <tr>
      <td>6</td>
      <td>TRAFO PS 2</td>
      <td>PS KIT 2</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>0.00</td>
    </tr>
    <tr>
      <td colspan="8">Jumlah kWh out = kWh out ( Unit1 + Unit2 + Unit 3 + unit4)</td>
      <td>value meter transaksi</td>
    </tr>
    <tr>
      <td colspan="8">Jumlah kVArh out = kVArh out ( Unit1 + Unit2 + Unit3 + Unit4)</td>
      <td>value meter transaksi</td>
    </tr>
    <tr>
      <td colspan="8">Jumlah kWh in = kWh in ( Unit1 + Unit2 + Unit 3 + Unit4)</td>
      <td>value meter transaksi</td>
    </tr>
    <tr>
      <td colspan="8">Jumlah kVArh in = kVArh in ( Unit1 + Unit2 + Unit 3 + Unit4)</td>
      <td>value meter transaksi</td>
    </tr>
    <tr>
      <td colspan="8">Jumlah kWh in(net) = kWh in + ( PS KIT 1 + PS KIT 2 )  </td>
      <td>value meter transaksi</td>
    </tr>
    <tr>
      <td colspan="8">Total kWh (Net) =Jumlah kWh out - Jumlah kWh in (net) </td>
      <td>value meter transaksi</td>
    </tr>
    </tbody>
  </table>
  <!-- tabel jelok end -->

  <!-- tabel Timo start-->
  <h3>PLTA TM</h3>
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
      <tr>
        <td rowspan="4">1</td>
        <td rowspan="4">UNIT - 1</td>
        <td>KWh OUT</td>
        <td rowspan="4">0202A014-01</td> <!-- id meter utama -->
        <td>value KWh OUT</td>
        <td rowspan="4">0014059</td> <!-- id meter banding -->
        <td>value KWh OUT pembanding</td>
        <td>value deviasi 1</td>
        <td>value meter transaksi 1</td>
      </tr>
      <tr>
        <td>KVarh OUT</td>
        <td>value KVarh OUT</td>
        <td>value KVarh OUT pembanding</td>
        <td>value deviasi 2</td>
        <td>value meter transaksi 2</td>
      </tr>
      <tr>
        <td>KWh IN</td>
        <td>value KWh IN</td>
        <td>value KWh IN pembanding</td>
        <td>value deviasi 3</td>
        <td>value meter transaksi 3</td>
      </tr>
      <tr>
        <td>KVarh IN</td>
        <td>value KVarh IN</td>
        <td>value KVarh IN pembanding</td>
        <td>value deviasi 4</td>
        <td>value meter transaksi 4</td>
      </tr>
      <tr>
        <td rowspan="4">2</td>
        <td rowspan="4">UNIT - 2</td>
        <td>KWh OUT</td>
        <td rowspan="4">0202A011-01</td><!-- id meter utama -->
        <td>value KWh OUT</td>
        <td rowspan="4">0014049</td><!-- id meter banding -->
        <td>value KWh OUT pembanding</td>
        <td>value deviasi 1</td>
        <td>value meter transaksi 1</td>
      </tr>
      <tr>
        <td>KVarh OUT</td>
        <td>value KVarh OUT</td>
        <td>value KVarh OUT pembanding</td>
        <td>value deviasi 2</td>
        <td>value meter transaksi 2</td>
      </tr>
      <tr>
        <td>KWh IN</td>
        <td>value KWh IN</td>
        <td>value KWh IN pembanding</td>
        <td>value deviasi 3</td>
        <td>value meter transaksi 3</td>
      </tr>
      <tr>
        <td>KVarh IN</td>
        <td>value KVarh IN</td>
        <td>value KVarh IN pembanding</td>
        <td>value deviasi 4</td>
        <td>value meter transaksi 4</td>
      </tr>
      <tr>
        <td rowspan="4">3</td>
        <td rowspan="4">UNIT - 3</td>
        <td>KWh OUT</td>
        <td rowspan="4">0707A692-01</td><!-- id meter utama -->
        <td>value KWh OUT</td>
        <td rowspan="4">0014054</td><!-- id meter banding -->
        <td>value KWh OUT pembanding</td>
        <td>value deviasi 1</td>
        <td>value meter transaksi 1</td>
      </tr>
      <tr>
        <td>KVarh OUT</td>
        <td>value KVarh OUT</td>
        <td>value KVarh OUT pembanding</td>
        <td>value deviasi 2</td>
        <td>value meter transaksi 2</td>
      </tr>
      <tr>
        <td>KWh IN</td>
        <td>value KWh IN</td>
        <td>value KWh IN pembanding</td>
        <td>value deviasi 3</td>
        <td>value meter transaksi 3</td>
      </tr>
      <tr>
        <td>KVarh IN</td>
        <td>value KVarh IN</td>
        <td>value KVarh IN pembanding</td>
        <td>value deviasi 4</td>
        <td>value meter transaksi 4</td>
      </tr>

    <?php //} ?>

    <tr>
      <td>4</td>
      <td>TRAFO PS 1</td>
      <td>PS KIT 1</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>0.00</td>
    </tr>
    <tr>
      <td>5</td>
      <td>TRAFO PS 2</td>
      <td>PS KIT 2</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>0.00</td>
    </tr>
    <tr>
      <td colspan="2">Jumlah kWh out</td>
      <td>=</td>
      <td colspan="5">kWh out ( Unit1 + Unit2 + Unit 3)</td>
      <td>value meter transaksi</td>
    </tr>
    <tr>
      <td colspan="8">Jumlah kVArh out = kVArh out ( Unit1 + Unit2 + Unit 3)</td>
      <td>value meter transaksi</td>
    </tr>
    <tr>
      <td colspan="8">Jumlah kWh in = kWh in ( Unit1 + Unit2 + Unit 3)</td>
      <td>value meter transaksi</td>
    </tr>
    <tr>
      <td colspan="8">Jumlah kVArh in = kVArh in ( Unit1 + Unit2 + Unit 3)</td>
      <td>value meter transaksi</td>
    </tr>
    <tr>
      <td colspan="8">Jumlah kWh in(net) = kWh in + ( PS KIT 1 + PS KIT 2 )  </td>
      <td>value meter transaksi</td>
    </tr>
    <tr>
      <td colspan="8">Total kWh (Net) = Jumlah kWh out - Jumlah kWh in (net) </td>
      <td>value meter transaksi</td>
    </tr>
    </tbody>
  </table>
  <!-- tabel Timo end -->

  <!-- tabel Kedungombo start-->
  <h3>PLTA KDGMB</h3>
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
      <tr>
        <td rowspan="4">1</td>
        <td rowspan="4">UNIT - 1</td>
        <td>KWh OUT</td>
        <td rowspan="4">0708A657- 01</td> <!-- id meter utama -->
        <td>value KWh OUT</td>
        <td rowspan="4">14047</td> <!-- id meter banding -->
        <td>value KWh OUT pembanding</td>
        <td>value deviasi 1</td>
        <td>value meter transaksi 1</td>
      </tr>
      <tr>
        <td>KVarh OUT</td>
        <td>value KVarh OUT</td>
        <td>value KVarh OUT pembanding</td>
        <td>value deviasi 2</td>
        <td>value meter transaksi 2</td>
      </tr>
      <tr>
        <td>KWh IN</td>
        <td>value KWh IN</td>
        <td>value KWh IN pembanding</td>
        <td>value deviasi 3</td>
        <td>value meter transaksi 3</td>
      </tr>
      <tr>
        <td>KVarh IN</td>
        <td>value KVarh IN</td>
        <td>value KVarh IN pembanding</td>
        <td>value deviasi 4</td>
        <td>value meter transaksi 4</td>
      </tr>

    <?php //} ?>

    <tr>
      <td>2</td>
      <td>PS PLTA</td>
      <td>PS KIT</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>0.00</td>
    </tr>

    <tr>
      <td colspan="2">Jumlah kWh out</td>
      <td>=</td>
      <td colspan="5">kWh out </td>
      <td>value meter transaksi</td>
    </tr>
    <tr>
      <td colspan="8">Jumlah kVArh out = kVArh out </td>
      <td>value meter transaksi</td>
    </tr>
    <tr>
      <td colspan="8">Jumlah kWh in = kWh in </td>
      <td>value meter transaksi</td>
    </tr>
    <tr>
      <td colspan="8">Jumlah kVArh in = kVArh in </td>
      <td>value meter transaksi</td>
    </tr>
    <tr>
      <td colspan="8">Jumlah kWh in(net) = kWh in + PS KIT</td>
      <td>value meter transaksi</td>
    </tr>
    <tr>
      <td colspan="8">Total kWh (Net) =Jumlah kWh out - Jumlah kWh in (net) </td>
      <td>value meter transaksi</td>
    </tr>
    </tbody>
  </table>
  <!-- tabel Kedungombo end -->

  <!-- tabel WADASLINTANG start-->
  <h3>PLTA WDSLTG</h3>
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
      <tr>
        <td rowspan="4">1</td>
        <td rowspan="4">UNIT - 1</td>
        <td>KWh OUT</td>
        <td rowspan="4">0708A656-01</td> <!-- id meter utama -->
        <td>value KWh OUT</td>
        <td rowspan="4">3142032</td> <!-- id meter banding -->
        <td>value KWh OUT pembanding</td>
        <td>value deviasi 1</td>
        <td>value meter transaksi 1</td>
      </tr>
      <tr>
        <td>KVarh OUT</td>
        <td>value KVarh OUT</td>
        <td>value KVarh OUT pembanding</td>
        <td>value deviasi 2</td>
        <td>value meter transaksi 2</td>
      </tr>
      <tr>
        <td>KWh IN</td>
        <td>value KWh IN</td>
        <td>value KWh IN pembanding</td>
        <td>value deviasi 3</td>
        <td>value meter transaksi 3</td>
      </tr>
      <tr>
        <td>KVarh IN</td>
        <td>value KVarh IN</td>
        <td>value KVarh IN pembanding</td>
        <td>value deviasi 4</td>
        <td>value meter transaksi 4</td>
      </tr>
      <tr>
        <td rowspan="4">2</td>
        <td rowspan="4">UNIT - 2</td>
        <td>KWh OUT</td>
        <td rowspan="4">0202A021-01</td> <!-- id meter utama -->
        <td>value KWh OUT</td>
        <td rowspan="4">3142044</td> <!-- id meter banding -->
        <td>value KWh OUT pembanding</td>
        <td>value deviasi 1</td>
        <td>value meter transaksi 1</td>
      </tr>
      <tr>
        <td>KVarh OUT</td>
        <td>value KVarh OUT</td>
        <td>value KVarh OUT pembanding</td>
        <td>value deviasi 2</td>
        <td>value meter transaksi 2</td>
      </tr>
      <tr>
        <td>KWh IN</td>
        <td>value KWh IN</td>
        <td>value KWh IN pembanding</td>
        <td>value deviasi 3</td>
        <td>value meter transaksi 3</td>
      </tr>
      <tr>
        <td>KVarh IN</td>
        <td>value KVarh IN</td>
        <td>value KVarh IN pembanding</td>
        <td>value deviasi 4</td>
        <td>value meter transaksi 4</td>
      </tr>

    <?php //} ?>

    <tr>
      <td>3</td>
      <td>MS</td>
      <td>PS KIT 1</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>0.00</td>
    </tr>
    <tr>
      <td>4</td>
      <td>PSST</td>
      <td>PS KIT 2</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>0.00</td>
    </tr>
    <tr>
      <td>5</td>
      <td>MS GI</td>
      <td>PS GI</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>0.00</td>
    </tr>
    <tr>
      <td colspan="2">Jumlah kWh out</td>
      <td>=</td>
      <td colspan="5">kWh out ( Unit1 + Unit2)</td>
      <td>value meter transaksi</td>
    </tr>
    <tr>
      <td colspan="8">Jumlah kVArh out = kVArh out ( Unit1 + Unit2 )</td>
      <td>value meter transaksi</td>
    </tr>
    <tr>
      <td colspan="8">Jumlah kWh in = kWh in ( Unit1 + Unit2 )</td>
      <td>value meter transaksi</td>
    </tr>
    <tr>
      <td colspan="8">Jumlah kVArh in = kVArh in ( Unit1 + Unit2 )</td>
      <td>value meter transaksi</td>
    </tr>
    <tr>
      <td colspan="8">Jumlah kWh in(net) = kWh in - PS GI + ( PS KIT 1 + PS KIT 2 ) </td>
      <td>value meter transaksi</td>
    </tr>
    <tr>
      <td colspan="8">Total kWh (Net) =Jumlah kWh out - Jumlah kWh in (net) </td>
      <td>value meter transaksi</td>
    </tr>
    </tbody>
  </table>
  <!-- tabel Kedungombo end -->

</div>
<!-- end container -->

<!--
</body>
</html>
-->
