<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-200 space-y-3 p-3">
    
    <form action="create.php" class="space-y-3 sm:w-96 w-full p-3 bg-white" method="post">
        <label class="font-bold" for="nama">nama</label>
        <input type="text" class="w-full p-3 rounded bg-gray-100 focus:outline-blue-500" id="nama" required name="nama">
        <label class="font-bold" for="kelas">kelas</label>
        <input type="text" class="w-full p-3 rounded bg-gray-100 focus:outline-blue-500" id="kelas" required name="kelas">
        <label class="font-bold" for="alamat">alamat</label>
        <input type="text" class="w-full p-3 rounded bg-gray-100 focus:outline-blue-500" id="alamat" required name="alamat">
        <label class="font-bold" for="nohp">nohp</label>
        <input type="number" class="w-full p-3 rounded bg-gray-100 focus:outline-blue-500" id="nohp" required name="nohp">
        <button name="simpan" type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">tambah</button>
    <a href="index.php" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded inline-block">kembali</a>
</form>
</body>
</html>