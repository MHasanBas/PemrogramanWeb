<?php
// Periksa apakah formulir telah disubmit
if (isset($_POST["submit"])) {
    // Direktori tujuan untuk menyimpan dokumen
    $targetDirectory = "documents/";
    // Path lengkap ke file tujuan
    $targetFile = $targetDirectory . basename($_FILES["documentToUpload"]["name"]);
    // Ekstensi file dokumen yang diunggah
    $documentFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Daftar ekstensi file yang diizinkan untuk diunggah
    $allowedExtensions = array("txt", "pdf", "doc", "docx");

    // Ukuran maksimum file yang diizinkan (dalam bytes)
    $maxFileSize = 10 * 1024 * 1024; // 10 MB

    // Periksa apakah jenis dokumen dan ukuran file sesuai dengan yang diizinkan
    if (in_array($documentFileType, $allowedExtensions) && $_FILES["documentToUpload"]["size"] <= $maxFileSize) {
        // Pindahkan file yang diunggah ke direktori tujuan
        if (move_uploaded_file($_FILES["documentToUpload"]["tmp_name"], $targetFile)) {
            echo "Dokumen berhasil diunggah.";
        } else {
            echo "Gagal mengunggah dokumen.";
        }
    } else {
        echo "Jenis dokumen tidak valid atau melebihi ukuran maksimum yang diizinkan.";
    }
}
?>
