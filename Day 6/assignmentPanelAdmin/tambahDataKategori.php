<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

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

    <div class="container ">
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

    <section id="form-input-blog" style="margin-top: 80px;">
        <div class="container container-fluid w-50 mx-auto mt-5 p-5 border-3">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
                <h4 class="text-center d-block mb-5">Tambah Kategori</h4>
                <div class="mb-3">
                    <label for="inputKategori" class="form-label">Kategori</label>
                    <input type="text" class="form-control" id="inputKategori" name="inputKategori" require>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>



    <?php 

    include "koneksi.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $kategori = $_POST['inputKategori'];
        $koneksi->addDataKategori($kategori);
        
    }

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>