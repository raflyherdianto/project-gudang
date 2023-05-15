@extends('homepage.layouts.main')

@section('container')
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Product Images</h2>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-4">
                @foreach ($gambars as $gambar)
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="bd-placeholder-img card-img-top" width="100" role="img"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                @if ($gambar->gambar)
                                    <img src="{{ asset('storage/' . $gambar->gambar) }}" class="img-fluid" alt="">
                                @else
                                    <img src="/img/portfolio/{{ $gambar->nama }}.jpg" class="img-fluid" alt="">
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-3">
                    <h2>Stock</h2>
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
                                <th>Berat Item (kg)</th>
                                <th>Stok</th>
                                <th>Tanggal Update</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Tebal (mm)</th>
                                <th>Grade</th>
                                <th>Ukuran (mm)</th>
                                <th>Berat Item (kg)</th>
                                <th>Stok</th>
                                <th>Tanggal Update</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($gudangs as $gudang)
                            <tr>
                                <td>{{ $gudang->kode_barang }}</td>
                                <td>{{ $gudang->nama }}</td>
                                <td>{{ $gudang->tebal_mm }}</td>
                                <td>{{ $gudang->grade }}</td>
                                <td>{{ $gudang->ukuran_mm }}</td>
                                <td>{{ $gudang->berat_item_kg }}</td>
                                <td>{{ $gudang->stok_sekarang }}</td>
                                <td>{{ $gudang->updated_at }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
