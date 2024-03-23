<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<!-- Formulir untuk mengirim data dengan metode POST ke halaman PHP itu sendiri -->
Nama: <input type="text" name="fname">
<input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengumpulkan nilai dari input field
    $name = $_POST['fname']; // Mengambil nilai yang dikirim melalui metode POST
    if (empty($name)) {
        echo "Nama kosong";
    } else {
        echo $name;
    }
}
?>
<!-- Komentar tambahan jika diperlukan -->
</body>
</html>
