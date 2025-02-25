<?php include 'koneksi.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Peminjam</title>
    <link rel="stylesheet" href="kedua.css">
</head>

<body>
    <h1>Daftar Peminjam</h1>
    <a href="index.php">Kembali ke Daftar Buku</a>
    <table>
        <tr>
            <th>Judul Buku</th>
            <th>Nama Peminjam</th>
            <th>Tanggal Pinjam</th>
        </tr>
        <?php
        $query = "SELECT peminjaman.id, buku.judul, peminjaman.nama_peminjam, peminjaman.tanggal_pinjam, buku.jumlah_peminjaman
                  FROM peminjaman 
                  JOIN buku ON peminjaman.buku_id = buku.id";
        $result = mysqli_query($koneksi, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>" . $row['judul'] . "</td>
                    <td>" . $row['nama_peminjam'] . "</td>
                    <td>" . $row['tanggal_pinjam'] . "</td>
                </tr>";
        }
        ?>
    </table>
</body>

</html>