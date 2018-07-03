
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
							<img class="logo" src="<?php base_url(); ?>content/creative-agency/img/logo.png" alt="logo">
							<img class="logo-alt" src="<?php base_url(); ?>content/creative-agency/img/logo-alt.png" alt="logo">
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
					<li><a href="#contact">History(template)</a></li>
					<li><a href="#contact">Contact</a></li>
					<li><a href="#contact" data-toggle="modal" data-target="#modalLogin">Login</a>
					<!--<li><a href="#contact" data-toggle="modal" data-target="#modalLogin">Login</a></li>
					<li><a href="#contact" data-toggle="modal" data-target="#modalLogin2">Coba login</a></li>
					<li><a href="#contact" data-toggle="modal" data-target="#modalajaxjquery">Coba jq_ajax</a></li>
					<li><a href="#contact" data-toggle="modal" data-target="#modalupload">Coba Upload</a></li>-->
					<!--<li><a href="<?php //echo base_url('index.php/upload'); ?>">Coba Upload</a></li> -->
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


		<!-- home wrapper -->
		<div class="home-wrapper">
			<div class="container">
				<div class="row">

					<!-- home content -->
					<div class="col-md-10 col-md-offset-1">
						<div class="home-content">
							<h1 class="white-text">This is Project Excion</h1>
							<p class="white-text">
								Upload file ion dl, lalu mulai excion.
							</p>
							<a href="<?= base_url('index.php/csv/pronia'); ?>" class="white-btn">Start Excion</a>
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
