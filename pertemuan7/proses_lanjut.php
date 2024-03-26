<?php
// Memeriksa apakah halaman dipanggil dengan metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai yang dipilih dari dropdown buah
    $selectedBuah = $_POST['buah'];

    // Memeriksa apakah warna favorit dipilih
    $selectedWarna = isset($_POST['warna']) ? $_POST['warna'] : [];

    // Mengambil jenis kelamin yang dipilih
    $selectedJenisKelamin = $_POST['jenis_kelamin'];

    // Menampilkan pesan yang menunjukkan buah yang dipilih
    echo "Anda memilih buah: " . $selectedBuah . "<br>";

    // Menampilkan pesan yang menunjukkan warna favorit yang dipilih
    if (!empty($selectedWarna)) {
        echo "Warna favorit Anda: " . implode(", ", $selectedWarna) . "<br>";
    } else {
        echo "Anda tidak memilih warna favorit.<br>";
    }

    // Menampilkan pesan yang menunjukkan jenis kelamin yang dipilih
    echo "Jenis kelamin Anda: " . $selectedJenisKelamin;
}
?>
