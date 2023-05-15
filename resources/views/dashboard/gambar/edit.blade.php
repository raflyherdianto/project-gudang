@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid px-4">
    <h1 class="mt-4 h2">Edit Gambar Kategori</h1>
    <ol class="breadcrumb mb-4">
    </ol>
    <form class="row g-3 mt-2" action="/dashboard/gambar/{{ $gambar->id }}" method="POST"
        enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="col-12">
            <label for="kode_gambar" class="form-label fs-6">Kode Gambar</label>
            <input class="form-control" type="text" value="{{ old('kode_gambar', $gambar->kode_gambar) }}" name="kode_gambar"
            aria-label="readonly input example" readonly>
        </div>
        <div class="col-md-6">
            <label for="nama" class="form-label fs-6">Ubah Nama Gambar</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
            value="{{ old('nama', $gambar->nama) }}">
            @error('nama')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="kategori_id" class="form-label fs-6">Ubah Kategori</label>
            <select id="kategori_id" class="form-select @error('kategori_id') is-invalid @enderror" name="kategori_id">
            <option selected>Pilih...</option>
            @foreach ($kategoris as $kategori)
            @if (old('kategori_id', $kategori->id)==$gambar->kategori_id)
            <option selected value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
            @else
            <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
            @endif
            @endforeach
            </select>
            @error('kategori_id')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="gambar" class="form-label fs-6">Ubah Gambar</label>
            <input type="hidden" name="oldImage" value="{{ $gambar->gambar }}">
            @if ($gambar->gambar)
                <img src="{{ asset('storage/' . $gambar->gambar ) }}" class="img-preview mb-3 img-fluid col-sm-5 d-block">
            @else
                <img class="img-preview img-fluid mb-3 col-sm-5">
            @endif
            <input class="form-control" type="file" id="gambar" name="gambar"
            onchange="previewImage()">
        </div>
        <div class="col-12 mt-4 mb-3 text-center">
            <button type="submit" class="btn btn-success btn-lg">Ubah</button>
        </div>
    </form>
</div>
@endsection
