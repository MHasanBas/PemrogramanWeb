<!DOCTYPE html> 
<html>

<head>
    <title>Form Input PHP</title> 
</head>

<body>
    <h2>Form Input PHP</h2> 
    <form method="post" action="proses_form.php"> <!-- Membuat form dengan metode POST dan aksi diarahkan ke proses_form.php saat disubmit -->
        <label for="nama">Nama :</label> <!-- Label untuk input nama -->
        <input type="text" name="nama" id="nama" required><br><br> <!-- Input teks untuk nama dengan id dan atribut wajib diisi -->

        <label for="email">Email :</label> <!-- Label untuk input email -->
        <input type="email" name="email" id="email" required><br><br> <!-- Input email dengan id dan atribut wajib diisi -->

        <input type="submit" name="submit" value="Submit"> <!-- Tombol submit -->
    </form>
</body>

</html> 
