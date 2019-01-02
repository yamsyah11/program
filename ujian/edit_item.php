<html>
	<head>
		<title>Editx</title>

	</head>
	<body>
		<?php
		include 'konek_item.php';
		$ID     = $_GET['id'];
		$sql1    = "select * from item where id=$ID";
		$result1 = mysqli_query($connect,$sql1);
		$row1    = mysqli_fetch_assoc($result1);
		$id 		= $row1['category_id'];
		?>
		<form action="proses_edititem.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $ID; ?>">
			Category : <br>

		<select name="category_id">

	<?php
		include 'konek_item.php';
		$sql3    = "select * from category where id=$id";
		$result3 = mysqli_query($connect,$sql3);
		$row3    = mysqli_fetch_assoc($result3);	
		echo "<option value=".$row1['category_id'].">"
					.$row3['name'].			
				"</option>";	
	?>
	
	<?php		
	include 'konek_item.php';
	$sql2   = "select * from category";
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
			Name : <br>
			<input type="text" name="name" value="<?php echo $row1['name']; ?>"><br>
			Price : <br>
			<input type="text" name="price" value="<?php echo $row1['price']; ?>"><br>
			Status : <br>
			<input type='radio' name="status" id="status" value="1" <?php if($row1['status'] == "1"){ echo "checked" ;}?>>aktif<td></td><td></td>
		  	<input type='radio' name="status" id="status" value="0" <?php if($row1['status'] == "0"){ echo "checked" ;}?>>tidak aktif<br>
			<input type="submit" value="Submit">
		</form>
	</body>
</html>
