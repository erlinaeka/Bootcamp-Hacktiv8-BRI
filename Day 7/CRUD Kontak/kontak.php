<?php 
include "koneksi.php";
class Kontak {
    protected $host = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $database = "hacktiv8_kontakcrud";
    protected $koneksi; // Ditambahkan properti untuk menyimpan koneksi

    public $idKontak;
    public $namaKontak;
    public $emailKontak;
    public $nomorKontak;
    public $birthKontak;


    function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if(!$this->koneksi) {
            echo "Koneksi database MySQL dan PHP Gagal";
        }
    }
    function getDataKontak(){
        $data = [];
        $sql_get_data = "SELECT * FROM contacts";
        $result = mysqli_query($this->koneksi, $sql_get_data);

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
            mysqli_free_result($result);
        } else {
            echo "Error: " . mysqli_error($this->koneksi);
        }
        return $data;
    }
    function tambahDataKontak($nama, $email, $no_telepon, $tanggal_lahir){
        $this->namaKontak = $nama;
        $this->emailKontak = $email;
        $this->nomorKontak = $no_telepon;
        $this->birthKontak = $tanggal_lahir;
        $sql_tambah_data = "INSERT INTO contacts (nama, email, no_telepon, tanggal_lahir) VALUES ('$this->namaKontak', '$this->emailKontak', '$this->nomorKontak', '$this->birthKontak')";
        $result = mysqli_query($this->koneksi, $sql_tambah_data);
        if($result){
            header("Location: index-kontak.php");
            exit;
        }else{
            echo "Error: " . mysqli_error($this->koneksi);
        }
    }
    function deleteDataKontak($id){
        $this->idKontak = $id;
        $sql_hapus_kontak = "DELETE FROM contacts WHERE id='$this->idKontak'";
        $result = mysqli_query($this->koneksi, $sql_hapus_kontak);
        if($result){
            header("Location: index-kontak.php");
            exit;
        }else{
            echo "Error: " . mysqli_error($this->koneksi);
        }
    }
    function getDataKontakByID($id){
        $data = [];
        $this->idKontak = $id;
        $sql_get_data_by_id = "SELECT * FROM contacts WHERE id='$this->idKontak'";
        $result = mysqli_query($this->koneksi, $sql_get_data_by_id);
        if($result){
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
            mysqli_free_result($result);
        }else{
            echo "Error: " . mysqli_error($this->koneksi);
        }
        return $data;
    }
    function editDataKontak($nama, $email, $no_telepon, $tanggal_lahir, $id){
        $this->idKontak = $id;
        $this->namaKontak = $nama;
        $this->emailKontak = $email;
        $this->nomorKontak = $no_telepon;
        $this->birthKontak = $tanggal_lahir;
        $sql_edit_data = "UPDATE contacts SET nama = '$this->namaKontak', email = '$this->emailKontak', no_telepon = '$this->nomorKontak', tanggal_lahir = '$this->birthKontak'
        WHERE id = '$this->idKontak'";
        $result = mysqli_query($this->koneksi, $sql_edit_data);
        if($result){
            echo "<script>window.location.href = 'index-kontak.php';</script>";
            exit;
        }else{
            echo "Error: " . mysqli_error($this->koneksi);
        }
    }
}

?>