<html>
<head>
	<title>Ujian Tuny</title>
</head>
<body>
		<a href="tambah.php">Add Data</a>
<table border='1' cellpadding='50' style="background-color: #eee;">
			<tr>
			<td>NO</td>
			<td>Name</td>
			<td>Action</td>
			</tr>
<?php
	include 'koneksi.php';
	$nomor = 1;
	$sql1   = "select * from category";
	$result = mysqli_query($connect, $sql1);
	if(mysqli_num_rows($result)>0){
	while ($row = mysqli_fetch_assoc($result)) { // while untuk memunculkan perbaris // row untuk memunculkan 
		echo "  
		<tr>		
			<td>".$nomor++."</td>
			<td>".$row['name']."</td>
			<td>
			<a href='edit.php?id=".$row['id']."'>Edit</a> |
 			<a href='delete.php?id=".$row['id']."' onclick='javascrip:return confirm(\"Apakah anda yakin menghapus data?\")'
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
