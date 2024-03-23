<?php

// String Lorem Ipsum
$loremIpsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit.
Voluptatem reprehenderit nobis veritatis commodi fugiat molestias
impedit unde ipsum voluptatum, corrupti minus sit excepturi nostrum
quisquam? Quos impedit eum nulla optio.";

// Menampilkan teks Lorem Ipsum di dalam tag paragraf
echo "<p>{$loremIpsum}</p>";

// Menampilkan panjang karakter dari string Lorem Ipsum
echo "Panjang karakter: " . strlen($loremIpsum) . "<br>";

// Menampilkan jumlah kata dalam string Lorem Ipsum
echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";

// Menampilkan teks Lorem Ipsum dengan huruf besar (uppercase)
echo "<p>" . strtoupper($loremIpsum) . "</p>";

// Menampilkan teks Lorem Ipsum dengan huruf kecil (lowercase)
echo "<p>" . strtolower($loremIpsum) . "</p>";

?>
