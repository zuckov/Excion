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
        <h2><i class="fa fa-bars"></i> Vertical Tabs <small>Float left</small></h2>
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

        <div class="" role="tabpanel" data-example-id="togglable-tabs">
          <!-- required for floating -->
          <!-- Nav tabs -->
          <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
            <li class="active"><a href="#home" data-toggle="tab">Hasil</a>
            </li>
            <?php if($this->session->userdata('lvl') == "1"){?>
              <li role="presentation"><a href="#pbs1" data-toggle="tab">PBS 1</a>
              </li>
              <li role="presentation"><a href="#pbs2" data-toggle="tab">PBS 2</a>
              </li>
              <li role="presentation"><a href="#pbw3" data-toggle="tab">PBS 3</a>
              </li>
              <li role="presentation"><a href="#bapbs" data-toggle="tab">BA PBS</a>
              </li>
              <li role="presentation"><a href="#bareg" data-toggle="tab">BA kVAR</a>
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
          <div class="tab-content">
            <div class="tab-pane active" id="home">
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
