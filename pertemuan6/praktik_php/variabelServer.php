<?php
// Menampilkan jalur skrip saat ini
echo $_SERVER['PHP_SELF'];
echo "<br>";

// Menampilkan nama server
echo $_SERVER['SERVER_NAME'];
echo "<br>";

// Menampilkan host HTTP
echo $_SERVER['HTTP_HOST'];
echo "<br>";

// Menampilkan referer HTTP (halaman yang mengarahkan pengguna ke halaman saat ini)
echo $_SERVER['HTTP_REFERER'];
echo "<br>";

// Menampilkan user agent HTTP
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";

// Menampilkan nama file skrip saat ini
echo $_SERVER['SCRIPT_NAME'];
?>
