@extends('layouts.main')

@section('judulpage','Edit Data Pesanan')
@section('judulkonten','Pesanan')
@section('isikonten')
<div class="col-12">
    <div class="card p-3">
        <form action="{{ route('proses-edit-order-item', $orderItem->order_item_id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="order_item_product">Produk</label>
                <select class="form-control" id="order_item_product" name="order_item_product">
                    <option disabled>-- Produk --</option>
                    @foreach ($listProducts as $product)
                          <option value="{{ $product->product_id }}" {{ old('order_item_product') == $orderItem->order_item_product ? 'selected' : ''}}>
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
                <input class="form-control" type="number" id="order_item_qty" name="order_item_qty" value="{{ old('order_item_qty', $orderItem->order_item_qty) }}" required>
                @error('order_item_qty')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button class="btn btn-primary" type="submit">Update</button>
            <a href="{{ route('index-order-item') }}" class="btn btn-warning">Back</a>
        </form>
    </div>
</div>
@endsection