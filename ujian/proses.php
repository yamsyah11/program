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
		background: red;
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
#item {
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
	
	<div id="item">	
			<a href="tambah_item.php">Add Data</a>	
<table border='1' cellpadding='20' style="background-color: #eee;">
			<tr>
				<td>NO</td>
				<td>Category</td>
				<td>Name</td>
				<td>Price</td>
				<td>Status</td>
			   <td>Action</td>

		</tr>
<?php
	
	include 'konek_item.php';
	$nomor = 1;
	$sql2   = "select category.id, item.id as urut, category.name as jenis, item.name as name, price, status from item inner join category ON category.id = item.category_id";
	$result = mysqli_query($connect, $sql2);
	function jika($status){
		if($status == "1"){
			return "Aktif";}
			else {
			return "Tidak Aktif";}
	};
	if(mysqli_num_rows($result)>0){
	while ($row = mysqli_fetch_assoc($result)) { // while untuk memunculkan perbaris // row untuk memunculkan 
		echo "  
		<tr>
			
			<td>".$nomor++."</td>
			<td>".$row['jenis']."</td>  
			<td>".$row['name']."</td>
			<td>".$row['price']."</td>
			<td>".jika($row['status'])."</td>
			<td>
				<a href='edit_item.php?id=".$row['urut']."'>Edit</a> |
 				<a href='delete_item.php?id=".$row['urut']."' onclick='javascrip:return confirm(\"Apakah anda yakin menghapus data?\")'
					'>Hapus</a>			
		</td>
		</tr>			
			
		";

}
}
?>
	</div>
</table>
</div>
</table>
</body>
</html>
