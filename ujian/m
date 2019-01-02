<html>
<head>
	<title>ujian</title>
</head>
<body>
	<a href="tambah.php">Tambah Table</a>
	<br>
	<br>
<table border='1' cellpadding='10'>
			<tr>
				<td>NO</td>
				<td>Name</td>
				<td>action</td>
			</tr>
<?php
	include 'koneksi.php';
	$nomor = 1;
	$sql   = "select * from category";
	$result = mysqli_query($connect, $sql);
	if(mysqli_num_rows($result)>0){
	while ($row = mysqli_fetch_assoc($result)) { // while untuk memunculkan perbaris // row untuk memunculkan 
		echo "  
		<tr>
			
			<td>".$nomor++."</td>
			<td>".$row['nama']."</td>  
			<td>
				<a href='editx.php?id=".$row['id']."'>Edit</a> |
 				<a href='deletx.php?id=".$row['id']."' onclick='javascrip:return confirm(\"Apakah anda yakin menghapus data?\")'
					'>Hapus</a>			
		</td>
		</tr>			
			
		";

}
}
?>
</table>
</body>
</html>
