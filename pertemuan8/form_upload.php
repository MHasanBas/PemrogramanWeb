<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
    <!-- Form untuk mengunggah file -->
    <h2>Upload File</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <!-- Input untuk memilih file yang akan diunggah -->
        <input type="file" name="fileToUpload" id="fileToUpload">
        <!-- Tombol untuk mengirimkan formulir -->
        <input type="submit" value="Upload File" name="submit">
    </form>
</body>
</html>
