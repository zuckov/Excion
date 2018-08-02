<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->


	<script src=<?php base_url(); ?>'content/form_ajax.js'></script>

	<title>Project Excion</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="<?php base_url(); ?>content/creative-agency/css/bootstrap.min.css" />

	<style>
  .modal-header, h4, .close {
      /*background-color: #5cb85c;*/
			/*background: linear-gradient(to bottom right, #0033cc 0%, #3366ff 100%);*/
			background-color: #6666ff;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  </style>

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="<?php base_url(); ?>content/creative-agency/css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="<?php base_url(); ?>content/creative-agency/css/owl.theme.default.css" />

	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="<?php base_url(); ?>content/creative-agency/css/magnific-popup.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="<?php base_url(); ?>content/creative-agency/css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="<?php base_url(); ?>content/creative-agency/css/style.css" />

	<!-- Dropzone CSS -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>content/dz/dropzone.css" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>content/dz/basic.css" />
	<!-- Dropzone JS -->
	<script type="text/javascript" src="<?php echo base_url() ?>content/dz/dropzone.js"></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<style>
	#divUpload {
		border:2px dashed;
		border-color: white;
		min-height: 80px;
		opacity: 0.5;
	}
	</style>

</head>

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
							<img class="logo-alt" src="<?php base_url(); ?>content/logoexcion2putih.png" alt="logo">
							<img class="logo" src="<?php base_url(); ?>content/excionlogo1.png" alt="logo">
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
					<!-- <li><a href="#home">Home</a></li> -->
					<li class="has-dropdown"><a href="#blog">Home</a>
						<ul class="dropdown">
							<li><a href="<?php echo base_url(); ?>">Excion</a></li>
							<!-- <li><a href="<?php //echo base_url('index.php/upload/index'); ?>">Excion Upload</a></li> -->
							<li><a href="#upload" data-toggle="modal" data-target="#modalupload">Excion Upload</a></li>
							<li><a href="#comingSoon">Excion Real-time</a></li>
						</ul>
					</li>
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
					<!--<li><a href="<?php //echo base_url('index.php/upload'); ?>">Coba Upload</a></li> -->
				</ul>
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->

		<!-- modal login 1-->
		<!--
		<div id="modalLogin" class="modal fade" role="dialog">
  		<div class="modal-dialog modal-lg">

    	<!-- Modal content-->
			<!--
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

		<!-- modal login 1-->
			<div class="modal fade" id="modalLogin" role="dialog">
		    <div class="modal-dialog">

		      <!-- Modal content-->
		      <div class="modal-content">
		        <div class="modal-header" style="padding:35px 50px;">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
		        </div>
		        <div class="modal-body" style="padding:40px 50px;">
		          <form role="form">
		            <div class="form-group">
		              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
		              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
		            </div>
		            <div class="form-group">
		              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
		              <input type="text" class="form-control" id="psw" placeholder="Enter password">
		            </div>
		            <div class="checkbox">
		              <label><input type="checkbox" value="" checked>Remember me</label>
		            </div>
		              <button type="submit" class="btn btn-default btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
		          </form>
		        </div>
		        <div class="modal-footer">
		          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
		          <p>Not a member? <a href="#">Sign Up</a></p>
		          <p>Forgot <a href="#">Password?</a></p>
		        </div>
		      </div>

		    </div>
		  </div>
				<!-- /modal login -->

				<!-- modal upload-->
		<div id="modalupload" class="modal fade" role="dialog">
  		<div class="modal-dialog modal-md">
    	<!-- Modal upload content-->
    		<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal">&times;</button>
        		<h4 class="modal-title">Upload File</h4>
      		</div>
      		<div class="modal-body">
						<!-- -->
						<div class="alert alert-danger" id="alertValid" role="alert" style="visibility: hidden;">File tidak diperbolehkan untuk di upload.</div>
						<form method="post" action="<?php echo base_url(); ?>index.php/upload/uploads" enctype="multipart/form-data" class="dropzone" id="myAwesomeDropzone" style="border:2px dashed; min-height: 80px;">
							<div class="dz-message">
								<h3 style="padding:50px;">Click or Drop the files here.</h3>
							</div>
							<!-- <input type="text" id="uploaded_files"> -->
							<input type="text" id="uploaded_files">
						</form>
      		</div>
					<!-- -->
					<div class="modal-footer">
						<button type="button" class="btn btn-primary" id="submit_dropzone_form" onclick="uploadDropzone()">Upload</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
    		</div>
  		</div>
		</div>
		<!-- /modal login -->


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


		<!-- home wrapper -->
		<div class="home-wrapper" id="ganti">
			<div class="container">
				<div class="row">

					<!-- home content -->
					<div class="col-md-10 col-md-offset-1">
						<div class="home-content">
							<h1 class="white-text">This is Project Excion</h1>
							<p class="white-text">
								Upload file ion dl, lalu mulai excion.
							</p>
							<!-- <a href="<?= base_url('index.php/main/start'); ?>" class="white-btn">Start Excion</a> -->
							<a href="<?= base_url('index.php/main/start'); ?>" class="white-btn">Start Excion</a>
							<a href="#" id="send" class="white-btn" >coba jquery ajax</a>
							<a href="<?= base_url('index.php/main/fgetcsv'); ?>" class="white-btn">Realtime Excion</a>
							<a href="<?= base_url('index.php/csv/pronia'); ?>" class="main-btn">Pronia x NE</a>
							<a href="<?= base_url('index.php/csv/baregion'); ?>" class="main-btn">Berita Acara</a>

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

	<!-- hasil ajax -->
	<div class="container" id="gantiAjax"></div>

	<!-- Footer -->
	<footer id="footer" class="sm-padding bg-dark">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<div class="col-lg-12">

					<!-- footer logo -->
					<div class="footer-logo">
						<a href="index.html"><img src="<?php base_url(); ?>content/logoexcion2putih.png" alt="logo"></a>
					</div>
					<!-- /footer logo -->

					<!-- footer follow -->
					<ul class="footer-follow">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube"></i></a></li>
					</ul>
					<!-- /footer follow -->

					<!-- footer copyright -->
					<div class="footer-copyright">
						<p>Developed by K.Armyansyah, Unsoed, © 2018. Template designed by <a href="https://colorlib.com" target="_blank">Colorlib </a> © 2017. All Rights Reserved. </p>
					</div>
					<!-- /footer copyright -->
				</div>
			</div>
			<!-- /Row -->
		</div>
		<!-- /Container -->
	</footer>
	<!-- /Footer -->

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- Preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- /Preloader -->

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="<?php base_url(); ?>content/creative-agency/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php base_url(); ?>content/creative-agency/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php base_url(); ?>content/creative-agency/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="<?php base_url(); ?>content/creative-agency/js/jquery.magnific-popup.js"></script>
	<script type="text/javascript" src="<?php base_url(); ?>content/creative-agency/js/main.js"></script>
	<script type="text/javascript" src="<?php base_url(); ?>content/creative-agency/js/_global.js"></script>

	<!-- coba_ajax_jquery -->
	<script>
	//coba ajax jquery
	$(document).ready(function(){
		var target = "<?php echo "C:/EXCION_GACA/ION DL/PBS 2.csv"; ?>";

  	$("#send").click(function(){
			$.ajax({
 			 //url: "index.php/csv/baregion",
			 url: "index.php/csv/get_pronia",
			 //url: "index.php/csv/get_angka",
			 //data: 3,
			 data: "path="+ target,
 			 success: function(result){
 				 //$("#ganti").html(result);
				 $("#gantiAjax").html(result);
				 $("#ganti").hide();
				 //*
				 $("#gantiAjax").css({
					 "height" : $("#patokanLebar").height(),
				 });//*/
				 $("#gantiAjax").css({
					 "padding-top" : "152px"/*$("#nav").height()*/,
					 "padding-bottom" : "52px",
				 });
 		 }});

		 /*
		 $("#ganti").css({
			 width: $("#patokanLebar").width()
		 });//*/
 	});
 	});
	//coba ajax
		//var base_urls = "<? //echo base_url(); ?>";
		/*
		function loadWeb(){
			var load = new XMLHttpRequest();
			load.onreadystatechange = function(){
				if (this.readyState == 4 && this.status == 200){
					document.getElementById("ganti").innerHTML =

				}
			}
		}

		*/
		//$(document).ready(function(){

			/*
			var base_url = "<?php //echo base_url() ?>";
			$("#jqajax").click(function(){
				$.post(base_url + "index.php/csv/baregion",
				{

				});
				//$("#ganti").load("halaman ganti");
			});
		});*/
		//});
	</script>

	<script>
