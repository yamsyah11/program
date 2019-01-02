<html>
<head>
<title>Proses</title>
	<style>
	body{

		padding: 0px;
}
#container {
	padding: 0px;
	margin: 0px;

}
#header {
		width: 10px;
		height: 0px;	
		
}
#header table a{
		text-decoration: none;
		color: black;
		line-height: 90px;
}
#header table {
		border-radius: 5px;
}	
#header td {
		border-radius: 5px;
}	
#category {
	position: relative;
	top: 0px;
	left:	290px;		 
}


	</style>
</head>
<body>
<div id="container">
	<div id="header">
	<table border="1"  cellpadding='50';>
	<td>	
	<a href="tampilan.php">Category</a>
	<a href="proses.php">Item</a>	
	<a href="pro.php">Order</a>
	</td>	
	</table>
	</div>

	<div id="category">
<a href="tambah.php">Add Data</a>
<table border='1' cellpadding='48' style="background-color: #eee;">
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
	
	</div>
</div>
</table>
</body>
</html>








