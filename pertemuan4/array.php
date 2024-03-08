<?php
// Membuat array $nilaisiswa yang berisi nilai-nilai siswa.
$nilaisiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];

// Inisialisasi array kosong untuk menyimpan nilai siswa yang lulus.
$nilaiLulus = [];

// Menggunakan loop foreach untuk memeriksa setiap nilai siswa.
foreach ($nilaisiswa as $nilai) {
    // Memeriksa apakah nilai siswa lebih besar dari atau sama dengan 70.
    if ($nilai >= 70) {
        // Jika iya, nilai tersebut disimpan dalam array $nilaiLulus.
        $nilaiLulus[] = $nilai;
    }
}

// Menampilkan daftar nilai siswa yang lulus.
echo "Daftar nilai siswa yang lulus: " . implode(', ', $nilaiLulus);
echo "<br><br>";

// Array daftar karyawan beserta pengalaman kerja mereka.
$daftarkaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];
// Array kosong untuk menyimpan nama karyawan dengan pengalaman lebih dari 5 tahun.
$karyawanPengalamanLimaTahun = [];

// Loop foreach untuk memeriksa setiap karyawan.
foreach ($daftarkaryawan as $karyawan) {
    // Memeriksa apakah pengalaman kerja karyawan lebih dari 5 tahun.
    if ($karyawan[1] > 5) {
        // Jika iya, nama karyawan tersebut disimpan dalam array $karyawanPengalamanLimaTahun.
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}

// Menampilkan daftar karyawan dengan pengalaman kerja lebih dari 5 tahun.
echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(', ', $karyawanPengalamanLimaTahun);
echo "<br><br>";

// Array multidimensi yang berisi daftar nilai mahasiswa dalam berbagai mata kuliah.
$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],

    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];
// Mata kuliah yang akan ditampilkan nilainya.
$mataKuliah = 'Fisika';

// Menampilkan daftar nilai mahasiswa dalam mata kuliah yang dipilih.
echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";
foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}
?>
