@extends('layouts.main')

@section('judulpage','Detail Produk')
@section('judulkonten','Produk')

@section('isikonten')
<div class="col-12">
    <div class="card">
        <div class="card-body p-3">           
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8">
                    <h6 class="text-primary">Detail Produk</h6>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <a class="btn btn-warning float-right px-3 mb-2" href="{{ route('index-produk') }}">Back</a>
                </div>
            </div>
           <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <img src="{{ asset('storage/product/'.$product->product_img_url) }}" alt="Gambar Produk" width="250px" class="mx-auto d-block">
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <p><strong>Nama Produk</strong><br> {{ $product->product_name }}</p>
                    <p><strong>Kategori Produk</strong><br>{{ $product->category->category_name }}</p>
                    <p><strong>Harga Produk</strong><br>Rp {{ number_format($product->product_price) }}</p>
                    <p><strong>Berat Produk</strong><br>{{ $product->product_weight }} Kg</p>
                    <p><strong>Status Produk</strong><br>{{ $product->product_status }}</p>
                    <p><strong>Keterangan</strong><br>{!! $product->product_desc !!}</p>
                </div>
           </div>
        </div>
    </div>
</div>
@endsection