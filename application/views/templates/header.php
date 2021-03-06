<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->


	<script src=<?php echo base_url(); ?>'content/form_ajax.js'></script>

	<title>Project Excion</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

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

<body>
	<!-- Header -->
	<header id="home">
		<!-- Background Image -->
		<!-- <div class="bg-img" style="background-image: url('<?php //echo base_url(); ?>content/creative-agency/img/background1.jpg');"> -->
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
							<img class="logo" src="<?php echo base_url(); ?>content/creative-agency/img/logo.png" alt="logo">
							<img class="logo-alt" src="<?php echo base_url(); ?>content/creative-agency/img/logo-alt.png" alt="logo">
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
					<li><a href="#about">About</a></li>
					<!--<li><a href="#portfolio">Portfolio</a></li>
					<li><a href="#service">Services</a></li>
					<li><a href="#pricing">Prices</a></li>
					<li><a href="#team">Team</a></li>
					<li class="has-dropdown"><a href="#blog">Blog</a>
						<ul class="dropdown">
							<li><a href="blog-single.html">blog post</a></li>
						</ul>
					</li>-->
					<li><a href="#contact">Contact</a></li>
					<li><a href="#contact" data-toggle="modal" data-target="#modalLogin">Login</a></li>
					<li><a href="#contact" data-toggle="modal" data-target="#modalLogin2">Coba login</a></li>
					<!-- <li><a id="send">Coba jq_ajax</a></li> -->
					<li><a href="#contact" data-toggle="modal" data-target="#modalupload">Coba Upload</a></li>
					<!--<li><a href="<?php //echo base_url('index.php/upload'); ?>">Coba Upload</a></li> -->
				</ul>
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->

		<!-- modal login 1-->
		<div id="modalLogin" class="modal fade" role="dialog">
  		<div class="modal-dialog modal-lg">

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

		<!-- modal login 2-->
		<div id="modalLogin2" class="modal fade" role="dialog">
  		<div class="modal-dialog modal-lg">

    	<!-- Modal content-->
    		<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal">&times;</button>
        		<h4 class="modal-title">Login Form</h4>
      		</div>
      		<div class="modal-body">
						<form action='#' id='frm_vld' method='post' name='frm_vld'>
							<h3 align='center'>Silahkan mengisi form dibawah ini</h3>
							<!-- <table align='center' cellpadding='5' cellspacing='5'> -->
							<table>
								<tr>
									<td>Username</td>
									<td>:</td>
									<td><input type='text' name='username' id='username1' onblur="validate('username', this.value)"/></td>
									<td><div id='username'></div></td>
								</tr>
								<tr>
									<td>Password</td>
									<td>:</td>
									<td><input type='password' name='password' id='password1' onblur="validate('password', this.value)"/></td>
									<td><div id='password'></div></td>
								</tr>
								<tr>
									<td>E-mail</td>
									<td>:</td>
									<td><input type='text' name='email' id='email1' onblur="validate('email', this.value)"></td>
									<td><div id='email'></div></td>
								</tr>
								<tr>
									<td>Website</td>
									<td>:</td>
									<td><input type='text' name='website' id='website1' onblur="validate('website', this.value)"></td>
									<td><div id='website'></div></td>
								</tr>
								<tr>
									<td><input onclick= 'checkForm()' type='submit' name='submit' value='Submit'></td>
									<td></td>
									<td><input onClick="history.go(0)" type='reset' name='reset' value='Reset'></td>
								</tr>
							</table>
						</form>
    		</div>
  		</div>
		</div>
		</div>
		<!-- /modal login -->

		<!-- modal ajax jquery-->
		<div id="modalajaxjquery" class="modal fade" role="dialog">
  		<div class="modal-dialog modal-lg">

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
		<!-- /modal ajax jquery -->

		<!-- modal ajax upload-->
		<div id="modalupload" class="modal fade" role="dialog">
  		<div class="modal-dialog modal-md">

    	<!-- Modal content-->
    		<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal">&times;</button>
        		<h4 class="modal-title">Upload File CSV</h4>
      		</div>
      		<div class="modal-body">
						<!-- <form action="<?php //echo base_url('index.php/login/login'); ?>" id='frm_vld' name='frm_vld' method="post"> -->
						<?php
							//echo form_open_multipart('upload/aksi_upload');
							echo form_open_multipart('upload/extract_upload');
						?>
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

		<!-- modal ajax -->
		<div id="modalajax" class="modal fade" role="dialog" id="lebarModal">
  		<div class="modal-dialog modal-lg" id="lebarModal2"> <!-- solusi sementara : tambah ini "- style="width:1200px;" -"-->

    	<!-- Modal content-->
    		<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal">&times;</button>
        		<h4 class="modal-title">Modal ajax coba</h4>
      		</div>
      		<div class="modal-body" id="ganti2">

      		</div>
      		<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
					</div>
					</form>
    		</div>
  		</div>
		</div>
		<!-- /modal ajax upload -->
