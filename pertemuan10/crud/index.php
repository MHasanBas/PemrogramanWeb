<!DOCTYPE html>
<html>
<head>
<title>Data Anggota</title>
<!-- Memasukkan file CSS -->
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<!-- Judul halaman -->
<h2>Data Anggota</h2>
<!-- Tombol untuk menambah anggota -->
<a href="create.php" class="btn-tambah">Tambah Anggota</a>
<?php
// Memasukkan file koneksi.php
include('koneksi.php');

// Query untuk mengambil data anggota dari database
$query = "SELECT * FROM anggota order by id desc";
$result = mysqli_query($koneksi, $query);

// Menampilkan data anggota dalam tabel jika ada
if (mysqli_num_rows($result) > 0) {
    $no = 1;
    echo "<table>";
    echo "<tr><th>No</th><th>Nama</th><th>Jenis Kelamin</th><th>Alamat</th><th>No. Telp</th><th>Aksi</th></tr>";
    while ($row = mysqli_fetch_array($result)) {
        // Konversi jenis kelamin menjadi teks
        $kelamin = ($row["jenis_kelamin"] === 'L') ? 'Laki-Laki' : 'Perempuan';
        // Menampilkan data anggota dalam baris tabel
        echo "<tr>
            <td>" . $no++ . "</td><td>" . $row["nama"] . "</td>
            <td>" . $kelamin . "</td><td>" . $row["alamat"] . "</td>
            <td>" . $row["no_telp"] . "</td>
            <td><a href='edit.php?id=" . $row["id"] . "'>Edit</a> |
            <a href='#' onclick='konfirmasiHapus(" . $row["id"] . ", \"" . $row["nama"] . "\")'>Hapus</a></td>
        </tr>";
    }
    echo "</table>";
} else {
    // Menampilkan pesan jika tidak ada data
    echo "Tidak ada data.";
}

// Menutup koneksi ke database
mysqli_close($koneksi);
?>
</div>
<!-- Script JavaScript untuk konfirmasi penghapusan data -->
<script>
function konfirmasiHapus(id, nama) {
    // Menampilkan konfirmasi penghapusan
    var konfirmasi = confirm("Apakah Anda yakin ingin menghapus data dengan Nama " + nama + "?");
    // Jika dikonfirmasi, maka arahkan ke proses hapus data
    if (konfirmasi) {
        window.location.href = "proses.php?aksi=hapus&id=" + id;
    }
}
</script>
</body>
</html>