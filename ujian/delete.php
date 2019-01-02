<?php
include 'koneksi.php';
$ID    = $_GET['id'];


$sql1 = "DELETE FROM category WHERE id = '$ID'";
mysqli_query($connect,$sql1);
header('location:tampilan.php');
?>
