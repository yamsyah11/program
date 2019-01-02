<?php
$servername = "localhost";
$username   = "phpmyadmin";
$password   = "123";
$dbname     = "latihan";

$connect = mysqli_connect($servername, $username, $password, $dbname);

if (!$connect) {
		die("Connection failed: " . mysqli_connect_error());
}
$sql3 = "CREATE TABLE siswa (
id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
induk INT() NOT NULL,
nama VARCHAR(30) NOT NULL,
data DATE NOT NULL,
password VARCHAR(10) NOT NULL,
status BOOLEAN 
)";

mysqli_query($connect, $sql3)

?>
