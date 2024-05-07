<?php
// Mendefinisikan kelas Car
class Car {
    // Properti privat untuk merepresentasikan model dan warna mobil
    private $model;
    private $color;
    
    // Konstruktor untuk menginisialisasi model dan warna mobil saat objek dibuat
    public function __construct($model, $color){
        $this->model = $model;
        $this->color = $color;
    }
    
    // Metode untuk mendapatkan model mobil
    public function getModel(){
        return $this->model;
    }
    
    // Metode untuk mengatur warna mobil
    public function setColor($color){
        $this->color = $color;
    }
    
    // Metode untuk mendapatkan warna mobil
    public function getColor(){
        return $this->color;
    }
}

// Membuat objek mobil dengan model "Toyota" dan warna "Blue"
$car = new Car("Toyota", "Blue");
// Menampilkan model mobil menggunakan metode getModel()
echo "Model: " . $car->getModel() . "<br>";
// Menampilkan warna mobil menggunakan metode getColor()
echo "Warna: " . $car->getColor() . "<br>";
// Mengubah warna mobil menjadi "Red" menggunakan metode setColor()
$car->setColor("Red");
// Menampilkan warna mobil yang telah diperbarui
echo "Warna yang Diperbarui: " . $car->getColor() . "<br>";
?>
