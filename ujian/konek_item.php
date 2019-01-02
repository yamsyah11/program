<?php
$servername = "localhost";
$username   = "phpmyadmin";
$password   = "123";
$dbname     = "point_of_sale";

$connect = mysqli_connect($servername, $username, $password, $dbname);

if (!$connect) {
		die("Connection failed: " . mysqli_connect_error());
}
$sql2 = "CREATE TABLE item (
id INT() UNSIGNED AUTO_INCREMENT PRIMARY KEY,
category_id INT(11) NOT NULL,
name VARCHAR(100) NOT NULL,
price	INT() NOT NULL,
status BOOLEAN 
)";

mysqli_query($connect, $sql2)

?>
