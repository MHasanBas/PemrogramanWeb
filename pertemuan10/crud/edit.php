<!DOCTYPE html>
<html>
<head>
<title>Edit Data Anggota</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
include('koneksi.php'); // Menghubungkan dengan file koneksi.php untuk terhubung dengan database
$id = $_GET['id']; // Mendapatkan nilai id anggota dari parameter URL
$query = "SELECT * FROM anggota WHERE id = $id"; // Query untuk mendapatkan data anggota berdasarkan id
$result = mysqli_query($koneksi, $query); // Menjalankan query
$row = mysqli_fetch_assoc($result); // Mengambil data anggota menjadi array asosiatif
mysqli_close($koneksi); // Menutup koneksi database
?>
<div class="container">
<h2>Edit Data Anggota</h2>
<form action="proses.php?aksi=ubah" method="post">
<input type="hidden" name="id" value="<?php echo $row['id']; ?>"> <!-- Input hidden untuk menyimpan id anggota -->
<label for="nama">Nama :</label>
<input type="text" name="nama" id="nama" value="<?php echo $row['nama']; ?>" required> <!-- Input untuk nama -->
<label for="jenis_kelamin">Jenis Kelamin :</label>
<div class="radio-group">
<input type="radio" name="jenis_kelamin" value="L" id="laki" <?php if ($row['jenis_kelamin'] === 'L') echo 'checked'; ?> required><label for="laki">Laki-laki</label> <!-- Radio button untuk jenis kelamin -->
<input type="radio" name="jenis_kelamin" value="P" id="perempuan" <?php if ($row['jenis_kelamin'] === 'P') echo 'checked'; ?> required><label for="perempuan">Perempuan</label> <!-- Radio button untuk jenis kelamin -->
</div>
<label for="alamat">Alamat :</label>
<input type="text" name="alamat" id="alamat" value="<?php echo $row['alamat']; ?>" required> <!-- Input untuk alamat -->
<label for="no_telp">No. Telp :</label>
<input type="text" name="no_telp" id="no_telp" value="<?php echo $row['no_telp']; ?>" required> <!-- Input untuk nomor telepon -->
<button type="submit">Simpan Perubahan</button> <a href="index.php" class="btn-kembali">Kembali</a> <!-- Tombol untuk menyimpan perubahan dan kembali ke halaman index -->
</form>
</div>
</body>
</html>
