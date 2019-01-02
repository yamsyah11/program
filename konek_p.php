<?php
$servername = "localhost";
$username   = "phpmyadmin";
$password   = "123";
$dbname     = "latihan";

$connect = mysqli_connect($servername, $username, $password, $dbname);

if (!$connect) {
		die("Connection failed: " . mysqli_connect_error());
}
$sql2 = "CREATE TABLE mata_pelajaran (
id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(30) NOT NULL,
pengajar VARCHAR(30) NOT NULL,
status BOOLEAN 
)";

mysqli_query($connect, $sql2)

?>
