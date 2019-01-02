<html>
	<head>
		<title>Editx</title>

	</head>
	<body>
		<?php
		include 'konekx.php';
		$ID     = $_GET['id'];
		$sql    = "select * from nilai where id=$ID";
		$result = mysqli_query($connect,$sql);
		$row    = mysqli_fetch_assoc($result);
		?>
		<form action="prosesedit.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $ID; ?>">
			Nama : <br>
			<input type="text" name="nama" value="<?php echo $row['nama_siswa']; ?>"disabl><br>
			Kelas : <br>
			<input type="text" name="kelas" value="<?php echo $row['kelas']; ?>"disabl><br>
			Pelajaran : <br>
		<select name="pelajaran"> value = "<?php echo $row['pelajaran']; ?>">
		<option value="javascrip">Javascrip</option>
		<option value="php">Php</option>
		<option value="desain">Desain</option>
		<option value="databes">Databes</option>
		</select><br>
			Nilai : <br>
			<input type="text" name="nilai" value="<?php echo $row['nilai']; ?>"><br>
			<input type="submit" value="Submit">
		</form>
	</body>
</html>
