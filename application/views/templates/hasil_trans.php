<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

  <!--- basic page needs warna pink yg dibutuhin : #cc147f
  ================================================== -->
  <meta charset="utf-8">
  <title>Project Excion</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- mobile specific metas
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS
  ================================================== -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/content/trans/css/base.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/content/trans/css/vendor.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/content/trans/css/main.css">

  <!-- bootstrap
  ==================================================-->
  <link rel="stylesheet" href="<?php base_url(); ?>content/bs/bs3/css/bootstrap.min.css">
  <script src="<?php base_url(); ?>content/creative-agency/js/jquery.min.js"></script>
  <script src="<?php base_url(); ?>content/bs/bs3/js/bootstrap.min.js"></script>

  <!-- script
  ================================================== -->
  <script src="<?php echo base_url(); ?>/content/trans/js/modernizr.js"></script>
  <script src="<?php echo base_url(); ?>/content/trans/js/pace.min.js"></script>

  <!-- favicons
  ================================================== -->
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

  <!-- Chart.js dari gentelella-->
  <script src="<?php echo base_url() ?>content/gen/vendors/Chart.js/dist/Chart.min.js"></script>
  <!-- Custom Theme Scripts dari gentelella-->
  <script src="content/gen/build/js/custom.js"></script>
  <!-- -->
  <script src="<?php echo base_url() ?>content/customTable.js"></script>

  <style>
  .modal-header, h4, .close {
      /*background-color: #5cb85c;*/
      /*background: linear-gradient(to bottom right, #0033cc 0%, #3366ff 100%);*/
      background-color: #cc147f;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  </style>
</head>

<body id="top">

    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
          <a class="site-logo" href="<?php echo base_url(); ?>">
              <img src="<?php echo base_url(); ?>content/excionlogo1.png" alt="Homepage" style="width: 120px; height:auto">
          </a>
        </div> <!-- end header-logo -->

        <nav class="header-nav">

            <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

            <div class="header-nav__content">
                <h3>Transcend Studio</h3>

                <ul class="header-nav__list">
                    <li class="current"><a class="smoothscroll"  href="#home" title="home">Home</a></li>
                    <li><a class="smoothscroll"  href="#about" title="about">About</a></li>
                    <li><a class="smoothscroll"  href="#services" title="services">Services</a></li>
                    <li><a class="smoothscroll"  href="#works" title="works">Works</a></li>
                    <li><a class="smoothscroll"  href="#contact" title="contact">Contact</a></li>
                </ul>

                <p>Perspiciatis hic praesentium nesciunt. Et neque a dolorum <a href='#0'>voluptatem</a> porro iusto sequi veritatis libero enim. Iusto id suscipit veritatis neque reprehenderit.</p>

                <ul class="header-nav__social">
                    <li>
                        <a href="#0"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fab fa-behance"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fab fa-dribbble"></i></a>
                    </li>
                </ul>

            </div> <!-- end header-nav__content -->

        </nav> <!-- end header-nav -->

        <a class="header-menu-toggle" href="#0">
            <span class="header-menu-icon"></span>
        </a>

    </header> <!-- end s-header -->




    <!-- about
    ================================================== -->
    <section id='about' class="s-about">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Hasil Olah Data</h3>
            </div>
        </div> <!-- end section-header -->

        <div class="row" data-aos="fade-up">
            <div class="col-full">
                <p class="lead">
                Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.
                </p>
            </div>
        </div> <!-- end about-desc -->

        <div class="row">
          <?php  //content here ?>
          <div class="container">
            <h2>Sketch tampilan hasil hitung</h2>
            <p>sketch #1</p>
            <p>path folder yg di sent = <?php echo $folder; ?></p>
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



        </div> <!-- end about-stats -->

    </section> <!-- end s-about -->
    <!-- header End Here -->


        <!-- contact
        ================================================== -->
        <section id="contact" class="s-contact">

            <!----><div class="row section-header" data-aos="fade-up">
                <div class="col-full" style="padding-left : 100px; padding-right : auto;">
                    <h3 class="subhead subhead--light">“We don't make mistakes, just happy little accidents.”</h3>
                    <h1 class="display-1 display-1--light"></h1>
                    <img src="<?php echo base_url(); ?>content/logoexcion2putih.png" alt="Homepage" style="width: 120px; height:auto">
                </div>
            </div>  <!-- end section-header -->


            <div class="row">
                <div class="col-full cl-copyright"style="padding-left : 100px; padding-right : auto;">
                    <span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    <!-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <p>Developed by K.Armyansyah, Unsoed, © 2018. || Template designed by <a href="https://colorlib.com" target="_blank">Colorlib </a> © 2017. All Rights Reserved. </p></span>
                </div>

            </div>

            <div class="cl-go-top">
                <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up" aria-hidden="true"></i></a>
            </div>

        </section> <!-- end s-contact -->


        <!-- photoswipe background
        ================================================== -->
        <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

            <div class="pswp__bg"></div>
            <div class="pswp__scroll-wrap">

                <div class="pswp__container">
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                </div>

                <div class="pswp__ui pswp__ui--hidden">
                    <div class="pswp__top-bar">
                        <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                        "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                        "Zoom in/out"></button>
                        <div class="pswp__preloader">
                            <div class="pswp__preloader__icn">
                                <div class="pswp__preloader__cut">
                                    <div class="pswp__preloader__donut"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                        <div class="pswp__share-tooltip"></div>
                    </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
                    "Next (arrow right)"></button>
                    <div class="pswp__caption">
                        <div class="pswp__caption__center"></div>
                    </div>
                </div>

            </div>

        </div> <!-- end photoSwipe background -->



    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
        </div>
    </div>


    <!-- Java Script
    ================================================== -->
    <script src="<?php echo base_url(); ?>/content/trans/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url(); ?>/content/trans/js/plugins.js"></script>
    <script src="<?php echo base_url(); ?>/content/trans/js/main.js"></script>

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

</body>

</html>
