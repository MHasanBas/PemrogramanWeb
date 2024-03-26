<?php
$pattern = '/[a-z]/'; // Cocokkan huruf kecil.
$text = 'This is a Sample Text.';
if (preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan!";
} else {
    echo "Tidak ada huruf kecil!";
}

$pattern = '/[0-9]+/'; // Cocokkan satu atau lebih digit.
$text = 'There are 123 apples.';
if (preg_match($pattern, $text, $matches)) {
    echo "<br>Cocokkan: " . $matches[0]; // Menampilkan bagian teks yang cocok dengan pola.
} else {
    echo "<br>Tidak ada yang cocok!"; // Menampilkan pesan jika tidak ada yang cocok.
}

$pattern = '/apple/';
$replacement = 'banana';
$text = 'I like apple pie.';
$new_text = preg_replace($pattern, $replacement, $text);
echo "<br>" . $new_text; // Menampilkan hasil penggantian teks.

$pattern = '/go{n,m}d/'; // Cocokkan "god", "good", "gooood", "goood", dll.
$text = 'god is good. ';
if (preg_match($pattern, $text, $matches)) {
    echo "<br>Cocokkan: " . $matches[0]; // Menampilkan bagian teks yang cocok dengan pola.
} else {
    echo "<br>Tidak ada yang cocok!"; // Menampilkan pesan jika tidak ada yang cocok.
}
?>
