<?php include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$email = $_POST['email'];

$query = "UPDATE anggota SET nama = '$nama', alamat = '$alamat', no_telp = '$no_telp', email = '$email' WHERE id = $id";

mysqli_query($koneksi, $query);

header("Location: daftar_anggota.php");