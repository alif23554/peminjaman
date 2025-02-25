<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
    <link rel="stylesheet" href="ketiga.css">
</head>

<body>
    <h1>Tambah Buku</h1>
    <form action="proses_tambah_buku.php" method="post">
        Judul : <input type="text" name="judul"><br>
        Penulis : <input type="text" name="penulis"><br>
        Tahun Terbit : <input type="number" name="tahun_terbit"><br>
        Stok : <input type="number" name="stok"><br>
        <input type="submit" value="Tambah">
    </form>

</body>

</html>