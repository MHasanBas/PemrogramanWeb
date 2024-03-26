<?php
$umur; // Deklarasi variabel umur

if(isset($umur) && $umur >= 18){ // Memeriksa apakah variabel umur telah di-set dan nilainya lebih dari atau sama dengan 18
    echo "Anda sudah dewasa"; // Menampilkan pesan bahwa seseorang sudah dewasa
} else {
    echo "Anda belum dewasa atau variabel 'umur' tidak ditemukan."; // Menampilkan pesan bahwa seseorang belum dewasa atau variabel umur tidak ditemukan
}

$data = array("nama" => "Jane", "usia" => 25); // Membuat sebuah array dengan elemen nama dan usia

if(isset($data["nama"])){ // Memeriksa apakah elemen 'nama' ada dalam array $data
    echo "Nama: " . $data["nama"]; // Menampilkan nama dari array $data jika ada
} else {
    echo "Variabel 'nama' tidak ditemukan dalam array."; // Menampilkan pesan bahwa variabel 'nama' tidak ditemukan dalam array $data jika tidak ada
}
?>
