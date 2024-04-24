<?php
// Informasi untuk menghubungkan ke database MySQL
$servername = "localhost"; // Nama server MySQL (biasanya 'localhost')
$username = "root"; // Nama pengguna MySQL
$password = ""; // Kata sandi MySQL (dalam contoh ini kosong)
$dbname = "prakwebdb"; // Nama database yang akan digunakan

// Membuat koneksi ke database MySQL
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Memeriksa apakah koneksi berhasil
if (!$conn) {
    // Jika koneksi gagal, menampilkan pesan kesalahan dan menghentikan eksekusi skrip
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
