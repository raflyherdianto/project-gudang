@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid px-4">
    <h1 class="mt-4 h2">Data Barang</h1>
    <ol class="breadcrumb mb-4">
    </ol>
    <div class="row">
        <div class="col-4">
            <div class="card shadow p-3 mb-3">
                <div class="row text-center">
                    <div class="col-md-6">
                        <img src="{{ asset('/img/box-seam.svg') }}" alt="icon" width="70">
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="text-muted">Total Data Barang</h6>
                            </div>
                            <div class="col-md-12">
                                <h3>{{ $total }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-start">
        <div class="col-5">
            <a class="btn btn-success btn-lg text-white mb-3" href="/dashboard/barang/create">Tambah Data</a>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Tabel Barang
        </div>
        <div class="card-body table-responsive">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Tebal (mm)</th>
                        <th>Grade</th>
                        <th>Ukuran (mm)</th>
                        <th>Kategori</th>
                        <th>Berat Item (kg)</th>
                        <th>Harga</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Tebal (mm)</th>
                        <th>Grade</th>
                        <th>Ukuran (mm)</th>
                        <th>Kategori</th>
                        <th>Berat Item (kg)</th>
                        <th>Harga</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($barangs as $barang)
                    <tr>
                        <td>{{ $barang->kode_barang }}</td>
                        <td>{{ $barang->nama }}</td>
                        <td>{{ $barang->tebal_mm }}</td>
                        <td>{{ $barang->grade }}</td>
                        <td>{{ $barang->ukuran_mm }}</td>
                        <td>{{ $barang->kategori->nama }}</td>
                        <td>{{ $barang->berat_item_kg }}</td>
                        <td>Rp.{{ $barang->harga }}</td>
                        <td><img width="50" src="{{ asset('storage/' . $barang->gambar) }}"></td>
                        <td>
                            <form action="/dashboard/barang/{{ $barang->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                            <span>
                                <a href="/dashboard/barang/{{ $barang->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                            </span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
