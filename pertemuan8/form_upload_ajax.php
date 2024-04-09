<!--
<!DOCTYPE html>
<html>
<head>
    <title>Unggah File Dokumen</title>
</head>
<body>
    
    <!-- Formulir untuk mengunggah file -->
    <!-- <form id="upload-form" action="upload_ajax.php" method="post" enctype="multipart/form-data">
        <!-- Input untuk memilih file yang akan diunggah -->
        <!-- <input type="file" name="file" id="file"> -->
        <!-- Tombol untuk mengirim formulir -->
        <!-- <input type="submit" name="submit" value="Unggah"> -->
    <!-- </form> -->
    <!-- Elemen div untuk menampilkan status unggahan -->
    <!-- <div id="status"></div> -->

    <!-- Penautan ke jQuery -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <!-- Penautan ke skrip JavaScript untuk mengelola unggahan -->
    <!-- <script src="upload.js"></script> -->
<!-- </body>
</html> 
-->


<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="upload.css">
    <title>Unggah File Dokumen</title>
</head>

<body>
    <!-- Container untuk formulir unggahan -->
    <div class="upload-form-container">
        <h2>Unggah File Dokumen</h2>
        <!-- Formulir unggahan -->
        <form id="upload-form" action="upload.php" method="post" enctype="multipart/form-data">
            <!-- Container untuk input file -->
            <div class="file-input-container">
                <input type="file" name="file" id="file" class="file-input">
                <label for="file" class="file-label">Pilih File</label>
            </div>
            <!-- Tombol unggah -->
            <button type="submit" name="submit" class="upload-button" id="upload-button" disabled>Unggah</button>
        </form>
        <!-- Elemen div untuk menampilkan status unggahan -->
        <div id="status" class="upload-status"></div>
    </div>

    <!-- Penautan ke jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Penautan ke skrip JavaScript untuk mengelola unggahan -->
    <script src="upload.js"></script>
</body>

</html>
-->
