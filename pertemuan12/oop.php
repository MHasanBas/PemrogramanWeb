<?php
// Mendefinisikan kelas Car
class Car{
    // Properti publik untuk merepresentasikan merek mobil
    public $brand;
    
    // Metode untuk memulai mesin mobil
    public function startEngine(){
        echo "Mesin dihidupkan<br>";
    }
}

// Membuat objek mobil pertama
$car1 = new Car("");
// Mengatur merek mobil pertama menjadi "Toyota"
$car1->brand = "Toyota";

// Membuat objek mobil kedua
$car2 = new Car("");
// Mengatur merek mobil kedua menjadi "Honda"
$car2->brand = "Honda";

// Memanggil metode startEngine untuk mobil pertama
$car1->startEngine();
// Menampilkan merek mobil kedua
echo $car2->brand . "<br>";
?>
