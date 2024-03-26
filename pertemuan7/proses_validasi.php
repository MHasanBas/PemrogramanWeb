<?php
// Memeriksa apakah halaman dipanggil dengan metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai nama dan email dari formulir
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $errors = array();

    // Validasi Nama
    if (empty($nama)) {
        $errors[] = "Nama harus diisi.";
    }

    // Validasi Email
    if (empty($email)) {
        $errors[] = "Email harus diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid.";
    }

    // Jika ada kesalahan validasi
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    } else {
        // Lanjutkan dengan pemrosesan data jika semua validasi berhasil
        // Misalnya, menyimpan data ke database atau mengirim email
        echo "Data berhasil dikirim: Nama = $nama, Email = $email";
    }
    // Validasi password di PHP
    $password = $_POST['password'];
    if (strlen($password) < 8) {
        echo "Password harus memiliki minimal 8 karakter.";
        // Atau tambahkan logika lain sesuai kebutuhan, seperti kembalikan kode status HTTP yang sesuai
        exit; // Keluar dari skrip PHP setelah memberikan pesan kesalahan
    }
}
?>