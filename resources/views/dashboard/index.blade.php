@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome, {{ auth()->user()->nama }}!</h1>
    </div>
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
                                <h6 class="text-muted">Total Barang</h6>
                            </div>
                            <div class="col-md-12">
                                <h3>{{ $totalBarang }}</h3>
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
                        <img src="{{ asset('/img/grid.svg') }}" alt="icon" width="70">
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="text-muted">Total Kategori</h6>
                            </div>
                            <div class="col-md-12">
                                <h3>{{ $totalKategori }}</h3>
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
                        <img src="{{ asset('/img/image.svg') }}" alt="icon" width="70">
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="text-muted">Total Gambar Kategori</h6>
                            </div>
                            <div class="col-md-12">
                                <h3>{{ $totalGambar }}</h3>
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
                        <img src="{{ asset('/img/building.svg') }}" alt="icon" width="70">
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="text-muted">Total Supplier</h6>
                            </div>
                            <div class="col-md-12">
                                <h3>{{ $totalSupplier }}</h3>
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
    </div>
@endsection
