<?php
// Memulai sesi jika belum dimulai
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Memeriksa apakah pengguna telah login (level sudah diset)
if (!empty($_SESSION['level'])) {
    // Memasukkan file koneksi ke database
    require 'config/koneksi.php';

    // Memasukkan file fungsi untuk pesan kilat
    require 'fungsi/pesan_kilat.php';

    // Memasukkan header template untuk area admin
    include 'admin/template/header.php';

    // Memuat halaman yang diminta berdasarkan parameter 'page'
    if (!empty($_GET['page'])) {
        // Jika parameter 'page' tersedia, memuat halaman dari folder module yang sesuai
        include 'admin/module/' . $_GET['page'] . '/index.php';
    } else {
        // Jika tidak ada parameter 'page', memuat halaman utama dari template home
        include 'admin/template/home.php';
    }

    // Memasukkan footer template untuk area admin
    include 'admin/template/footer.php';
} else {
    // Jika pengguna belum login, redirect ke halaman login
    header("Location: login.php");
}
?>
