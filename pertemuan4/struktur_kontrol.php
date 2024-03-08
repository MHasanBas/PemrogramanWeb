<?php
$nilaiNumerik = 92;

// Menentukan nilai huruf berdasarkan rentang nilai numerik
if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A<br>";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B<br>";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C<br>";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D<br>";
}

// Inisialisasi variabel untuk perhitungan jarak tempuh atlet
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

// Menghitung jumlah hari yang dibutuhkan atlet untuk mencapai jarak target
while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

// Menampilkan jumlah hari yang dibutuhkan atlet untuk mencapai jarak target
echo "<br>";
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.<br><br>";

// Inisialisasi variabel untuk perhitungan jumlah buah yang akan dipanen
$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

// Menghitung jumlah buah yang akan dipanen
for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

// Menampilkan jumlah buah yang akan dipanen
echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah<br><br>";

// Inisialisasi variabel untuk perhitungan total skor ujian
$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

// Menghitung total skor ujian
foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

// Menampilkan total skor ujian
echo "Total skor ujian adalah: $totalSkor<br><br>";

// Inisialisasi variabel untuk nilai siswa
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

// Menentukan status lulus/tidak lulus untuk setiap nilai siswa
foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}
?>
