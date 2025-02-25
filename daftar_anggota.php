<?php include 'koneksi.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Anggota</title>
    <link rel="stylesheet" href="daftaranggota.css">
</head>

<body>
    <h1>Daftar Anggota</h1>
    <div class="button-container">
        <a href="tambah_anggota.php" class="tambah-anggota">Tambah Anggota</a>
    </div>
    <table>
        <tr>
            <th>Nama Anggota</th>
            <th>Alamat</th>
            <th>Nomor Telepon</th>
            <th>Email</th>
            <th>Option</th>
        </tr>
    </table>
    <?php
    $query = "SELECT * FROM anggota";
    $result = mysqli_query($koneksi, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>" . $row['nama'] . "</td>
                <td>" . $row['alamat'] . "</td>
                <td>" . $row['no_telp'] . "</td>
                <td>" . $row['email'] . "</td>
                <td>
                    <a href='edit_anggota.php?id=" . $row['id'] . "'>Edit</a>
                    <a href='hapus_anggota.php?id=" . $row['id'] . "' onclick='return confirm('Apakah Anda yakin ingin menghapus data ini?')'>Hapus</a>
                </td>
            </tr>";
    }
    ?>
</body>

</html>