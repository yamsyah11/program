<?php
include 'konek_order.php';
$ID    = $_GET['id'];


$sql3 = "DELETE FROM order1 WHERE id = '$ID'";
mysqli_query($connect,$sql3);
header('location:pro.php');
?>
