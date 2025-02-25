<?php include 'koneksi.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Anggota</title>
    <link rel="stylesheet" href="tambahanggota.css">
</head>

<body>

    <h1>Tambah Anggota</h1>
    <form action="proses_tambah_anggota.php" method="post">
        Nama : <input type="text" name="nama"><br>
        Alamat : <input type="text" name="alamat"><br>
        No. Telepon : <input type="text" name="no_telp"><br>
        Email : <input type="email" name="email"><br>
        <input type="submit" value="Tambah">
        <a href="index.php">Kembali</a>

    </form>

</body>

</html>