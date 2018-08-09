<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Project Excion</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>content/gen/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>content/gen/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url(); ?>content/gen/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url(); ?>content/gen/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="<?php echo base_url(); ?>content/gen/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>content/gen/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>content/gen/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>content/gen/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>content/gen/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>content/gen/build/css/custom.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>content/gen/vendors/jquery/dist/jquery.min.js"></script>
  </head>

  <body class="nav-md" style="font-family: "metropolis-regular", sans-serif;">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">

            <div class="navbar nav_title" style="border: 0; height:90px" >
              <a href="index.html" class="site_title" style="border: 0; height:90px"><img class="center" src="<?php echo base_url(); ?>content/logoexcion2putih.png" style="width: auto; height:90px; margin: 30px; text-align: center; "><!-- <i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a> --></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <!-- <img src="<?php //echo base_url(); ?>content/logoexcion2putih.png" style="width: 30%; height:auto"> -->
              <!--
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
              -->
            </div>
            <!-- /menu profile quick info -->

            <br />
            <br />
            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Menu Utama</h3>
                <br />

                <ul class="nav side-menu">
                  <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i> Home </a></li>
                  <li><a href="<?php echo base_url('index.php/main/cek_tabelgen2'); ?>"><i class="fa fa-cogs"></i> Admin </a></li>
                  <li><a><i class="fa fa-edit"></i> Excion <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Excion - default</a></li>
                      <li><a href="#">Excion - Upload</a></li>
                      <li><a href="#">Excion - RT</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-line-chart"></i> History <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('index.php/history/index'); ?>">Kelola History Hitung</a></li>
                      <li><a href="<?php //echo base_url('index.php/region/index'); ?>#">Lihat BA kWh</a></li>
                      <li><a href="<?php //echo base_url('index.php/region/index'); ?>#">Lihat BA kVarh</a></li>
                    </ul>
                  </li>
                  <?php if($this->session->userdata('lvl') == '1'){ ?>
                  <li><a><i class="fa fa-map-marker"></i> Region <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('index.php/region/index'); ?>">Kelola Data Region</a></li>

                    </ul>
                  </li>
                  <li><a><i class="fa fa-user"></i> User <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <!-- <li><a href="<?php //echo base_url('index.php/user/create'); ?>">Buat Data User</a></li> -->
                      <li><a href="<?php echo base_url('index.php/user/index'); ?>">Kelola Data User</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-clone"></i>Pejabat <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('index.php/pejabat/index'); ?>">Kelola Data Pejabat</a></li>
                    </ul>
                  </li>
                <?php } ?>
                </ul>
              </div>


            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo base_url('index.php/login/logout') ?>">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt=""><i class="fa fa-user"></i> <?php echo $this->session->userdata('nama'); ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="<?php echo base_url('index.php/login/logout') ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
