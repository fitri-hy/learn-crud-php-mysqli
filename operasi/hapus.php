<?php
include "../koneksi/database.php"; // Memanggil Koneksi database

$id = $_GET["id"]; // Mengambil nilai ID dari parameter URL menggunakan metode GET (href='operasi/hapus.php?id=".$row["id"]."')

// Membuat pernyataan SQL untuk menghapus data dari tabel 'students' berdasarkan ID
$sql = "DELETE FROM students WHERE id=$id";
if ($koneksi->query($sql) === TRUE) { // Menjalankan pernyataan SQL dan memeriksa apakah berhasil
    header("Location: ../index.php"); // Beralih ke halaman index.php jika data berhasil di hapus
    exit(); // Menghentikan eksekusi skrip
} else {
    echo "Error deleting record: " . $koneksi->error; // Tampilkan pesan kesalahan jika ada kesalahan.
}

$koneksi->close(); // Menutup koneksi database
?>
