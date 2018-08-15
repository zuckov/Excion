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
  <?php if ($this->session->flashdata('pesan1')) : ?>
    <div class="alert alert-danger alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
      </button>
      <strong>Perhatian, </strong><?php echo $this->session->flashdata('pesan1'); ?>
    </div>
  <?php endif; ?>
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel" style="min-height:600px">
      <div class="x_title">
        <h2><i class="fa fa-calculator"></i> Hasil Perhitungan</h2>

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
                <h2>File output pembangkit</h2><br>
                <p>Download file output</p>
                <?php $count=count($map) ?>
                <?php foreach ($map as $file) : ?>
                  <a href="<?php echo base_url()."upload/".$folder.'/'.$file  ?>" type="button" class="btn btn-info btn-lmd" download>Download File <?php echo $file ?></a>
                <?php endforeach ?>
              </div>
            </div>

              <!-- Standard button -->
              <!-- yang asli ini :
              <a href="<?php echo base_url('index.php/csv/pronia/'.$folder.'-PBS_1.csv'); ?>" type="button" class="btn btn-info btn-lg">Pronia PBS 1</a>
              <a href='<?php echo base_url('index.php/csv/pronia/'.$folder.'-PBS_2.csv'); ?>' type="button" class="btn btn-info btn-lg">Pronia PBS 2</a>
              <a href='<?php echo base_url('index.php/csv/pronia/'.$folder.'-PBS_3.csv'); ?>' type="button" class="btn btn-info btn-lg">Pronia PBS 3</a>
            -->
            <?php //if($count == 3) : ?>
              <!-- <a href="<?php echo base_url('index.php/csv/pronia/'.$folder.'-PBS_1.csv'); ?>" type="button" class="btn btn-success btn-md">Pronia PBS 1</a>
              <a href='<?php echo base_url('index.php/csv/pronia/'.$folder.'-PBS_2.csv'); ?>' type="button" class="btn btn-success btn-md">Pronia PBS 2</a>
              <a href='<?php echo base_url('index.php/csv/pronia/'.$folder.'-PBS_3.csv'); ?>' type="button" class="btn btn-success btn-md">Pronia PBS 3</a>
              <a href="<?php echo base_url('index.php/csv/get_bapbs_model/'.$folder); ?>" type="button" class="btn btn-success btn-md">BA PBS</a>
              <a href="<?php echo base_url('index.php/csv/get_bakv_model/'.$folder); ?>" type="button" class="btn btn-success btn-md">BA Kvar</a>
            <?php //else : ?>
              <?php //foreach ($map as $file) : ?>
                <a href="<?php echo base_url('index.php/csv/pronia/'.$folder.$file); ?>" type="button" class="btn btn-success btn-lg">Pronia PBS ke-1</a>-->
              <?php //endforeach ?>
            <?php //endif ?>

              <br>



          </div>

        </div>
        <div class="" role="tabpanel" data-example-id="togglable-tabs">
          <div class="x_content">
            <div class="bs-example" data-example-id="simple-jumbotron">
              <div class="jumbotron">
                <h2>Hasil Olah Data</h2><br>
                <p>Lihat hasil upload :</p>
                <?php if($count == 3) : ?>
                  <a href="<?php echo base_url('index.php/csv/pronia/'.$folder.'-PBS_1.csv'); ?>" type="button" class="btn btn-success btn-md">Pronia PBS 1</a>
                  <a href='<?php echo base_url('index.php/csv/pronia/'.$folder.'-PBS_2.csv'); ?>' type="button" class="btn btn-success btn-md">Pronia PBS 2</a>
                  <a href='<?php echo base_url('index.php/csv/pronia/'.$folder.'-PBS_3.csv'); ?>' type="button" class="btn btn-success btn-md">Pronia PBS 3</a>
                  <a href="<?php echo base_url('index.php/csv/get_bapbs_default/'); ?>" type="button" class="btn btn-success btn-md">BA PBS</a>
                  <a href="<?php echo base_url('index.php/csv/get_bakv_default/'); ?>" type="button" class="btn btn-success btn-md">BA Kvar</a>
                  <!--
                  <a href="<?php echo base_url('index.php/csv/get_bapbs_model/'.$folder); ?>" type="button" class="btn btn-success btn-md">BA PBS</a>
                  <a href="<?php echo base_url('index.php/csv/get_bakv_model/'.$folder); ?>" type="button" class="btn btn-success btn-md">BA Kvar</a>
                -->
                <?php else : ?>
                  <?php foreach ($map as $file) : ?>
                    <a href="<?php echo base_url('index.php/csv/pronia/'.$folder.'-'.$file); ?>" type="button" class="btn btn-success btn-lg">Pronia PBS ke-1</a>
                  <?php endforeach ?>
                <?php endif ?>
              </div>
            </div>




              <br>
          </div>
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
