<?php
// Harga produk
$harga_produk = 120000;

// Batas pembelian untuk mendapatkan diskon
$batas_diskon = 100000;

// Persentase diskon
$persentase_diskon = 20;

// Menghitung diskon
if ($harga_produk > $batas_diskon) {
    $diskon = $harga_produk * ($persentase_diskon / 100);
} else {
    $diskon = 0;
}

// Menghitung harga yang harus dibayar setelah diskon
$harga_setelah_diskon = $harga_produk - $diskon;

// Menampilkan hasil
echo "Harga produk sebelum diskon: Rp " . number_format($harga_produk) . "<br>";
echo "Diskon: Rp " . number_format($diskon) . "<br>";
echo "Harga yang harus dibayar setelah diskon: Rp " . number_format($harga_setelah_diskon) . "<br>";
?>