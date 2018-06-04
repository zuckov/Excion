<html>
<head>
	<title>Coba Upload Sukses</title>
</head>
<body>

	<center><h1>Coba Fungsi Upload</h1></center>

	<ul>
		<?php foreach ($upload_data as $item => $value):?>
			<li><?php echo $item;?>: <?php echo $value;?></li>
		<?php endforeach; ?>
	</ul>

	<br><br><br>
	<p><? //echo $fileName; ?></p>

</body>
</html>
