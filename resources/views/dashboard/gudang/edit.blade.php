@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid px-4">
    <h1 class="mt-4 h2">Ubah Data Gudang</h1>
    <ol class="breadcrumb mb-4">
        {{-- <li class="breadcrumb-item active">Dashboard</li> --}}
    </ol>
    <form action="/dashboard/gudang/{{ $gudang->id }}" method="post" class="row g-3 mt-2">
    @method('put')
    @csrf
        <div class="col-md-6">
            <label for="kode_transaksi" class="form-label fs-6">Kode Transaksi</label>
            <input type="text" class="form-control" readonly id="kode_transaksi" name="kode_transaksi" value="{{ old('kode_transaksi', $gudang->kode_transaksi) }}">
        </div>
        <div class="col-md-6">
            <label for="supplier_id" class="form-label fs-6">Supplier</label>
            <select id="supplier_id" class="form-select @error('supplier_id') is-invalid @enderror" name="supplier_id">
            <option selected>Pilih...</option>
            @foreach ($suppliers as $supplier)
            @if (old('supplier_id', $supplier->id)==$gudang->supplier_id)
            <option selected value="{{ $supplier->id }}">{{ $supplier->nama }} - {{ $supplier->kode_pos }}</option>
            @else
            <option value="{{ $supplier->id }}">{{ $supplier->nama }} - {{ $supplier->kode_pos }}</option>
            @endif
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
            @if (old('barang_id', $barang->id)==$gudang->barang_id)
            <option selected value="{{ $barang->id }}">{{ $barang->nama }} - {{ $barang->tebal_mm }} - {{ $barang->ukuran_mm }}</option>
            @else
            <option value="{{ $barang->id }}">{{ $barang->nama }} - {{ $barang->tebal_mm }} - {{ $barang->ukuran_mm }}</option>
            @endif
            @endforeach
            </select>
            @error('barang_id')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="kategori_id" class="form-label fs-6">Kategori Barang</label>
            <select id="kategori_id" class="form-select @error('barang_id') is-invalid @enderror" name="kategori_id">
            <option selected>Pilih...</option>
            @foreach ($kategoris as $kategori)
            @if (old('kategori_id', $kategori->id)==$gudang->kategori_id)
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
            <label for="stok_awal" class="form-label fs-6">Stok Awal</label>
            <input type="text" readonly class="form-control @error('stok_awal') is-invalid @enderror" id="stok_awal" name="stok_awal" value="{{ old('stok_awal', $gudang->stok_awal) }}">
            @error('stok_awal')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="jenis" class="form-label fs-6">Jenis</label>
            <select id="jenis" class="form-select @error('stok_awal') is-invalid @enderror" name="jenis">
                <option selected>Pilih...</option>
                @if (old('jenis', $gudang->jenis) == "Barang Masuk")
                <option value="Barang Masuk" selected>Barang Masuk</option>
                <option value="Barang Keluar">Barang Keluar</option>
                @else
                <option value="Barang Masuk">Barang Masuk</option>
                <option value="Barang Keluar" selected>Barang Keluar</option>
                @endif
            </select>
            @error('jenis')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        @if (old('jenis', $gudang->jenis) == "Barang Masuk")
        <div class="col-md-6">
            <label for="barang_masuk" class="form-label fs-6">Barang Masuk</label>
            <input type="text" class="form-control" id="barang_masuk" name="barang_masuk" value="{{ old('barang_masuk', $gudang->barang_masuk) }}">
        </div>
        <div class="col-md-6">
            <label for="barang_keluar" class="form-label fs-6">Barang Keluar</label>
            <input readonly type="text" class="form-control" id="barang_keluar" name="barang_keluar" value="{{ old('barang_keluar', $gudang->barang_keluar) }}">
        </div>
        @else
        <div class="col-md-6">
            <label for="barang_masuk" class="form-label fs-6">Barang Masuk</label>
            <input readonly type="text" class="form-control" id="barang_masuk" name="barang_masuk" value="{{ old('barang_masuk', $gudang->barang_masuk) }}">
        </div>
        <div class="col-md-6">
            <label for="barang_keluar" class="form-label fs-6">Barang Keluar</label>
            <input type="text" class="form-control" id="barang_keluar" name="barang_keluar" value="{{ old('barang_keluar', $gudang->barang_keluar) }}">
        </div>
        @endif
        <div class="col-12 mt-4 mb-3 text-center">
            <button type="submit" class="btn btn-success btn-lg">Tambah</button>
        </div>
    </form>
</div>
@endsection
