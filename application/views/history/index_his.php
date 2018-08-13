<!-- coba content disini-->
<div class="right_col" role="main">
  <div class="">
<div class="page-title">



</div>

<div class="clearfix"></div>
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Tabel History <small></small></h2>
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
      <p class="text-muted font-13 m-b-30">

      </p>
      <table id="datatable-responsive" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Tgl Olah Data Pembangkit</th>
            <th>User</th>
            <th>Hak Akses</th>
            <th>Region</th>
            <th>Opsi</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($history as $key => $value) { ?>
          <tr>
            <td><?php echo $z=$key+1 ?></td>
            <td><?php echo $tgl = $value->date ?></td>
            <td><?php echo $nama = $value->nama ?></td>
            <td>
              <?php
              $lvl = $value->level_user;
              if ($lvl == 1) {
                echo "Supervisor";
              }
              else if ($lvl == 2) {
                echo "Operator";
              }
              else {
                echo "---kosong---";
              }
              ?>
            </td>
            <td><?php echo $reg = $value->region ?></td>
            <td>
              <?php echo anchor('main/start/'.$value->folder,'Lihat hasil', array("class"=>"btn btn-info btn-xs")); ?>
              <!-- <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="<?php echo "#modalubah".$id=$value->id ?>">Lihat Data</button> -->
              <button type="button" id="<?php echo $id=$value->id ?>" class="btn btn-danger btn-xs" data-toggle="modal" data-target=<?php echo "#".$id ?>>Hapus</button>
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
                      <label for="username" class=""><span class="glyphicon glyphicon-user"></span> Nama Pejabat</label>
                      <input type="text" name="nama" value="<?php echo $nama ?>" class="form-control" placeholder="Nama Pejabat" ><br>
                      <label for="username" class=""><span class="glyphicon glyphicon-book"></span> Jabatan</label>
                      <input type="text" name="jabatan" value="<?php echo $jabatan ?>" class="form-control" placeholder="Jabatan" ><br>
                      <label for="username" class=""><span class="glyphicon glyphicon-sound-5-1"></span> No. Pegawai</label>
                      <input type="text" name="nopeg" value="<?php echo $nopeg ?>" class="form-control" placeholder="No. Pegawai" ><br>

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
        <h4><span class="glyphicon glyphicon-pencil"></span> Tambah Data Pejabat</h4>
      </div>
      <div class="modal-body" style="padding:40px 50px;">
        <form action="<?php echo base_url('index.php/pejabat/tambah_aksi'); ?>" method="post">
          <div class="form-group">
            <label for="username" class=""><span class="glyphicon glyphicon-user"></span> Nama Pejabat</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama Pejabat" ><br>
            <label for="username" class=""><span class="glyphicon glyphicon-book"></span> Jabatan</label>
            <input type="text" name="jabatan" class="form-control" placeholder="Jabatan" ><br>
            <label for="username" class=""><span class="glyphicon glyphicon-sound-5-1"></span> No. Pegawai</label>
            <input type="text" name="nopeg" class="form-control" placeholder="No. Pegawai" ><br>
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
