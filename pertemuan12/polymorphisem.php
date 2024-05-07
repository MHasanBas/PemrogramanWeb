<?php
// Mendefinisikan antarmuka Shape
interface Shape{
    // Metode untuk menghitung luas
    public function calculateArea();
}

// Mendefinisikan kelas Circle yang mengimplementasikan antarmuka Shape
class Circle implements Shape{
    // Properti privat untuk menyimpan jari-jari lingkaran
    private $radius;
    
    // Konstruktor untuk menginisialisasi jari-jari lingkaran saat objek dibuat
    public function __construct($radius){
        $this->radius = $radius;
    }
    
    // Metode untuk menghitung luas lingkaran
    public function calculateArea(){
        return pi() * pow($this->radius, 2);
    }
}

// Mendefinisikan kelas Rectangle yang mengimplementasikan antarmuka Shape
class Rectangle implements Shape{
    // Properti privat untuk menyimpan lebar dan tinggi persegi panjang
    private $width;
    private $height;
    
    // Konstruktor untuk menginisialisasi lebar dan tinggi persegi panjang saat objek dibuat
    public function __construct($width, $height){
        $this->width = $width;
        $this->height = $height;
    }
    
    // Metode untuk menghitung luas persegi panjang
    public function calculateArea(){
        return $this->width * $this->height;
    }
}

// Fungsi untuk mencetak luas bentuk
function printArea(Shape $shape){
    echo "Luas: " . $shape->calculateArea() . "<br>";
}

// Membuat objek lingkaran dengan jari-jari 5
$circle = new Circle(5);
// Mencetak luas lingkaran
printArea($circle);

// Membuat objek persegi panjang dengan lebar 4 dan tinggi 6
$rectangle = new Rectangle(4, 6);
// Mencetak luas persegi panjang
printArea($rectangle);
?>
