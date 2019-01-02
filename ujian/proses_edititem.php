<?php
include 'konek_item.php';
$ID            = 			$_POST['id'];
$category      =        $_POST['category_id'];
$name      		=        $_POST['name'];
$price         =        $_POST['price'];
$status        =        $_POST['status'];

$sql2 = "UPDATE item SET category_id = '$category', name = '$name', price='$price', status = '$status' WHERE id = '$ID'";
mysqli_query($connect,$sql2);
header('location:proses.php');
?> 
