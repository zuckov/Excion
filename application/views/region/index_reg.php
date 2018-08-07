<!-- coba content disini-->
<div class="right_col" role="main">
  <div class="">
<div class="page-title">
  <div class="title_left">
    <!-- <h3>Users <small>Some examples to get you started</small></h3> -->
  </div>

  <!--
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
  -->
</div>

<div class="clearfix"></div>
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Tabel Region <!-- <small>Users</small> --></h2>
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
      data togle modal here.

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
            <td><?php echo $value->region ?></td>
            <td>
              <div class="dropdown">
              <button class="btn btn-success dropdown-toggle btn-s" type="button" data-toggle="dropdown">Opsi
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><?php echo anchor(/*'region/update/'.$value->id*/'#','Ubah data'); ?></li>
                  <li>
                    <?php //echo CHtml::link('Hapus Data', '#', array('data-toggle'=>'modal', 'data-target'=>'#modalkonfirmasi')); ?>
                    <?php echo anchor(/*'region/update/'.$value->id*/'#','Hapus Data', array('data-toggle'=>'modal', 'data-target'=>'#modalkonfirmasi')); ?>
                  </li>
                </ul>
              </div>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
</div>
</div>
