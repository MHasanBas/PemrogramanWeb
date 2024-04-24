<?php
// Mulai sesi PHP
session_start();

// Menghancurkan sesi
session_destroy();

// Menampilkan pesan bahwa pengguna berhasil logout
echo "Anda berhasil logout";
?>
