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
						<img class="logo" src="<?php echo base_url() ?>content/excionlogo1.png" alt="logo">
						<img class="logo-alt" src="<?php echo base_url() ?>content/logoexcion2putih.png" alt="logo">
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
					<li class="has-dropdown"><a href="">Home</a>
						<ul class="dropdown">
							<li><a href="#" id="ajaxReal">Excion - Real Time</a></li>
							<li><a href="#upload" data-toggle="modal" data-target="#modalupload">Excion - Upload</a></li>
							<li><a href="#" id="ajaxReal">Excion - Default</a></li>
							<!-- <li><a href="<?php //echo base_url(); ?>main/uploadView" id="ajaxUpload">Upload</a></li> -->
							<!--
							<li><a href="<?php //echo base_url(); ?>main/coba_gentellela">Coba Gen</a></li>
							<li><a href="<?php// echo base_url(); ?>main/coba_supablog">Coba Agency</a></li>
							-->
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
		<div class="modal fade" id="modalLogin" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form action="<?php echo base_url('index.php/login/login'); ?>" id='frm_vld' name='frm_vld' method="post">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <!-- <input type="text" class="form-control" id="usrname" placeholder="Enter email"> -->
							<input type="text" name="username" id="username" class="form-control" placeholder="Username" onblur="validate('username', this.value)"><br>
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <!-- <input type="text" class="form-control" id="psw" placeholder="Enter password"> -->
							<input type="password" name="password" id="password" class="form-control" placeholder="Password" onblur="validate('password', this.value)">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
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
		<!--
		<div id="modalLogin" class="modal fade" role="dialog">
  		<div class="modal-dialog modal-md">

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
					<!--
					<form method="post" action="<?php echo base_url(); ?>index.php/upload/uploads" enctype="multipart/form-data" class="dropzone" id="myAwesomeDropzone">
					</form>
					<button type="button" id="submit_dropzone_form">UPLOAD</button>
					<div class="final-info">
						<label for="uploaded_files">Response recieved will be displayed here</label>
						<input type="text" id="uploaded_files">
					</div>-->
      		</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-primary" id="submit_dropzone_form" onclick="uploadDropzone()">Upload</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
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
	<script>
	/*
	$(function() {
	  var baseURL = 'http://yourdomain.com/ajax/';
	  //load content for first tab and initialize
	  $('#home').load(baseURL+'home', function() {
	      $('#myTab').tab(); //initialize tabs
	  });
	  $('#myTab').bind('show', function(e) {
	     var pattern=/#.+/gi //use regex to get anchor(==selector)
	     var contentID = e.target.toString().match(pattern)[0]; //get anchor
	     //load content for selected tab
	     $(contentID).load(baseURL+contentID.replace('#',''), function(){
	          $('#myTab').tab(); //reinitialize tabs
	     });
	  });
	});
	*/
	$(document).ready(function(){
	  var baseURL = 'http://localhost/excion/';
	  //load content for first tab and initialize
		//*
	  $('#ajaxUpload').click(function(){
	      $('#gantiAjax').load(baseURL+'index.php/main/uploadView'); //initialize tabs
		/*
		$.ajax({
			url: 'index.php/main/uploadView',
			success: function(result){
		 		$("#gantiAjax").html(result);
			}
		});
		//*/
		});

		$('#modalupload').on('shown.bs.modal', function (e) {
    	alert("I want this to appear after the modal has opened!");
		});
		//*/
	});
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
		},

		init: function() {
			//Submitting the form on button click
			var submitButton = document.querySelector("#submit_dropzone_form");
				myDropzone = this; // closure
				submitButton.addEventListener("click", function() {
				myDropzone.processQueue(); // Tell Dropzone to process all queued files.
			});
			this.on("addedfile", function(file){
				if (file.name == "PBS 1.csv" || file.name == "PBS 2.csv" || file.name == "PBS 3.csv") {
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
	//*/
	///*
		//$('#modalupload').on('show.bs.modal', function(e){
		/*
	var fileUpload = new Dropzone(".dropzone", {
	//Dropzone.options.uploadDropzone = {
		//url: "<?php //echo base_url("index.php/upload/multi_upload"); ?>",
		maxFiles: 18,
		acceptedFiles: ".csv",
		method: "post",
		paramName: "file",
		dictInvalidFileType:"Tipe file tidak dizinkan",
		addRemoveLinks : true,
		dictCancelUpload : "Apakah anda yakin ingin menghapus file dari halaman upload?",
		dictUploadCanceled : "File berhasil di hapus.",
		autoProcessQueue : false,
		uploadMultiple : true,
		parallelUploads : 18, //gimana caranya mempertahankan tetep 2 upload at a time?
		//*
		successmultiple:function(data,response){
			$("#uploaded_files").val(response);
		},
		init : function(){
			var submit = document.querySelector("#submit_dropzone_form");
			submit.addEventListener("click", function(){
				fileUpload.processQueue();
			});
		}
		/*accept: function(file, done) {//mari coba alternatif
    	if (file.name == "PBS 1.csv") { //it works!
      	alert("ok");
    	}
    	else { alert("Naha, you don't."); }
  	}

	})*/
		//})
	/*
	function uploadDropzone(){
		fileUpload.processQueue();
	}


	fileUpload.on("addedfile", function(file){
		//validasi per item : kalo bukan file yg diizinkan, hapus,
		if (file.name == "PBS 1.csv" || file.name == "PBS 2.csv" || file.name == "PBS 3.csv") {
			//alert('ok!');
		}
		else {
			alert('file ini tidak diperbolehkan untuk di upload.');
			this.removeFile(file);
		}
		/*if (file.name == "PBS 1.csv") { //it works!
			alert("ok");
		}
		else { alert("Naha, you don't."); }
		//var count = fileUpload.files.length;
		//for (var i = 0; i < count; i++) {
		//	if (file[i].name == "PBS 1.csv" || file[i].name == "PBS 2.csv" || file[i].name == "PBS 3.csv") {
		//		alert('ok!');	}
		//	else {
		//		alert('nope!');	}
		//}
		//alert(fileUpload.files.length);
	});

	//fileUpload.on("sending", function(a, b, c){
	fileUpload.on("sendingmultiple", function(a, b, c){
		a.token=Math.random();
		c.append("token_file", a.token); //nyiapin token/key buat tiap file yg diupload
	});

	// CALLBACK ON COMPLETE UPLOADING EACH FILE
	fileUpload.on("completemultiple", function(file){
	//fileUpload.on("complete", function(file){
		if (this.getUploadingFiles().length === 0 && this.getQueuedFiles().length === 0) {
			console.log("END ", this.getQueuedFiles().length);
		}
		else {
			// START QUEUE PROCESSING AGAIN
			fileUpload.processQueue();
		}
	});

	// ON QUEUE COMPLETE
  fileUpload.on("queuecomplete", function (progress) {
      //$('.meter').delay(999).slideUp(999);
			alert("file sukses di upload!");
      // REMOVE ALL FILES FROM FORM
      this.removeAllFiles();
  });

	//*/
	/*
	$(function(){
		// Now that the DOM is fully loaded, create the dropzone, and setup the
		// event listeners
		$('#modalupload').on('shown.bs.modal', function(e){
			var fileUpload = new Dropzone(".dropzone", {
				url: "<?php //echo base_url("index.php/upload/aksi_multi_upload"); ?>",
				maxFiles: 18,
				acceptedFiles: ".csv",
				method: "post",
				paramName: "file",
				dictInvalidFileType:"Tipe file tidak dizinkan",
				addRemoveLinks : true,
				dictCancelUpload : "Apakah anda yakin ingin menghapus file dari halaman upload?",
				dictUploadCanceled : "File berhasil di hapus.",
				autoProcessQueue : false,
			})
		})

		$('#submitUpload').click(function(){
			fileUpload.processQueue();
		});

		fileUpload.on("sending", function(a, b, c){
			a.token=Math.random();
			c.append("token_file", a.token); //nyiapin token/key buat tiap file yg diupload
		});

	});
	//*/

	</script>
