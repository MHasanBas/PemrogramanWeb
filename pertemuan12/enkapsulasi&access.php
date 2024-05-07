<?php
// Mendefinisikan kelas Animal
class Animal {
    // Properti publik untuk nama, dilindungi untuk usia, dan pribadi untuk warna
    public $name;
    protected $age;
    private $color;
    
    // Konstruktor untuk menginisialisasi nama, usia, dan warna hewan saat objek dibuat
    public function __construct($name, $age, $color){
        $this->name = $name;
        $this->age = $age;
        $this->color = $color;
    }
    
    // Metode untuk mendapatkan nama hewan
    public function getName(){
        return $this->name;
    }
    
    // Metode untuk mendapatkan usia hewan
    public function getAge(){
        return $this->age;
    }
    
    // Metode untuk mendapatkan warna hewan
    public function getColor(){
        return $this->color;
    }
}

// Membuat objek hewan dengan nama "Dog", usia 3, dan warna "Brown"
$animal = new Animal("Dog", 3, "Brown");
// Menampilkan nama hewan menggunakan metode getName()
echo "Nama  : " . $animal->getName() . "<br>";
// Menampilkan usia hewan menggunakan metode getAge()
echo "Usia   : " . $animal->getAge() . "<br>";
// Menampilkan warna hewan menggunakan metode getColor()
echo "Warna : " . $animal->getColor() . "<br>";
?>
