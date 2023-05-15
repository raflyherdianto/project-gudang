@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid px-4">
    <h1 class="mt-4 h2">Edit Data Barang</h1>
    <ol class="breadcrumb mb-4">
    </ol>
    <form class="row g-3 mt-2" action="/dashboard/barang/{{ $barang->id }}" method="POST"
        enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="col-12">
            <label for="nama" class="form-label fs-6">Kode Barang</label>
            <input class="form-control" type="text" value="{{ old('kode_barang', $barang->kode_barang) }}"
            name="kode_barang"  aria-label="readonly input example" readonly>
        </div>
        <div class="col-md-6">
            <label for="nama" class="form-label fs-6">Ubah Nama Barang</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
            value="{{ old('nama', $barang->nama) }}">
            @error('nama')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="tebal_mm" class="form-label fs-6">Ubah Tebal (mm)</label>
            <input type="text" class="form-control @error('tebal_mm') is-invalid @enderror" id="tebal_mm"
            name="tebal_mm" value="{{ old('tebal_mm', $barang->tebal_mm) }}">
            @error('tebal_mm')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="grade" class="form-label fs-6">Ubah Grade</label>
            <input type="text" class="form-control @error('grade') is-invalid @enderror" id="grade"
            name="grade" value="{{ old('grade', $barang->grade) }}">
            @error('grade')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="ukuran_mm" class="form-label fs-6">Ubah Ukuran (mm)</label>
            <input type="text" class="form-control @error('ukuran_mm') is-invalid @enderror" id="ukuran_mm"
            name="ukuran_mm" value="{{ old('ukuran_mm', $barang->ukuran_mm) }}">
            @error('ukuran_mm')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="kategori_id" class="form-label fs-6">Ubah Kategori</label>
            <select id="kategori_id" class="form-select @error('kategori_id') is-invalid @enderror"
            name="kategori_id">
            <option selected>Pilih...</option>
            @foreach ($kategoris as $kategori)
            @if (old('kategori_id', $kategori->id)==$barang->kategori_id)
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
            <label for="berat_item_kg" class="form-label fs-6">Ubah Berat Item (kg)</label>
            <input type="text" class="form-control @error('berat_item_kg') is-invalid @enderror"
            id="berat_item_kg" name="berat_item_kg" value="{{ old('berat_item_kg', $barang->berat_item_kg) }}">
            @error('berat_item_kg')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="harga" class="form-label fs-6">Ubah Harga</label>
            <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga"
            name="harga" value="{{ old('harga', $barang->harga) }}">
            @error('harga')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="gambar" class="form-label fs-6">Ubah Gambar</label>
            <input type="hidden" name="oldImage" value="{{ $barang->gambar }}">
            @if ($barang->gambar)
                <img src="{{ asset('storage/' . $barang->gambar ) }}"
                class="img-preview mb-3 img-fluid col-sm-5 d-block">
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
