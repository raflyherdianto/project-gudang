@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid px-4">
    <h1 class="mt-4 h2">Tambah Data Supplier</h1>
    <ol class="breadcrumb mb-4">
    </ol>
    <form class="row g-3" action="/dashboard/supplier" method="post" enctype="multipart/form-data">
        @csrf
        <div class="col-md-6">
            <label for="kode_supplier" class="form-label fs-6">Kode Supplier</label>
            <input type="text" class="form-control @error('kode_supplier') is-invalid @enderror" id="kode_supplier" name="kode_supplier">
            @error('kode_supplier')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="nama" class="form-label fs-6">Nama Supplier</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama">
            @error('nama')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="alamat" class="form-label fs-6">Alamat Supplier</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat">
            @error('alamat')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="kota" class="form-label fs-6">Kota</label>
            <input type="text" class="form-control @error('kota') is-invalid @enderror" id="kota" name="kota">
            @error('kota')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="provinsi" class="form-label fs-6">Provinsi</label>
            <input type="text" class="form-control @error('provinsi') is-invalid @enderror" id="provinsi" name="provinsi">
            @error('provinsi')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="negara" class="form-label fs-6">Negara</label>
            <input type="text" class="form-control @error('negara') is-invalid @enderror" id="negara" name="negara">
            @error('negara')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="kode_pos" class="form-label fs-6">Kode Pos</label>
            <input type="text" class="form-control @error('kode_pos') is-invalid @enderror" id="kode_pos" name="kode_pos">
            @error('kode_pos')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-12 mb-3 mt-4 text-center">
            <button type="submit" class="btn btn-success btn-lg">Tambah</button>
        </div>
    </form>
</div>
@endsection
