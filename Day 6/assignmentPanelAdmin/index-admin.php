<?php 
include "koneksi.php";
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
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

    <style>
      .truncate-konten{
            display: block;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 300px; /* Adjust as needed */
            /* Optional: Set the number of lines before truncation */
            -webkit-line-clamp: 4; /* Adjust as needed */
            /* Optional: Ensure compatibility with Firefox */
            display: -moz-box;
            -moz-box-orient: vertical;
      }
    </style>
    <title>Halaman Utama</title>
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
                <a class="nav-link active" href="index-admin.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="tambahDataBlog.php">Blog</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="kategori.php">Kategori</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="logoutFunction.php">Logout</a>
              </li>       
            </ul>
          </div>
        </div>
    </nav>


    <div class="container" style="margin-top: 100px; margin-bottom:40px;">
        <div class="row mb-4">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <h5>Data Blog</h5>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 text-end">
                <a href="tambahDataBlog.php"><button class="btn btn-sm btn-success">Tambah Blog</button></a>
            </div>
        </div>
        <?php
            // Contoh data dari array atau database
        $data = $koneksi->getDataFromTable('blogs');
        ?>
        <div class="row">
            <?php foreach ($data as $row): ?>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="card p-4">
                    <img src="./images-blog/<?= $row["gambar_utama_blog"] ?>" class="d-block mx-auto" alt="" width="300px" height="200px" style="object-fit: cover;"></td>
                    <h5 class="mt-3" style="font-size: 20px;"><?= $row["judul_blog"] ?></h5>
                    <p style="font-size: 13px;"><?= $row["kategori"] ?></p>
                    <p style="font-size: 15px;" class="truncate-konten"><?= $row["konten_blog"] ?></p>
                    <?php  
                    $slug = strtolower(str_replace(' ', '-', $row["judul_blog"]));
                    ?>
                    <a href="detail.php?slug=<?= $slug ?>&id=<?= $row["id_blog"] ?>" class="btn btn-success btn-sm col-4">Read More</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>