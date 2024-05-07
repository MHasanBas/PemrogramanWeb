<?php
// Mendefinisikan kelas Animal
class Animal{
    // Properti yang dilindungi untuk nama hewan
    protected $name;
    
    // Konstruktor untuk menginisialisasi nama hewan saat objek dibuat
    public function __construct($name){
        $this->name = $name;
    }
    
    // Metode untuk memberi makan hewan
    public function eat(){
        echo $this->name . " sedang makan.<br>";
    }
    
    // Metode untuk membuat hewan tidur
    public function sleep(){
        echo $this->name . " sedang tidur.<br>";
    }
}

// Mendefinisikan kelas Cat yang merupakan turunan dari kelas Animal
class Cat extends Animal{
    // Metode khusus untuk kucing: mengeong
    public function meow(){
        echo $this->name . " mengatakan meong!<br>";
    }
}

// Mendefinisikan kelas Dog yang merupakan turunan dari kelas Animal
class Dog extends Animal{
    // Metode khusus untuk anjing: menggonggong
    public function bark(){
        echo $this->name . " mengatakan woof!<br>";
    }
}

// Membuat objek kucing dengan nama "Whiskers"
$cat = new Cat("Whiskers");
// Membuat objek anjing dengan nama "Buddy"
$dog = new Dog("Buddy");

// Memanggil metode makan untuk kucing
$cat->eat();
// Memanggil metode tidur untuk anjing
$dog->sleep();
// Memanggil metode meong untuk kucing
$cat->meow();
// Memanggil metode menggonggong untuk anjing
$dog->bark();
?>
