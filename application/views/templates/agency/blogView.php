<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>HTML Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>content/creative-agency/css/bootstrap.min.css" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>content/creative-agency/css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>content/creative-agency/css/owl.theme.default.css" />

	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>content/creative-agency/css/magnific-popup.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="<?php echo base_url() ?>content/creative-agency/css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>content/creative-agency/css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>

	<!-- Header -->
	<header>
		<!-- Nav -->
		<nav id="nav" class="navbar">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="index.html">
							<img class="logo" src="<?php echo base_url() ?>content/creative-agency/img/logo.png" alt="logo">
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
					<li><a href="index.html#home">Home</a></li>
					<li><a href="index.html#about">About</a></li>
					<li><a href="index.html#portfolio">Portfolio</a></li>
					<li><a href="index.html#service">Services</a></li>
					<li><a href="index.html#pricing">Prices</a></li>
					<li><a href="index.html#team">Team</a></li>
					<li class="has-dropdown"><a>Blog</a>
						<ul class="dropdown">
							<li><a href="#">blog post</a></li>
						</ul>
					</li>
					<li><a href="index.html#contact">Contact</a></li>
				</ul>
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->

		<!-- header wrapper -->
		<!--
		<div class="header-wrapper sm-padding bg-grey">
			<div class="container">
				<h2>Blog Page</h2>
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.html">Home</a></li>
					<li class="breadcrumb-item"><a href="index.html#blog">Blog</a></li>
					<li class="breadcrumb-item active">Single Post</li>
				</ul>
			</div>
		</div>
	-->
		<!-- /header wrapper -->

	</header>
	<!-- /Header -->

		<!-- Container -->
		<div class="container">
			<h2>Sketch tampilan hasil hitung</h2>
		  <p>sketch #1</p>
		  <div class="container" style="height:300px; width:700px; border-style:solid; margin-top:30px; margin-bottom:30px;">
		    <p> Graph here </p>
		  </div>
		  <!-- coba tab ajas -->
		  <div class="tabbable">
		      <ul class="nav nav-tabs" id="myTabs">

		          <li><a href="#home"  class="active" data-toggle="tab">Hasil</a></li>
		          <!-- <li><a href="#foo" data-toggle="tab">Pronia</a></li> -->
		          <li><a href="#pbs1" data-toggle="tab">pronia</a></li>
		          <li><a href="#bar" data-toggle="tab">Neraca Energi</a></li>
							<li><a href="#home"  class="dropdown-toggle" data-toggle="tab">Berita Acara</a></li>

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
		<!-- /Container -->
