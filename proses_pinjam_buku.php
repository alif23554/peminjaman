<?php include 'koneksi.php';

$buku_id = $_POST['buku_id'];
$anggota_id = $_POST['anggota_id'];
$tanggal_pinjam = $_POST['tanggal_pinjam'];

$query_stok = "SELECT stok FROM buku WHERE id = '$buku_id'";
$result_stok = mysqli_query($koneksi, $query_stok);
$row_stok = mysqli_fetch_assoc($result_stok);
$stok = $row_stok['stok'];

if ($stok > 0) {

    $query = "INSERT INTO peminjaman (buku_id, anggota_id, tanggal_pinjam) VALUES ('$buku_id', '$snggota_id', '$tanggal_pinjam')";
    mysqli_query($koneksi, $query);

    $query_stok = "UPDATE buku SET stok = stok - 1 WHERE id = '$buku_id'";
    mysqli_query($koneksi, $query_stok);

    $query_peminjaman = "UPDATE buku SET jumlah_peminjaman = jumlah_peminjaman + 1 WHERE id = '$buku_id'";
    mysqli_query($koneksi, $query_peminjaman);

    header("Location: index.php");
} else {

    die("Maaf, stok buku ini sudah habis. Tidak dapat dipinjam.");
}