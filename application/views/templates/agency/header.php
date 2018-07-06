<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<!-- validasi -->
	<script>
		//var base_urls = "<? echo base_url(); ?>";
	</script>
	<script src=<?php echo base_url(); ?>'content/form_ajax.js'></script>

	<title>Project Excion</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- fonts -->
	<!-- <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CLibre+Baskerville:400,400italic,700' rel='stylesheet' type='text/css'> -->

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>content/creative-agency/css/bootstrap.min.css" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>content/creative-agency/css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>content/creative-agency/css/owl.theme.default.css" />

	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>content/creative-agency/css/magnific-popup.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>content/creative-agency/css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>content/creative-agency/css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<!-- Content start here -->
<body>
	<!-- Header -->
	<header id="home">
		<!-- Background Image -->
		<!-- <div class="bg-img" style="background-image: url('<?php //base_url(); ?>content/creative-agency/img/background1.jpg');"> -->
		<div class="bg-img" style="background: linear-gradient(to bottom right, #0033cc 0%, #3366ff 100%);">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Nav -->
		<nav id="nav" class="navbar nav-transparent">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->

					<div class="navbar-brand">
						<a href="index.html">
							<!--
							<img class="logo" src="<?php base_url(); ?>content/creative-agency/img/logo.png" alt="logo">
							<img class="logo-alt" src="<?php base_url(); ?>content/creative-agency/img/logo-alt.png" alt="logo">
							-->


					<!--  Logo coba excion -->
						<img class="logo" src="<?php echo base_url(); ?>content/excionlogo1.png" alt="logo">
						<img class="logo-alt" src="<?php echo base_url(); ?>content/logoexcion2putih.png" alt="logo">
					</a>
				</div>
					<!-- /Logo -->

					<!-- Collapse nav button -->
					<div class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>

				<!--  Main navigation  -->
				<ul class="main-nav nav navbar-nav navbar-right">
					<li><a href="#home">Home</a></li>
					<?php if($this->session->userdata('status') == 'login'){ ?>
						<li><a href="<?php echo base_url('index.php/history/index'); ?>">History</a></li>
						<li><a href="#about">About</a></li>
						<li><a href="<?php echo base_url('index.php/login/logout'/*'index.php/login/logout'*/); ?>">Logout</a></li>
					<?php }else {?>
						<li><a href="<?php echo base_url('index.php/main/about'); ?>">About</a></li>
						<li><a href="#contact" data-toggle="modal" data-target="#modalLogin">Login</a>
					<?php } ?>
				</ul>
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->

		<!-- modal login 1-->
		<div id="modalLogin" class="modal fade" role="dialog">
  		<div class="modal-dialog modal-md">

    	<!-- Modal content-->
    		<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal">&times;</button>
        		<h4 class="modal-title">Login Form</h4>
      		</div>
      		<div class="modal-body">
						<form action="<?php echo base_url('index.php/login/login'); ?>" id='frm_vld' name='frm_vld' method="post">
							<input type="text" name="username" id="username" class="form-control" placeholder="Username" onblur="validate('username', this.value)"><br>
							<input type="password" name="password" id="password" class="form-control" placeholder="Password" onblur="validate('password', this.value)">
							<br>
							<a href="#">Lupa Password || </a>
							<a href="#">Buat Akun Baru </a>
      		</div>
      		<div class="modal-footer">
						<input type="submit" class="btn btn-primary" value="Login">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
					</form>
    		</div>
  		</div>
		</div>
		<!-- /modal login -->

		<!-- modal ajax jquery-->
		<!--
		<div id="modalajaxjquery" class="modal fade" role="dialog">
  		<div class="modal-dialog modal-lg">

    	<!-- Modal content-->
			<!--
    		<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal">&times;</button>
        		<h4 class="modal-title">Login Form</h4>
      		</div>
      		<div class="modal-body">
						<form action="<?php //echo base_url('index.php/login/login'); ?>" id='frm_vld' name='frm_vld' method="post">
							<input type="text" name="username" id="username" class="form-control" placeholder="Username" onblur="validate('username', this.value)"><br>
							<input type="password" name="password" id="password" class="form-control" placeholder="Password" onblur="validate('password', this.value)">
							<br>
							<a href="#">Lupa Password || </a>
							<a href="#">Buat Akun Baru </a>
      		</div>
      		<div class="modal-footer">
						<input type="submit" class="btn btn-primary" value="Login">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
					</form>
    		</div>
  		</div>
		</div>
		<!-- /modal ajax jquery -->

		<!-- modal ajax upload-->
		<!--
		<div id="modalupload" class="modal fade" role="dialog">
  		<div class="modal-dialog modal-md">

    	<!-- Modal content-->
			<!--
    		<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal">&times;</button>
        		<h4 class="modal-title">Upload File CSV</h4>
      		</div>
      		<div class="modal-body">
						<!-- <form action="<?php //echo base_url('index.php/login/login'); ?>" id='frm_vld' name='frm_vld' method="post"> -->
						<?php
							//echo form_open_multipart('upload/aksi_upload');
							//echo form_open_multipart('upload/extract_upload');
						?>
						<!--
							<input type="file" name="berkas" class="form-control" placeholder="Pilih file upload" onblur="validate('username', this.value)"><br>
							<br>
      		</div>
      		<div class="modal-footer">
						<input type="submit" class="btn btn-primary" value="Upload">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
					</div>
					</form>
    		</div>
  		</div>
		</div>
		<!-- /modal ajax upload -->
