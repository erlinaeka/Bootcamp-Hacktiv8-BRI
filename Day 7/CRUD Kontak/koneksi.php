<?php 

class Koneksi{
    protected $host = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $database = "hacktiv8_kontakcrud";
    protected $koneksi; // Ditambahkan properti untuk menyimpan koneksi

    function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if(!$this->koneksi) {
            echo "Koneksi database MySQL dan PHP Gagal";
        }
    }
}


$koneksi = new Koneksi();

?>