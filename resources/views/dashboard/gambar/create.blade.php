@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid px-4">
    <h1 class="mt-4 h2">Tambah Gambar Kategori Barang</h1>
    <ol class="breadcrumb mb-4">
    </ol>
    <form action="/dashboard/gambar" method="POST" class="row g-3 mt-2" enctype="multipart/form-data">
    @csrf
        <div class="col-md-6">
            <label for="kode_gambar" class="form-label fs-6">Kode Gambar</label>
            <input type="text" class="form-control @error('kode_gambar') is-invalid @enderror" id="kode_gambar" name="kode_gambar">
            @error('kode_gambar')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="nama" class="form-label fs-6">Nama Gambar</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama">
            @error('nama')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="kategori_id" class="form-label fs-6">Kategori</label>
            <select id="kategori_id" class="form-select" name="kategori_id">
            <option selected>Pilih...</option>
            @foreach ($kategoris as $kategori)
            <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
            @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label for="gambar" class="form-label fs-6">Upload Gambar</label>
            <img class="img-preview img-fluid mb-3 col-sm-5">
            <input class="form-control" type="file" id="gambar" name="gambar"
            onchange="previewImage()">
        </div>
        <div class="col-12 mt-4 mb-4 text-center">
            <button type="submit" class="btn btn-success btn-lg">Tambah</button>
        </div>
    </form>
</div>
@endsection
