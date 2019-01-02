<html>
<head>
	<title>Ujian Tuny</title>
</head>
<body>
		<a href="tambah_order.php">Add Data</a>
<table border='1' cellpadding='50' style="background-color: #eee;">
			<tr>
			<td>NO</td>
			<td>Table Number</td>
			<td>Item</td>
			<td>Qty</td>
			<td>Total</td>
			<td>Diskon</td>
			<td>After Diskon</td>
			<td>Action</td>
			</tr>
<?php
	include 'konek_order.php';
	$nomor = 1;
	$sql3  = "select item.id, order1.id as id, item.name as item_id, order1.table_number as table_number, qty, total, diskon, after_diskon from order1 inner join item  ON item.id = order1.item_id";
	$result = mysqli_query($connect, $sql3);
		function rupiah($angka){
		$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
		return $hasil_rupiah;
}
	if(mysqli_num_rows($result)>0) {
	while ($row = mysqli_fetch_assoc($result)) { // while untuk memunculkan perbaris // row untuk memunculkan 
		echo "  
		<tr>
			
			<td>".$nomor++."</td>
			<td>".$row['table_number']."</td>  
			<td>".$row['item_id']."</td>
			<td>".$row['qty']."</td>
			<td>".rupiah($row['total'])."</td>
			<td>".$row['diskon']."</td>
			<td>".rupiah($row['after_diskon'])."</td>
			<td>
				<a href='edit_order.php?id=".$row['id']."'>Edit</a> |
 				<a href='delete_order.php?id=".$row['id']."' onclick='javascrip:return confirm(\"Apakah anda yakin menghapus data?\")'
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
