@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid px-4">
    <h1 class="mt-4 h2">Edit Kategori Barang</h1>
    <ol class="breadcrumb mb-4">
        {{-- <li class="breadcrumb-item active">Dashboard</li> --}}
    </ol>
    <form class="row g-3 mt-2" action="/dashboard/kategori/{{ $kategori->id }}" method="POST">
        @method('put')
        @csrf
        <div class="col-12">
            <label for="kode_kategori" class="form-label fs-6">Kode Kategori</label>
            <input class="form-control" type="text" value="{{ old('kode_kategori', $kategori->kode_kategori) }}"
            name="kode_kategori"  aria-label="readonly input example" readonly>
        </div>
        <div class="col-12">
            <label for="nama" class="form-label fs-6">Ubah Nama Kategori</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
            value="{{ old('nama', $kategori->nama) }}">
            @error('nama')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-12 mt-4 mb-4 text-center">
            <button type="submit" class="btn btn-success btn-lg">Ubah</button>
        </div>
    </form>
</div>
@endsection
