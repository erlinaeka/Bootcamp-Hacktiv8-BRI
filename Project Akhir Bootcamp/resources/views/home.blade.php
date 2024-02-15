@extends('layouts.main')
@section('judulpage','Dashboard')
@section('judulkonten', 'Dashboard')
@section('isikonten')
<div class="row">
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
                <i class="fas fa-archive"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Produk</h4>
                </div>
                <div class="card-body">
                    {{ $totalProduct }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-danger">
                <i class="far fa-file-alt"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Kategori Produk</h4>
                </div>
                <div class="card-body">
                    {{ $totalCategory }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-warning">
                <i class="fas fa-shopping-bag"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Total Pesanan</h4>
                </div>
                <div class="card-body">
                    {{ $totalOrder }}
                </div>
            </div>
        </div>
    </div>

</div>
@endsection