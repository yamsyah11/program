<html>
<head>
	<title>Tugas</title>
</head>
<body>
	<a href="tambah_p.php">Tambah Table</a>
	<br>
	<br>
<table border='1' cellpadding='10'>
			<tr>

				<td>NO</td>
				<td>Nama</td>
				<td>Pengajar</td>
				<td>Status</td>

		   </tr>
<?php

		include 'konek_p.php' ;
		$nomor  = 1;
		$sql2    = "select * from mata_pelajaran";
		$result = mysqli_query($connect, $sql2);
			function sts($status){
			if($status == "1"){
				return "aktif";}
				else {
						return "tidak aktif";}
		};

		if(mysqli_num_rows($result)>0){
		while ($row = mysqli_fetch_assoc($result)){
		echo "
		<tr>
		
			<td>".$nomor++."</td>
			<td>".$row['nama']."</td>
			<td>".$row['pengajar']."</td>
			<td>".sts($row['status'])."</td>
				
		</tr>
		";
	} 
}
?>
</table>
</body>
</html>
