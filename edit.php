<?php 
if (!isset($_GET['id'])){
    header('location: index.php');
}
require 'db.php';
$id = $_GET['id'];

if (isset($_POST['edit'])) {

$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$alamat = $_POST['alamat'];
$nohp = $_POST['nohp'];

$sql ="UPDATE siswa SET nama = '$nama', kelas = '$kelas', alamat = '$alamat', nohp = '$nohp' WHERE id = '$id'";

if(mysqli_query($conn, $sql)){
    echo '<p class="text-green-500">data berhasil di edit</p>';
} else{
    echo '<p class="text-red-500">data gagal di edit</p>';
}

}

$data = mysqli_query($conn, "SELECT * FROM siswa WHERE id = '$id'");
$siswa = mysqli_fetch_assoc($data);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-200 space-y-3 p-3">
    
    <form action="" class="space-y-3 sm:w-96 w-full p-3 bg-white" method="post">
        <label class="font-bold" for="nama">nama</label>
        <input type="text" value="<?= $siswa['nama'] ?>" class="w-full p-3 rounded bg-gray-100 focus:outline-blue-500" id="nama" required name="nama">
        <label class="font-bold" for="kelas">kelas</label>
        <input type="text" value="<?= $siswa['kelas'] ?>" class="w-full p-3 rounded bg-gray-100 focus:outline-blue-500" id="kelas" required name="kelas">
        <label class="font-bold" for="alamat">alamat</label>
        <input type="text"  value="<?= $siswa['alamat'] ?>" class="w-full p-3 rounded bg-gray-100 focus:outline-blue-500" id="alamat" required name="alamat">
        <label class="font-bold" for="nohp">nohp</label>
        <input type="number" value="<?= $siswa['nohp'] ?>" class="w-full p-3 rounded bg-gray-100 focus:outline-blue-500" id="nohp" required name="nohp">
        <button name="edit" type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">tambah</button>
    <a href="index.php" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded inline-block">kembali</a>
</form>
</body>
</html>