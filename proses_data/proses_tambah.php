<?php
include "../koneksi/database.php"; // Memanggil Koneksi database

$nama = $_POST["nama"]; // Mengambil nilai nama dari data yang dikirim melalui metode POST (form tambah name="nama")
$umur = $_POST["umur"]; // Mengambil nilai nama dari data yang dikirim melalui metode POST (form tambah name="umur")
$alamat = $_POST["alamat"]; // Mengambil nilai nama dari data yang dikirim melalui metode POST (form tambah name="alamat")

// Membuat pernyataan SQL untuk menambah data dalam tabel 'students'
$sql = "INSERT INTO students (nama, umur, alamat) VALUES ('$nama', '$umur', '$alamat')";
if ($koneksi->query($sql) === TRUE) {
    header("Location: ../index.php"); // Beralih ke halaman index.php jika data berhasil di tambahkan
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error; // Tampilkan pesan kesalahan jika ada kesalahan.
}

$koneksi->close(); // Menutup koneksi database
?>
