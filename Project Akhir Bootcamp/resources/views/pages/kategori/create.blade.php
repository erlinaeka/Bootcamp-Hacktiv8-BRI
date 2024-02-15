@extends('layouts.main')

@section('judulpage','Tambah Data Kategori')
@section('judulkonten','Kategori')


@section('isikonten')
<div class="col-12">
    <div class="card p-3">
        <form action="{{ route('proses-tambah-kategori') }}" method="POST">
            @csrf
            <div class="form-group">
                <label class="form-label" for="category_name">Nama Kategori</label>
                <input class="form-control" type="text" id="category_name" name="category_name" value="{{ old('category_name') }}" required>
                @error('category_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button class="btn btn-primary" type="submit">Tambah</button>
            <a href="{{ route('index-kategori') }}" class="btn btn-warning">Back</a>
        </form>
    </div>
</div>
@endsection