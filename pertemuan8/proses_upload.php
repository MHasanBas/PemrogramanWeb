<?php
// Lokasi penyimpanan file yang diunggah
$targetDirectory = "documents/";

// Periksa apakah direktori penyimpanan ada, jika tidak maka buat
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

if ($_FILES['files']['name'][0]) {
    $totalFiles = count($_FILES['files']['name']);

    // Daftar ekstensi file gambar yang diperbolehkan
    $allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');

    // Loop melalui semua file yang diunggah
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $targetFile = $targetDirectory . $fileName;

        // Periksa apakah file yang diunggah adalah gambar
        if (in_array($fileExtension, $allowedExtensions)) {
            // Pindahkan file yang diunggah ke direktori penyimpanan
            if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
                echo "File $fileName berhasil diunggah.<br>";
            } else {
                echo "Gagal mengunggah file $fileName.<br>";
            }
        } else {
            echo "File $fileName bukan gambar. Upload hanya diperbolehkan untuk gambar.<br>";
        }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>
