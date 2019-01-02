 <?php
include 'konekx.php';
$nama          = $_POST['nama'];
$kelas         = $_POST['kelas'];
$pelajaran     = $_POST['pelajaran'];
$nilai         = $_POST['nilai'];

$sql = "insert into nilai (nama_siswa, kelas, pelajaran, nilai) VALUES ('$nama','$kelas','$pelajaran','$nilai')";
mysqli_query($connect,$sql);
header('location:indekx.php');
?>
