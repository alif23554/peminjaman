<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "peminjaman";

$koneksi = mysqli_connect($host, $user, $password, $database);

if (!$koneksi) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}