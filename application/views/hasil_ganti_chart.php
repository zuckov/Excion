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
  <!-- <div style="width:75%;"> -->
  <canvas id="forecast" width="300" height="150"></canvas>
  <button id="0" type="button" >Dataset 1</button>
  <button id="1" type="button" >Dataset 2</button>

  <script>
  var chart_labels = ['06:00', '09:00', '12:00', '15:00', '18:00', '21:00'];
var temp_dataset = ['1', '8', '10', '10', '9', '7'];
//var rain_dataset = ['0', '0', '6', '32', '7', '2'];
var ctx = document.getElementById("forecast").getContext('2d');
var config = {
  type: 'bar',
  data: {
      labels: chart_labels,
      datasets: [{
          type: 'line',
          label: "Temperature (Celsius)",
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
          }, {
              position: "right",
              "id": "y-axis-1",
          }]
      }
  }
};
var forecast_chart = new Chart(ctx, config);
$("#0").click(function() {
  var data = forecast_chart.config.data;
  data.datasets[0].data = temp_dataset;
  //data.datasets[1].data = rain_dataset;
  data.labels = chart_labels;
  forecast_chart.update();
});
$("#1").click(function() {
  var chart_labels = ['00:00', '03:00', '06:00', '09:00', '12:00', '15:00', '18:00', '21:00'];
  var temp_dataset = ['5', '3', '4', '8', '10', '11', '10', '9'];
  //var rain_dataset = ['0', '0', '1', '4', '19', '19', '7', '2'];
  var data = forecast_chart.config.data;
  data.datasets[0].data = temp_dataset;
  //data.datasets[1].data = rain_dataset;
  data.labels = chart_labels;
  forecast_chart.update();
});

  </script>

</body>
</html>
