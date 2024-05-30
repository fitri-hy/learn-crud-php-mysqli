<?php
include "../koneksi/database.php"; // Memanggil Koneksi database

$id = $_GET["id"]; // Mengambil nilai ID dari parameter URL menggunakan metode GET (href='operasi/edit.php?id=".$row["id"]."')

// Membuat pernyataan SQL untuk mengedit data dari tabel 'students' berdasarkan ID
$sql = "SELECT * FROM students WHERE id=$id";
$result = $koneksi->query($sql); // Menjalankan kueri SQL untuk mengambil data dari database
$row = $result->fetch_assoc(); // Mengambil baris hasil kueri sebagai array asosiatif
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Siswa</title>
	<link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h2>Edit Data Siswa</h2>
    <form action="../proses_data/proses_edit.php" method="POST"> <!-- Membuat form yang akan mengirim data ke proses_edit.php dengan metode POST -->
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>"> <!-- Menyimpan ID siswa dalam input tersembunyi -->
        Nama: <input type="text" name="nama" value="<?php echo $row['nama']; ?>"><br> <!-- Input untuk nama siswa, dengan nilai awal dari database -->
        Umur: <input type="text" name="umur" value="<?php echo $row['umur']; ?>"><br> <!-- Input untuk umur siswa, dengan nilai awal dari database -->
        Alamat: <input type="text" name="alamat" value="<?php echo $row['alamat']; ?>"><br> <!-- Input untuk alamat siswa, dengan nilai awal dari database -->
        <input type="submit" value="Simpan"> <!-- Tombol untuk menyimpan perubahan -->
    </form>
</body>
</html>
