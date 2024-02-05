<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


class database {
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $database = "hacktiv8_latihan1";
    var $koneksi; // Ditambahkan properti untuk menyimpan koneksi

    function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if(!$this->koneksi) {
            echo "Koneksi database MySQL dan PHP Gagal";
        } 
    }

    function getDataFromTable($tableName)
    {
        $data = [];
        $sql = "SELECT * FROM $tableName";
        $result = mysqli_query($this->koneksi, $sql);

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

    function addDataBlog($judul, $kategori, $konten, $gambar){
        $sql_input_blog = "INSERT INTO blogs (judul_blog, konten_blog, gambar_utama_blog, kategori) VALUES ('$judul', '$konten', '$gambar', '$kategori')";
        $result = mysqli_query($this->koneksi, $sql_input_blog);
        if(!$result){
            echo "Error: " . mysqli_error($this->koneksi);
        }else{
            header("Location: index-admin.php");
            exit;
        }
    }
    function checkLogin($inputEmail, $inputPassword){
        $sql_check_login = "SELECT * FROM pengguna WHERE email_pengguna='$inputEmail'";
        $result = mysqli_query($this->koneksi, $sql_check_login);
        $row = mysqli_fetch_assoc($result);
        if ($row) {
            // Access the values using the column names
            $username = $row['username_pengguna'];
            $password = $row['password_pengguna'];
        
            // Now you can use $email and $password as needed
            if($password == $inputPassword){
                $_SESSION['username'] = $username; // Replace with the actual user ID
                header("Location: index-admin.php");
                exit;
            }else{
                echo "Password Kamu Salah !!";
            }
        } else {
            echo "Email Belum Terdaftar";
        }
        
    }
    function getBlogBySlug($id){
        $sql_detail_blog = "SELECT * FROM blogs WHERE id_blog='$id'";
        $result = mysqli_query($this->koneksi, $sql_detail_blog);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }
    function addDataKategori($kategori){
        $sql_tambah_kategori = "INSERT INTO kategori (nama_kategori) VALUES ('$kategori')";
        $result = mysqli_query($this->koneksi, $sql_tambah_kategori);
        if(!$result){
            echo "Error: " . mysqli_error($this->koneksi);
        }else{
            header("Location: kategori.php");
            exit;
        }

    }
    function closeConnection()
    {
        mysqli_close($this->koneksi);
    }
}

$koneksi = new database();
// $koneksi->getDataFromTable('nama_tabel'); // Ganti 'nama_tabel' dengan nama tabel yang sebenarnya

?>