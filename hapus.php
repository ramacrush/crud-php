<?php 
require "db.php";
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "DELETE FROM siswa WHERE id = $id";
    mysqli_query($conn, $sql);
    echo "<script>
     alert('data berhasil dihapus');
     document.location.href = 'index.php';
        </script>";
}

echo "tidak ada id";

?>

