<?php

// Variabel berisi pesan teks
$pesan = "saya arek malang";

// Mengubah variabel $pesan menjadi array dengan menggunakan fungsi explode
$pesanPerKata = explode(" ", $pesan);

// Mengubah setiap kata dalam array menjadi kebalikannya menggunakan fungsi array_map dan strrev
$pesanPerKata = array_map(fn($kata) => strrev($kata), $pesanPerKata);

// Menggabungkan kembali array menjadi string dengan menggunakan fungsi implode
$pesan = implode(" ", $pesanPerKata);

// Menampilkan pesan yang telah dimodifikasi
echo $pesan . "<br>";

?>
