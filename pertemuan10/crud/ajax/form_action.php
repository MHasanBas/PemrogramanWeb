<?php
// Mulai sesi PHP
session_start();

// Sertakan file koneksi ke database
include 'koneksi.php';

// Sertakan file yang berisi fungsi untuk melindungi formulir dari serangan CSRF
include 'csrf.php';

// Ambil data yang dikirimkan melalui metode POST dan bersihkan dari karakter yang tidak diinginkan
$id = stripslashes(strip_tags(htmlspecialchars($_POST['id'], ENT_QUOTES)));
$nama = stripslashes(strip_tags(htmlspecialchars($_POST['nama'], ENT_QUOTES)));
$jenis_kelamin = stripslashes(strip_tags(htmlspecialchars($_POST['jenis_kelamin'], ENT_QUOTES)));
$alamat = stripslashes(strip_tags(htmlspecialchars($_POST['alamat'], ENT_QUOTES)));
$no_telp = stripslashes(strip_tags(htmlspecialchars($_POST['no_telp'], ENT_QUOTES)));

// Periksa apakah id kosong, jika kosong, lakukan penambahan data anggota, jika tidak kosong, lakukan pembaruan data anggota
if($id == "") {    
    // Query untuk menambahkan data anggota baru
    $query = "INSERT into anggota (nama, jenis_kelamin, alamat, no_telp) VALUES (?, ?, ?, ?)";
    $sql = $db1->prepare($query);
    $sql->bind_param("ssss", $nama, $jenis_kelamin, $alamat, $no_telp); 
    $sql->execute();
} else {
    // Query untuk memperbarui data anggota yang sudah ada
    $query = "UPDATE anggota SET nama=?, jenis_kelamin=?, alamat=?, no_telp=? WHERE id=?";
    $sql = $db1->prepare($query);
    $sql->bind_param("ssssi", $nama, $jenis_kelamin, $alamat, $no_telp, $id); 
    $sql->execute();
}

// Memberikan respons dalam format JSON untuk menandakan keberhasilan operasi
echo json_encode(['success' => 'Sukses']);

// Tutup koneksi ke database
$db1->close();
?>
