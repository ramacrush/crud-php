<?php 
// $nama = "Rama";

$siswa =[
    [
        "nama" => "adi",
        "umur" => 90,
        "alamat" => "pandeglang",
        "jenis" => "laki-laki",
        "nohp" => 209394239
    ],
    [
        "nama" => "yayan",
        "umur" => 20,
        "alamat" => "pandeglang",
        "jenis" => "laki-laki",
        "nohp" => 209394239
    ],
    [
        "nama" => "udin",
        "umur" => 10,
        "alamat" => "pandeglang",
        "jenis" => "laki-laki",
        "nohp" => 209394239
    ],
    [
        "nama" => "dora",
        "umur" => 20,
        "alamat" => "pandeglang",
        "jenis" => "bencong",
        "nohp" => 209394239
    ]
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table cellPadding="10" border="1">
        <thead>
            <tr>
                <th>#</th>
                <th>nama</th>
                <th>umur</th>
                <th>alamat</th>
                <th>jenis kelamin</th>
                <th>No Hp</th>
                <th>aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($siswa as $key => $value) : ?>
                <tr>
                    <td><?php echo $key + 1  ?></td>
                    <td><?php echo $value["nama"] ?></td>
                    <td><?php echo $value["umur"] ?></td>
                    <td><?php echo $value["alamat"] ?></td>
                    <td><?php echo $value["jenis"] ?></td>
                    <td><?php echo $value["nohp"] ?></td>
                </tr>
                <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>