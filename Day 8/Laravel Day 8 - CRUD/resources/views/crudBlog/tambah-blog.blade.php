<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Halaman Tambah Blog</title>
  </head>
  <body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" >
        <div class="container">
              <a class="navbar-brand" href="#"><span class="char-logo">MyBlog</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="/index-blog">Home</a>
                  </li>   
                  <li class="nav-item">
                    <a class="nav-link active" href="/index-blog">Blog</a>
                  </li>    
                </ul>
              </div>
        </div>
    </nav>

    <section id="form-input-blog" style="margin-top: 80px;">
        <div class="container container-fluid w-50 mx-auto mt-5 p-5 border-3">
            <form method="POST" action="/proses-tambah-data" enctype="multipart/form-data">
                @csrf
                <h4 class="text-center d-block mb-5">Tambah Blog</h4>
                <div class="mb-3">
                    <label for="title" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="title" name="title" require>
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Kategori</label>
                    <select class="form-select" aria-label="Default select example" id="category" name="category" require>
                        <option selected>Kategori</option>
                        <option value="kesehatan">Kesehatan</option>
                        <option value="pendidikan">Pendidikan</option>
                        <option value="hiburan">Hiburan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Konten</label>
                    <textarea class="form-control" id="content" name="content" style="height: 200px" require></textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Gambar</label>
                    <input class="form-control" type="file" id="image" name="image" require>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                <a href="/index-blog" class="btn btn-warning">Kembali</a>
            </form>
        </div>
    </section>

    <script src="{{ asset('tinymce/js/tinymce/tinymce.min.js') }}"></script>
    <script>
        tinymce.init({
            selector: 'textarea#myTextarea',
            plugins: 'advlist autolink lists link image charmap print preview anchor',
            toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | link image',
            menubar: 'file edit view insert format tools table help',
            content_css: 'path/to/content.css' // Opsional: untuk menyesuaikan gaya editor
        });
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>