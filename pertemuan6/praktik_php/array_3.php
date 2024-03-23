<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css"> <!-- Menghubungkan file CSS eksternal -->
</head>
<body>
<h2> Multidimensional Array </h2>
<table>
<tr>
<th>Judul Film</th>
<th>Tahun</th>
<th>Rating</th>
</tr>
<?php
// Array multidimensional yang berisi informasi tentang film-film
$movies = array(
    array("Avengers: Infinity War", 2018, 8.7),
    array("The Avengers", 2012, 8.1),
    array("Guardians of the Galaxy", 2014, 8.1),
    array("Iron Man", 2008, 7.9)
);

// Loop foreach untuk menampilkan informasi setiap film dalam tabel
foreach ($movies as $movie) {
    echo "<tr>";
    echo "<td>" . $movie[0] . "</td>"; // Kolom untuk menampilkan judul film
    echo "<td>" . $movie[1] . "</td>"; // Kolom untuk menampilkan tahun rilis
    echo "<td>" . $movie[2] . "</td>"; // Kolom untuk menampilkan rating
    echo "</tr>";
}
?>
</table>
</body>
</html>
