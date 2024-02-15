@extends('layouts.main')

@section('judulpage','Tambah Data Pesanan')
@section('judulkonten','Pesanan')
@section('isikonten')
<div class="col-12">
    <div class="card p-3">
        <form action="{{ route('proses-tambah-order-item') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="order_item_product">Produk</label>
                <select class="form-control" id="order_item_product" name="order_item_product">
                    <option disabled>-- Produk --</option>
                    @foreach ($listProducts as $product)
                          <option value="{{ $product->product_id }}" @selected(old('order_item_product') == $product->product_id)>
                            {{ $product->product_name }}
                          </option>
                    @endforeach
                </select>
                @error('order_item_product')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label" for="order_item_qty">Jumlah</label>
                <input class="form-control" type="number" id="order_item_qty" name="order_item_qty" value="{{ old('order_item_qty') }}" required>
                @error('order_item_qty')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button class="btn btn-primary" type="submit">Tambah</button>
            <a href="{{ route('index-order-item') }}" class="btn btn-warning">Back</a>
        </form>
    </div>
</div>
@endsection