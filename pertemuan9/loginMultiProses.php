<?php
// Mengimpor file koneksi.php untuk menghubungkan ke database
include "koneksi.php";

// Mengambil data username dan password yang dikirimkan melalui metode POST
$username = $_POST['username'];
$password = md5($_POST['password']); // Mengenkripsi password menggunakan fungsi md5

// Membuat query untuk memeriksa apakah username dan password cocok dengan yang ada di database
$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($result);

// Memeriksa hasil query untuk menentukan level pengguna
if ($row['level'] == 1) {
    // Jika level adalah 1 (admin), menampilkan pesan berhasil login dan tautan ke halaman homeAdmin.html
    echo "Anda berhasil login. Silahkan menuju "; ?>
    <a href="homeAdmin.html">Halaman HOME</a>
<?php
} else if ($row['level'] == 2) {
    // Jika level adalah 2 (guest), menampilkan pesan berhasil login dan tautan ke halaman homeGuest.html
    echo "Anda berhasil login. Silahkan menuju "; ?>
    <a href="homeGuest.html">Halaman HOME</a>
<?php
} else {
    // Jika tidak cocok dengan level manapun, menampilkan pesan gagal login dan tautan untuk login kembali
    echo "Anda gagal login. Silahkan "; ?>
    <a href="loginForm.html">Login kembali</a>
<?php
    // Menampilkan pesan kesalahan jika ada
    echo mysqli_error($connect);
}
?>
