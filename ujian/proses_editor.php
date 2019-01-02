<?php
include 'konek_order.php';
$ID            =        $_POST['id'];
$table_number  =        $_POST['table_number'];
$item_id   		=        $_POST['item_id'];
$qty           =        $_POST['qty'];
$total         =        $_POST['total'];

$sql3 = "UPDATE order1 SET table_number = '$table_number', item_id = '$item_id', qty='$qty' total = '$total' WHERE id = '$ID'";
mysqli_query($connect,$sql3);
header('location:pro.php');
?> 
