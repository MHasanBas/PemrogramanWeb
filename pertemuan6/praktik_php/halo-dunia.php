<?php

// Mengambil nilai parameter 'nama' dari URL, dengan menggunakan '@' untuk menekan peringatan jika key-nya kosong
$nama = @$_GET['nama'];

// Mengambil nilai parameter 'usia' dari URL, dengan menggunakan '@' untuk menekan peringatan jika key-nya kosong
$usia = @$_GET['usia'];

// Menampilkan pesan sapaan dengan menggunakan variabel $nama dan $usia
echo "Halo {$nama}! Apakah benar Anda berusia {$usia} tahun?";
?>

<<<<<<< HEAD
// code dari variabelget
=======
// code dari variabelget
>>>>>>> c336d02523c00bc78343fd17c62c459c4383e899
