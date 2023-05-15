@extends('dashboard.layouts.main')

@section('container')
    <div class="container-fluid px-4">
        <h1 class="mt-4 h2">Data Gudang</h1>
        <ol class="breadcrumb mb-4">
        </ol>
        <div class="row">
            <div class="col-4">
                <div class="card shadow p-3 mb-3">
                    <div class="row text-center">
                        <div class="col-md-6">
                            <img src="{{ asset('/img/arrow-down-square.svg') }}" alt="icon" width="70">
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <h6 class="text-muted">Barang Masuk</h6>
                                </div>
                                <div class="col-md-12">
                                    <h3>{{ $barang_masuk }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card shadow p-3 mb-3">
                    <div class="row text-center">
                        <div class="col-md-6">
                            <img src="{{ asset('/img/arrow-up-square.svg') }}" alt="icon" width="70">
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <h6 class="text-muted">Barang Keluar</h6>
                                </div>
                                <div class="col-md-12">
                                    <h3>{{ $barang_keluar }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card shadow p-3 mb-3">
                    <div class="row text-center">
                        <div class="col-md-6">
                            <img src="{{ asset('/img/box.svg') }}" alt="icon" width="70">
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <h6 class="text-muted">Total Stok Di Gudang</h6>
                                </div>
                                <div class="col-md-12">
                                    <h3>{{ $total_stok }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card shadow p-3 mb-3">
                    <div class="row text-center">
                        <div class="col-md-6">
                            <img src="{{ asset('/img/box-arrow-in-down.svg') }}" alt="icon" width="70">
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <h6 class="text-muted">Transaksi Barang Masuk</h6>
                                </div>
                                <div class="col-md-12">
                                    <h3>{{ $trans_masuk }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card shadow p-3 mb-3">
                    <div class="row text-center">
                        <div class="col-md-6">
                            <img src="{{ asset('/img/box-arrow-up.svg') }}" alt="icon" width="70">
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <h6 class="text-muted">Transaksi Barang Keluar</h6>
                                </div>
                                <div class="col-md-12">
                                    <h3>{{ $trans_keluar }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-start">
        <div class="col-5">
            <a class="btn btn-success btn-lg text-white mb-3" href="/dashboard/gudang/create">Tambah Data</a>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Tabel Gudang
        </div>
        <div class="card-body table-responsive">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Kode Transaksi</th>
                        <th>Supplier</th>
                        <th>Nama Barang</th>
                        <th>Nama Kategori</th>
                        <th>Tebal</th>
                        <th>Ukuran</th>
                        <th>Stok Awal</th>
                        <th>Jenis</th>
                        <th>Barang Masuk</th>
                        <th>Barang Keluar</th>
                        <th>Stok Saat Ini</th>
                        <th>Tanggal Transaksi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Kode Transaksi</th>
                        <th>Supplier</th>
                        <th>Nama Barang</th>
                        <th>Nama Kategori</th>
                        <th>Tebal</th>
                        <th>Ukuran</th>
                        <th>Stok Awal</th>
                        <th>Jenis</th>
                        <th>Barang Masuk</th>
                        <th>Barang Keluar</th>
                        <th>Stok Saat Ini</th>
                        <th>Tanggal Transaksi</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($gudangs as $gudang)
                        <tr>
                            <td>{{ $gudang->kode_transaksi }}</td>
                            <td>{{ $gudang->supplier->nama }} </td>
                            <td>{{ $gudang->barang->nama }}</td>
                            <td>{{ $gudang->kategori->nama }}</td>
                            <td>{{ $gudang->barang->tebal_mm }}</td>
                            <td>{{ $gudang->barang->ukuran_mm }}</td>
                            <td>{{ $gudang->stok_awal }}</td>
                            <td>{{ $gudang->jenis }}</td>
                            <td>{{ $gudang->barang_masuk }}</td>
                            <td>{{ $gudang->barang_keluar }}</td>
                            <td>{{ $gudang->stok_sekarang }}</td>
                            <td>{{ $gudang->updated_at }}</td>
                            <td>
                                <form action="/dashboard/gudang/{{ $gudang->id }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
@endsection
