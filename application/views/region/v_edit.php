<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>
<body>
	<center>
		<h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1>
		<h3>Tambah data baru</h3>
	</center>
	<?php foreach($user as $u){ ?>
	<form action="<?php echo base_url('index.php/crud/update'); ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama</td>
				<input type="hidden" name="id" value="<?php echo $u->id ?>">
				<td><input type="text" name="nama" value="<?php echo $u->nama ?>"></td>
			</tr>
      <tr>
				<td>Username</td>
				<td><input type="text" name="user" value="<?php echo $u->username ?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" value="<?php echo $u->email ?>"></td>
			</tr>
			<tr>
				<td>Level User</td>
				<td><input type="text" name="lvl" value="<?php echo $u->level_user ?>"></td>
			</tr>
      <tr>
				<td>Region</td>
				<td><input type="text" name="region" value="<?php echo $u->region ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><button>Ubah password</button></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>
<?php } ?>
</body>
</html>
