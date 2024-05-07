<?php
// Membutuhkan file Database.php yang berisi koneksi ke database
require_once 'Database.php';

// Mendefinisikan kelas Crud
class Crud
{
    // Properti privat untuk objek Database
    private $db;

    // Konstruktor untuk menginisialisasi objek Database saat objek Crud dibuat
    public function __construct()
    {
        $this->db = new Database();
    }

    // Metode untuk membuat data baru dalam tabel jabatan
    public function create($jabatan, $keterangan)
    {
        $query = "INSERT INTO jabatan (jabatan, keterangan) VALUES ('$jabatan', '$keterangan')";
        $result = $this->db->conn->query($query);
        return $result;
    }

    // Metode untuk membaca semua data dari tabel jabatan
    public function read()
    {
        $query = "SELECT * FROM jabatan";
        $result = $this->db->conn->query($query);
        $data = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        return $data;
    }

    // Metode untuk membaca data berdasarkan ID dari tabel jabatan
    public function readById($id)
    {
        $query = "SELECT * FROM jabatan WHERE id = $id";
        $result = $this->db->conn->query($query);
        if ($result->num_rows == 1) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }

    // Metode untuk memperbarui data berdasarkan ID dalam tabel jabatan
    public function update($id, $jabatan, $keterangan)
    {
        $query = "UPDATE jabatan SET jabatan = '$jabatan', keterangan = '$keterangan' WHERE id = $id";
        $result = $this->db->conn->query($query);

        return $result;
    }

    // Metode untuk menghapus data berdasarkan ID dari tabel jabatan
    public function delete($id)
    {
        $query = "DELETE FROM jabatan WHERE id = $id";
        $result = $this->db->conn->query($query);
    }
}
?>
