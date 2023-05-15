@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid px-4">
    <h1 class="mt-4">Tambah Kategori Barang</h1>
    <ol class="breadcrumb mb-4">
    </ol>
    <form action="/dashboard/kategori" method="post" class="row g-3 mt-2" enctype="multipart/form-data">
    @csrf
        <div class="col-md-6">
            <label for="kode_kategori" class="form-label fs-6">Kode Kategori</label>
            <input type="text" class="form-control @error('kode_kategori') is-invalid @enderror" id="kode_kategori"
            name="kode_kategori">
            @error('kode_kategori')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="nama" class="form-label fs-6">Nama Kategori</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama">
            @error('nama')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-12 mt-4 mb-4 text-center">
            <button type="submit" class="btn btn-success btn-lg">Tambah</button>
        </div>
    </form>
</div>
@endsection
