<?php 
require "db.php";
$siswa = mysqli_query($conn, "SELECT * FROM siswa ");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISWA</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
</head>
<body class="bg-blue-200 space-y-3 p-3" >
<a href="tambah.php" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">tambah data</a>
    <table class="table rable-auto border bg-red-300 rounded" cellPadding="10" border="6">
        <thead>
            <tr>
                <th>#</th>
                <th>nama</th>
                <th>kelas</th>
                <th>alamat</th>
                <th>No Hp</th>
                <th>aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($siswa as $key => $value) : ?>
                <tr>
                    <td><?php echo $key + 1  ?></td>
                    <td><?php echo $value["nama"] ?></td>
                    <td><?php echo $value["kelas"] ?></td>
                    <td><?php echo $value["alamat"] ?></td>
                    <td><?php echo $value["nohp"] ?></td>
                    <td>
                        <a class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" href="hapus.php?id=<?php echo $value['id']; ?>">hapus </a>
                    
                        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="edit.php?id=<?php echo $value['id']; ?>">edit </a>
                    </td>

                </tr>
                <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>