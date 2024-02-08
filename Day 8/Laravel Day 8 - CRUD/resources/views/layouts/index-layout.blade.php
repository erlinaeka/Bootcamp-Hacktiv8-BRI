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
    @include('layouts.header-index');
    {{-- End Header Start --}}

      <!-- about section starts -->
    @include('layouts.about');
      <!-- about section Ends -->

      <!-- services section Starts -->
      @include('layouts.service')    
      <!-- services section Ends -->

      @include('layouts.cto-portofolio-index')

      {{-- Gallery section --}}
      @include('layouts.gallery')
      {{-- End Gallery section --}}
      
      <!-- footer starts -->
      @include('layouts.footer')
      <!-- footer ends -->

      <!-- Modal -->
        <div class="modal fade" id="modalProduct" tabindex="-1" aria-labelledby="modalProductLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="modalProductLabel">Best Seller Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered">
                        <thead>
                          <tr class="text-center">
                            <th scope="col">No</th>
                            <th scope="col">Product</th>
                            <th scope="col">Price</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Norfolk Island Pine</td>
                            <td>$39.99 - $495.00</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Purple Jacaranda Mimosifolia</td>
                            <td>$39.99 - $495.00</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Ficus Burgundy Bush</td>
                            <td>$29.99</td>
                          </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
            </div>
            </div>
        </div>
  
    
    <!-- All Js -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>




<!--for getting the form download the code from download button-->