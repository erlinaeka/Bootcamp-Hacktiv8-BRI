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
    <title>Halaman Blog</title>
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

    <div class="container" style="margin-top: 100px; margin-bottom:40px;">
        <div class="row mb-4">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <h5>Data Blog</h5>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 text-end">
                <a href="/tambah-blog"><button class="btn btn-sm btn-success">Tambah Blog</button></a>
            </div>
        </div>
        <div class="row">
           @forelse ($blogs as $blog)
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="card p-4">
                    <img src="{{ asset('storage/blogs/'.$blog->image) }}" class="d-block mx-auto" alt="" width="300px" height="200px" style="object-fit: cover;"></td>
                    <h5 class="mt-3" style="font-size: 20px;">{{ $blog->title }}</h5>
                    <p style="font-size: 13px;">{{ $blog->category }}</p>
                    <p style="font-size: 15px;" class="truncate-konten">{{ $blog->content }}</p>
                    <form action="/delete-blog/{{ $blog->id }}" method="POST">
                      <a href="/index-blog/{{ $blog->slug }}" class="btn btn-success btn-sm col-4">Read More</a>
                      <a href="/edit-data/{{ $blog->slug }}" class="btn btn-sm btn-warning">Edit</a>
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus blog ini?')">Hapus</button>
                  </form>
                  
                </div>
            </div>
            @empty
              <div class="alert alert-danger">
                Data Blog belum Tersedia.
              </div>
            @endforelse
        </div>
    </div>


    {{-- {{ $blogs }} --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>