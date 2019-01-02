<html>
	<head>
		<title>Edit Data</title>

	</head>
	<body>
		<?php
		include 'koneksi.php';
		$ID     = $_GET['id'];
		$sql1    = "select * from category where id=$ID";
		$result = mysqli_query($connect,$sql1);
		$row    = mysqli_fetch_assoc($result);
		?>
<form action="proses_edit.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $ID; ?>">
			Name  
			<tr><input type="text" name="name" value="<?php echo $row['name']; ?>"disabl></tr><br>
		<br>
		<tr>
		<td>
		<input type="submit" value="Submit">
		</td>
		</tr>
</form>
	</body>
</html>
