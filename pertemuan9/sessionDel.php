<?php
// Mulai sesi PHP
session_start();
?>

<!DOCTYPE html>
<html>

<body>
    <?php
    // Menghapus semua variabel sesi
    session_unset();
    // Menghancurkan sesi
    session_destroy();

    // Menampilkan pesan bahwa semua variabel sesi telah dihapus dan sesi telah dihancurkan
    echo "All session variables are now removed, and the session is destroyed.";
    ?>
</body>

</html>
