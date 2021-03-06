<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 3 -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

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
  <p>path folder yg di sent = <?php echo $folder; ?></p>
  <a href="<?php echo base_url(); ?>">Kembali</a>
  <div class="container" style="height:300px; width:700px; border-style:solid; margin-top:30px; margin-bottom:30px;">
    <p> Graph here </p>
  </div>
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

          <li><a href="#bar" data-toggle="tab">Neraca Energi</a></li>
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

      </ul>
      <div class="tab-content">
          <div class="tab-pane active" id="home"></div>
          <div class="tab-pane" id="pbs1">SOD 1</div>
          <div class="tab-pane" id="pbs2">SOD 2</div>
          <div class="tab-pane" id="pbs3">SOD 3</div>
          <div class="tab-pane" id="bar">Neraca Energi</div>
          <div class="tab-pane" id="bapbs">bapbs</div>
          <div class="tab-pane" id="bareg">bareg</div>
          <div class="tab-pane" id="bakv">bakv</div>
          <div class="tab-pane" id="hakv">hakv</div>
      </div>
  </div>
</div>

  <!-- end coba tab ajas -->


  <!-- main tab -->
  <!--
  <div class="tabbable">
    <ul id="myTab" class="nav nav-tabs" >
      <li class="active"><a data-target="#home" data-toggle="tab" href="#">home</a></li>
      <li><a data-target="#foo" data-toggle="tab" href="#">foo</a></li>
      <li><a data-target="#bar" data-toggle="tab" href="#">bar</a></li>
      <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Neraca Energi
      <span class="caret"></span></a>
      <ul class="dropdown-menu" id="tabsAjax2">
        <li><a data-target="#sod1" data-toggle="tab" href="#">SOD1</a></li>
        <li><a data-target="#sod2" data-toggle="tab" href="#">SOD2</a></li>
        <li><a data-target="#sod3" data-toggle="tab" href="#">SOD3</a></li>
      </ul>
      <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Berita Acara
      <span class="caret"></span></a>
      <ul class="dropdown-menu" id="tabsAjax2">
        <li><a data-target="#bapbs" data-toggle="tab" href="#">BA PBS</a></li>
        <li><a data-target="#bareg" data-toggle="tab" href="#">BA Region</a></li>
        <li><a data-target="#bakv" data-toggle="tab" href="#">BA kVArh</a></li>
      </ul>
    </ul>

    <div class="tab-content">
        <div class="tab-pane active" id="home"></div>
        <div class="tab-pane" id="foo">hey</div>
        <div class="tab-pane" id="bar">Some static text. (displayed if AJAX request fails)</div>
        <div class="tab-pane" id="sod1">sod1</div>
        <div class="tab-pane" id="sod2">sod2</div>
        <div class="tab-pane" id="sod3">sod3</div>
        <div class="tab-pane" id="bapbs">bapbs</div>
        <div class="tab-pane" id="bareg">bareg</div>
        <div class="tab-pane" id="bakv">bakv</div>
    </div>
  </div>
-->
  <!-- end main tab -->


<script>
/*
$(function() {
$("#myTabs").tab(); // initialize tabs
$("#myTabs").bind("show", function(e) {
var contentID = $(e.target).attr("data-target");
var contentURL = $(e.target).attr("href");

if (typeof(contentURL) != 'undefined') {
// state: has a url to load from
$(contentID).load(contentURL, function(){
$("#myTabs").tab(); // reinitialize tabs
});

} else {
//state: no url, to show static data
$(contentID).tab('show');
}
});
$('#myTabs a:first').tab("show"); // Load and display content for first tab
});
*/

//dibawah ini script yg bekerja dengan baik buat load page di tabs bootstrap!
/*
$(function() {
    var pbsURL = "localhost/excion/index.php/csv/baregion";
    var regURL = "localhost/excion/index.php/csv/ba";
    //load content for first tab and initialize
    $('#bapbs').load(pbsURL, function() {
        $('#myTabs').tab(); //initialize tabs
    });
    $('#bareg').load(regURL, function() {
        $('#myTabs').tab(); //initialize tabs
    });
    /*
    $('#myTab').bind('show', function(e) {
       var pattern=/#.+/gi //use regex to get anchor(==selector)
       var contentID = e.target.toString().match(pattern)[0]; //get anchor
       //load content for selected tab
       $(contentID).load(baseURL+contentID.replace('#',''), function(){
            $('#myTab').tab(); //reinitialize tabs
       });
    });
    */
