<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>
<body>
	<center><h1>tabel region</h1></center>
	<center><?php echo anchor('crud/tambah','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Region</th>
			<th>Action</th>
		</tr>
		<?php
		$no = 1;
		foreach($region as $u){
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->region ?></td>
			<td>
			      <?php echo anchor('region/edit/'.$u->id,'Edit'); ?>
            <?php echo anchor('region/hapus/'.$u->id,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
