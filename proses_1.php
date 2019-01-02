 <?php                                                       
include 'konek_1.php';
$nama          = $_POST['nama'];
$status        = $_POST['status'];

$sql1 = "insert into kelas(nama, status) VALUES ('$nama','$status')";
mysqli_query($connect, $sql1);
header('location:indek_1.php');
?>
