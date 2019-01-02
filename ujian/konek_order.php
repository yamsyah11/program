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
$sql3 = "CREATE TABLE order1(
id INT() UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
table_number VARCHAR(10) NOT NULL,
item_id INT() NOT NULL,
qty INT() NOT NULL,
total INT() NOT NULL,
diskon VARCHAR(100) NOT NULL,
after_diskon INT() NOT NULL
)";
mysqli_query($connect, $sql3)  
// if (mysqli_connect_error()) {
//     die("Database connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";
?>
