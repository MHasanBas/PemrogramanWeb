<?php
// Membutuhkan file Crud.php yang berisi definisi kelas Crud
require_once 'Crud.php';

// Membuat objek Crud
$crud = new Crud();

// Mendapatkan ID dari URL
$id = $_GET['id'];

// Membaca data jabatan berdasarkan ID
$tampil = $crud->readById($id);

// Memeriksa apakah metode permintaan adalah POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mengambil nilai jabatan dan keterangan dari formulir
    $jabatan = $_POST['jabatan'];
    $keterangan = $_POST['keterangan'];

    // Memperbarui data jabatan
    $crud->update($id, $jabatan, $keterangan);

    // Mengalihkan pengguna kembali ke halaman utama setelah pembaruan
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jabatan</title>
    <!-- Mengimpor Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Jabatan</h2>
        <!-- Formulir untuk mengedit jabatan -->
        <form action="" method="post">
            <div class="form-group">
                <label for="jabatan">Jabatan:</label>
                <!-- Input untuk jabatan -->
                <input type="text" name="jabatan" id="jabatan" class="form-control" value="<?php echo $tampil['jabatan']; ?>" required>
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan:</label>
                <!-- Input untuk keterangan -->
                <textarea name="keterangan" id="keterangan" cols="30" rows="10" class="form-control" required><?php echo $tampil['keterangan']; ?></textarea>
            </div>
            <!-- Input tersembunyi untuk menyimpan ID -->
            <input type="hidden" name="id" value="<?php echo $tampil['id']; ?>">
            <!-- Tombol untuk memperbarui jabatan -->
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    <!-- Mengimpor jQuery dan Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
