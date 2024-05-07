<?php
// Mendefinisikan kelas Database
class Database {
    // Properti untuk menyimpan detail koneksi database
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "prakwebdb";
    private $port = 3307;

    // Properti untuk objek koneksi
    public $conn;

    // Konstruktor untuk membuat koneksi database saat objek Database dibuat
    public function __construct(){
        // Membuat koneksi menggunakan mysqli
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database, $this->port);

        // Memeriksa apakah koneksi berhasil, jika tidak, tampilkan pesan kesalahan
        if($this->conn->connect_error){
            die("Koneksi gagal: " . $this->conn->connect_error);
        }
    }
}
?>
