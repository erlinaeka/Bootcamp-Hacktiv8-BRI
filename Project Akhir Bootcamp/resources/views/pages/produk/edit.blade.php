@extends('layouts.main')

@section('judulpage','Edit Data Produk')
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
        <form action="{{ route('proses-edit-produk', $product->product_id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label class="form-label" for="product_name">Nama Produk</label>
                <input class="form-control" type="text" id="product_name" name="product_name" value="{{ old('product_name', $product->product_name) }}" required>
                @error('product_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="product_status">Status Produk</label>
                <select class="form-control" id="product_status" name="product_status">
                    <option disabled selected>-- Status Produk --</option>
                    <option value="draft" {{ old('product_status', $product->product_status) == 'draft' ? 'selected' : '' }}>Draft</option>
                    <option value="publish" {{ old('product_status', $product->product_status) == 'publish' ? 'selected' : '' }}>Publish</option>
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
                          <option value="{{ $category->category_id }}" {{ old('product_category') == $product->product_category ? 'selected' : ''}}>
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
                <input class="form-control" type="number" id="product_price" name="product_price" value="{{ old('product_price', $product->product_price) }}" required>
                @error('product_price')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label" for="product_weight">Berat Produk (Kg)</label>
                <input class="form-control" type="number" id="product_weight" name="product_weight" value="{{ old('product_weight', $product->product_weight) }}" required>
                @error('product_weight')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label" for="product_img_url">Gambar Produk</label>
                <input class="form-control" type="file" id="product_img_url" name="product_img_url" required>
                @if(isset($product->product_img_url))
                    <p class="mt-2">Gambar Produk </p>
                    <img src="{{ asset('storage/product/'.$product->product_img_url) }}" alt="Gambar Produk" width="200px">
                @endif
                @error('product_img_url')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label" for="product_desc">Keterangan</label>
                <textarea class="form-control summernote" id="product_desc" name="product_desc">{{ old('product_desc', $product->product_desc) }}</textarea>
            </div>
            <button class="btn btn-primary" type="submit">Update</button>
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