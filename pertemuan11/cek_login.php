<?php
// Memulai sesi jika belum dimulai
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Memasukkan file koneksi ke database
include "config/koneksi.php";

// Memasukkan file fungsi untuk pesan kilat
include "fungsi/pesan_kilat.php";

// Memasukkan file fungsi untuk mencegah serangan injeksi SQL
include "fungsi/anti_injection.php";

// Mendapatkan username dan password dari input form, dan mencegah serangan injeksi SQL
$username = antiinjection($koneksi, $_POST['username']);
$password = antiinjection($koneksi, $_POST['password']);

// Query untuk mendapatkan informasi pengguna berdasarkan username yang dimasukkan
$query = "SELECT username, level, salt, password AS hashed_password FROM user WHERE username = '$username'";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);

// Menutup koneksi database setelah query selesai dieksekusi
mysqli_close($koneksi);

// Mendapatkan salt dan hashed password dari pengguna yang sesuai dengan username yang dimasukkan
$salt = $row['salt'];
$hashed_password = $row['hashed_password'];

// Memeriksa apakah username dan password sesuai dengan yang ada di database
if ($salt !== null && $hashed_password !== null) {
    // Menggabungkan salt dengan password yang dimasukkan
    $combined_password = $salt . $password;

    // Memverifikasi apakah password yang dimasukkan sesuai dengan hashed password di database
    if (password_verify($combined_password, $hashed_password)) {
        // Jika sesuai, set session untuk username dan level, lalu redirect ke halaman index
        $_SESSION['username'] = $row['username'];
        $_SESSION['level'] = $row['level'];
        header("Location: index.php");
    } else {
        // Jika tidak sesuai, tampilkan pesan kesalahan dan redirect ke halaman login
        pesan('danger', "Login gagal. Password Anda Salah.");
        header("Location: login.php");
    }
} else {
    // Jika username tidak ditemukan di database, tampilkan pesan peringatan dan redirect ke halaman login
    pesan('warning', "Username tidak ditemukan.");
    header("Location: login.php");
}
?>
