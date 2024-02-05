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
                <h5>Detail Blog</h5>
            </div>
        </div>
        <?php
        $slug = isset($_GET['slug']) ? $_GET['slug'] : null;
        $id = isset($_GET['id']) ? $_GET['id'] : null;


        // Jika slug tidak ada, beri tindakan yang sesuai, misalnya, kembalikan ke halaman lain atau berikan pesan kesalahan
        if (!$id) {
            header("Location: index.php"); // Ganti dengan halaman lain jika diperlukan
            exit;
        }

        $blogData = $koneksi->getBlogBySlug($id);
        $judul_blog = $blogData['judul_blog'];
        $kategori = $blogData['kategori'];
        $konten = $blogData['konten_blog'];
        $gambar = $blogData['gambar_utama_blog'];
        ?>
        <div>
            <h4><?= $judul_blog; ?></h4>
            <img src="./images-blog/<?= $gambar ?>" class="d-block mx-auto mb-4" alt="" width="500px" >
            <p style="text-align: justify; text-indent: 30px"><?= $konten; ?></p>
            <a href="index-admin.php" class="btn btn-sm btn-success" >Back</a>
        </div>
    </div>

    <div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>