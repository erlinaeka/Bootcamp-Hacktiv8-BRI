@extends('layouts.main')

@section('judulpage','Daftar Produk')
@section('judulkonten','Produk')


@section('isikonten')
<div class="col-12">
    <div class="card">
        <div class="card-body p-0">
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible show fade">
                        <div class="alert-body">
                            <button class="close" data-dismiss="alert">
                                <span>×</span>
                            </button>
                            {{ session('success') }}
                        </div>
                    </div>
                @endif
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-8">
                        <h6>Data Produk</h6>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <a class="btn btn-primary float-right mb-2" href="{{ route('tambah-produk') }}">Tambah Produk</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-md">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Produk</th>
                                <th>Kategori</th>
                                <th>Harga</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($listProduct as $product)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $product->product_name }}</td>
                                <td>{{ $product->category->category_name }}</td>
                                <td>Rp {{ number_format($product->product_price) }}</td>
                                <td>{{ $product->product_status }}</td>
                                {{-- <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas possimus exercitationem enim?</td> --}}
                                <td>                                    
                                    <form action="{{ route('delete-produk', $product->product_id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('detail-produk', $product->product_id) }}" class="btn btn-success">Detail</a>
                                        <a href="{{ route('edit-produk', $product->product_id) }}" class="btn btn-warning">Edit</a>
                                        {{-- Bisa parameter nya 2, pake array atau tambah lagi --}}
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin Hapus Produk?');">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection