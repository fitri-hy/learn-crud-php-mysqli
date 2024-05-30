<?php include "koneksi/database.php"; ?> <!-- Memanggil Koneksi database -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h2>Belajar CRUD Data Siswa</h2>
	<p>Penjelasan pada setiap fungsi ada di dalam file kodenya.<p>
	<div class="center-button">
        <a href="operasi/tambah.php" class="button">Tambah Data</a> <!-- Tombol untuk beralih ke operasi tambah data-->
    </div>
    <br><br>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php
        $sql = "SELECT * FROM students"; // Memilih table students dari database
        $result = $koneksi->query($sql); // Menjalankan kueri SQL untuk mengambil data dari database
        if ($result->num_rows > 0) { // Memeriksa apakah ada data yang ditemukan
            while ($row = $result->fetch_assoc()) { // Mengambil setiap baris hasil kueri
                echo "<tr>
                        <td>".$row["id"]."</td> <!-- Menampilkan data id yang ada di table students -->
                        <td>".$row["nama"]."</td> <!-- Menampilkan data nama yang ada di table students -->
                        <td>".$row["umur"]."</td> <!-- Menampilkan data umur yang ada di table students -->
                        <td>".$row["alamat"]."</td> <!-- Menampilkan data alamat yang ada di table students -->
                        <td>
                            <a href='operasi/edit.php?id=".$row["id"]."'>Edit</a> | <!-- Membuat tautan Edit data dengan menggunakan ID -->
                            <a href='operasi/hapus.php?id=".$row["id"]."'>Hapus</a> <!-- Membuat tautan Hapus data dengan menggunakan ID -->
                        </td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Tidak ada data</td></tr>"; // Menampilkan pesan jika tidak ada data yang ditemukan
        }
        ?>
    </table>
</body>
</html>
