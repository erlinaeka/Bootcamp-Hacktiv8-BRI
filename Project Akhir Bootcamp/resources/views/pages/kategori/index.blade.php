@extends('layouts.main')

@section('judulpage','Daftar Kategori')
@section('judulkonten','Kategori')


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
                        <h6>Data Kategori</h6>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <a class="btn btn-primary float-right mb-2" href="{{ route('tambah-kategori') }}">Tambah Kategori</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-md">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kategori</th>
                                {{-- <th>Keterangan</th> --}}
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($categoryList as $category)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->category_name }}</td>
                                {{-- <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas possimus exercitationem enim?</td> --}}
                                <td>                                    
                                    <form action="{{ route('delete-kategori', $category->category_id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('edit-kategori', $category->category_id) }}" class="btn btn-warning">Edit</a>
                                        {{-- Bisa parameter nya 2, pake array atau tambah lagi --}}
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                                    </form>
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