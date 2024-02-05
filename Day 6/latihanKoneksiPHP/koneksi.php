<?php 
class database {
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $database = "hactiv8_latihan1";

    function __construct()
    {
        $koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if($koneksi){
            echo "Koneksi database MySQL dan PHP Berhasil";
        }else{
            echo "Koneksi database MySQL dan PHP Gagal";
        }
    }
}

$koneksi = new database()


?>