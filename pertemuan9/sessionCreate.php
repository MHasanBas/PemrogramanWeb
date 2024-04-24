<?php
// Mulai sesi PHP
session_start();
?>

<!DOCTYPE html>
<html>

<body>
    <?php
    // Menetapkan nilai 'green' pada variabel sesi 'favcolor'
    $_SESSION["favcolor"] = "green";
    // Menetapkan nilai 'cat' pada variabel sesi 'favanimal'
    $_SESSION["favanimal"] = "cat";
    // Menampilkan pesan bahwa variabel sesi telah ditetapkan
    echo "Session variables are set.";
    ?>
</body>

</html>
