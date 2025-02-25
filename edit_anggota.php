<?php include 'koneksi.php' ?>

<?php
$id = $_GET['id'];
$query = "SELECT * FROM anggota WHERE id = $id";

$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Anggota</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Edit Anggota</h1>
    <form action="proses_edit_anggota.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        Nama: <input type="text" name="nama" value="<?php echo $row['nama']; ?>"><br>
        Alamat: <input type="text" name="alamat" value="<?php echo $row['alamat']; ?>"><br>
        Telepon: <input type="text" name="no_telp" value="<?php echo $row['no_telp']; ?>"><br>
        Email: <input type="email" name="email" value="<?php echo $row['email']; ?>"><br>
        <input type="submit" value="Simpan">
        <a href="daftar_anggota.php">Kembali</a>
    </form>


</body>

</html>