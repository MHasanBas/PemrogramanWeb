<html>

<head>
    <!-- Bagian kepala kosong -->
</head>

<body>
    <!-- Judul halaman -->
    <h2>Keranjang Belanja</h2>

    <?php
    // Mengambil nilai jumlah novel dan jumlah buku dari cookie
    $beliNovel = $_COOKIE['beliNovel'];
    $beliBuku = $_COOKIE['beliBuku'];

    // Menampilkan jumlah novel dan jumlah buku yang ada dalam keranjang belanja
    echo "Jumlah Novel: " . $beliNovel . "<br>";
    echo "Jumlah Buku: " . $beliBuku;
    ?>
</body>

</html>
