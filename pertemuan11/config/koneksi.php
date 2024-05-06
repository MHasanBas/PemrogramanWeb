<?php
// Set zona waktu default ke Asia/Jakarta
date_default_timezone_set('Asia/Jakarta');

// Membuat koneksi ke database MySQL
$koneksi = mysqli_connect("localhost", "root", "", "prakwebdb","3307");

// Memeriksa apakah terjadi kesalahan saat koneksi ke database
if (mysqli_connect_error()) {
    // Jika terjadi kesalahan, hentikan eksekusi skrip dan tampilkan pesan kesalahan
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
