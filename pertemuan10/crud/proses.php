<?php
include('koneksi.php'); // Menghubungkan dengan file koneksi.php untuk terhubung dengan database

$aksi = $_GET['aksi']; // Mendapatkan nilai aksi dari parameter URL
$nama = $_POST['nama']; // Mendapatkan nilai nama dari input form
$jenis_kelamin = $_POST['jenis_kelamin']; // Mendapatkan nilai jenis kelamin dari input form
$alamat = $_POST['alamat']; // Mendapatkan nilai alamat dari input form
$no_telp = $_POST['no_telp']; // Mendapatkan nilai nomor telepon dari input form

if($aksi == 'tambah') { // Jika aksi adalah tambah
    // Query untuk menambahkan data anggota ke dalam database
    $query = "INSERT INTO anggota (nama, jenis_kelamin, alamat, no_telp) VALUES ('$nama', '$jenis_kelamin', '$alamat', '$no_telp')";

    // Menjalankan query dan mengecek apakah berhasil atau tidak
    if (mysqli_query($koneksi, $query)) {
        header("Location: index.php"); // Jika berhasil, redirect ke halaman index.php
        exit();
    } else {
        echo "Gagal menambahkan data: " . mysqli_error($koneksi); // Jika gagal, tampilkan pesan error
    }

    mysqli_close($koneksi); // Menutup koneksi database
}
?>
