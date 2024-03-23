<?php
// Mendefinisikan variabel global x dan y
$x = 75;
$y = 25;

// Mendefinisikan fungsi penjumlahan
function addition() {
    // Mengakses variabel global x dan y menggunakan array global $GLOBALS
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

// Memanggil fungsi penjumlahan
addition();

// Menampilkan hasil penjumlahan
echo $z;

// Komentar: Program ini akan menampilkan hasil penjumlahan dari variabel global x dan y.
?>
