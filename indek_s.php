<html>
<head>
	<title>siswa</title>
</head>
<body>
	<a href="tambah_s.php">Tambah Data</a>
	<br>
	<br>
<table border='1' cellpadding='10'>
			<tr>

				<td>NO</td>
				<td>Induk</td>				
				<td>Nama</td>
				<td>Data</td>
				<td>Password</td>
				<td>status</td>
				

		   </tr>
<?php

		include 'konek_s.php' ;
		$nomor  = 1;
		$sql3    = "select * from siswa";
		$result = mysqli_query($connect, $sql3);
		function sts($status){
			if($status == "1"){
				return "aktif";
			} else {
						return "tidak aktif";}
		};
		if(mysqli_num_rows($result)>0){
		while ($row = mysqli_fetch_assoc($result)){
		echo "
		<tr>		
			<td>".$nomor++."</td>
			<td>".$row['induk']."</td>
			<td>".$row['nama']."</td>
			<td>".$row['data']."</td>
			<td>".$row['passsword']."</td>
			<td>".sts($row['status'])."</td>
		</tr>
	";
	} 
}
?>
</table>
</body>
</html>

