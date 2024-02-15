@extends('layouts.main')

@section('judulpage','Daftar Order Item')
@section('judulkonten','Keranjang Pesanan')


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
                        <h6>Data Keranjang Pesanan</h6>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <a class="btn btn-primary float-right mb-2" href="{{ route('tambah-order-item') }}">Tambah Pesanan</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-md">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Produk</th>
                                <th>Qty</th>
                                <th>Subtotal</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($orderItemList as $orderItem)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $orderItem->product->product_name }}</td>
                                <td>{{ $orderItem->order_item_qty }}</td>
                                <td>Rp {{ number_format($orderItem->order_item_subtotal) }}</td>
                                {{-- <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas possimus exercitationem enim?</td> --}}
                                <td>                                    
                                    <form action="{{ route('delete-order-item', $orderItem->order_item_id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('edit-order-item', $orderItem->order_item_id) }}" class="btn btn-warning">Edit</a>
                                        {{-- Bisa parameter nya 2, pake array atau tambah lagi --}}
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin Hapus Produk?');">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
                <div class="row">
                        <a class="btn btn-success float-right mb-2 col-2" href="{{ route('checkout-order') }}">Checkout Order</a>
                        <p>Note :</p>
                        <p style="line-height: 1px;">- Pastikan telah melakukan tambah pesanan sebelum melakukan checkout.</p>
                        <p style="line-height: 1px;">- Data Keranjang Pesanan yang telah dicheckout akan masuk ke Halaman Pesanan.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection