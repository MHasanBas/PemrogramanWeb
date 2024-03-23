<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
Name: <input type="text" name="fname">
<input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengumpulkan nilai dari input field
    $name = $_REQUEST['fname'];
    if (empty($name)) {
        echo "Name is empty"; // Pesan jika nama kosong
    } else {
        echo $name; // Menampilkan nama yang dikirim
    }
}
?>
<!-- Formulir untuk mengumpulkan nama. Jika formulir dikirim, nama akan ditampilkan. -->
</body>
</html>
