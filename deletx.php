<?php
include 'konekx.php';
$ID    = $_GET['id'];

$sql = "DELETE FROM nilai WHERE id = '$ID'";
mysqli_query($connect,$sql);
header('location:indekx.php');
?>
