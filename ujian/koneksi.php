<?php
$servername = "localhost";
$username   = "phpmyadmin";
$password   = "123";
$dbname     = "point_of_sale";
// Create connection // membuat koneksi
$connect = mysqli_connect($servername, $username, $password, $dbname);

// Check connection // memeriksa koneksi // alter untuk menggubah databes (berlawanan dengan create (untuk membuat databes))
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql1 = "CREATE TABLE category(
id INT() UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(100) NULL,
)";
mysqli_query($connect, $sql1)  
// if (mysqli_connect_error()) {
//     die("Database connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";
?>
