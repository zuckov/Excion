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
<!-- ini buat ajax langsung panggil di halaman depan -->
<!-- <div class="container" id="patokanLebar" style="color:white"> -->
<!-- ini buat ajax di halaman hasil -->

<div class="container" id="patokanLebar">
  <h2>Tabel Data Pronia</h2><br>
  <p>Hasil output file pembangkit</p><br>
  <table class="table table-bordered" id="table">
    <thead>
      <tr>
        <th>Kode</th>
        <th>Meter ID</th>
        <th>Tanggal dan Jam</th>
        <th>kWh Kirim</th>
        <th>kWh Terima</th>
        <th>kVArh Kirim</th>
        <th>kVArh Terima</th>
        <th>Kapasitas MW</th>
        <th>Kapasitas MVAR</th>

      </tr>
    </thead>
    <tbody>
      <?php
        $num = count($kwh_k);
        for ($i=0; $i < $num; $i++) {
        //$var = $i + 1;
        //array_push($tgl, $date[$i];
        //array_push($kwhk, $kwh_k[$i]);
        //array_push($kwht, $kwh_t[$i]);
        //array_push($kvark, $kvarh_k[$i]);
        //array_push($kvart, $kvarh_t[$i]);
      ?>
      <tr>
        <td>2</td>
        <td>19854071</td>
        <td><?php echo $date[$i]; ?></td>
        <td><?php echo round($kwh_k[$i], 2); ?></td>
        <td><?php echo round($kwh_t[$i], 2); ?></td>
        <td><?php echo $kvarh_k[$i]; ?></td>
        <td><?php echo $kvarh_t[$i]; ?></td>
        <td><?php echo $kap_mw[$i]; ?></td>
        <td><?php echo $kap_mvar[$i]; ?></td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
</div>
<!--
</body>
</html>
-->
