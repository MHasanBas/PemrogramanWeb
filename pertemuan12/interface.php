<?php
// Mendefinisikan antarmuka Shape
interface Shape {
    // Metode untuk menghitung luas
    public function calculateArea();
}

// Mendefinisikan antarmuka Color
interface Color {
    // Metode untuk mendapatkan warna
    public function getColor();
}

// Mendefinisikan kelas Circle yang mengimplementasikan antarmuka Shape dan Color
class Circle implements Shape, Color {
    // Properti privat untuk menyimpan jari-jari dan warna lingkaran
    private $radius;
    private $color;
    
    // Konstruktor untuk menginisialisasi jari-jari dan warna lingkaran saat objek dibuat
    public function __construct($radius, $color){
        $this->radius = $radius;
        $this->color = $color;
    }
    
    // Metode untuk menghitung luas lingkaran
    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
    
    // Metode untuk mendapatkan warna lingkaran
    public function getColor(){
        return $this->color;
    }
}

// Membuat objek lingkaran dengan jari-jari 5 dan warna "Blue"
$circle = new Circle(5, "Blue");

// Menampilkan luas lingkaran menggunakan metode calculateArea()
echo "Luas lingkaran: " . $circle->calculateArea() . "<br>";
// Menampilkan warna lingkaran menggunakan metode getColor()
echo "Warna lingkaran: " . $circle->getColor() . "<br>";
?>
