<?php
// Memeriksa apakah sesi telah dimulai, jika belum, mulai sesi
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Menginclude file fungsi pesan kilat dan file koneksi database
include "fungsi/pesan_kilat.php";
include "config/koneksi.php";
?>
<!doctype html>
<html lang="en" data-bs-theme="auto">
<head>
    <!-- Sertakan skrip color-modes.js -->
    <script src="assets/js/color-modes.js"></script>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Nama Anda">
    <meta name="generator" content="Hugo 0.118.2">
    <title>Aplikasi Kantor Hasan</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link rel="icon" href="assets/img/favicons/favicon.ico">
    <!-- Sertakan Bootstrap CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Gaya kustom -->
    <link href="assets/custom/sign-in.css" rel="stylesheet">
</head>
<body class="d-flex align-items-center py-4 bg-body-tertiary">
    <!-- Simpan SVG secara tersembunyi untuk digunakan sebagai simbol -->
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <!-- Di sini Anda dapat menambahkan simbol SVG jika diperlukan -->
    </svg>
    <!-- Dropdown untuk memilih tema -->
    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
        <!-- Tombol dropdown dengan ikon dan label tema -->
        <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
            <svg class="bi my-1 theme-icon-active" width="len" height="1em">
                <use href="#circle-half"></use>
            </svg>
            <!-- Label untuk tombol dropdown -->
            <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
        </button>
        <!-- Dropdown menu untuk memilih tema -->
        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
            <!-- Opsi tema terang -->
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
                    <!-- Ikona dan teks untuk tema terang -->
                    <svg class="bi me-2 opacity-50 theme-icon" width="len" height="1">
                        <use href="#sun-fill"></use>
                    </svg>
                    Light
                    <!-- Tanda centang yang tersembunyi jika tema terang dipilih -->
                    <svg class="bi m-auto d-none" width="le" height="1">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <!-- Opsi tema gelap -->
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                    <!-- Ikona dan teks untuk tema gelap -->
                    <svg class="bi me-2 opacity-50 theme-icon" width="ien" height="1">
                        <use href="#moon-stars-fill"></use>
                    </svg>
                    <!-- Tanda centang yang tersembunyi jika tema gelap dipilih -->
                    <svg class="bi s-auto d-none" width="le" height="1">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <!-- Opsi tema otomatis -->
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
                    <!-- Ikona dan teks untuk tema otomatis -->
                    <svg class="bi me-2 opacity-58 theme-icon" width="iem" height="1e">
                        <use href="#circle-half"></use>
                    </svg>
                    Auto
                    <!-- Tanda centang yang tersembunyi jika tema otomatis dipilih -->
                    <svg class="bi ms-auto d-none" width="le" height="1">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
        </ul>
    </div>
    <!-- Bagian utama form login -->
    <main class="form-signin w-100 m-auto">
        <!-- Form untuk melakukan login -->
        <form action="cek_login.php" method="post">
            <!-- Logo Bootstrap dan judul -->
            <img class="b-4" src="assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Lakukan Login</h1>
            <?php
            // Tampilkan pesan kilat jika ada
            if (isset($_SESSION['_flashdata'])) {
                echo "<br>";
                foreach ($_SESSION['_flashdata'] as $key => $val) {
                  echo get_flashdata($key);
                }
              }     
            ?>
            <!-- Input username -->
            <div class="form-floating">
                <input type="text" class="form-control" name="username" placeholder="username" required>
                <label for="username">Username</label>
            </div>
            <!-- Input password -->
            <div class="form-floating">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <!-- Tombol untuk melakukan login -->
            <button class="btn btn-primary w-100 py-2" type="submit">Masuk</button>
            <!-- Teks keterangan hak cipta -->
            <p class="mt-5 mb-3 text-body-secondary">&copy; 2017-2023</p>
        </form>
    </main>
    <!-- Sertakan skrip Bootstrap -->
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
