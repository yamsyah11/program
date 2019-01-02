<?php
$servername = "localhost";
$username   = "phpmyadmin";
$password   = "123";
$dbname     = "latihan";
// Create connection // membuat koneksi
$connect = mysqli_connect($servername, $username, $password, $dbname);

// Check connection // memeriksa koneksi // alter untuk menggubah databes (berlawanan dengan create (untuk membuat databes))
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "CREATE TABLE nilai (
id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
nama_siswa VARCHAR(30) NOT NULL,
kelas CHAR(2) NULL, 
pelajaran VARCHAR(25) NULL,
nilai INT(3) NULL
)";
mysqli_query($connect, $sql)  
// if (mysqli_connect_error()) {
//     die("Database connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";
?>
