<?php
include 'konek_item.php';
$ID    = $_GET['id'];


$sql2 = "DELETE FROM item WHERE id = '$ID'";
mysqli_query($connect,$sql2);
header('location:proses.php');
?>
