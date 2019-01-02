<?php
include 'koneksi.php';
$ID            = $_POST['id'];
$name          = $_POST['name'];

$sql1 = "UPDATE category SET name='$name' WHERE id = '$ID'";
mysqli_query($connect,$sql1);
header('location:tampilan.php');
?> 
