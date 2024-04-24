<html>

<head>
    <!-- Bagian kepala kosong -->
</head>

<body>
    <?php
    // Memulai sesi PHP
    session_start();

    // Memeriksa apakah pengguna sudah login atau belum
    if ($_SESSION['status'] == 'login') {
        // Jika sudah login, menampilkan pesan selamat datang dan tautan untuk logout
        echo "Selamat datang " . $_SESSION['username'];
    ?>
        <br> <a href="sessionLogout.php"> Log Out </a>
    <?php
    } else {
        // Jika belum login, menampilkan pesan bahwa pengguna belum login dan tautan untuk login
        echo "Anda belum login. Silahkan ";
    ?>
        <a href="sessionLoginForm.html"> Log In</a>
    <?php
    }
    ?>
</body>

</html>