//});
//*/

/*
$(document).ready(function(){
  //var base_url = <?php //echo base_url(); ?>;
  $("#menu3").bind('show', function(e){
    $.ajax({
     url: "index.php/csv/baregion",
     success: function(result){
       $("#menu3").html(result);
   }});
});
});
*/

  //var base_urls = "<? //echo base_url(); ?>";
  /*
  function loadWeb(){
    var load = new XMLHttpRequest();
    load.onreadystatechange = function(){
@ -345,6 +375,21 @@
      }
    }
  }

*/



/*gambaran buat ajax :
<div class="tabbable">
    <ul class="nav nav-tabs" id="myTabs">
        <li><a href="#home"  class="active" data-toggle="tab">Home</a></li>
        <li><a href="#foo" data-toggle="tab">Foo</a></li>
        <li><a href="#bar" data-toggle="tab">Bar</li>
    </ul>
    <div>
        <div class="tab-pane active" id="home"></div>
        <div class="tab-pane" id="foo"></div>
        <div class="tab-pane" id="bar"></div>
    </div>
</div>
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
$(function() {
  var baseURL = 'http://yourdomain.com/ajax/';
  //load content for first tab and initialize
  $('#home').load(baseURL+'home', function() {
      $('#myTab').tab(); //initialize tabs
  });
  $('#myTab').bind('show', function(e) {
     var pattern=/#.+/gi //use regex to get anchor(==selector)
     var contentID = e.target.toString().match(pattern)[0]; //get anchor
     //load content for selected tab
     $(contentID).load(baseURL+contentID.replace('#',''), function(){
          $('#myTab').tab(); //reinitialize tabs
     });
  });
});
*/
$(function(){
  var baseURL = 'http://localhost/excion/';
  var path = "<?php echo $folder; ?>";
  //load ajax buat bar
  //*
  $('#pbs1').load(baseURL+'index.php/csv/pronia/'+path+'-PBS_1.csv', function() {
      //$('#myTab').tab(); //ganti konten tab nya
  });
  //
  $('#pbs2').load(baseURL+'index.php/csv/pronia/'+path+'-PBS_2.csv', function() {
      //$('#myTab').tab(); //ganti konten tab nya
  });
  //
  $('#pbs3').load(baseURL+'index.php/csv/pronia/'+path+'-PBS_3.csv', function() {
      //$('#myTab').tab(); //ganti konten tab nya
  });
  //*/
  $('#bapbs').load(baseURL+'index.php/csv/baregion/'+path, function() {
      $('#myTab').tab(); //ganti konten tab nya
  });
//*
  $('#bareg').load(baseURL+'index.php/csv/ba', function() { //baregion
      $('#myTab').tab(); //ganti konten tab nya
  });//*/
  //*
  $('#bakv').load(baseURL+'index.php/csv/get_bakv/'+path, function() {
      $('#myTab').tab(); //ganti konten tab nya
  });
  //*/
  //*
  $('#hakv').load(baseURL+'index.php/csv/coba_bakv', function() {
      $('#myTab').tab(); //ganti konten tab nya
  });
/*
  $('#hakv').load(baseURL+'index.php/csv/get_hakv', function() {
      $('#myTab').tab(); //ganti konten tab nya
  });
  */
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
<script>
/*
    $(function() {
        $("#myTab").bind("change", function() {
            $.ajax({
                type: "GET",
                url: "tabel.php",
                "dataSrc": "tableData",
                success: function(html) {
                    $("#tableContainer").html(html);
                    $('#mytable').DataTable({
                      "destroy": true, //use for reinitialize datatable
                   });
                }
            });
        });

    });
    */
</script>
</body>
</html>
