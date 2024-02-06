<?php 
include 'kontak.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $kontak = new Kontak();
    $kontak->deleteDataKontak($id);
}


?>