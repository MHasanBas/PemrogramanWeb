<?php
$myArray = array(); // Membuat array kosong dengan nama $myArray

if (empty($myArray)) { // Memeriksa apakah array $myArray kosong menggunakan fungsi empty()
    echo "Array tidak terdefinisi atau kosong."; // Jika array kosong atau tidak terdefinisi, pesan ini akan ditampilkan
} else {
    echo "Array terdefinisi dan tidak kosong."; // Jika array tidak kosong, pesan ini akan ditampilkan
}

if (empty($nonExistentVar)) { // Memeriksa apakah variabel $nonExistentVar tidak terdefinisi atau kosong menggunakan fungsi empty()
    echo "Variabel tidak terdefinisi atau kosong."; // Jika variabel tidak terdefinisi atau kosong, pesan ini akan ditampilkan
} else {
    echo "Variabel terdefinisi dan tidak kosong."; // Jika variabel terdefinisi dan tidak kosong, pesan ini akan ditampilkan
}

?>
