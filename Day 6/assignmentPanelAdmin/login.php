<?php 

if (isset($_SESSION['username'])) {
  header("Location: index-admin.php");
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

    <title>Login Page</title>
  </head>
  <body style="height: 100vh;">
  

  <div class="container container-fluid mx-auto my-auto" style="padding-top: 190px; width: 500px;">
    <form class="bg-primary text-white rounded-3 p-4" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <h5 class="text-center d-block mb-4">Login</h5>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="inputEmail" aria-describedby="emailHelp" require>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="inputPassword" id="password" require>
        </div>
        <button type="submit" class="btn btn-sm px-4 btn-dark">Login</button>
    </form>
  </div>

  <?php 
      include "koneksi.php";

      if($_SERVER["REQUEST_METHOD"] == "POST"){
          $email = $_POST['inputEmail'];
          $password = $_POST['inputPassword'];

          $koneksi->checkLogin($email, $password);
          
      }

  
  ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>