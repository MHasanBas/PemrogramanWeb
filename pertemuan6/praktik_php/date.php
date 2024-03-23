<!DOCTYPE html>
<html>
<head>
    <!-- Meta title -->
    <title>Date Example</title>
</head>
<body>
    <!-- Heading -->
    <h3>Date</h3>
    
    <?php
        // Menampilkan tanggal dalam beberapa format yang berbeda
        echo "Today is " . date("Y/m/d") . "<br>";
        echo "Today is " . date("Y.m.d") . "<br>";
        echo "Today is " . date("Y-m-d") . "<br>";
        echo "Today is " . date("1") ;
        
        // Contoh kesalahan sintaksis: tidak ada string kedua untuk digabungkan
        // echo "Today is " . date("l");
        
        // Tambahkan titik koma pada akhir pernyataan echo
    ?>
</body>
</html>
