<?php
// Fungsi untuk mencegah serangan SQL injection
function antiinjection($koneksi, $data)
{
    // Menggunakan fungsi mysqli_real_escape_string untuk menghindari SQL injection
    $filter_sql = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars($data, ENT_QUOTES))));
    // Mengembalikan data yang sudah difilter
    return $filter_sql;
}
?>
