<?php
// Mulai sesi PHP
session_start();
?>

<!DOCTYPE html>
<html>

<body>
    <?php
    // Menampilkan nilai variabel 'favcolor' dari sesi
    echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
    // Menampilkan nilai variabel 'favanimal' dari sesi
    echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
    ?>
</body>

</html>
