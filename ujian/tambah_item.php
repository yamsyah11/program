<html>
	<head>
		<title>Tambah Data</title>
		
	</head>
	<body>
		<form action="proses_item.php" method="POST">
			<table border="">
			<tr>
			<td><label for='category_id'>Category</label></td>
			<td></td>
			<td>
			<select name="category_id">

	<?php		
		include 'konek_item.php';
	$sql2   = "select * from category";
	$result = mysqli_query($connect, $sql2);
	if(mysqli_num_rows($result)>0){
	while ($row = mysqli_fetch_assoc($result)) { // while untuk memunculkan perbaris // row untuk memunculkan 
		echo "<option value=".$row['id'].">"
					.$row['name'].			
				"</option>";
}
}
?>
			</select>
			</td>			
			</tr>

			<tr>
				<td><label for='name'>Name</label></td>
				<td></td>
				<td><input type="text" name="name" id="name"></td>			
			</tr>
		
				<tr>
				<td><label for='price'>Price</label></td>
				<td></td>
				<td><input type="text" name="price" id="price"></td>			
			</tr>

		<td><label for='status'>Status</label></td>
		  <td></td>
		  <td><input type='radio' name="status" id="status" value="1">aktif
		  <input type='radio' name="status"id="status" value="0">tidak aktif</td>	
		</tr>
		<tr>
			<td>
			</td><td></td><td><input type='submit' value='submit'></td>
			</td>	
		</tr>
</table>
		</form>
	</body>
</html>
