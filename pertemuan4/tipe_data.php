<?php
$a = 10; // Mendefinisikan variabel $a dengan nilai 10
$b = 5; // Mendefinisikan variabel $b dengan nilai 5
$c = $a + 5; // Menghitung nilai variabel $c dengan menambahkan 5 ke nilai variabel $a
$d = $b + (10 * 5); // Menghitung nilai variabel $d dengan menambahkan hasil perkalian 10 dan 5 ke nilai variabel $b
$e = $d - $c; // Menghitung nilai variabel $e dengan mengurangi nilai variabel $c dari nilai variabel $d

echo "Variabel a: {$a} <br>"; // Menampilkan nilai variabel $a
echo "Variabel b: {$b} <br>"; // Menampilkan nilai variabel $b
echo "Variabel c: {$c} <br>"; // Menampilkan nilai variabel $c
echo "Variabel d: {$d} <br>"; // Menampilkan nilai variabel $d
echo "Variabel e: {$e} <br>"; // Menampilkan nilai variabel $e

var_dump($e); // Menampilkan tipe data dan nilai variabel $e
echo "<br><br>";

$nilaiMatematika = 5.1; // Mendefinisikan variabel $nilaiMatematika dengan nilai 5.1
$nilaiIPA = 6.7; // Mendefinisikan variabel $nilaiIPA dengan nilai 6.7
$nilaiBahasaIndonesia = 9.3; // Mendefinisikan variabel $nilaiBahasaIndonesia dengan nilai 9.3

$rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia) / 3; // Menghitung rata-rata dari ketiga nilai

echo "Matematika: {$nilaiMatematika} <br>"; // Menampilkan nilai variabel $nilaiMatematika
echo "IPA: {$nilaiIPA} <br>"; // Menampilkan nilai variabel $nilaiIPA
echo "Bahasa Indonesia: {$nilaiBahasaIndonesia} <br>"; // Menampilkan nilai variabel $nilaiBahasaIndonesia
echo "Rata-rata: {$rataRata} <br>"; // Menampilkan nilai rata-rata

var_dump($rataRata); // Menampilkan tipe data dan nilai variabel $rataRata
echo "<br><br>";

$apakahSiswaLulus = true; // Mendefinisikan variabel $apakahSiswaLulus dengan nilai boolean true
$apakahSiswaSudahUjian = false; // Mendefinisikan variabel $apakahSiswaSudahUjian dengan nilai boolean false

var_dump($apakahSiswaLulus); // Menampilkan tipe data dan nilai variabel $apakahSiswaLulus
echo "<br>";
var_dump($apakahSiswaSudahUjian); // Menampilkan tipe data dan nilai variabel $apakahSiswaSudahUjian
echo"<br><br>";

$namaDepan = "Ibnu"; // Mendefinisikan variabel $namaDepan dengan nilai "Ibnu"
$namaBelakang = 'Jakaria'; // Mendefinisikan variabel $namaBelakang dengan nilai 'Jakaria'

$namaLengkap = "{$namaDepan} {$namaBelakang}"; // Menggabungkan variabel $namaDepan dan $namaBelakang untuk membentuk nama lengkap
$namaLengkap2 = $namaDepan .''. $namaBelakang; // Alternatif lain untuk menggabungkan nama lengkap

echo "Nama Depan: {$namaDepan} <br>"; // Menampilkan nilai variabel $namaDepan
echo 'Nama Belakang: ' . $namaBelakang . '<br>'; // Menampilkan nilai variabel $namaBelakang

echo $namaLengkap,"<br>"; // Menampilkan nama lengkap yang sudah digabungkan

$listMahasiswa = ["Wahid Abdullah", "Elmo Bachtiar", "Lendis Fabri"]; // Mendefinisikan array $listMahasiswa dengan tiga nama mahasiswa
echo $listMahasiswa[0]; // Menampilkan nama mahasiswa pertama dari array
?>   
