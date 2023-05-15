@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid px-4">
    <h1 class="mt-4 h2">Tambah Data Barang</h1>
    <ol class="breadcrumb mb-4">
    </ol>
    <form class="row g-3" action="/dashboard/barang" method="post" enctype="multipart/form-data">
        @csrf
        <div class="col-md-6">
            <label for="kode_barang" class="form-label fs-6">Kode Barang</label>
            <input type="text" class="form-control @error('kode_barang') is-invalid @enderror"
            id="kode_barang" name="kode_barang">
            @error('kode_barang')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="nama" class="form-label fs-6">Nama Barang</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror"
            id="nama" name="nama">
            @error('nama')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="tebal_mm" class="form-label fs-6">Tebal (mm)</label>
            <input type="text" class="form-control @error('tebal_mm') is-invalid @enderror"
            id="tebal_mm" name="tebal_mm">
            @error('tebal_mm')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="grade" class="form-label fs-6">Grade</label>
            <input type="text" class="form-control @error('grade') is-invalid @enderror"
            id="grade" name="grade">
            @error('grade')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="ukuran_mm" class="form-label fs-6">Ukuran (mm)</label>
            <input type="text" class="form-control @error('ukuran_mm') is-invalid @enderror"
            id="ukuran_mm" name="ukuran_mm">
            @error('ukuran_mm')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="kategori_id" class="form-label fs-6">Kategori</label>
            <select id="kategori_id" class="form-select @error('kategori_id') is-invalid @enderror"
            name="kategori_id">
            <option selected>Pilih...</option>
            @foreach ($kategoris as $kategori)
            <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
            @endforeach
            </select>
            @error('kategori_id')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="berat_item_kg" class="form-label fs-6">Berat Item (kg)</label>
            <input type="text" class="form-control @error('berat_item_kg') is-invalid @enderror"
            id="berat_item_kg" name="berat_item_kg">
            @error('berat_item_kg')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="harga" class="form-label fs-6">Harga</label>
            <input type="text" class="form-control @error('harga') is-invalid @enderror"
            id="harga" name="harga">
            @error('harga')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="gambar" class="form-label fs-6">Upload Gambar</label>
            <img class="img-preview img-fluid mb-3 col-sm-5">
            <input class="form-control" type="file" id="gambar" name="gambar"
            onchange="previewImage()">
        </div>
        <div class="col-12 mb-3 mt-4 text-center">
            <button type="submit" class="btn btn-success btn-lg">Tambah</button>
        </div>
    </form>
</div>
@endsection
