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
  <?php if ($this->session->flashdata('pesan1')) : ?>
    <div class="alert alert-danger alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
      </button>
      <strong>Perhatian, </strong><?php echo $this->session->flashdata('pesan1'); ?>
    </div>
  <?php endif; ?>
  <?php if ($this->session->flashdata('pesan2')) : ?>
    <div class="alert alert-success alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
      </button>
      <strong>Sukses </strong><?php echo $this->session->flashdata('pesan2'); ?>
    </div>
  <?php endif; ?>
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Tabel Data User <!-- <small>Users</small> --></h2>

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
            <th>Username</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Level user</th>
            <th>Region</th>
            <th>Opsi</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($user as $key => $value):
            $id=$value->id;
          ?>
          <tr>
            <td><?php echo $z=$key+1 ?></td>
            <td><?php echo $user = $value->username ?></td>
            <td><?php echo $nama = $value->nama ?></td>
            <td><?php echo $email = $value->email ?></td>
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
            <td><?php echo $regions = $value->region; ?></td>
            <td>
              <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="<?php echo "#modalubah".$id ?>">Ubah</button>
              <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target=<?php echo "#".$id ?>>Hapus</button>
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
                  <?php echo anchor('user/hapus/'.$value->id,'Hapus Data', array("class"=>"btn btn-danger")); ?>
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
                  <form action="<?php echo base_url().'index.php/user/update/'.$id; ?>" method="post">
                    <div class="form-group">
                      <label for="username" class=""><span class="fa fa-user"></span> Nama</label>
                      <input type="text" name="nama" value="<?php echo $nama ?>" class="form-control" placeholder="Masukan nama" ><br>
                      <label for="username" class=""><span class="fa fa-envelope"></span> Email</label>
                      <input type="text" name="email" value="<?php echo $email ?>" class="form-control" placeholder="Masukan email" ><br>
                      <label for="username" class=""><span class="fa fa-archive"></span> Username</label>
                      <input type="text" name="username" value="<?php echo $user ?>" class="form-control" placeholder="Masukan username" ><br>
                      <label for="pass" class=""><span class="fa fa-lock"></span> Password</label>
                      <input type="password" name="password" value="<?php echo $value->password ?>" class="form-control" placeholder="Masukan password" ><br>

                      <label for="lvl" class=""><span class="fa fa-users"></span> Level User</label>
                      <!-- validasi disini! -->
                      <select required class="form-control" name="lvl" value="<?php echo $lvl ?>" >
                        <option value="none" selected = "selected">-- Pilih Level User --</option>
                        <option value="1" <?php if($lvl == 1){echo "selected = 'selected'";}  ?>>Supervisor</option>
                        <option value="2" <?php if($lvl == 2){echo "selected = 'selected'";}  ?>>Operator</option>
                      </select>
                      <br>

                      <label for="username" class=""><span class="glyphicon glyphicon-map-marker"></span> Region</label>
                      <select required class="form-control" name="region" value="<?php echo $regions ?>" >
                        <option value="none">-- Pilih Region --</option>
                        <?php foreach ($region as $reg) { ?>
                          <option value="<?php echo $reg->id ?>" <?php if ($reg->id == $value->id_region){echo " selected = 'selected'";} ?>>
                            <?php echo $reg->region ?>
                          </option>
                        <?php } ?>
                      </select><br>
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

          <?php endforeach; ?>
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
        <form action="<?php echo base_url('index.php/user/tambah_aksi'); ?>" method="post">
          <div class="form-group">
            <label for="nama" class=""><span class="fa fa-user"></span> Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukan nama" required="required"><br>
            <label for="email" class=""><span class="fa fa-envelope"></span> Email</label>
            <input type="text" name="email" class="form-control" placeholder="Masukan email"required="required" ><br>
            <label for="username" class=""><span class="fa fa-archive"></span> Username</label>
            <input type="text" name="username"class="form-control" placeholder="Masukan username" required="required"><br>
            <label for="pass" class=""><span class="fa fa-lock"></span> Password</label>
            <input type="password" name="password" class="form-control" placeholder="Masukan password" required="required"><br>

            <label for="lvl" class=""><span class="fa fa-users"></span> Level User</label>
            <select class="form-control" name="lvl" required>
              <option value="none" selected = "selected">-- Pilih Level User --</option>
              <option value="1">Supervisor</option>
              <option value="2">Operator</option>
            </select><br>

            <label for="region" class=""><span class="glyphicon glyphicon-map-marker"></span> Region</label>
            <select class="form-control" name="region" required>
              <option value="none" selected = "selected">-- Pilih Region --</option>
              <?php foreach ($region as $reg) { ?>
                <option value="<?php echo $reg->id_reg ?>"><?php echo $reg->region ?></option>
              <?php } ?>
            </select><br>
            <!-- <input type="text" name="id" id="username" class="form-control" placeholder="Region" ><br> -->
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
  <!-- /modal Tambah Data -->
