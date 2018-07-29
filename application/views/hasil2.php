<!DOCTYPE html>
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
  <h2>Sketch tampilan hasil hitung</h2>
  <p>sketch #1</p>
  <div class="container" style="height:300px; width:700px; border-style:solid; margin-top:30px; margin-bottom:30px;">
    <p> Graph here </p>
  </div>
  <!-- coba tab ajas -->
  <div class="tabbable">
    <a href="<?= base_url('index.php/main/tablecsv'); ?>" class="white-btn">Pronia x NE</a>
    <a href="<?= base_url('index.php/csv/baregion'); ?>" class="white-btn">BASOD</a>
    <a href="<?= base_url('index.php/csv/ba'); ?>" class="main-btn">BAReg</a>
    <a href="<?= base_url('index.php/csv/get_bakv'); ?>" class="main-btn">BAKV</a>
    <a href="<?= base_url('index.php/csv/coba_bakv'); ?>" class="main-btn">Coba BAKV</a>

  </div>
</div>


<script>
$(function(){
  var baseURL = 'http://localhost/excion/';
  //load ajax buat bar
  //*

  //*/
  $('#bapbs').load(baseURL+'index.php/csv/baregion', function() {
      $('#myTab').tab(); //ganti konten tab nya
  });
/*
  $('#bareg').load(baseURL+'index.php/csv/ba', function() {
      $('#myTab').tab(); //ganti konten tab nya
  });*/
  //*
  $('#bakv').load(baseURL+'index.php/csv/get_bakv', function() {
      $('#myTab').tab(); //ganti konten tab nya
  });
  //*/
  /*
  $('#myTab').bind('show', function(e) {
     var pattern=/#.+/gi //use regex to get anchor(==selector)
     var contentID = e.target.toString().match(pattern)[0]; //get anchor
     //load content for selected tab
     $(contentID).load(baseURL+contentID.replace('#',''), function(){
          $('#myTab').tab(); //reinitialize tabs
     });
  });*/
});

</script>
</body>
</html>
