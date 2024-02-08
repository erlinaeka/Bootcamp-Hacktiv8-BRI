<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erlina Eka Fitriani - Company Profile OKEPlant</title>
    
    <!-- All CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    
    {{-- Navbar Start --}}
    @include('layouts.navbar')
    {{-- End Navbar --}}


    {{-- Header Start --}}
    @include('layouts.header-subindex')
    {{-- End Header Start --}}
    
    {{-- Konten Start --}}
    @yield('konten')
    {{-- Konten End --}}

    <!-- footer starts -->
    @include('layouts.footer')
    <!-- footer ends -->
  
    
    <!-- All Js -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>




<!--for getting the form download the code from download button-->