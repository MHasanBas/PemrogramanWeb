<?php
// Mendefinisikan kelas abstrak Shape
abstract class Shape{
    // Mendefinisikan metode abstrak calculateArea
    abstract public function calculateArea();
}

// Mendefinisikan kelas turunan Circle yang mengimplementasikan Shape
class Circle extends Shape{
    // Properti privat untuk menyimpan jari-jari lingkaran
    private $radius;
    
    // Konstruktor untuk menginisialisasi jari-jari lingkaran
    public function __construct($radius){
        $this->radius = $radius;
    }
    
    // Implementasi metode calculateArea untuk menghitung luas lingkaran
    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
}

// Mendefinisikan kelas turunan Rectangle yang mengimplementasikan Shape
class Rectangle extends Shape{
    // Properti privat untuk menyimpan lebar dan tinggi persegi panjang
    private $width;
    private $height;
    
    // Konstruktor untuk menginisialisasi lebar dan tinggi persegi panjang
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
    
    // Implementasi metode calculateArea untuk menghitung luas persegi panjang
    public function calculateArea()
    {
        return $this->width * $this->height;
    }
}

// Membuat objek lingkaran dengan jari-jari 5
$circle = new Circle(5);
// Membuat objek persegi panjang dengan lebar 4 dan tinggi 6
$rectangle = new Rectangle(4,6);

// Menampilkan luas lingkaran dan persegi panjang
echo "Luas Lingkaran: " . $circle->calculateArea() . "<br>";
echo "Luas Persegi Panjang: " . $rectangle->calculateArea() . "<br>";
?>
