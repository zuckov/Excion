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
  <!-- tabs try out -->
  <!-- -->
  <div class="tabbable">
    <ul id="myTabs" class="nav nav-tabs" >
      <li><a data-target="#home" data-toggle="tab" href="#">home</a></li>
      <li><a data-target="#foo" data-toggle="tab" href="#">foo</a></li>
      <li><a data-target="#bar" data-toggle="tab" href="#">bar</a></li>
      <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Pronia
      <span class="caret"></span></a>
      <ul class="dropdown-menu" id="tabsAjax2">
        <li><a data-target="#sod1" data-toggle="tab" href="#">SOD1</a></li>
        <li><a data-target="#sod2" data-toggle="tab" href="#">SOD2</a></li>
        <li><a data-target="#sod3" data-toggle="tab" href="#">SOD3</a></li>
      </ul>
    </ul>

    <div class="tab-content">
        <div class="tab-pane active" id="home"></div>
        <div class="tab-pane" id="foo"></div>
        <div class="tab-pane" id="bar">Some static text. (displayed if AJAX request fails)</div>
        <div class="tab-pane" id="sod1">sod1</div>
        <div class="tab-pane" id="sod2">sod2</div>
        <div class="tab-pane" id="sod3">sod3</div>
    </div>
  </div>
    <!-- -->
    <!-- tabs -->
<!--
  <ul class="nav nav-tabs" id="tabsAjax">
    <li class="active"><a data-toggle="tab" href="#home" id="gantiHome">Kesimpulan#</a></li>
    <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Pronia
    <span class="caret"></span></a>
    <ul class="dropdown-menu" id="tabsAjax2">
      <li><a href="#SOD1">SOD1</a></li>
      <li><a href="#SOD2">SOD2</a></li>
      <li><a href="#SOD3">SOD3</a></li>
      <li><a href="#">JLK1</a></li>
      <li><a href="#">JLK2</a></li>
      <li><a href="#">JLK3</a></li>
      <li><a href="#">JLK4</a></li>
      <li><a href="#">TM1</a></li>
      <li><a href="#">TM2</a></li>
      <li><a href="#">TM3</a></li>
      <li><a href="#">WDS1</a></li>
      <li><a href="#">WDS2</a></li>
      <li><a href="#">Garung</a></li>
      <li><a href="#">KTG1</a></li>
      <li><a href="#">KTG2</a></li>
      <li><a href="#">Kedung</a></li>
      <li><a href="#">Wono</a></li>
    </ul>
  </li>
    <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Neraca Energi
    <span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a href="#SOD1">SOD1</a></li>
      <li><a href="#SOD2">SOD2</a></li>
      <li><a href="#SOD3">SOD3</a></li>
      <li><a href="#">JLK1</a></li>
      <li><a href="#">JLK2</a></li>
      <li><a href="#">JLK3</a></li>
      <li><a href="#">JLK4</a></li>
      <li><a href="#">TM1</a></li>
      <li><a href="#">TM2</a></li>
      <li><a href="#">TM3</a></li>
      <li><a href="#">WDS1</a></li>
      <li><a href="#">WDS2</a></li>
      <li><a href="#">Garung</a></li>
      <li><a href="#">KTG1</a></li>
      <li><a href="#">KTG2</a></li>
      <li><a href="#">Kedung</a></li>
      <li><a href="#">Wono</a></li>
    </ul>
  </li>
    <li><a data-toggle="tab" href="#menu3" id="gantiBa">Berita Acara</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>HOME</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div id="SOD1" class="tab-pane fade">
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="SOD2" class="tab-pane fade">
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="SOD3" class="tab-pane fade">
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
</div>
<!-- -->

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
/**/
$(function() {
    var baseURL = "localhost/excion/index.php/csv/pronia";
    //load content for first tab and initialize
    $('#sod3').load(baseURL, function() {
        $('#myTab').tab(); //initialize tabs
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
});
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

  //$(document).ready(function(){

    /*
    var base_url = "<?php //echo base_url() ?>";
    $("#jqajax").click(function(){
      $.post(base_url + "index.php/csv/baregion",
      {

      });
      //$("#ganti").load("halaman ganti");
    });
  });*/
  //});

</script>
</body>
</html>
