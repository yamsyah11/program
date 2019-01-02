 <?php                                                       
include 'konek_s.php';
$induk          = $_POST['induk'];
$nama           = $_POST['nama'];
$data           = $_POST['data'];
$password         = $_POST['password'];
$status          = $_POST['status'];

$sql3 = "insert into siswa(induk, nama, data, password, status) VALUES ('$induk','$nama','$data','$password','$status')";
mysqli_query($connect,$sql3);
header('location:indek_s.php');
?>
