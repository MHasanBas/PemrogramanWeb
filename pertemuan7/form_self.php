<!DOCTYPE html> 
<html>
<head>
    <title>Form Input PHP</title> <!-- Judul halaman -->
</head>
<body>
    <h2>Form Input PHP</h2> <!-- Judul formulir -->
    <?php
    // Inisialisasi variabel
    $namaErr = "";
    $nama = "";

    // Cek apakah form sudah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validasi nama (contoh: pastikan nama tidak kosong)
        if (empty($_POST["nama"])) {
            $namaErr = "Nama harus diisi!";
        } else {
            $nama = $_POST["nama"];
            echo "Data berhasil disimpan!";
        }
    }
    ?>
    <!-- Formulir input -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nama">Nama :</label> <!-- Label untuk input nama -->
        <input type="text" name="nama" id="nama" value="<?php echo $nama; ?>"> <!-- Input teks untuk nama -->
        <span class="error"><?php echo $namaErr; ?></span><br><br> <!-- Pemberitahuan kesalahan untuk nama -->
        
        <input type="submit" name="submit" value="Submit"> <!-- Tombol submit -->
    </form>
</body>
</html>
