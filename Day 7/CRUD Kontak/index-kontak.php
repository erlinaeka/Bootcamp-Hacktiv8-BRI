<?php 
include "kontak.php";
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
      <div class="row mb-4">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <h5>Data Kontak</h5>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 text-end">
                <a href="tambah-kontak.php"><button class="btn btn-sm btn-success">Tambah Kontak</button></a>
            </div>
        </div>
        <table class="table table-bordered table-responsive-md">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Nomor Telepon</th>
                    <th>Tanggal Lahir</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php 
            $classKontak = new Kontak();
            $data = $classKontak->getDataKontak();    
            $no = 1;
            ?>
            <tbody>
                <?php foreach ($data as $row): ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row['id']; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['email']; ?></td>
                    <td><?= $row['no_telepon']; ?></td>
                    <td><?= $row['tanggal_lahir']; ?></td>
                    <td>
                        <a href="edit-kontak.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="proses-hapus.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>