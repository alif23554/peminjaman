<?php include 'koneksi.php'; ?>
<?php
$id = $_GET['id'];
$query = "SELECT * FROM buku WHERE id = $id";
$result = mysqli_query($koneksi, $query);

// Inisialisasi variabel $stok dengan nilai default
$stok = 0;

// Cek apakah query berhasil dan data ditemukan
if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $stok = $row['stok']; // Ambil nilai stok dari database
} else {
    // Jika buku tidak ditemukan, tampilkan pesan error
    die("Buku tidak ditemukan.");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pinjam Buku</title>
    <link rel="stylesheet" href="kelima.css">
</head>

<body>
    <h1>Pinjam Buku</h1>
    <?php if ($stok > 0): ?>
        <form action="proses_pinjam_buku.php" method="post">
            <input type="hidden" name="buku_id" value="<?php echo $row['id']; ?>">
            Judul Buku: <?php echo $row['judul']; ?><br>
            Nama Peminjam:
            <select name="anggota_id" required>
                <?php
                $query_anggota = "SELECT * FROM anggota";
                $result_anggota = mysqli_query($koneksi, $query_anggota);
                while ($row_anggota = mysqli_fetch_assoc($result_anggota)) {
                    echo "<option value='" . $row_anggota['id'] . "'>" . $row_anggota['nama'] . "</option>";
                }
                ?>
            </select><br>


            Tanggal Pinjam: <input type="date" name="tanggal_pinjam" required><br>
            <input type="submit" value="Pinjam">
        </form>
    <?php else: ?>
        <p style="color: red; font-weight: bold;">Maaf, stok buku ini sudah habis. Tidak dapat dipinjam.</p>
        <a href="index.php">Kembali ke Daftar Buku</a>
    <?php endif; ?>
</body>

</html>