<?php
include "../koneksi/database.php"; // Memanggil Koneksi database

$id = $_POST["id"]; // Mengambil nilai ID dari data yang dikirim melalui metode POST (form edit name="id")
$nama = $_POST["nama"]; // Mengambil nilai nama dari data yang dikirim melalui metode POST (form edit name="nama")
$umur = $_POST["umur"]; // Mengambil nilai umur dari data yang dikirim melalui metode POST (form edit name="umur")
$alamat = $_POST["alamat"]; // Mengambil nilai alamat dari data yang dikirim melalui metode POST (form edit name="alamat")

// Membuat pernyataan SQL untuk memperbarui data dalam tabel 'students' berdasarkan ID
$sql = "UPDATE students SET nama='$nama', umur='$umur', alamat='$alamat' WHERE id=$id";
if ($koneksi->query($sql) === TRUE) {
    header("Location: ../index.php"); // Beralih ke halaman index.php jika data berhasil di ubah
    exit();
} else {
    echo "Error updating record: " . $koneksi->error; // Tampilkan pesan kesalahan jika ada kesalahan.
}

$koneksi->close(); // Menutup koneksi database
?>
