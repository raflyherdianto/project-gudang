@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid px-4">
    <h1 class="mt-4 h2">Edit Data Supplier</h1>
    <ol class="breadcrumb mb-4">
    </ol>
    <form class="row g-3 mt-2" action="/dashboard/supplier/{{ $supplier->id }}" method="POST">
        @method('put')
        @csrf
        <div class="col-12">
            <label for="kode_supplier" class="form-label fs-6">Kode Supplier</label>
            <input class="form-control" type="text" value="{{ old('kode_supplier', $supplier->kode_supplier) }}"
            name="kode_supplier" aria-label="readonly input example" readonly>
        </div>
        <div class="col-md-6">
            <label for="nama" class="form-label fs-6">Ubah Nama Supplier</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
            value="{{ old('nama', $supplier->nama) }}">
            @error('nama')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="alamat" class="form-label fs-6">Ubah Alamat Supplier</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat"
            value="{{ old('alamat', $supplier->alamat) }}">
            @error('alamat')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="kota" class="form-label fs-6">Ubah Kota</label>
            <input type="text" class="form-control @error('kota') is-invalid @enderror" id="kota" name="kota"
            value="{{ old('kota', $supplier->kota) }}">
            @error('kota')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="provinsi" class="form-label fs-6">Ubah Negara</label>
            <input type="text" class="form-control @error('provinsi') is-invalid @enderror" id="provinsi" name="provinsi"
            value="{{ old('provinsi', $supplier->provinsi) }}">
            @error('provinsi')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="kode_pos" class="form-label fs-6">Ubah Kode Pos</label>
            <input type="text" class="form-control @error('kode_pos') is-invalid @enderror" id="kode_pos" name="kode_pos"
            value="{{ old('kode_pos', $supplier->kode_pos) }}">
            @error('kode_pos')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-12 mt-4 mb-3 text-center">
            <button type="submit" class="btn btn-success btn-lg">Ubah</button>
        </div>
    </form>
</div>
@endsection
