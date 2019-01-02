<html>
	<head>
		<title>Tambah Data</title>
		<style>
		</style>
	</head>
	<body>
		<form action="proses_order.php" method="POST">
	<div id="header">
			<table border=''>
			<tr>
			<td><label for='table_number'>Table Number</label></td>
			<td></td>
			<td><input type="text" name="table_number" id="table_number">
			</td>			
			</tr>

			<tr>
				<td><label for='item_id'>Item</label></td>
				<td></td>
		<td><select name="item_id">
	<?php		
		include 'konek_order.php';
	$sql2   = "select * from item where status = 1";
	$result = mysqli_query($connect, $sql2);
	if(mysqli_num_rows($result)>0){
	while ($row = mysqli_fetch_assoc($result)) { // while untuk memunculkan perbaris // row untuk memunculkan 
		echo "<option value=".$row['id'].">"
					.$row['name' ].			
				"</option>";
}
}
?></select></td>

							
			</tr>
		
				<tr>
				<td><label for='qty'>Qyt</label></td>
				<td></td>
				<td><input type="text" name="qty" id="qty"></td>			
			</tr>

		<tr>
			<td>
			</td><td></td><td><input type='submit' value='submit'></td>
			</td>	
		</tr>
</table>
	</div>
		</form>
	</body>
</html>
