<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Anggota</title>
    <link rel="stylesheet" href="style.css"> <!-- Menghubungkan dengan file CSS -->
</head>
<body>
    <div class="container">
        <h2>Tambah Data Anggota</h2>
        <form action="proses.php?aksi=tambah" method="post"> <!-- Form untuk menambah data anggota -->
            <label for="nama">Nama :</label> <!-- Label untuk input nama -->
            <input type="text" name="nama" id="nama" required> <!-- Input teks untuk nama anggota -->

            <label for="jenis_kelamin">Jenis Kelamin :</label> <!-- Label untuk input jenis kelamin -->
            <div class="radio-group"> <!-- Grup radio button untuk jenis kelamin -->
                <input type="radio" name="jenis_kelamin" value="L" id="laki" required><label for="laki">Laki-laki</label> <!-- Radio button untuk laki-laki -->
                <input type="radio" name="jenis_kelamin" value="P" id="perempuan" required><label for="perempuan">Perempuan</label> <!-- Radio button untuk perempuan -->
            </div>

            <label for="alamat">Alamat :</label> <!-- Label untuk input alamat -->
            <input type="text" name="alamat" id="alamat" required> <!-- Input teks untuk alamat anggota -->

            <label for="no_telp">No. Telp :</label> <!-- Label untuk input nomor telepon -->
            <input type="text" name="no_telp" id="no_telp" required> <!-- Input teks untuk nomor telepon anggota -->

            <button type="submit">Simpan Data</button> <!-- Tombol untuk menyimpan data anggota -->
            <a href="index.php" class="btn-kembali">Kembali</a> <!-- Tombol untuk kembali ke halaman utama -->
        </form>
    </div>
</body>
</html>
