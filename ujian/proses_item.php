 <?php
include 'konek_item.php';
$category      =        $_POST['category_id'];
$name      		=        $_POST['name'];
$price         =        $_POST['price'];
$status        =        $_POST['status'];


$sql2 = "insert into item (category_id, name, price, status) VALUES ('$category','$name','$price','$status')";
mysqli_query($connect,$sql2);
header('location:proses.php');
?>
