<?php include 'koneksi.php';

$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$tahun_terbit = $_POST['tahun_terbit'];
$stok = $_POST['stok'];

$query = "INSERT INTO buku(judul,penulis,tahun_terbit,stok) VALUES('$judul','$penulis','$tahun_terbit','$stok')";
mysqli_query($koneksi, $query);

header("Location: index.php");
