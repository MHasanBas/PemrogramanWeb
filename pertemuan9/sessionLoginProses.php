<?php
// Mengimpor file koneksi.php untuk menghubungkan ke database
include "koneksi.php";

// Mengambil data username dan password yang dikirimkan melalui metode POST
$username = $_POST['username'];
$password = md5($_POST['password']); // Mengenkripsi password menggunakan fungsi md5

// Membuat query untuk memeriksa apakah username dan password cocok dengan yang ada di database
$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = mysqli_query($connect, $sql);

// Menghitung jumlah baris hasil query
$cek = mysqli_num_rows($result);

// Memeriksa apakah ada baris hasil query
if ($cek > 0) {
    // Jika ada, memulai sesi dan menetapkan variabel sesi 'username' dan 'status' 
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = 'login';
?>
    <!-- Menampilkan pesan berhasil login dan tautan ke halaman homeSession.php -->
    Anda Berhasil Login, silahkan menuju <a href="homeSession.php">Halaman Home</a>
<?php
} else {
?>
    <!-- Menampilkan pesan gagal login dan tautan untuk login kembali -->
    Gagal login, silahkan login lagi <a href="sessionLoginForm.html">Halaman Login</a>
<?php
    // Menampilkan pesan kesalahan jika ada
    echo mysqli_error($connect);
}
?>
