@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid px-4">
    <h1 class="mt-4 h2">Tambah Data Gudang</h1>
    <ol class="breadcrumb mb-4">
    </ol>
    <form action="/dashboard/gudang" method="post" class="row g-3 mt-2">
    @csrf
        <div class="col-md-6">
            <label for="kode_transaksi" class="form-label fs-6">Kode Transaksi</label>
            <input type="text" class="form-control @error('kode_transaksi') is-invalid @enderror" id="kode_transaksi" name="kode_transaksi">
            @error('kode_transaksi')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="supplier_id" class="form-label fs-6">Supplier</label>
            <select id="supplier_id" class="form-select @error('supplier_id') is-invalid @enderror" name="supplier_id">
            <option selected>Pilih...</option>
            @foreach ($suppliers as $supplier)
            <option value="{{ $supplier->id }}">{{ $supplier->nama }} - {{ $supplier->kode_pos }}</option>
            @endforeach
            </select>
            @error('supplier_id')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="barang_id" class="form-label fs-6">Data Barang</label>
            <select id="barang_id" class="form-select @error('barang_id') is-invalid @enderror" name="barang_id">
            <option selected>Pilih...</option>
            @foreach ($barangs as $barang)
            <option value="{{ $barang->id }}">{{ $barang->nama }} - {{ $barang->tebal_mm }} - {{ $barang->ukuran_mm }}</option>
            @endforeach
            </select>
            @error('barang_id')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="kategori_id" class="form-label fs-6">Kategori Barang</label>
            <select id="kategori_id" class="form-select @error('kategori_id') is-invalid @enderror" name="kategori_id">
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
            <label for="stok_awal" class="form-label fs-6">Stok Awal</label>
            <input type="text" class="form-control @error('stok_awal') is-invalid @enderror" id="stok_awal" name="stok_awal">
            @error('stok_awal')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="jenis" class="form-label fs-6">Jenis</label>
            <select id="jenis" class="form-select @error('jenis') is-invalid @enderror" name="jenis">
            <option selected>Pilih...</option>
            <option value="Barang Masuk">Barang Masuk</option>
            <option value="Barang Keluar">Barang Keluar</option>
            </select>
            @error('jenis')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="barang_masuk" class="form-label fs-6">Barang Masuk</label>
            <input type="text" class="form-control @error('barang_masuk') is-invalid @enderror" id="barang_masuk" name="barang_masuk">
            @error('barang_masuk')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="barang_keluar" class="form-label fs-6">Barang Keluar</label>
            <input type="text" class="form-control @error('barang_keluar') is-invalid @enderror" id="barang_keluar" name="barang_keluar">
            @error('barang_keluar')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-12 mt-4 mb-3 text-center">
            <button type="submit" class="btn btn-success btn-lg">Tambah</button>
        </div>
    </form>
</div>
@endsection
