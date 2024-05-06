<?php
// Fungsi untuk menetapkan pesan kilat ke dalam sesi
function set_flashdata($key = "", $value = "")
{
    // Memeriksa apakah kunci dan nilai tidak kosong
    if (!empty($key) || empty($value)) {
        // Menetapkan pesan kilat ke dalam sesi
        $_SESSION['_flashdata'][$key] = $value;
        // Mengembalikan true jika berhasil
        return true;
    }
    // Mengembalikan false jika gagal
    return false;
}

// Fungsi untuk mendapatkan pesan kilat dari sesi dan menghapusnya
function get_flashdata($key = "")
{
    // Memeriksa apakah kunci tidak kosong dan pesan kilat tersedia dalam sesi
    if (!empty($key) && isset($_SESSION['_flashdata'][$key])) {
        // Mengambil pesan kilat dari sesi
        $data = $_SESSION['_flashdata'][$key];
        // Menghapus pesan kilat dari sesi
        unset($_SESSION['_flashdata'][$key]);
        // Mengembalikan pesan kilat
        return $data;
    } else {
        // Menampilkan pesan kesalahan jika pesan kilat tidak ditemukan
        echo "<script>alert(' Flash Message \'{$key}\' is not defined.')</script>";
    }
}

// Fungsi untuk menampilkan pesan berdasarkan jenisnya
function pesan($key = "", $pesan = "")
{
    // Menetapkan pesan berdasarkan jenisnya ke dalam pesan kilat
    if ($key == "info") {
        set_flashdata("info", "<div class='alert alert-primary alert-dismissible fade show' role='alert'>
        <strong>Info!</strong> {$pesan}
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>");
    } elseif ($key == "success") {
        set_flashdata("success", "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> {$pesan}
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>");
    } elseif ($key == "danger") {
        set_flashdata("danger", "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
        <strong>Danger!</strong> {$pesan}
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>");
    } elseif ($key == "warning") {
        set_flashdata("warning", "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
        <strong>Warning!</strong> {$pesan}
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>");
    }
}
?>
