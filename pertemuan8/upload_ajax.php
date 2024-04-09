<?php
// Memeriksa apakah file diunggah
if (isset($_FILES['file'])) {
    $errors = array();

    // Memeriksa apakah file telah diunggah sebelum mengakses informasi file
    if ($_FILES['file']['error'] === UPLOAD_ERR_OK) {
        // Mendapatkan informasi file yang diunggah
        $file_name = $_FILES['file']['name'];
        $file_size = $_FILES['file']['size'];
        $file_tmp = $_FILES['file']['tmp_name'];
        $file_type = $_FILES['file']['type'];

        // Mendapatkan ekstensi file
        @$file_ext = strtolower(end(explode('.', $_FILES['file']['name'])));

        // Menentukan ekstensi file yang diizinkan
        $extensions = array("pdf", "doc", "docx", "txt");

        // Memeriksa apakah ekstensi file diizinkan
        if (!in_array($file_ext, $extensions)) {
            $errors[] = "Ekstensi file yang diizinkan adalah PDF, DOC, DOCX, atau TXT.";
        }

        // Memeriksa ukuran file
        if ($file_size > 2097152) { // 2 MB (2 * 1024 * 1024)
            $errors[] = 'Ukuran file tidak boleh lebih dari 2 MB';
        }

        // Jika tidak ada kesalahan, pindahkan file ke direktori penyimpanan
        if (empty($errors)) {
            move_uploaded_file($file_tmp, "documents/" . $file_name);
            echo "File berhasil diunggah.";
        }
    }

    // Jika ada kesalahan, tampilkan pesan kesalahan
    if (!empty($errors)) {
        echo implode(" ", $errors);
    }
}
?>
