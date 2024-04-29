<?php
// Mulai sesi PHP
session_start();

// Cek apakah token CSRF sudah ada di sesi
if (empty($_SESSION['csrf_token'])) {
    // Jika tidak ada, buat token baru dengan menggunakan fungsi random_bytes() untuk menghasilkan byte acak, kemudian konversi menjadi format hexadecimal dengan bin2hex()
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>
