<?php include 'koneksi.php';

$id = $_POST['id'];
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$tahun_terbit = $_POST['tahun_terbit'];
$stok = $_POST['stok'];

$query = "UPDATE buku SET judul='$judul', penulis='$penulis', tahun_terbit='$tahun_terbit', stok='$stok' WHERE id=$id";
mysqli_query($koneksi, $query);

header("Location: index.php");
