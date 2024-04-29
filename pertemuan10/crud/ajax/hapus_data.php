<?php
// Mulai sesi PHP
session_start();

// Sertakan file koneksi ke database
include 'koneksi.php';

// Sertakan file yang berisi fungsi untuk melindungi formulir dari serangan CSRF
include 'csrf.php';

// Ambil ID anggota yang dikirimkan melalui metode POST
$id = $_POST['id'];    

// Query untuk menghapus data anggota berdasarkan ID
$query = "DELETE FROM anggota WHERE id=?";
$sql = $db1->prepare($query);
$sql->bind_param("i", $id); 
$sql->execute();

// Memberikan respons dalam format JSON untuk menandakan keberhasilan operasi
echo json_encode(['success' => 'Sukses']);

// Tutup koneksi ke database
$db1->close();
?>
