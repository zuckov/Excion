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
<!-- ini buat ajax langsung panggil di halaman depan -->
<!-- <div class="container" id="patokanLebar" style="color:white"> -->
<!-- ini buat ajax di halaman hasil -->
<div class="container" style="height:500px; width:1000px; margin-top:30px; margin-bottom:30px;"><!--border-style:solid; -->
  <canvas id="lineChart"></canvas>
  <input class="btn btn-default" type="button" value="Kembali" onclick="history.back(-1)" />
  <button id="0" class="btn btn-info">Chart KWH Kirim</button>
  <button id="1"class="btn btn-success">Chart KWH Terima</button>
  <button id="2"class="btn btn-danger">Chart Kvarh Kirim</button>
  <button id="3"class="btn btn-warning">Chart Kvarh Terima</button>

</div>

<div class="container" id="patokanLebar">
  <h2>Tabel Data Pronia</h2>
  <p></p><br>
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
        $tgl = $kwhk = $kwht = $kvark = $kvart = array();
        for ($i=0; $i < $num; $i++) {
        //$var = $i + 1;
        //array_push($tgl, $date[$i];
        array_push($kwhk, $kwh_k[$i]);
        array_push($kwht, $kwh_t[$i]);
        array_push($kvark, $kvarh_k[$i]);
        array_push($kvart, $kvarh_t[$i]);
      ?>
      <tr>
        <td>2</td>
        <td>19854071</td>
        <?php array_push($tgl, $date[$i]) ?>
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

<?php //echo json_encode($tgl) ?>
<!--
</body>
</html>
-->
<script>
$(document).ready( function () {
    $('#table').DataTable();
} );
</script>
<script>

var chart_labels = <?php echo json_encode($tgl);?>;
var temp_dataset = <?php echo json_encode($kwhk);?>;
//var rain_dataset = ['0', '0', '6', '32', '7', '2'];
var ctx = document.getElementById("lineChart").getContext('2d');
var config = {
type: 'bar',
data: {
    labels: chart_labels,
    datasets: [{
        type: 'line',
        label: "KWH Kirim",
        borderColor: "rgb(71, 153, 235)",
        backgroundColor: "rgb(71, 153, 235)",
        yAxisID: "y-axis-0",
        fill: false,
        data: temp_dataset,
    }]
},
options: {
    scales: {
        yAxes: [{
            position: "left",
            "id": "y-axis-0",
            ticks: {
              min: 80,
              max: 120,
            }
        }, {
            position: "right",
            "id": "y-axis-1",
        }]
    }
}
};
var lineChart_chart = new Chart(ctx, config);
$("#0").click(function() {
  var data = lineChart_chart.config.data;
  data.datasets[0].data = temp_dataset;
  data.datasets[0].label = "KWH Kirim";
  data.datasets[0].borderColor = "rgb(71, 153, 235)";
  data.datasets[0].backgroundColor = "rgb(71, 153, 235)";

//data.datasets[1].data = rain_dataset;
  data.labels = chart_labels;
  lineChart_chart.update();
});

$("#1").click(function() {
  var chart_labels = <?php echo json_encode($tgl);?>;;
  var temp_dataset = <?php echo json_encode($kwht);?>;
//var rain_dataset = ['0', '0', '1', '4', '19', '19', '7', '2'];
  var data = lineChart_chart.config.data;
  data.datasets[0].data = temp_dataset;
  data.datasets[0].label = "KWH Terima";
  data.datasets[0].borderColor = "green";
  data.datasets[0].backgroundColor = "green";
//data.datasets[1].data = rain_dataset;
  data.labels = chart_labels;
  lineChart_chart.update();
});

$("#2").click(function() {
  var chart_labels = <?php echo json_encode($tgl);?>;;
  var temp_dataset = <?php echo json_encode($kvark);?>;
//var rain_dataset = ['0', '0', '1', '4', '19', '19', '7', '2'];
  var data = lineChart_chart.config.data;
  data.datasets[0].data = temp_dataset;
  data.datasets[0].label = "Kvarh Kirim";
  data.datasets[0].borderColor = "red";
  data.datasets[0].backgroundColor = "red";

//data.datasets[1].data = rain_dataset;
  data.labels = chart_labels;
  lineChart_chart.update();
});

$("#3").click(function() {
  var chart_labels = <?php echo json_encode($tgl);?>;;
  var temp_dataset = <?php echo json_encode($kvart);?>;
//var rain_dataset = ['0', '0', '1', '4', '19', '19', '7', '2'];
  var data = lineChart_chart.config.data;
  data.datasets[0].data = temp_dataset;
  data.datasets[0].label = "Kvarh terima";
  data.datasets[0].borderColor = "orange";
  data.datasets[0].backgroundColor = "orange";

//data.datasets[1].data = rain_dataset;
  data.labels = chart_labels;
  lineChart_chart.update();
});



/*
  Chart.defaults.global.legend = {
    enabled: false
  };


  // Line chart
  var ctx = document.getElementById("lineChart");
  var lineChart = new Chart(ctx, {
    type: 'line',
    data: {
      //labels: ["January", "February", "March", "April", "May", "June", "July"],//[date],//["January", "February", "March", "April", "May", "June", "July"], //ini label bawah
      labels: <?php echo json_encode($tgl);?>,
      datasets: [{
        label: "KWH kirim",
        backgroundColor: "rgba(38, 185, 154, 0.31)",
        borderColor: "orange",
        backgroundColor: "transparent",
        pointBorderColor: "rgba(38, 185, 154, 0.7)",
        pointBackgroundColor: "rgba(38, 185, 154, 0.7)",
        pointHoverBackgroundColor: "#fff",
        pointHoverBorderColor: "rgba(220,220,220,1)",
        pointBorderWidth: 1,
        //data: [31, 74, 6, 39, 20, 85, 7]
        data: <?php echo json_encode($kwhk);?>

      }, {
        label: "KWH terima",
        borderColor: "red",
        backgroundColor: "transparent",
        pointBorderWidth: 1,
        data: <?php echo json_encode($kwht);?>
      }, {
        label: "KVARH kirim",
        borderColor: "blue",
        backgroundColor: "transparent",
        pointBorderWidth: 1,
        data: <?php echo json_encode($kvark);?>
      }, {
        label: "KVARH terima",
        borderColor: "green",
        backgroundColor: "transparent",
        data: <?php echo json_encode($kvart);?>
      }]
    },
    options: {
      scales: {

    xAxes: [{
      //type: 'time',
          ticks: {
              autoSkip: true,
              maxTicksLimit: 10
          }
    }]
    xAxes: [{
          ticks:{
                //autoSkip: true,
                maxTicksLimit: 10

              },
              stacked: true,
            gridLines: {
                    lineWidth: 0,
                    color: "rgba(255,255,255,0)"
                }
          }],
    yAxes: [{
      //stacked: true,
      ticks: {
        min: 80,
        stepSize: 50,
      }
   }]

    },
    }
  });
  document.getElementById('replacekwh').addEventListener('click', function() {
    var label =  <?php echo json_encode($tgl);?>;
    var data = <?php echo json_encode($kwht);?>;
    //*
    var newDataObject = {
      labels: <?php echo json_encode($tgl);?>,
      datasets: [{
        label: "KWH terima",
        borderColor: "red",
        backgroundColor: "transparent",
        pointBorderWidth: 1,
        data: <?php echo json_encode($kwht);?>,
      }]
    };
    console.log(lineChart.data);
    // the newDataObject does not override myLine.data object: why???
    lineChart.data = newDataObject;
    // ... but updating a single value works: why???
    lineChart.data.datasets[0].data[0] = 50;
    console.log(lineChart.data);
    window.lineChart.update();


  });*/
  //end line chart


</script>
<!-- /Chart.js -->
