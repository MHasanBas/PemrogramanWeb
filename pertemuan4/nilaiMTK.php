<?php
// Daftar nilai dari 10 siswa
$nilai_siswa = array(85, 92, 78, 64, 90, 75, 88, 79, 70, 96);

// Mengurutkan nilai dari terkecil ke terbesar
sort($nilai_siswa);

// Mengabaikan dua nilai terendah dan dua nilai tertinggi
$nilai_siswa = array_slice($nilai_siswa, 2, 6);

// Menghitung total nilai
$total_nilai = array_sum($nilai_siswa);

// Menghitung rata-rata nilai
$rata_rata = $total_nilai / count($nilai_siswa);

// Menampilkan hasil
echo "Daftar nilai setelah mengabaikan dua nilai terendah dan dua nilai tertinggi: " . implode(", ", $nilai_siswa) . "<br>";
echo "Total nilai: " . $total_nilai . "<br>";
echo "Rata-rata nilai: " . $rata_rata . "<brt>";
?>