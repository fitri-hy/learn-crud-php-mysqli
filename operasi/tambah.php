<?php include "../koneksi/database.php"; ?> <!-- Memanggil Koneksi database -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
	<link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h2>Tambah Data Siswa</h2>
    <form action="../proses_data/proses_tambah.php" method="POST"> <!-- Membuat form yang akan mengirim data ke proses_tambah.php dengan metode POST -->
		Nama: <input type="text" name="nama"><br> <!-- Input untuk nama siswa -->
		Umur: <input type="text" name="umur"><br> <!-- Input untuk umur siswa -->
		Alamat: <input type="text" name="alamat"><br> <!-- Input untuk alamat siswa -->
		<input type="submit" value="Tambah"> <!-- Tombol untuk menambahkan data -->
    </form>
</body>
</html>
