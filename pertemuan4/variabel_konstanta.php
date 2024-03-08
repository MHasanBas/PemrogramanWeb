<?php
// Variabel dan penjumlahan
$angka1 = 10; 
$angka2 = 5; 
$hasil = $angka1 + $angka2; 
echo "Hasil penjumlahan $angka1 dan $angka2 adalah $hasil.<br><br>"; // Menampilkan hasil penjumlahan

// Variabel boolean
$benar = true; 
$salah = false; 
echo "Variabel benar: $benar,<br> Variabel salah: $salah<br><br>"; // Menampilkan nilai variabel boolean

// Mendefinisikan konstanta untuk nilai tetap
define("NAMA_SITUS", "WebsiteKu.com"); 
define("TAHUN_PENDIRIAN", 2023); 
echo "Selamat datang di " . NAMA_SITUS . ", situs yang didirikan pada tahun " . TAHUN_PENDIRIAN . "."; // Menampilkan pesan selamat datang dengan menggunakan nilai konstanta
?>
