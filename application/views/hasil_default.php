<!DOCTYPE html>
<html lang="en">
<head>
  <title>Project Excion</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 3 -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

  <!-- Font Awesome dari gentelella-->
  <link href="<?php echo base_url() ?>content/gen/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Custom Theme Style dari gentelella-->
  <link href="<?php //echo base_url() ?>content/gen/build/css/custom.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

  <!-- Chart.js dari gentelella-->
  <script src="<?php echo base_url() ?>content/gen/vendors/Chart.js/dist/Chart.min.js"></script>
  <!-- Custom Theme Scripts dari gentelella-->
  <script src="content/gen/build/js/custom.js"></script>
  <!-- -->
  <script src="<?php echo base_url() ?>content/customTable.js"></script>

  <!-- Bootstrap 4 -->
  <!--
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  -->
</head>
<body>

<div class="container">
  <h2>Sketch tampilan hasil hitung</h2>
  <p>sketch #1</p>
  <p>path folder yg di gunakan adalah : "C:/Excion Gaca/ION DL/"</p>
  <a href="<?php echo base_url(); ?>">Kembali</a>
  <div class="container" style="height:300px; width:700px; margin-top:30px; margin-bottom:30px;"><!--border-style:solid; -->
    <canvas id="lineChart"></canvas>
  </div>
  <br>
  <!-- coba tab ajas -->
  <div class="tabbable">
      <ul class="nav nav-tabs" id="myTabs">
          <li><a href="#home"  class="active" data-toggle="tab">Hasil</a></li>
          <!-- <li><a href="#foo" data-toggle="tab">Pronia</a></li> -->
          <!-- <li><a href="#pbs1" data-toggle="tab">pronia</a></li> -->
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              Pronia <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" id=myTabs2>
              <li><a data-toggle="tab" data-target="#pbs1" href="#">PBS 1</a></li>
              <li><a data-toggle="tab" data-target="#pbs2" href="#">PBS 2</a></li>
              <li><a data-toggle="tab" data-target="#pbs3" href="#">PBS 3</a></li>
            </ul>
          </li>

          <!-- <li><a href="#bar" data-toggle="tab">Neraca Energi</a></li> -->
          <li><a data-toggle="tab" data-target="#bapbs" href="#">BA PBS</a></li>
          <li><a data-toggle="tab" data-target="#bakv" href="#">BA kVArh</a></li>
          <!--
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              Berita Acara <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" id=myTabs2>
              <li><a data-toggle="tab" data-target="#bapbs" href="#">BA PBS</a></li>
              <li><a data-toggle="tab" data-target="#bareg" href="#">BA REG</a></li>
              <li><a data-toggle="tab" data-target="#hakv" href="#">Hasil Hitung kVArh</a></li>
              <li><a data-toggle="tab" data-target="#bakv" href="#">BA kVArh</a></li>
            </ul>
          </li>
        -->

      </ul>
      <div class="tab-content">
          <div class="tab-pane active" id="home"></div>
          <div class="tab-pane" id="pbs1">
            SOD 1
          </div>
          <div class="tab-pane" id="pbs2">
            SOD 2
          </div>
          <div class="tab-pane" id="pbs3">
            SOD 3
          </div>
          <div class="tab-pane" id="bar">Neraca Energi</div>
          <div class="tab-pane" id="bapbs">bapbs</div>
          <div class="tab-pane" id="bareg">bareg</div>
          <div class="tab-pane" id="bakv">bakv</div>
          <div class="tab-pane" id="hakv">hakv</div>
      </div>
  </div>
</div>

  <!-- end coba tab ajas -->


<script>

$(function(){
  var baseURL = 'http://localhost/excion/';
  //var path = "<?php //echo $folder; ?>";
  //load ajax buat bar
  //*
  $('#pbs1').load(baseURL+'index.php/csv/pronia_default_2/PBS_1.csv', function() {
      $('#myTab').tab(); //ganti konten tab nya
      //$('#myTab').html(result);
  });
  //
  $('#pbs2').load(baseURL+'index.php/csv/pronia_default_2/PBS_2.csv', function() {
      $('#myTab').tab(); //ganti konten tab nya
  });
  //
  $('#pbs3').load(baseURL+'index.php/csv/pronia_default_2/PBS_3.csv', function() {
      $('#myTab').tab(); //ganti konten tab nya
  });
  //*/
  $('#bapbs').load(baseURL+'index.php/csv/baregion_default', function() {
      $('#myTab').tab(); //ganti konten tab nya
  });
//*
  $('#bareg').load(baseURL+'index.php/csv/ba_default', function() { //baregion
      $('#myTab').tab(); //ganti konten tab nya
  });//*/
  //*
  $('#bakv').load(baseURL+'index.php/csv/get_bakv_default/', function() {
      $('#myTab').tab(); //ganti konten tab nya
  });
  //*/

});

</script>

<!-- Chart.js -->
<script>

  Chart.defaults.global.legend = {
    enabled: false
  };


  // Line chart
  var ctx = document.getElementById("lineChart");
  var lineChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ["January", "February", "March", "April", "May", "June", "July"],//[date],//["January", "February", "March", "April", "May", "June", "July"], //ini label bawah
      datasets: [{
        label: "1st",
        backgroundColor: "rgba(38, 185, 154, 0.31)",
        borderColor: "rgba(38, 185, 154, 0.7)",
        pointBorderColor: "rgba(38, 185, 154, 0.7)",
        pointBackgroundColor: "rgba(38, 185, 154, 0.7)",
        pointHoverBackgroundColor: "#fff",
        pointHoverBorderColor: "rgba(220,220,220,1)",
        pointBorderWidth: 1,
        data: [31, 74, 6, 39, 20, 85, 7]
      }, {
        label: "2nd",
        backgroundColor: "rgba(3, 88, 106, 0.3)",
        borderColor: "rgba(3, 88, 106, 0.70)",
        pointBorderColor: "rgba(3, 88, 106, 0.70)",
        pointBackgroundColor: "rgba(3, 88, 106, 0.70)",
        pointHoverBackgroundColor: "#fff",
        pointHoverBorderColor: "rgba(151,187,205,1)",
        pointBorderWidth: 1,
        data: [82, 23, 66, 9, 99, 4, 2]
      }, {
        label: "3d",
        backgroundColor: "rgba(123, 88, 106, 0.3)",
        borderColor: "rgba(3, 88, 106, 0.70)",
        pointBorderColor: "rgba(3, 88, 106, 0.70)",
        pointBackgroundColor: "rgba(3, 88, 106, 0.70)",
        pointHoverBackgroundColor: "#fff",
        pointHoverBorderColor: "rgba(151,187,205,1)",
        pointBorderWidth: 1,
        data: [42, 23, 66, 9, 99, 4, 2]
      }, {
        label: "4d",
        backgroundColor: "rgba(34, 88, 106, 0.3)",
        borderColor: "rgba(3, 88, 106, 0.70)",
        pointBorderColor: "rgba(3, 88, 106, 0.70)",
        pointBackgroundColor: "rgba(3, 88, 106, 0.70)",
        pointHoverBackgroundColor: "#fff",
        pointHoverBorderColor: "rgba(151,187,205,1)",
        pointBorderWidth: 1,
        data: [32, 23, 66, 9, 99, 4, 2]
      }]
    },
  });
</script>
<!-- /Chart.js -->
</body>
</html>
