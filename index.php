<?php include 'koneksi.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <link rel="stylesheet" href="pertama.css">
</head>

<body>
    <h1>Daftar Buku</h1>
    <div class="button-container">
        <a href="tambah_buku.php" class="tambah-buku">Tambah Buku</a>
        <a href="daftar_anggota.php" class="daftar_anggota">Daftar Anggota</a>
        <a href="daftar_peminjam.php" class="daftar-peminjam">Daftar Peminjam</a>
    </div>
    <table>
        <tr>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
            <th>Stok</th>
            <th>Jumlah Dipinjam</th>
            <th>Option</th>
        </tr>
        <?php
        $query = "SELECT * FROM buku";
        $result = mysqli_query($koneksi, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>" . $row['judul'] . "</td>
                    <td>" . $row['penulis'] . "</td>
                    <td>" . $row['tahun_terbit'] . "</td>
                    <td>" . $row['stok'] . "</td>
                    <td>" . $row['jumlah_peminjaman'] . "</td>
                    <td>
                        <a href='edit_buku.php?id=" . $row['id'] . "'>Edit</a>
                        <a href='hapus_buku.php?id=" . $row['id'] . "' onclick='return confirm(\"Apakah anda yakin ingin menghapus data ini?\")'>Hapus</a>
                        <a href='pinjam_buku.php?id=" . $row['id'] . "'>Pinjam</a>
                    </td>
                </tr>";
        }
        ?>
    </table>
</body>

</html>