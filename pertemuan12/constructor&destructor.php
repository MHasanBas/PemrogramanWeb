<?php
// Mendefinisikan kelas Car
class Car{
    // Properti privat untuk merepresentasikan merek mobil
    private $brand;
    
    // Konstruktor untuk menginisialisasi merek mobil saat objek dibuat
    public function __construct($brand){
        // Menampilkan pesan bahwa mobil baru telah dibuat
        echo "Sebuah mobil baru telah dibuat.<br>";
        // Mengatur merek mobil
        $this->brand = $brand;
    }
    
    // Metode untuk mendapatkan merek mobil
    public function getBrand(){
        return $this->brand;
    }
    
    // Destruktor untuk menampilkan pesan saat objek mobil dihancurkan
    public function __destruct(){
        echo "Mobil telah dihancurkan.<br>";
    }
}

// Membuat objek mobil dengan merek "Toyota"
$car = new Car("Toyota");
// Menampilkan merek mobil menggunakan metode getBrand()
echo "Merek : " . $car->getBrand() . "<br>";
?>
