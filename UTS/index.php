<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styleVerivy.css">
    <title>Verifikasi Nomor Induk Siswa</title>
</head>
<body>
    <div class="verify-container">
        <h1>Verifikasi Nomor Induk Siswa</h1>
        <?php
        // Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Check if student ID is correct
            $student_id = $_POST["student_id"];
            // Here you can perform any validation or database lookup to verify the student ID
            // For simplicity, let's assume the correct student ID is "123456"
            if ($student_id == "123456") {
                 // Set cookie to remember the student ID
        setcookie("student_id", $student_id, time() + (86400 * 30), "/");
                // If correct, redirect to the registration form
                header("Location: registration_form.php");
                exit;
            } else {
                // If incorrect, display error message
                echo "<p class='error'>Nomor Induk Siswa tidak valid. Silakan coba lagi.</p>";
            }
        }
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="verify-form">
            <div class="input-box">
                <label for="student_id">Nomor Induk Siswa:</label>
                <input type="text" id="student_id" name="student_id" required>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
