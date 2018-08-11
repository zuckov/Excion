<!-- coba content disini-->
<div class="right_col" role="main">
  <div class="">
<div class="page-title">
  <div class="title_left">
    <!-- <h3>Users <small>Some examples to get you started</small></h3> -->
  </div>


</div>

<div class="clearfix"></div>
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel" style="min-height:600px">
      <div class="x_title">
        <h2><i class="fa fa-calculator"></i> Hasil Perhitungan</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Settings 1</a>
              </li>
              <li><a href="#">Settings 2</a>
              </li>
            </ul>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <!--
        <div class="container" style="height:500px; width:1000px; margin-top:30px; margin-bottom:30px;">
          <canvas id="lineChart"></canvas>
        </div>
      -->

        <div class="" role="tabpanel" data-example-id="togglable-tabs">
          <div class="x_content">
            <div class="bs-example" data-example-id="simple-jumbotron">
              <div class="jumbotron">
                <h2>Hasil Upload Data</h2><br>
                <p>Berikut adalah hasil perhitungan dari proses olah data.</p>
              </div>
            </div>

              <!-- Standard button -->
              <!-- yang asli ini :
              <a href="<?php echo base_url('index.php/csv/pronia/'.$folder.'-PBS_1.csv'); ?>" type="button" class="btn btn-info btn-lg">Pronia PBS 1</a>
              <a href='<?php echo base_url('index.php/csv/pronia/'.$folder.'-PBS_2.csv'); ?>' type="button" class="btn btn-info btn-lg">Pronia PBS 2</a>
              <a href='<?php echo base_url('index.php/csv/pronia/'.$folder.'-PBS_3.csv'); ?>' type="button" class="btn btn-info btn-lg">Pronia PBS 3</a>
            -->
              <a href="<?php echo base_url('index.php/csv/pronia/'.$folder.'-PBS_1.csv'); ?>" type="button" class="btn btn-success btn-lg">Pronia PBS 1</a>
              <a href='<?php echo base_url('index.php/csv/pronia/'.$folder.'-PBS_2.csv'); ?>' type="button" class="btn btn-success btn-lg">Pronia PBS 2</a>
              <a href='<?php echo base_url('index.php/csv/pronia/'.$folder.'-PBS_3.csv'); ?>' type="button" class="btn btn-success btn-lg">Pronia PBS 3</a>
              <a href="<?php echo base_url('index.php/csv/baregion/'.$folder); ?>" type="button" class="btn btn-success btn-lg">BA PBS</a>
              <a href="<?php echo base_url('index.php/csv/get_bakv/'.$folder); ?>" type="button" class="btn btn-success btn-lg">BA Kvar</a>

              <br>



          </div>

          <!-- required for floating -->
          <!-- Nav tabs -->
          <!--
          <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
            <li class="active"><a href="#home" data-toggle="tab">Hasil</a>
            </li>
            <?php if($this->session->userdata('lvl') == "1"){?>
              <li role="presentation"><a href="#pbs1" data-toggle="tab">PBS 1</a>
              </li>
              <li role="presentation"><a href="#pbs2" data-toggle="tab">PBS 2</a>
              </li>
              <li role="presentation"><a href="#pbs3" data-toggle="tab">PBS 3</a>
              </li>
              <li role="presentation"><a href="#bapbs" data-toggle="tab">BA PBS</a>
              </li>
              <li role="presentation"><a href="#bakv" data-toggle="tab">BA kVAR</a>
              </li>
            <?php } ?>
            <?php if($this->session->userdata('lvl') == "2"){?>
              <?php if ($this->session->userdata('reg') == "1"): ?>
                <li><a href="#pbs1" data-toggle="tab">PBS 1</a>
                </li>
              <?php endif; ?>
              <?php if ($this->session->userdata('reg') == "2"): ?>
                <li><a href="#pbs2" data-toggle="tab">PBS 1</a>
                </li>
              <?php endif; ?>
              <?php if ($this->session->userdata('reg') == "3"): ?>
                <li><a href="#pbs3" data-toggle="tab">PBS 1</a>
                </li>
              <?php endif; ?>
            <?php } ?>
          </ul>
        </div>

        <div class="col-xs-9">
          <!-- Tab panes -->
          <!--
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade active in" id="home">
              <p class="lead">Home tab</p>
              <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher
                synth. Cosby sweater eu banh mi, qui irure terr.</p>
            </div>
            <div class="tab-pane" id="pbs1">PBS 1</div>
            <div class="tab-pane" id="pbs2">PBS 2</div>
            <div class="tab-pane" id="pbs3">PBS 3</div>
            <div class="tab-pane" id="bapbs">bapbs</div>
            <div class="tab-pane" id="bareg">bareg</div>
            <div class="tab-pane" id="bakv">bakv</div>
          </div>-->
        </div>

        <div class="clearfix"></div>

      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
<script>

$(function(){
  var baseURL = 'http://localhost/excion/';
  var path = "<?php echo $folder; ?>";
  var file1 = 'PBS_1.csv';
  var file2 = 'PBS_2.csv';
  var file3 = 'PBS_3.csv';
  var data = [];

  //load ajax buat bar
  //*
  $('#pbs1').load(baseURL+'index.php/csv/pronia/'+path+'-PBS_1.csv', function() {
      //$('#myTab').tab(); //ganti konten tab nya
      //$('#myTab').html(result);
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
        //backgroundColor: "rgba(38, 185, 154, 0.31)",
        borderColor: "orange",
        backgroundColor: "transparent",
        //pointBorderColor: "rgba(38, 185, 154, 0.7)",
        //pointBackgroundColor: "rgba(38, 185, 154, 0.7)",
        //pointHoverBackgroundColor: "#fff",
        //pointHoverBorderColor: "rgba(220,220,220,1)",
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

    },
    }
  });


</script>
<!-- /Chart.js -->

<!-- /Chart.js -->
