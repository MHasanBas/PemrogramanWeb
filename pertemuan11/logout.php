<?php
// Periksa apakah sesi tidak aktif
if (session_status() == PHP_SESSION_NONE) {
    // Mulai sesi
    session_start();
    // Hancurkan sesi yang ada
    session_destroy();
    // Arahkan pengguna kembali ke halaman utama (index.php)
    header('location: index.php');
}
?>
