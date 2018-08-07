<!-- coba content disini-->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
  <div class="title_left">
    <!-- <h3>Users <small>Some examples to get you started</small></h3> -->
  </div>
</div>

<div class="clearfix"></div>
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Tabel Region <!-- <small>Users</small> --></h2>

      <ul class="nav navbar-right panel_toolbox" style="margin-left : 30px">
        <?php echo anchor(/*'region/update/'.$value->id*/'#','Tambah Data', array('class'=>'btn btn-success', 'data-toggle'=>'modal', 'data-target'=>'#modaltambah')); ?><br>

      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <br>
      <table id="datatable-responsive" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Region</th>
            <th>Opsi</th>
          </tr>
        </thead>


        <tbody>
          <?php foreach ($region as $key => $value) { ?>
          <tr>
            <td><?php echo $z=$key+1 ?></td>
            <td><?php echo $reg = $value->region ?></td>
            <td>
              <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="<?php echo "#modalubah".$id=$value->id ?>">ubah</button>
              <button type="button" id="<?php echo $id ?>" class="btn btn-danger btn-xs" data-toggle="modal" data-target=<?php echo "#".$id ?>>Hapus</button>
            </td>
          </tr>
          <!-- modal
          ================================================== -->
          <!-- Modal Konfirmasi -->
          <div id="<?php echo $id?>" class="modal fade">
            <div class="modal-dialog modal-sm">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Konfirmasi Hapus</h4>
                </div>
                <div class="modal-body">
                  <p style="font-size:115%">Apakah anda yakin ingin menghapus?</p>
                  <!---->
                  <p class="text-warning"><small>Tekan tombol kembali jika tidak ingin menghapus</small></p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                  <?php //echo anchor('region/hapus/'.$id/*'#'*/,'Hapus Data', array('id'=> $id, "class"=>"btn btn-danger", 'data-toggle'=>'modal', 'data-target'=>'#'.$id)); ?>
                  <?php echo anchor('region/hapus/'.$value->id,'Hapus Data', array("class"=>"btn btn-danger")); ?>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal Konfirmasi -->

          <!-- Modal Ubah Data -->
          <div class="modal fade" id="<?php echo "modalubah".$id ?>" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header" style="padding:35px 50px;">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4><span class="glyphicon glyphicon-pencil"></span> Ubah Data</h4>
                </div>
                <div class="modal-body" style="padding:40px 50px;">
                  <form action="<?php echo base_url().'index.php/region/update/'.$id; ?>" method="post">
                    <div class="form-group">
                      <label for="username" class=""><span class="glyphicon glyphicon-map-marker"></span> Nama Region</label>
                      <input type="text" name="region" value="<?php echo $reg ?>" class="form-control" placeholder="Nama Region" ><br>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-floppy-save  "></span> Tambah Data</button>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-danger btn-default pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Batal</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
            <!-- /modal login -->

          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
</div>
</div>



<!-- Modal Tambah Data -->
<div class="modal fade" id="modaltambah" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="padding:35px 50px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="glyphicon glyphicon-pencil"></span> Tambah Data</h4>
      </div>
      <div class="modal-body" style="padding:40px 50px;">
        <form action="<?php echo base_url('index.php/region/tambah_aksi'); ?>" id='frm_vld' name='frm_vld' method="post">
          <div class="form-group">
            <label for="username" class=""><span class="glyphicon glyphicon-map-marker"></span> Nama Region</label>
            <input type="text" name="region" id="username" class="form-control" placeholder="Nama Region" ><br>
          </div>
          <button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-floppy-save  "></span> Tambah Data</button>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger btn-default pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Batal</button>
        </form>
      </div>
    </div>
  </div>
</div>
  <!-- /modal login -->
