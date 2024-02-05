<?php 
include "koneksi.php";
session_start();
// Check if the user is not logged in 
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Halaman Kategori</title>
  </head>
  <body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container">
          <a class="navbar-brand" href="#"><span class="char-logo">BlogManagement</a>
          <!-- <a href="#" class="navbar-brand">
            <img src="./img/logo.png" class="brand-image" alt="">
          </a> -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="index-admin.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="tambahDataBlog.php">Blog</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link active" href="kategori.php">Kategori</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="logoutFunction.php">Logout</a>
              </li>       
            </ul>
          </div>
        </div>
    </nav>

    <?php
            // Contoh data dari array atau database
        $dataKategori = $koneksi->getDataFromTable('kategori');
    ?>
    <div class="container mt-5">
      <div class="row mb-4">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <h5>Data Blog</h5>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 text-end">
                <a href="tambahDataKategori.php"><button class="btn btn-sm btn-success">Tambah Kategori</button></a>
            </div>
        </div>
        <table class="table table-bordered table-responsive-md">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kategori</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dataKategori as $row): ?>
                <tr>
                    <td><?= $row["id_kategori"] ?></td>
                    <td><?= $row["nama_kategori"] ?></td>
                </tr>
                <!-- Add more rows as needed -->
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>