<html>
<!-- modal upload-->
		<div id="upload" class="modal fade" role="dialog">
  		<div class="modal-dialog modal-md">

    	<!-- Modal content-->
    		<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal">&times;</button>
        		<h4 class="modal-title">Upload File</h4>
      		</div>
      		<div class="modal-body">
				<form action="<?php echo base_url('index.php/main/upload'); ?>" method="post" enctype="multipart/form-data">
					<input type="file" name="file" />
					<br>
      		</div>
      		<div class="modal-footer">
				<input type="submit" class="btn btn-primary" value="Upload">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				</div>
				</form>
    		</div>
  		</div>
		</div>
		<!-- /modal upload -->
</html>