<html>
<head>
	<title>Tugas</title>
</head>
<body>
	<a href="tambah_1.php">Tambah</a>
	<br>
	<br>
<table border='1' cellpadding='2'>
			<tr>

				<td>NO</td>
				<td>Nama</td>
				<td>status</td>

		   </tr>
<?php

		include 'konek_1.php' ;
		$nomor  = 1;
		$sql1    = "select * from kelas";
		$result = mysqli_query($connect, $sql1);
		function sts($status){
			if($status == "1"){
				echo "aktif";}
				else {
						echo "tidak aktif";}
		};
		if(mysqli_num_rows($result)>0){
		while ($row = mysqli_fetch_assoc($result)){
		echo "
		<tr>
		
			<td>".$nomor++."</td>
			<td>".$row['nama']."</td>
			<td>".sts($row['status'])."</td>
		</tr>
	";
	} 
}
?>
</table>
</body>
</html>



















