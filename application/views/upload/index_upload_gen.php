
        <!-- page content -->
        <div class="right_col" role="main">

          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Upload </h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Dropzone multiple file uploader</h2>
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
                    <!-- <p>Drag multiple files to the box below for multi upload or click to select files. This is for demonstration purposes only, the files are not uploaded to any server.</p> -->
                    <form action="<?php echo base_url(); ?>index.php/upload/uploads" class="dropzone" id="myAwesomeDropzone">
                      <div class="dz-message">
        								<h3 style="padding:50px;">Klik, atau drop file disini.</h3>
        							</div>
                    </form>

                    <br />
                    <br />
                    <button type="button" class="btn btn-primary" id="submit_dropzone_form" >Upload</button>
                    <button type="button" class="btn btn-danger">Close</button>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- ============================================= -->
        <!-- Dropzone
        ================================================== -->
        <script>

        Dropzone.options.myAwesomeDropzone = {
          autoProcessQueue: false,
          uploadMultiple: true,
          parallelUploads:15,
          acceptedFiles: ".csv",
          dictInvalidFileType:"Tipe file tidak dizinkan",
          addRemoveLinks : true,
          //dictCancelUpload : "Apakah anda yakin ingin menghapus file dari halaman upload?",
          dictUploadCanceled : "File berhasil di hapus.",
          successmultiple:function(data,response){
            alert(response);
            //send response here
            //var url="<?php echo base_url() ?>index.php/main/getPathUpload/";
            var url="<?php echo base_url() ?>index.php/main/start/";
            window.location = url+response;
          },
          init:function(){
            var submitButton = document.querySelector("#submit_dropzone_form");
              myDropzone = this; // closure
              submitButton.addEventListener("click", function() {
              myDropzone.processQueue(); // Tell Dropzone to process all queued files.
            });
            this.on("addedfile", function(file){
              /*
              if (file.name == "PBS 1.csv" || file.name == "PBS 2.csv" || file.name == "PBS 3.csv") {
                //do nothing?
              }
              else {
                alert('file '+file.name+' tidak diperkenankan untuk di upload.');
                this.removeFile(file);
              }
              */
              <?php if ($this->session->userdata('lvl') == 1) { ?>

              if (file.name == "PBS 1.csv" ) {
                //do nothing?
              }
              else {
                alert('file '+file.name+' tidak diperkenankan untuk di upload.');
                this.removeFile(file);
              }
              <?php } ?>

              <?php if ($this->session->userdata('lvl') == 2) { ?>

              if (file.name == "PBS 2.csv" ) {
                //do nothing?
              }
              else {
                alert('file '+file.name+' tidak diperkenankan untuk di upload.');
                this.removeFile(file);
              }
              <?php } ?>

              <?php if ($this->session->userdata('lvl') == 3) { ?>

              if (file.name == "PBS 3.csv" ) {
                //do nothing?
              }
              else {
                alert('file '+file.name+' tidak diperkenankan untuk di upload.');
                this.removeFile(file);
              }
              <?php } ?>
            });
            this.on("queuecomplete", function (progress, response) {
                $('.meter').delay(999).slideUp(999);
                //alert(response);
                // REMOVE ALL FILES FROM FORM
                this.removeAllFiles();
            });
          }
        };

        </script>
