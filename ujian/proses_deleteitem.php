<?php
include 'konek_item.php';
$ID    = $_GET['id'];

$sql = "DELETE FROM item WHERE id = '$ID'";
mysqli_query($connect,$sql);
header('location:proses.php');
?>
