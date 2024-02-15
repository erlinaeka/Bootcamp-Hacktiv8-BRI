@extends('layouts.main')

@section('judulpage','Daftar Pesanan')
@section('judulkonten','Pesanan')


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
                        <h6>Data Pesanan</h6>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-md">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Order Invoice</th>
                                <th>Tanggal Order</th>
                                <th>Total</th>
                                <th>Status Order</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($orderItem as $order)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $order->order_invoice_id }}</td>
                                <td>{{ $order->order_date }}</td>
                                <td>{{ number_format($order->order_total) }}</td>
                                <td>{{ $order->order_status }}</td>
                                {{-- <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas possimus exercitationem enim?</td> --}}
                                <td>       
                                    <a href="{{ route('edit-status', $order->order_id) }}" class="btn btn-warning">Edit Status</a>                                        
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