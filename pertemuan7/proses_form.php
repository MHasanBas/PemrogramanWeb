<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { // Memeriksa apakah permintaan yang dikirim adalah metode POST
    $nama = $_POST["nama"]; // Mendapatkan nilai dari input 'nama'
    $email = $_POST["email"]; // Mendapatkan nilai dari input 'email'

    echo "Nama: " . $nama . "<br>"; // Menampilkan nama yang diterima dari formulir
    echo "Email: " . $email; // Menampilkan email yang diterima dari formulir
}
?>
