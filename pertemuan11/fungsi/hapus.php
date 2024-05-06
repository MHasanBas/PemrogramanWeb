<?php
// Memulai sesi PHP
session_start();

// Memeriksa apakah sesi 'username' tidak kosong, menandakan pengguna sudah masuk
if (!empty($_SESSION['username'])) {
    // Membutuhkan file koneksi.php untuk koneksi ke database
    require '../config/koneksi.php';
    // Membutuhkan file pesan_kilat.php untuk menampilkan pesan kilat
    require '../fungsi/pesan_kilat.php';
    // Membutuhkan file anti_injection.php untuk melindungi dari serangan SQL injection
    require '../fungsi/anti_injection.php';

    // Memeriksa apakah terdapat data yang dikirim melalui metode GET dengan kunci 'jabatan'
    if (!empty($_GET['jabatan'])) {
        // Mengamankan data dari serangan SQL injection dengan menggunakan fungsi antiinjection()
        $id = antiinjection($koneksi, $_GET['id']);

        // Query SQL untuk menghapus anggota yang terkait dengan jabatan yang akan dihapus
        $query1 = "DELETE FROM anggota WHERE jabatan_id = '$id'";
        // Menjalankan query SQL dan menampilkan pesan sesuai dengan hasilnya
        if (mysqli_query($koneksi, $query1)) {
            // Jika penghapusan anggota berhasil, lanjutkan untuk menghapus jabatan
            $query2 = "DELETE FROM jabatan WHERE id = '$id'";
            // Menjalankan query SQL dan menampilkan pesan sesuai dengan hasilnya
            if (mysqli_query($koneksi, $query2)) {
                pesan('success', "Jabatan Telah Terhapus.");
            } else {
                pesan('danger', "Gagal Menghapus Jabatan Karena: " . mysqli_error($koneksi));
            }
        } else {
            pesan('danger', "Gagal Menghapus Anggota yang Terkait dengan Jabatan Ini Karena: " . mysqli_error($koneksi));
        }
        
        // Mengarahkan pengguna kembali ke halaman jabatan setelah proses selesai
        header("Location: ../index.php?page=jabatan");

    // Memeriksa apakah terdapat data yang dikirim melalui metode GET dengan kunci 'anggota'
    } elseif (!empty($_GET['anggota'])) {
        // Mengamankan data dari serangan SQL injection dengan menggunakan fungsi antiinjection()
        $id = antiinjection($koneksi, $_GET['id']);

        // Query SQL untuk menghapus data anggota
        $query1 = "DELETE FROM anggota WHERE user_id = '$id'";
        // Menjalankan query SQL dan menampilkan pesan sesuai dengan hasilnya
        if (mysqli_query($koneksi, $query1)) {
            // Setelah menghapus anggota, lanjutkan untuk menghapus pengguna
            $query2 = "DELETE FROM user WHERE id = '$id'";
            // Menjalankan query SQL dan menampilkan pesan sesuai dengan hasilnya
            if (mysqli_query($koneksi, $query2)) {
                pesan('success', "Anggota Telah Terhapus.");
            } else {
                pesan('danger', "Gagal Menghapus Data Pengguna Karena: " . mysqli_error($koneksi));
            }
        } else {
            pesan('danger', "Gagal Menghapus Anggota Karena: " . mysqli_error($koneksi));
        }
        
        // Mengarahkan pengguna kembali ke halaman anggota setelah proses selesai
        header("Location: ../index.php?page=anggota");
    }
}
?>
