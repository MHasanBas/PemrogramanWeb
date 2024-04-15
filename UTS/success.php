<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="styleSuccess.css">
  <title>Formulir Pendaftaran Ekstrakurikuler - Sukses</title>
</head>
<body>
  <div class="success-container">
    <h1>Terima kasih telah mendaftar!</h1>
    <h2>Informasi Pribadi:</h2>
    <p>Nama: <?php echo isset($_SESSION['nama']) ? $_SESSION['nama'] : 'Data tidak tersedia'; ?></p>
    <p>Email: <?php echo isset($_SESSION['email']) ? $_SESSION['email'] : 'Data tidak tersedia'; ?></p>
    <p>Nomor Telepon: <?php echo isset($_SESSION['phone']) ? $_SESSION['phone'] : 'Data tidak tersedia'; ?></p>
    <p>Tanggal Lahir: <?php echo isset($_SESSION['dob']) ? $_SESSION['dob'] : 'Data tidak tersedia'; ?></p>
    <p>Kelas: <?php echo isset($_SESSION['ClassNum']) ? $_SESSION['ClassNum'] : 'Data tidak tersedia'; ?></p>
    <p>Jenis Kelamin: <?php echo isset($_SESSION['gender']) ? $_SESSION['gender'] : 'Data tidak tersedia'; ?></p>
    <p>Alamat: <?php echo isset($_SESSION['alamat1']) ? $_SESSION['alamat1'] : 'Data tidak tersedia'; ?>, 
               <?php echo isset($_SESSION['kota']) ? $_SESSION['kota'] : 'Data tidak tersedia'; ?>, 
               <?php echo isset($_SESSION['kecamatan']) ? $_SESSION['kecamatan'] : 'Data tidak tersedia'; ?>, 
               <?php echo isset($_SESSION['negara']) ? $_SESSION['negara'] : 'Data tidak tersedia'; ?>, 
               <?php echo isset($_SESSION['kodepos']) ? $_SESSION['kodepos'] : 'Data tidak tersedia'; ?></p>
    <h2>Ekstrakurikuler:</h2>
    <p>Pilihan Ekstrakurikuler: <?php echo isset($_SESSION['extrakurikuler']) ? $_SESSION['extrakurikuler'] : 'Data tidak tersedia'; ?></p>
  </div>
</body>
</html>
