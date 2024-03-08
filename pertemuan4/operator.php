<?php
$a = 10; // Mendefinisikan variabel $a dengan nilai 10
$b = 5; // Mendefinisikan variabel $b dengan nilai 5

echo "================================== <br>";
echo "OPERASI ARITMATIKA <br>";
echo "================================== <br>";

$hasilTambah = $a + $b; // Menambahkan nilai variabel $a dan $b
$hasilKurang = $a - $b; // Mengurangkan nilai variabel $a dengan $b
$hasilKali = $a * $b ; // Mengalikan nilai variabel $a dan $b
$hasilBagi = $a % $b; // Membagi nilai variabel $a dengan $b dan mengambil sisa hasil bagi
$pangkat = $a ** $b; // Menghitung pangkat dari variabel $a dengan eksponen variabel $b

echo "Hasil Penambahan: " . $hasilTambah . "<br>"; // Menampilkan hasil penambahan
echo "Hasil Pengurangan: " . $hasilKurang . "<br>"; // Menampilkan hasil pengurangan
echo "Hasil Perkalian: " . $hasilKali . "<br>"; // Menampilkan hasil perkalian
echo "Hasil Pembagian: " . $hasilBagi . "<br>"; // Menampilkan hasil pembagian
echo "Hasil Pangkat: " . $pangkat . "<br><br>"; // Menampilkan hasil pangkat

echo "================================== <br>";
echo "OPERASI  PERBANDINGAN <br>";
echo "================================== <br>";

$hasilSama = $a == $b; // Menguji apakah variabel $a sama dengan variabel $b
$hasilTidakSama = $a != $b; // Menguji apakah variabel $a tidak sama dengan variabel $b
$hasilLebihKecil = $a < $b; // Menguji apakah variabel $a lebih kecil dari variabel $b
$hasilLebihBesar = $a > $b; // Menguji apakah variabel $a lebih besar dari variabel $b
$hasilLebihKecilSama = $a <= $b; // Menguji apakah variabel $a lebih kecil atau sama dengan variabel $b
$hasilLebihBesarSama = $a >= $b; // Menguji apakah variabel $a lebih besar atau sama dengan variabel $b

echo "Apakah a sama dengan b: " . ($hasilSama ? "Ya" : "Tidak") . "<br>"; // Menampilkan hasil apakah variabel $a sama dengan variabel $b
echo "Apakah a tidak sama dengan b: " . ($hasilTidakSama ? "Ya" : "Tidak") . "<br>"; // Menampilkan hasil apakah variabel $a tidak sama dengan variabel $b
echo "Apakah a lebih kecil dari b: " . ($hasilLebihKecil ? "Ya" : "Tidak") . "<br>"; // Menampilkan hasil apakah variabel $a lebih kecil dari variabel $b
echo "Apakah a lebih besar dari b: " . ($hasilLebihBesar ? "Ya" : "Tidak") . "<br>"; // Menampilkan hasil apakah variabel $a lebih besar dari variabel $b
echo "Apakah a lebih kecil atau sama dengan b: " . ($hasilLebihKecilSama ? "Ya" : "Tidak") . "<br>"; // Menampilkan hasil apakah variabel $a lebih kecil atau sama dengan variabel $b
echo "Apakah a lebih besar atau sama dengan b: " . ($hasilLebihBesarSama ? "Ya" : "Tidak") . "<br><br>"; // Menampilkan hasil apakah variabel $a lebih besar atau sama dengan variabel $b

echo "================================== <br>";
echo "OPERASI  LOGIKA <br>";
echo "================================== <br>";

$hasilAnd = $a && $b; // Menguji apakah kedua variabel memiliki nilai true
$hasilOr = $a || $b; // Menguji apakah salah satu dari dua variabel memiliki nilai true
$hasilNotA = !$a; // Menguji apakah variabel $a memiliki nilai false
$hasilNotB = !$b; // Menguji apakah variabel $b memiliki nilai false

echo "a AND b bernilai : " . ($hasilAnd ? "true" : "false") . "<br>"; // Menampilkan hasil operasi logika AND
echo "a OR b bernilai : " . ($hasilOr ? "true" : "false") . "<br>"; // Menampilkan hasil operasi logika OR
echo "NOT a bernilai : " . ($hasilNotA ? "true" : "false") . "<br>"; // Menampilkan hasil operasi logika NOT untuk variabel $a
echo "NOT b bernilai : " . ($hasilNotB ? "false" : "false") . "<br><br>"; // Menampilkan hasil operasi logika NOT untuk variabel $b

echo "================================== <br>";
echo "OPERASI  PENUGASAN <br>";
echo "================================== <br>";

$a += $b; // Menambahkan nilai variabel $b ke variabel $a
echo "Operasi penambahan a += b = $a <br>"; // Menampilkan hasil operasi penugasan penambahan
$a -= $b; // Mengurangkan nilai variabel $b dari variabel $a
echo "Operasi pengurangan a -= b = $a <br>"; // Menampilkan hasil operasi penugasan pengurangan
$a *= $b; // Mengalikan nilai variabel $a dengan variabel $b
echo "Operasi perkalian a *= b = $a <br>"; // Menampilkan hasil operasi penugasan perkalian
$a /= $b; // Membagi nilai variabel $a dengan variabel $b
echo "Operasi pembagian a /= b = $a <br>"; // Menampilkan hasil operasi penugasan pembagian
$a %= $b; // Menghitung sisa hasil bagi nilai variabel $a dengan variabel $b
echo "Operasi modulus a %= b = $a <br>"; // Menampilkan hasil operasi penugasan modulus

echo "================================== <br>";
echo "OPERASI IDENTITAS <br>";
echo "================================== <br>";

$hasilIdentik = $a === $b; // Menguji apakah nilai dan tipe data variabel $a sama dengan variabel $b
$hasilTidakIdentik = $a !== $b; // Menguji apakah nilai dan tipe data variabel $a tidak sama dengan variabel $b

echo " a == b: " . ($hasilIdentik ? "true" : "false") . "<br>"; // Menampilkan hasil operasi identitas
echo " a !== b: " . ($hasilTidakIdentik ? "true" : "false") . "<br>"; // Menampilkan hasil operasi identitas

echo "================================== <br>";
echo "STUDI KASUS <br>";
echo "================================== <br>";

$jumlahKursi = 45; // Mendefinisikan jumlah kursi
$jumlahPelanggan = 28; // Mendefinisikan jumlah pelanggan
$sisaKursiKosong = $jumlahKursi - $jumlahPelanggan; // Menghitung sisa kursi kosong
$persentase = $sisaKursiKosong / $jumlahKursi * 100; // Menghitung persentase kursi kosong
echo "Persentase kursi yang masih kosong adalah ". $persentase ."%"; // Menampilkan hasil persentase kursi kosong
?>
