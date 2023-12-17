<?php 
if (isset($_POST['simpan'])) {
require 'db.php';
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$alamat = $_POST['alamat'];
$nohp = $_POST['nohp'];

$sql ="INSERT INTO siswa VALUES ('' , ' $nama','$kelas','$alamat','$nohp')";

if(mysqli_query($conn, $sql)){
    header('location: index.php');
    exit;
} 
    echo '<p class="text-red-500">data gagal di simpan</p>';


}

?>