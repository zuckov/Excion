<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<!-- ini buat ajax langsung panggil di halaman depan -->
<!-- <div class="container" id="patokanLebar" style="color:white"> -->
<!-- ini buat ajax di halaman hasil -->
<div class="container" id="patokanLebar">
  <h2>Tabel Data Pronia</h2>
  <p>The .table-bordered class adds borders to a table:</p>
  <table class="table table-bordered" id="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Tanggal dan Jam</th>
        <th>kWh Kirim</th>
        <th>kWh Terima</th>
        <th>kVArh Kirim</th>
        <th>kVArh Terima</th>
        <th>Pengirim</th>
        <th>Asal Folder</th>
        <th>Tgl_Upload</th>
      </tr>
    </thead>
    <tbody>
      <?php
        //$num = count($kwh_k);
        //for ($i=0; $i < $num; $i++) {
        //$var = $i + 1;
        foreach ($data as $key => $value) {
      ?>
      <tr>
        <td><?php echo $z = $key + 1; ?></td>
        <td><?php echo $value['date']; ?></td>
        <td><?php echo $value['kwh_kirim'];, 2); ?></td>
        <td><?php echo $value['kwh_terima'];, 2); ?></td>
        <td><?php echo $value['kvarh_kirim'];; ?></td>
        <td><?php echo $value['kvarh_terima'];; ?></td>
        <td><?php echo $value['asal_folder'];; ?></td>
        <td><?php echo $value['tgl_upload'];; ?></td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
</div>
<!-- -->
</body>
</html>
<!-- -->
<script>
/*
$(document).ready( function () {
    $('#tabelJquery').DataTable({
      "destroy" : true,
    });

} );
//*/
const $table = $('#table');
const $remove = $('#remove');
let selections = [];

function initTable() {
  $table.bootstrapTable({
    height: getHeight(),
    columns: [
      [
        {
          field: 'state',
          checkbox: true,
          rowspan: 2,
          align: 'center',
          valign: 'middle'
        }, {
          title: 'Item ID',
          field: 'id',
          rowspan: 2,
          align: 'center',
          valign: 'middle',
          sortable: true
        }, {
          title: 'Item Detail',
          colspan: 3,
          align: 'center'
        }
      ],
      [
        {
          field: 'name',
          title: 'Item Name',
          sortable: true,
          editable: true,
          align: 'center'
        }, {
          field: 'price',
          title: 'Item Price',
          sortable: true,
          align: 'center',
          editable: {
            type: 'text',
            title: 'Item Price',
            validate(value) {
              value = $.trim(value);
              if (!value) {
                return 'This field is required';
              }
              if (!/^\$/.test(value)) {
                return 'This field needs to start width $.'
              }
              const data = $table.bootstrapTable('getData');
              const index = $(this).parents('tr').data('index');
              console.log(data[index]);
              return '';
            }
          },
          footerFormatter: totalPriceFormatter
        }, {
          field: 'operate',
          title: 'Item Operate',
          align: 'center',
          events: operateEvents,
          formatter: operateFormatter
        }
      ]
    ]
  });
  // sometimes footer render error.
  setTimeout(() => {
    $table.bootstrapTable('resetView');
  }, 200);
  $table.on('check.bs.table uncheck.bs.table ' +
            'check-all.bs.table uncheck-all.bs.table', () => {
    $remove.prop('disabled', !$table.bootstrapTable('getSelections').length);

    // save your data, here just save the current page
    selections = getIdSelections();
    // push or splice the selections if you want to save all data selections
  });
  $table.on('expand-row.bs.table', (e, index, row, $detail) => {
    if (index % 2 == 1) {
      $detail.html('Loading from ajax request...');
      $.get('LICENSE', res => {
        $detail.html(res.replace(/\n/g, '<br>'));
      });
    }
  });
  $table.on('all.bs.table', (e, name, args) => {
    console.log(name, args);
  });
  $remove.click(() => {
    const ids = getIdSelections();
    $table.bootstrapTable('remove', {
      field: 'id',
      values: ids
    });
    $remove.prop('disabled', true);
  });
  $(window).resize(() => {
    $table.bootstrapTable('resetView', {
      height: getHeight()
    });
  });
}



function getIdSelections() {
  return $.map($table.bootstrapTable('getSelections'), ({id}) => id);
}

function responseHandler(res) {
  $.each(res.rows, (i, row) => {
    row.state = $.inArray(row.id, selections) !== -1;
  });
  return res;
}

function detailFormatter(index, row) {
  const html = [];
  $.each(row, (key, value) => {
    html.push(`<p><b>${key}:</b> ${value}</p>`);
  });
  return html.join('');
}

function operateFormatter(value, row, index) {
  return [
    '<a class="like" href="javascript:void(0)" title="Like">',
    '<i class="fa fa-heart"></i>',
    '</a>  ',
    '<a class="remove" href="javascript:void(0)" title="Remove">',
    '<i class="fa fa-remove"></i>',
    '</a>'
  ].join('');
}

window.operateEvents = {
  'click .like': function (e, value, row, index) {
    alert(`You click like action, row: ${JSON.stringify(row)}`);
  },
  'click .remove': function(e, value, {id}, index) {
    $table.bootstrapTable('remove', {
      field: 'id',
      values: [id]
    });
  }
};

function totalPriceFormatter(data) {
  let total = 0;
  $.each(data, (i, {price}) => {
    total += +(price.substring(1));
  });
  return `$${total}`;
}

function getHeight() {
  return $(window).height() - $('h1').outerHeight(true);
}

$(() => {
	initTable();
})

</script>
