<?php include 'koneksi.php';

$id = $_GET['id'];

$query_delete_anggota = "DELETE FROM anggota WHERE id = $id";

mysqli_query($koneksi, $query_delete_anggota);

header("Location: daftar_anggota.php");