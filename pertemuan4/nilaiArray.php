<?php
// Data siswa beserta nilai
$data_siswa = array(
    "Alice" => 85,
    "Bob" => 92,
    "Charlie" => 78,
    "David" => 64,
    "Eva" => 90
);

// Menghitung rata-rata nilai kelas
$rata_rata_kelas = array_sum($data_siswa) / count($data_siswa);

// Mencetak daftar siswa yang nilai di atas rata-rata kelas
echo "Daftar siswa yang mendapatkan nilai di atas rata-rata kelas:<br>";
foreach ($data_siswa as $nama => $nilai) {
    if ($nilai > $rata_rata_kelas) {
        echo "$nama: $nilai<br>";
    }
}
?>