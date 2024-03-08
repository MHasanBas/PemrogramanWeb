<?php
// Skor pemain
$skor_pemain = 600; 

// Batas skor untuk mendapatkan hadiah tambahan
$batas_hadiah = 500;

// Menghitung total skor pemain
echo "Total skor pemain adalah: " . $skor_pemain . "<br>";

// Menentukan apakah pemain mendapatkan hadiah tambahan
$pesan_hadiah = ($skor_pemain > $batas_hadiah) ? "YA" : "TIDAK";
echo "Apakah pemain mendapatkan hadiah tambahan? " . $pesan_hadiah . "<br>";
?>