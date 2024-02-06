<?php 

include "kontak.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $kontak = new Kontak();
    $data = $kontak->getDataKontakByID($id);
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

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" >
    <div class="container">
          <a class="navbar-brand" href="#"><span class="char-logo">MyContacts</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" href="index-kontak.php">Home</a>
              </li>      
            </ul>
          </div>
        </div>
    </nav>

    <div class="container mt-5" style="padding-top: 50px;">
        <h5 class="text-center d-block mb-3">Edit</h5>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="w-50 mx-auto">
            <input type="hidden" name="id" value="<?= $data[0]['id']; ?>" />          
            <div class="mb-3">
                <label for="inputNamaKontak" class="form-label">Nama</label>    
                <input type="text" class="form-control" id="inputNamaKontak" name="inputNamaKontak" value='<?= $data[0]['nama']; ?>' require>
            </div>
            <div class="mb-3">
                <label for="inputEmailKontak" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmailKontak" value='<?= $data[0]['email']; ?>' name="inputEmailKontak" require>
            </div>
            <div class="mb-3">
                <label for="inputNoTeleponKontak" class="form-label">Nomor Telepon</label>
                <input type="text" class="form-control" id="inputNoTeleponKontak" value='<?= $data[0]['no_telepon']; ?>' name="inputNoTeleponKontak" require>
            </div>
            <div class="mb-3">
                <label for="inputTanggalLahirKontak" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="inputTanggalLahirKontak" name="inputTanggalLahirKontak" value='<?= $data[0]['tanggal_lahir']; ?>'>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="index-kontak.php" class="btn btn-primary">Back</a>
        </form>

    </div>

    <?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id = $_POST['id'];
        $nama = $_POST['inputNamaKontak'];
        $email = $_POST['inputEmailKontak'];
        $no_telepon = $_POST['inputNoTeleponKontak'];
        $tanggal_lahir = @$_POST['inputTanggalLahirKontak'];
        $kontak = new Kontak();
        $kontak->editDataKontak($nama, $email, $no_telepon, $tanggal_lahir, $id);
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>