<?php include 'koneksi.php';

$id = $_GET['id'];

$query_delete_peminjaman = "DELETE FROM peminjaman WHERE buku_id = $id";
mysqli_query($koneksi, $query_delete_peminjaman);

$query_delete_buku = "DELETE FROM buku WHERE id = $id";
mysqli_query($koneksi, $query_delete_buku);

header('Location: index.php');
