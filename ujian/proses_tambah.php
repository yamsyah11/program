 <?php
include 'koneksi.php';
$name       =        $_POST['name'];

$sql1 = "insert into category (name) VALUES ('$name')";
mysqli_query($connect,$sql1);
header('location:tampilan.php');
?>
