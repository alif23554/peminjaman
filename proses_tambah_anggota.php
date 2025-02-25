<?php include 'koneksi.php';

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$email = $_POST['email'];

$query = "INSERT INTO anggota(nama, alamat, no_telp, email) VALUES('$nama', '$alamat', '$no_telp', '$email')";
mysqli_query($koneksi, $query);

header("Location: daftar_anggota.php");