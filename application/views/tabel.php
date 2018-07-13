<!-- --><!DOCTYPE html>
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

<div class="container">
  <h2>Bordered Table</h2>
  <p>The .table-bordered class adds borders to a table:</p>
  <table class="table table-bordered">
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

</body>
</html>
<!-- -->
<?php
/*
echo $date[0];
echo $kwh_k[1];
echo $kwh_t[0];
echo $kvarh_k[0];
echo $kvarh_t[0];
echo $kap_mw[0];
echo $kap_mvar[0];*/
?>
