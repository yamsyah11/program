<html>
<head>
	<title>Tugas</title>
</head>
<body>
	<a href="tambahx.php">Tambah Table</a>
	<br>
	<br>
<table border='10' cellpadding='0'>
			<tr>
				<td>NO</td>
				<td>Nama siswa</td>
				<td>Kelas</td>
				<td>Pelajaran</td>
				<td>Nilai</td>
			   <td>Action</td>

		</tr>
<?php
	
	include 'konekx.php';
	$nomor = 1;
	$sql   = "select * from nilai";
	$result = mysqli_query($connect, $sql);
	if(mysqli_num_rows($result)>0){
	while ($row = mysqli_fetch_assoc($result)) { // while untuk memunculkan perbaris // row untuk memunculkan 
		echo "  
		<tr>
			
			<td>".$nomor++."</td>
			<td>".$row['nama_siswa']."</td>  
			<td>".$row['kelas']."</td>
			<td>".$row['pelajaran']."</td>
			<td>".$row['nilai']."</td>
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
