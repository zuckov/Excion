

  <!-- <body class="nav-md" style="background: #F7F7F7; color:#73879C;"> -->
  <div class="right_col" role="main" style="background: #F7F7F7; color:#73879C;">
    <div class="">
      <div class="clearfix"></div>
      <div class="row">
        <!-- page content -->
        <div class="col-md-12">
          <div class="col-middle">
            <div class="text-center text-center">
              <h1 class="error-number">404</h1>
              <h2>Data pejabat kosong.</h2>
              <h2>Silahkan tambah data pengguna.</h2>
              <br>
              <br>
              <p style="text-decoration: underline"><?php echo anchor('#','Tambah data pengguna dengan klik disini', array('data-toggle'=>'modal', 'data-target'=>'#modaltambah')); ?></p>
              <p style="text-decoration: underline"><a href="<?php base_url('index.php/main/cek_tabelgen2') ?>">Kembali ke Halaman utama dengan klik disini  </a></p>
              <div class="mid_center">

              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
      </div>
    </div>
    </div>


    <!-- Modal Tambah Data -->
    <div class="modal fade" id="modaltambah" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header" style="padding:35px 50px;">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4><span class="glyphicon glyphicon-pencil"></span> Tambah Data Pengguna</h4>
          </div>
          <div class="modal-body" style="padding:40px 50px;">
            <form action="<?php echo base_url('index.php/user/tambah_aksi'); ?>" method="post">
              <div class="form-group">
                <label for="username" class=""><span class="fa fa-user"></span> Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukan nama" ><br>
                <label for="username" class=""><span class="fa fa-envelope"></span> Email</label>
                <input type="text" name="email" class="form-control" placeholder="Masukan email" ><br>
                <label for="username" class=""><span class="fa fa-archive"></span> Username</label>
                <input type="text" name="username"class="form-control" placeholder="Masukan username" ><br>
                <label for="pass" class=""><span class="fa fa-lock"></span> Password</label>
                <input type="password" name="password" class="form-control" placeholder="Masukan password" ><br>

                <label for="lvl" class=""><span class="fa fa-users"></span> Level User</label>
                <select class="form-control" name="lvl">
                  <option>-- Pilih Level User --</option>
                  <option value="1">Supervisor</option>
                  <option value="2">Operator</option>
                </select>
                <br>

                <label for="username" class=""><span class="glyphicon glyphicon-map-marker"></span> Region</label>
                <select class="form-control" name="region">
                  <option>-- Pilih Region --</option>
                  <?php foreach ($region as $reg) { ?>
                    <option value="<?php echo $reg->id ?>"><?php echo $reg->region ?></option>
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
      <!-- /modal login -->
