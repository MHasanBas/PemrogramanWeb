<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Data Dosen</title> <!-- Judul halaman -->
<style>
    table {
        border-collapse: collapse; /* Menggabungkan batas antar sel */
        width: 50%; /* Lebar tabel */
        margin: 20px auto; /* Margin atas dan bawah 20px, dan secara otomatis ditengah */
    }
    th, td {
        border: 1px solid #ddd; /* Garis batas sel */
        padding: 8px; /* Ruang di dalam sel */
        text-align: left; /* Penjajaran teks di dalam sel */
    }
    th {
        background-color: #f2f2f2; /* Warna latar belakang sel header */
    }
</style>
</head>
<body>
<?php
// Data tentang seorang dosen disimpan dalam sebuah array asosiatif
$Dosen = [
    'nama' => 'Elok Nur Hamdana', // Nama dosen
    'domisili' => 'Malang', // Domisili dosen
    'jenis_kelamin' => 'Perempuan' // Jenis kelamin dosen
];

// Membuat tabel untuk menampilkan informasi dosen
echo "<table>";
echo "<tr><th>Attribute</th><th>Value</th></tr>"; // Baris header tabel
// Baris-baris tabel untuk menampilkan atribut dan nilainya
echo "<tr><td>Nama</td><td>{$Dosen['nama']}</td></tr>"; // Baris untuk menampilkan nama dosen
echo "<tr><td>Domisili</td><td>{$Dosen['domisili']}</td></tr>"; // Baris untuk menampilkan domisili dosen
echo "<tr><td>Jenis Kelamin</td><td>{$Dosen['jenis_kelamin']}</td></tr>"; // Baris untuk menampilkan jenis kelamin dosen
echo "</table>"; // Penutup tabel
?>
</body>
</html>
