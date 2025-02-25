<?php include 'koneksi.php'; ?>
<?php
$id = $_GET['id'];
$query = "SELECT * FROM buku WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
    <link rel="stylesheet" href="keempat.css">
</head>

<body>
    <h1>Edit Buku</h1>
    <form action="proses_edit_buku.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        Judul: <input type="text" name="judul" value="<?php echo $row['judul']; ?>"><br>
        Penulis: <input type="text" name="penulis" value="<?php echo $row['penulis']; ?>"><br>
        Tahun Terbit: <input type="number" name="tahun_terbit" value="<?php echo $row['tahun_terbit']; ?>"><br>
        Stok: <input type="number" name="stok" value="<?php echo $row['stok']; ?>"><br>
        <input type="submit" value="Update">

    </form>
</body>

</html>