<?php

// nama saya
echo "M. Hasan Basri <br><br>";

// Array multidimensi untuk menyimpan biodata siswa beserta foto
$biodata_siswa = array(
    array(
        "foto" => "yanti.jpg",
        "nama" => "yanti",
        "alamat" => "Jl. hasanudin  no.1",
        "No tlp" => "085555555", // Nomor telepon disimpan sebagai string
        "umur" => 20,
        "jurusan" => "teknik informatika" // Jurusan siswa
    ),
    array(
        "foto" => "wati.jpeg",
        "nama" => "wati",
        "alamat" => "Jl. semanggi barat no. 4",
        "No tlp" => "0899999999", // Nomor telepon disimpan sebagai string
        "umur" => 22,
        "jurusan" => "sistem informasi bisnis" // Jurusan siswa
    )
);

// Menampilkan biodata siswa beserta foto
foreach ($biodata_siswa as $siswa) {
    echo '<img src="' . $siswa["foto"] . '" alt="Foto ' . $siswa["nama"] . '" width="200"><br><br>'; // Menampilkan foto siswa
    echo "Nama: " . $siswa["nama"] . "<br>"; // Menampilkan nama siswa
    echo "Alamat: " . $siswa["alamat"] . "<br>"; // Menampilkan alamat siswa
    echo "No tlp: " . $siswa["No tlp"] . "<br>"; // Menampilkan nomor telepon siswa
    echo "Umur: " . $siswa["umur"] . " tahun<br>"; // Menampilkan umur siswa
    echo "Jurusan: " . $siswa["jurusan"] . "<br><br>"; // Menampilkan jurusan siswa
}
?>
