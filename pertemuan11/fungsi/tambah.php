<?php
// Memulai sesi PHP
session_start();

// Memeriksa apakah sesi username tidak kosong (pengguna telah masuk)
if (!empty($_SESSION['username'])) {
    // Membutuhkan file koneksi.php untuk koneksi database
    require '../config/koneksi.php';
    // Membutuhkan file pesan_kilat.php untuk fungsi pesan
    require '../fungsi/pesan_kilat.php';
    // Membutuhkan file anti_injection.php untuk fungsi antiinjection
    require '../fungsi/anti_injection.php';

    // Memeriksa apakah terdapat parameter GET 'jabatan'
    if (!empty($_GET['jabatan'])) {
        // Membersihkan data input dari serangan SQL injection
        $jabatan = antiinjection($koneksi, $_POST['jabatan']);
        $keterangan = antiinjection($koneksi, $_POST['keterangan']);
        // Query untuk menambahkan jabatan baru ke database
        $query = "INSERT INTO jabatan (jabatan, keterangan) VALUES('$jabatan', '$keterangan')";
        // Menjalankan query dan menampilkan pesan sesuai hasilnya
        if (mysqli_query($koneksi, $query)) {
            pesan(
                'success',
                "Jabatan Baru Ditambahkan."
            );
        } else {
            pesan('danger', "Gagal Menambahkan Jabatan Karena: " . mysqli_error($koneksi));
        }
        // Mengarahkan kembali ke halaman jabatan setelah penambahan jabatan
        header("Location: ../index.php?page=jabatan");
    } elseif (!empty($_GET['anggota'])) { // Jika parameter GET 'anggota' tersedia
        // Membersihkan data input dari serangan SQL injection
        $username = antiinjection($koneksi, $_POST['username']);
        $password = antiinjection($koneksi, $_POST['password']);
        $level = antiinjection($koneksi, $_POST['level']);
        $jabatan = antiinjection($koneksi, $_POST['jabatan']);
        $nama = antiinjection($koneksi, $_POST['nama']);
        $jenis_kelamin = antiinjection($koneksi, $_POST['jenis_kelamin']);
        $alamat = antiinjection($koneksi, $_POST['alamat']);
        $no_telp = antiinjection($koneksi, $_POST['no_telp']);

        // Membuat salt acak untuk password
        $salt = bin2hex(random_bytes(16));
        $combined_password = $salt . $password;
        $hashed_password = password_hash($combined_password, PASSWORD_BCRYPT);

        // Query untuk menambahkan pengguna baru ke database
        $query = "INSERT INTO user (username, password, salt, level) VALUES ('$username', '$hashed_password', '$salt','$level')";

        // Menjalankan query dan menampilkan pesan sesuai hasilnya
        if (mysqli_query($koneksi, $query)) {
            // Mendapatkan ID terakhir yang dimasukkan
            $last_id = mysqli_insert_id($koneksi);
            // Query untuk menambahkan anggota baru ke database
            $query2 = "INSERT INTO anggota (nama, jenis_kelamin, alamat, no_telp, user_id, jabatan_id) VALUES ('$nama', '$jenis_kelamin', '$alamat', '$no_telp', '$last_id','$jabatan')";

            // Menjalankan query dan menampilkan pesan sesuai hasilnya
            if (mysqli_query($koneksi, $query2)) {
                pesan('success', "Anggota Baru Ditambahkan.");
            } else {
                pesan('warning', "Gagal Menambahkan Anggota Tetapi Data Login Tersimpan Karena: " . mysqli_error($koneksi));
            }
        } else {
            pesan('danger', "Gagal Menambahkan Anggota Karena: " . mysqli_error($koneksi));
        }
        // Mengarahkan kembali ke halaman anggota setelah penambahan anggota
        header("Location: ../index.php?page=anggota");
    }
} else {
    // Mengarahkan ke halaman login jika tidak ada sesi username (pengguna belum masuk)
    header("Location: ../index.php?page=login");
}
?>
