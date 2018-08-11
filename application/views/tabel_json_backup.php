<!---->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Project Excion</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <link href="<?php echo base_url() ?>content/gen/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php //echo base_url() ?>content/gen/build/css/custom.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url() ?>content/gen/vendors/Chart.js/dist/Chart.min.js"></script>
  <script src="content/gen/build/js/custom.js"></script>
  <script src="<?php echo base_url() ?>content/customTable.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- -->
</head>
<body>


<div class="container">
  <h2>Tabel Data Pronia</h2>
  <p>The .table-bordered class adds borders to a table:</p>
  <table class="table table-bordered" id="jsontable">
      <tr>
        <th>Tanggal dan Jam</th>
        <th>kWh Kirim</th>
        <th>kWh Terima</th>
        <th>kVArh Kirim</th>
        <th>kVArh Terima</th>
        <th>Kapasitas MW</th>
        <th>Kapasitas MVAR</th>
      </tr>
  </table>
</div>
<?php
$json=file_get_contents(base_url('index.php/csv/get_pronia_json'));
$data =  json_decode($json);

?>

<script>
  //script get jseon disini.
  var url = <?php echo base_url() ?>
  $(document).ready(function(){
    $.getJSON(<?php echo base_url('index.php/csv/get_pronia_json') ?>, function(data){
      var jasonData = '';
      $.each(data, function(key, value){
        jasonData += '<tr>';
        jasonData += '<td>'+value.date+'</td>';
        jasonData += '<td>'+value.kwh_k+'</td>';
        jasonData += '<td>'+value.kwh_t+'</td>';
        jasonData += '<td>'+value.kvarh_k+'</td>';
        jasonData += '<td>'+value.kvarh_t+'</td>';
        jasonData += '<td>'+value.kvarh_k+'</td>';
        jasonData += '<td>'+value.kvarh_t+'</td>';
        jasonData += '<td>'+value.kap_mw+'</td>';
        jasonData += '<td>'+value.kap_mvar+'</td>';
        jasonData += '</tr>';
      });
      $('jsontable ').appened(jasonData);
    });
  });
</script>
</body>
</html>
-->
<!--
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $.getJSON("<?php echo base_url('index.php/csv/get_pronia_json') ?>", function(result){
            $.each(result, function(i, field){
                $("div").append(field + " ");
            });
        });
    });
});
</script>
</head>
<body>

<button>Get JSON data</button>
<?php

$json=file_get_contents(base_url('index.php/csv/get_pronia_json'));
$data =  json_decode($json);
print_r($data);
/*
if (count($data->date)) {
  echo "<table>";
  foreach ($data->date as $key => $value) {
    echo "<tr>";
    echo "<td>$value[0]</td>";
    echo "<td>$value->kwh_k</td>";
    echo "</tr>";
  }
  echo "</table>";
}*/

//print_r($data);
?>

<div></div>

</body>
</html>
-->
