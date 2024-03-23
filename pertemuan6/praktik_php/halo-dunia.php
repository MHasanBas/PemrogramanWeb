<?php

// Mengambil nilai parameter 'nama' dari URL, dengan menggunakan '@' untuk menekan peringatan jika key-nya kosong
$nama = @$_GET['nama'];

// Mengambil nilai parameter 'usia' dari URL, dengan menggunakan '@' untuk menekan peringatan jika key-nya kosong
$usia = @$_GET['usia'];

// Menampilkan pesan sapaan dengan menggunakan variabel $nama dan $usia
echo "Halo {$nama}! Apakah benar Anda berusia {$usia} tahun?";
?>
