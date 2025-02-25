<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = "UPDATE peminjaman SET tanggal_kembali = CURDATE() WHERE id = $id";
mysqli_query($koneksi, $query);

$query_buku = "SELECT buku_id FROM peminjaman WHERE id = $id";
$result = mysqli_query($koneksi, $query_buku);
$row = mysqli_fetch_assoc($result);
$buku_id = $row['buku_id'];

$query_stok = "UPDATE buku SET stok = stok + 1 WHERE id = $buku_id";
mysqli_query($koneksi, $query_stok);

header("Location: index.php");
