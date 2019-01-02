<html>
<head>
	<title>Ujian Tuny</title>
</head>
<body>
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
	$sql2   = "select category.id, item.id as id, category.name as category_id, item.name as name, price, status from item inner join category ON category.id = item.category_id";
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
			<td>".$row['category_id']."</td>  
			<td>".$row['name']."</td>
			<td>".$row['price']."</td>
			<td>".jika($row['status'])."</td>
			<td>
				<a href='edit_item.php?id=".$row['id']."'>Edit</a> |
 				<a href='delete_item.php?id=".$row['id']."' onclick='javascrip:return confirm(\"Apakah anda yakin menghapus data?\")'
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
