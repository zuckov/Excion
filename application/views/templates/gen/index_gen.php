<!-- coba content disini-->
<div class="right_col" role="main">
  <div class="">
<div class="page-title">
  <div class="title_left">
    <!-- <h3>Users <small>Some examples to get you started</small></h3> -->
  </div>


</div>

<div class="clearfix"></div>
<div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
  <div class="tile-stats">
    <div class="icon"><i class="glyphicon glyphicon-list-alt"></i></div>
    <div class="count"><?php echo $history ?></div>
    <h3>Jumlah Upload</h3>
    <p>Jumlah data history</p>
    <!-- <p>Lorem ipsum psdea itgum rixt.</p> -->
  </div>
</div>
<div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
  <div class="tile-stats">
    <div class="icon"><i class="fa fa-users"></i></div>
    <div class="count"><?php echo $user ?></div>
    <h3>User Terdaftar</h3>
    <p>Yang dapat menggunakan apliaski excion</p>
  </div>
</div>
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Dashboard Admin</h2>
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

        <div class="bs-example" data-example-id="simple-jumbotron">
          <div class="jumbotron">
            <h2>Selamat datang, <?php echo $this->session->userdata('nama') ?>.</h2>
          </div>
        </div>

      </div>

    </div>
  </div>
</div>
<div class="row">

<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2><i class="fa fa-gears"></i>
        Hak Akses
        <?php
          if ($this->session->userdata('lvl') == 1) {
            echo "Supervisor";
          } else {
            echo "Operator";
          }
         ?>
      </h2>

      <div class="clearfix"></div>
    </div>
    <div class="x_content">

      <div class="col-xs-3">
        <!-- required for floating -->
        <!-- Nav tabs -->
        <ul class="nav nav-tabs tabs-left">
          <li class="active"><a href="#home" data-toggle="tab">Upload</a></li>
          <li><a href="#profile" data-toggle="tab">History</a></li>
          <?php if ($this->session->userdata('lvl') == 1) { ?>
          <li><a href="#messages" data-toggle="tab">User</a></li>
          <li><a href="#settings" data-toggle="tab">Pejabat</a></li>
        <?php } ?>
        </ul>
      </div>

      <div class="col-xs-9">
        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane active" id="home">
            <p class="lead">Upload file output pembangkit</p>
            <p>Bagi pengguna yang sudah terdaftar dan sudah dapat login, ia dapat melakukan fungsi unggah data output pembangkit.</p>
            <p>Pilih menu upload, pada halaman utama, atau pada side bar menu excion di halaman ini.</p>
          </div>
          <div class="tab-pane" id="profile">
            <p class="lead">Lihat data history upload</p>
            <p>Bagi pengguna yang sudah terdaftar dan sudah dapat login, ia dapat melihat history upload.</p>
            <p>Pengguna juga dapat melihat kembali rincian hasil perhitungan output pembangkit di menu ini.</p>
            <p>Pilih menu History pada side bar di halaman ini.</p>
          </div>
          <div class="tab-pane" id="messages">
            <p class="lead">Kelola data user</p>
            <p>Bagi pengguna dengan hak akses supervisor, ia dapat mengelola data pengguna pada sistem ini.</p>
            <p>Supervisor dapat menambah user baru, mengubah data user, ataupun menghapus data user.</p>
            <p>Pilih "User" pada side bar di halaman ini.</p>
          </div>
          <div class="tab-pane" id="settings">
            <p class="lead">Kelola data pejabat</p>
            <p>Bagi pengguna dengan hak akses supervisor, ia dapat mengelola data pejabat pada sistem ini.</p>
            <p>Data pejabat akan digunakan sebagai pejabat yang bertanggung jawab dalam cetak laporan berita acara. </p>
            <p>Pilih menu "Pejabat" pada side bar di halaman ini.</p>
          </div>
        </div>
      </div>

      <div class="clearfix"></div>

    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
