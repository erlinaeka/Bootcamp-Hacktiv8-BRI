@extends('layouts.main')

@section('judulpage','Edit Data Kategori')
@section('judulkonten','Kategori')


@section('isikonten')
<div class="col-12">
    <div class="card p-3">
        <form action="{{ route('proses-edit-kategori', $category->category_id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label class="form-label" for="category_name">Nama Kategori</label>
                <input class="form-control" type="text" id="category_name" name="category_name" value="{{ old('category_name', $category->category_name) }}" required>
                @error('category_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button class="btn btn-primary" type="submit">Update</button>
            <a href="{{ route('index-kategori') }}" class="btn btn-warning">Back</a>
        </form>
    </div>
</div>
@endsection