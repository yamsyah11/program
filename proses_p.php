 <?php                                                       
include 'konek_p.php';
$nama          = $_POST['nama'];
$pengajar      = $_POST['pengajar'];
$status        = $_POST['status'];

$sql2 = "insert into mata_pelajaran (nama, pengajar, status) VALUES ('$nama','$pengajar','$status')";
mysqli_query($connect,$sql2);
header('location:indek_p.php');
?>