//DROPZONE JS
// Disabling autoDiscover, otherwise Dropzone will try to attach twice.
//Dropzone.autoDiscover = false;
//*
Dropzone.options.myAwesomeDropzone = {
	//url:"<?php //echo base_url('index.php/welcome/uploads'); ?>",
	autoProcessQueue: false,
	uploadMultiple: true,
	parallelUploads:18,
	acceptedFiles: ".csv",
	dictInvalidFileType:"Tipe file tidak dizinkan",
	addRemoveLinks : true,
	//dictCancelUpload : "Apakah anda yakin ingin menghapus file dari halaman upload?",
	dictUploadCanceled : "File berhasil di hapus.",
	successmultiple:function(data,response){
		//$("#uploaded_files").val(response);
		alert(response);
		//send response here
		//var url="<?php echo base_url() ?>index.php/main/getPathUpload/";
		var url="<?php echo base_url() ?>index.php/main/start/";
		window.location = url+response;
	},
	init: function() {
		//Submitting the form on button click
		var submitButton = document.querySelector("#submit_dropzone_form");
			myDropzone = this; // closure
			submitButton.addEventListener("click", function() {
			myDropzone.processQueue(); // Tell Dropzone to process all queued files.
		});
		this.on("addedfile", function(file){
			if (file.name == "PBS 1.csv" || file.name == "PBS 2.csv" || file.name == "PBS 3.csv"
				|| file.name == "GARNG 12.csv" ) {
				//alert('ok!');
			}
			else {
				alert('file ini tidak bisa untuk di upload.');
				this.removeFile(file);
			}
		});
		// ON QUEUE COMPLETE
		//*
		this.on("queuecomplete", function (progress, response) {
				$('.meter').delay(999).slideUp(999);
				//alert(response);
				// REMOVE ALL FILES FROM FORM
				this.removeAllFiles();
		});
		//*/
	}
};
</script>

</body>

</html>
