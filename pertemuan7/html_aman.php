<!DOCTYPE html>
<html>
<head>
    <title>Form Input PHP</title>
</head>
<body>
    <h2>Form Input PHP</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="input">Input:</label>
        <input type="text" name="input" id="input"><br><br>

        <!-- Menambahkan input untuk alamat email -->
        <label for="email">Email:</label>
        <input type="email" name="email" id="email"><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    // Periksa apakah ada data yang dikirimkan melalui metode POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil nilai input dan bersihkan dari karakter khusus menggunakan htmlspecialchars
        $input = $_POST['input'];
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

        // Tampilkan hasil input yang sudah dibersihkan
        echo "Input yang diterima: " . $input;

        // Memeriksa apakah input adalah email yang valid
        $email = $_POST['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Lanjutkan dengan pengolahan email yang aman
            echo "<br>Email yang diterima: " . $email;
        } else {
            // Tangani input yang tidak valid
            echo "<br>Input email tidak valid!";
        }
    }
    ?>
</body>
</html>
