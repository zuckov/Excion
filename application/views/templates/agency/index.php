<!-- Content start here -->
<body >
	<!-- Header -->
	<header id="home">
		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('<?php base_url(); ?>content/creative-agency/img/background2.jpg');">
		<!-- <div class="bg-img" style="background-image: url('<?php //base_url(); ?>content/creative-agency/img/background1.jpg');"> -->
		<!-- <div class="bg-img" style="background: linear-gradient(to bottom right, #0033cc 0%, #3366ff 100%);"> -->
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Nav -->
		<div id="nav" class="navbar nav-transparent">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					 <div class="navbar-brand">
						<a href="<?php echo base_url(); ?>">
							<!--
							<img class="logo" src="<?php base_url(); ?>content/creative-agency/img/logo.png" alt="logo">
							<img class="logo-alt" src="<?php base_url(); ?>content/creative-agency/img/logo-alt.png" alt="logo">
							-->
							<!--  Logo coba excion -->
						<!-- <img class="logo" src="<?php echo base_url(); ?>content/excionlogo1.png" alt="logo"> -->
						<img class="logo" src="../content/excionlogo1.png" alt="logo">
						<img class="logo-alt" src="../content/logoexcion2putih.png" alt="logo">
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
					<!--<li><a href="<?php //echo base_url() ?>">Home</a></li> -->
					<li class="has-dropdown"><a href="<?php echo base_url() ?>">Home</a>
						<ul class="dropdown">
							<li><a href="#" id="ajaxReal">Real Time</a></li>
							<li><a href="<?php echo base_url(); ?>main/uploadView" id="ajaxUpload">Upload</a></li>
							<li><a href="<?php echo base_url(); ?>main/coba_gentellela">Coba Gen</a></li>
							<li><a href="<?php echo base_url(); ?>main/coba_supablog">Coba Agency</a></li>
						</ul>
					</li>
					<?php if($this->session->userdata('status') == 'login'){ ?>
						<li><a href="<?php echo base_url('history/index'); ?>">History</a></li>
						<li><a href="#about">About</a></li>
						<li><a href="<?php echo base_url('login/logout'/*'index.php/login/logout'*/); ?>">Logout</a></li>
					<?php }else {?>
						<li><a href="<?php echo base_url('main/about'); ?>">About</a></li>
						<li><a href="#contact" data-toggle="modal" data-target="#modalLogin">Login</a>
					<?php } ?>
				</ul>
				<!-- /Main navigation -->

			</div>
		</div>
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




		<!-- home wrapper -->
		<div class="home-wrapper" id="gantiAjax">
			<div class="container">
				<div class="row">

					<!-- home content -->
					<div class="col-md-10 col-md-offset-1">
						<div class="home-content">
							<h1 class="white-text">This is Project Excion</h1>
							<p class="white-text">
								Upload file ion dl, lalu mulai excion.
							</p>
							<a href="<?= base_url('index.php/history/index'); ?>" class="white-btn">Start Excion</a>
							<!--<a href="<?php //base_url('index.php/main/fgetcsv'); ?>" class="white-btn">Start Excion</a>
							<a href="<?php //base_url('index.php/main/multiCsv'); ?>" class="main-btn">Multi Csv</a>
							<a href="<?php //base_url('index.php/main/tablecsv'); ?>" class="main-btn">Table Csv</a>
							<a href="<?php //base_url('index.php/csv/pronia'); ?>" class="main-btn">Pronia</a>-->
							<!--<button class="main-btn">Learn more</button>-->
						</div>
					</div>
					<!-- /home content -->

				</div>
			</div>
		</div>
		<!-- /home wrapper -->
	</header>
	<!-- /Header -->
<!-- Content stop here -->
	<!--  -->
