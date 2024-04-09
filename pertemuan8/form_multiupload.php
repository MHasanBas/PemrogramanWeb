<!DOCTYPE html>
<html>

<head>
    <title>Multiupload Dokumen</title>
</head>

<body>
    <!-- Form untuk mengunggah dokumen -->
    <h2>Unggah Dokumen</h2>
    <form action="proses_upload.php" method="post" enctype="multipart/form-data">
        <!-- Input untuk memilih file-file yang akan diunggah -->
        <input type="file" name="files[]" multiple="multiple" accept=".pdf, .doc, .docx" />
        <!-- Tombol untuk mengirimkan formulir -->
        <input type="submit" value="Unggah" />
    </form>
</body>

</html>
