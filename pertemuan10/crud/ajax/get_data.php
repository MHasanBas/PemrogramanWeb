<?php
// Mulai sesi PHP
session_start();

// Sertakan file koneksi ke database
include 'koneksi.php';

// Sertakan file yang berisi fungsi untuk melindungi formulir dari serangan CSRF
include 'csrf.php';

// Ambil ID anggota yang dikirimkan melalui metode POST
$id = $_POST['id'];

// Query untuk mengambil data anggota berdasarkan ID
$query = "SELECT * FROM anggota WHERE id=? ORDER BY id DESC";
$sql = $db1->prepare($query);
$sql->bind_param("i", $id); 
$sql->execute();
$result = $sql->get_result();

// Inisialisasi array untuk menyimpan data anggota
$anggota = array();

// Loop melalui hasil query dan simpan data anggota ke dalam array
while($row = $result->fetch_assoc()) {
    $anggota['id'] = $row["id"];
    $anggota['nama'] = $row["nama"];
    $anggota['jenis_kelamin'] = $row["jenis_kelamin"];
    $anggota['alamat'] = $row["alamat"];
    $anggota['no_telp'] = $row["no_telp"];
}

// Mengembalikan data anggota dalam format JSON
echo json_encode($anggota);

// Tutup koneksi ke database
$db1->close();
?>
