<?php
// membuat fungsi hitungUmur
function hitungUmur($thn_lahir, $thn_sekarang) {
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

// membuat fungsi perkenalan
function perkenalan($nama, $salam = "Assalamualaikum") {
    echo $salam . ", "; // Menampilkan salam
    echo "Perkenalkan, nama saya " . $nama . "<br/>"; // Menampilkan perkenalan
}

// memanggil fungsi lain
echo "Saya berusia " . hitungUmur(2001, 2023) . " tahun<br/>"; // Menampilkan usia
echo "Senang berkenalan dengan anda<br/>"; // Menampilkan pesan

// memanggil fungsi perkenalan
perkenalan("Hasan"); // Memanggil fungsi perkenalan dengan nama Hasan
?>
