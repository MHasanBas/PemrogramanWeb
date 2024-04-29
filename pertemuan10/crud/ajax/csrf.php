<?php
// Set header untuk menentukan tipe konten sebagai JSON
header('Content-Type: application/json');

// Mulai sesi PHP
session_start();

// Cek apakah token CSRF sudah ada di sesi
if(empty($_SESSION['csrf_token'])) {
    // Jika tidak ada, buat token baru dengan menggunakan fungsi random_bytes() untuk menghasilkan byte acak, kemudian konversi menjadi format hexadecimal dengan bin2hex()
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Dapatkan header permintaan HTTP
$headers = apache_request_headers();

// Periksa apakah token CSRF ada dalam header permintaan
if(isset($headers['Csrf-Token'])) {
    // Jika ada, bandingkan dengan token CSRF yang disimpan di sesi
    if($headers['Csrf-Token'] !== $_SESSION['csrf_token']) {
        // Jika token tidak cocok, keluarkan pesan kesalahan JSON
        exit(json_encode(['error' => 'Wrong CSRF Token']));
    }
} else {
    // Jika tidak ada token CSRF dalam header permintaan, keluarkan pesan kesalahan JSON
    exit(json_encode(['error' => 'No CSRF Token']));
}
?>
