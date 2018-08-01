<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Dropzone CSS -->
  	<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>content/multiUpload/dropzone.css" />
  	<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>content/multiUpload/basic.css" />
  	<!-- Dropzone JS -->
  	<script type="text/javascript" src="<?php echo base_url() ?>content/multiUpload/dropzone.js"></script>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

    <meta charset="utf-8">
    <title>Coba Dropzone</title>
  </head>
  <body>
    <form action="/file-upload"  class="dropzone" id="uploadDropzone" style="border:2px dashed; min-height: 80px;">
      <div class="dz-message">
        <h3 style="padding:50px;">Click or Drop the files here.</h3>
      </div>
    </form>



<script>
Dropzone.autoDiscover = false;
   ///*
     //$('#modalupload').on('show.bs.modal', function(e){
   var fileUpload = new Dropzone(".dropzone", {
     url: "<?php echo base_url("index.php/upload/aksi_multi_upload"); ?>",
     maxFiles: 18,
     acceptedFiles: "Image/*",
     method: "post",
     paramName: "file",
     dictInvalidFileType:"Tipe file tidak dizinkan",
     addRemoveLinks : true,
     dictCancelUpload : "Apakah anda yakin ingin menghapus file dari halaman upload?",
     dictUploadCanceled : "File berhasil di hapus.",
     autoProcessQueue : false,
     //uploadMultiple : true,
     //parallelUploads : 18, //gimana caranya mempertahankan tetep 2 upload at a time?
     //init :
     //accept:function(file, done) {}
   })
     //})

   function uploadDropzone(){
     fileUpload.processQueue();
   }

   fileUpload.on("sending", function(a, b, c){
     a.token=Math.random();
     c.append("token_file", a.token); //nyiapin token/key buat tiap file yg diupload
   });

   // CALLBACK ON COMPLETE UPLOADING EACH FILE
   fileUpload.on("complete", function(file){
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
       $('.meter').delay(999).slideUp(999);
       // REMOVE ALL FILES FROM FORM
       this.removeAllFiles();
   });
</script>

  </body>
</html>
