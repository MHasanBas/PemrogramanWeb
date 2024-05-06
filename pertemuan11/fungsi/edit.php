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
        $id = antiinjection($koneksi, $_POST['id']);
        $jabatan = antiinjection($koneksi, $_POST['jabatan']);
        $keterangan = antiinjection($koneksi, $_POST['keterangan']);

        // Query SQL untuk mengupdate data jabatan
        $query = "UPDATE jabatan SET jabatan = '$jabatan' ,keterangan = '$keterangan' WHERE id = '$id'";

        // Menjalankan query SQL dan menampilkan pesan sesuai dengan hasilnya
        if (mysqli_query($koneksi, $query)) {
            pesan('success', "Jabatan Telah Diubah.");
        } else {
            pesan('danger', "Mengubah Jabatan Karena: " . mysqli_error($koneksi));
        }
        
        // Mengarahkan pengguna kembali ke halaman jabatan setelah proses selesai
        header("Location: ../index.php?page=jabatan");

    // Memeriksa apakah terdapat data yang dikirim melalui metode GET dengan kunci 'anggota'
    } elseif (!empty($_GET['anggota'])) {
        // Mengamankan data dari serangan SQL injection dengan menggunakan fungsi antiinjection()
        $user_id = antiinjection($koneksi, $_POST['id']);
        $nama = antiinjection($koneksi, $_POST['nama']);
        $jabatan = antiinjection($koneksi, $_POST['jabatan']);
        $jenis_kelamin = antiinjection($koneksi, $_POST['jenis_kelamin']);
        $alamat = antiinjection($koneksi, $_POST['alamat']);
        $no_telp = antiinjection($koneksi, $_POST['no_telp']);
        $username = antiinjection($koneksi, $_POST['username']);

        // Query SQL untuk mengupdate data anggota
        $query_anggota = "UPDATE anggota SET nama = '$nama' ,jabatan_id = '$jabatan',jenis_kelamin = '$jenis_kelamin',alamat = '$alamat',no_telp = '$no_telp' WHERE user_id = '$user_id'";

        // Menjalankan query SQL dan menampilkan pesan sesuai dengan hasilnya
        if (mysqli_query($koneksi, $query_anggota)) {
            // Memeriksa apakah password baru diinputkan
            if (!empty($_POST['password'])) {
                // Mendapatkan password baru dan mengenkripsinya
                $password = $_POST['password'];
                $salt = bin2hex(random_bytes(16));
                $combine_password = $salt . $password;
                $hashed_password = password_hash($combine_password, PASSWORD_BCRYPT);

                // Query SQL untuk mengupdate data pengguna (username dan password)
                $query_user = "UPDATE user SET username = '$username' ,password = '$hashed_password', salt = '$salt' WHERE id = '$user_id'";

                // Menjalankan query SQL dan menampilkan pesan sesuai dengan hasilnya
                if (mysqli_query($koneksi, $query_user)) {
                    pesan('success', "Anggota Telah Diubah.");
                } else {
                    pesan('warning', "Data Anggota Berhasil Diubah Tetapi Password Gagal Diubah Karena: " . mysqli_error($koneksi));
                }
            } else {
                // Jika tidak ada password baru diinputkan, hanya mengupdate username
                $query_user = "UPDATE user SET username = '$username' WHERE id = '$user_id'";
                if (mysqli_query($koneksi, $query_user)) {
                    pesan('success', "Anggota Telah Diubah.");
                } else {
                    pesan('warning', "Data Anggota Berhasil Diubah Tetapi Username Gagal Diubah Karena: " . mysqli_error($koneksi));
                }
            }
        } else {
            pesan('danger', "Mengubah Anggota Karena: " . mysqli_error($koneksi));
        }
        
        // Mengarahkan pengguna kembali ke halaman anggota setelah proses selesai
        header("Location: ../index.php?page=anggota");
    }
}
?>
