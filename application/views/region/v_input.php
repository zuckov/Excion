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
	<form action="<?php echo base_url('index.php/crud/tambah_aksi'); ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
      <tr>
				<td>Username</td>
				<td><input type="text" name="user"></td>
			</tr>
      <tr>
				<td>Password</td>
				<td><input type="text" name="pass"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>Level User</td>
				<td><input type="text" name="lvl"></td>
			</tr>
      <tr>
				<td>Region</td>
				<td><input type="text" name="region"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>
</body>
</html>
