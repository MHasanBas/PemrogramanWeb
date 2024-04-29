<?php
// Mendefinisikan konstanta untuk host, username, password, dan nama database
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB1', 'prakwebdb');

// Membuat objek koneksi ke database menggunakan mysqli
$db1 = new mysqli(HOST, USER, PASS, DB1);

// Memeriksa apakah terdapat kesalahan saat melakukan koneksi
if ($db1->connect_error) {
    // Jika terjadi kesalahan, tampilkan pesan kesalahan
    die("Koneksi Gagal: " . $db1->connect_error);
}

// Koneksi berhasil, tampilkan pesan sukses (jika diperlukan)
// echo "Koneksi Berhasil";

// Tambahkan komentar untuk menjelaskan fungsi dan informasi koneksi
?>
