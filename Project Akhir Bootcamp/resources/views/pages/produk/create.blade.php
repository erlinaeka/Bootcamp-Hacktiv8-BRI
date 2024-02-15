@extends('layouts.main')

@section('judulpage','Tambah Data Produk')
@section('judulkonten','Produk')

@push('script-css')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
@endpush

@section('isikonten')
<div class="col-12">
    <div class="card p-3">
        <form action="{{ route('proses-tambah-produk') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="form-label" for="product_name">Nama Produk</label>
                <input class="form-control" type="text" id="product_name" name="product_name" value="{{ old('product_name') }}" required>
                @error('product_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="product_status">Status Produk</label>
                <select class="form-control" id="product_status" name="product_status">
                    <option value="">-- Status Produk --</option>
                    <option value="draft">Draft</option>
                    <option value="publish">Publish</option>
                </select>
                @error('product_status')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="product_category">Kategori Produk</label>
                <select class="form-control" id="product_category" name="product_category">
                    <option value="">-- Kategori Produk --</option>
                    @foreach ($listCategory as $category)
                          <option value="{{ $category->category_id }}" @selected(old('product_category') == $category->category_id)>
                            {{ $category->category_name }}
                          </option>
                    @endforeach
                </select>
                @error('product_category')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label" for="product_price">Harga Produk</label>
                <input class="form-control" type="number" id="product_price" name="product_price" value="{{ old('product_price') }}" required>
                @error('product_price')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label" for="product_weight">Berat Produk (Kg)</label>
                <input class="form-control" type="number" id="product_weight" name="product_weight" value="{{ old('product_weight') }}" required>
                @error('product_weight')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label" for="product_img_url">Gambar Produk</label>
                <input class="form-control" type="file" id="product_img_url" name="product_img_url" value="{{ old('product_img_url') }}" required>
                @error('product_img_url')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label" for="product_desc">Keterangan</label>
                <textarea class="form-control summernote" id="product_desc" name="product_desc">{{ old('product_desc') }}</textarea>
            </div>
            <button class="btn btn-primary" type="submit">Tambah</button>
            <a href="{{ route('index-produk') }}" class="btn btn-warning">Back</a>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<!-- summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script type="text/javascript">
    $('#product_desc').summernote({
        height: 200
    });
</script>
@endpush