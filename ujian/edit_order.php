<html>
	<head>
		<title>Editx</title>

	</head>
	<body>
		<?php
		include 'konek_order.php';
		$ID     = $_GET['id'];
		$sql3    = "select * from order1 where id=$ID";
		$result3 = mysqli_query($connect,$sql3);
		$row3    = mysqli_fetch_assoc($result3);
		$name 	= $row3['item_id'];
		?>
		<form action="proses_editorder.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $ID; ?>">
			Table Number : <br>
		 	<input type="text" name="table_number" value="<?php echo $row3['table_number']; ?>"><br>
			Item : <br>
			<select name="item_id">


	<?php
		include 'konek_item.php';
		$sql1    = "select * from item where id=$name";
		$result1 = mysqli_query($connect,$sql1);
		$row1    = mysqli_fetch_assoc($result1);	
		echo "<option value=".$row3['item_id'].">"
					.$row1['name'].			
				"</option>";	
	?>

	<?php		
	include 'konek_order.php';
	$sql2   = "select * from item";
	$result2 = mysqli_query($connect, $sql2);
	if(mysqli_num_rows($result2)>0){
	while ($row2 = mysqli_fetch_assoc($result2)) { // while untuk memunculkan perbaris // row untuk memunculkan 
		echo "<option value=".$row2['id'].">"
					.$row2['name'].			
				"</option>";
}
}
?>		
			</select>
			<br>
			Qty : <br>
			<input type="text" name="qty" value="<?php echo $row3['qty']; ?>"><br>
			<input type="submit" value="Submit">
		</form>
	</body>
</html>
