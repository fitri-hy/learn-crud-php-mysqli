<?php
// Koneksi ke database
$host = "localhost"; // Host (Biarkan seperti ini)
$username = "root"; // Username
$password = "root"; // Password
$database = "demo"; // Nama Database

$koneksi = new mysqli($host, $username, $password, $database); // Membuat koneksi baru ke database dengan menggunakan objek mysqli

if ($koneksi->connect_error) { // Memeriksa apakah terjadi kesalahan saat menghubungkan ke database
    die("Koneksi gagal: " . $koneksi->connect_error); // Jika terjadi kesalahan, hentikan eksekusi dan tampilkan pesan kesalahan
}
?>
