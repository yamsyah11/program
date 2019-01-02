<html>
<head>
	<title>Tugas</title>
</head>
<body>
	<a href="tambah_kls.php">Tambah</a>
	<br>
	<br>
<table border='1' cellpadding='2'>
			<tr>

				<td>NO</td>
				<td>Nama</td>
				<td>status</td>

		   </tr>
<?php

		include 'konek_kls.php' ;
		$nomor  = 1;
		$sql1    = "select * from kelas";
		$result = mysqli_query($connect, $sql1);
		function tuny($status){
			if($status == 1){
				return "aktif";}
				else {
						return "tidak aktif";}}

		if(mysqli_num_rows($result)>0){
		while ($row = mysqli_fetch_assoc($result)){
		echo "
		<tr>
		
			<td>".$nomor++."</td>
			<td>".$row['nama']."</td>
			<td>".tuny($row['status'])."</td>
		</tr>
	";
	} 
}
?>
</table>
</body>
</html>



















