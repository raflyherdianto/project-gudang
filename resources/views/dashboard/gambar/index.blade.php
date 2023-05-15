@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid px-4">
    <h1 class="mt-4 h2">Data Gambar Kategori Barang</h1>
    <ol class="breadcrumb mb-4">
    </ol>
    <div class="row">
        <div class="col-4">
            <div class="card shadow p-3 mb-3">
                <div class="row text-center">
                    <div class="col-md-6">
                        <img src="{{ asset('/img/image.svg') }}" alt="icon" width="70">
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="text-muted">Total Gambar</h6>
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
            <a class="btn btn-success btn-lg text-white mb-3" href="/dashboard/gambar/create">Tambah Data</a>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Tabel Gambar Kategori
        </div>
        <div class="card-body table-responsive">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Kode Gambar</th>
                        <th>Nama</th>
                        <th>Kategori</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Kode Gambar</th>
                        <th>Nama</th>
                        <th>Kategori</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($gambars as $gambar)
                    <tr>
                        <td>{{ $gambar->kode_gambar }}</td>
                        <td>{{ $gambar->nama }}</td>
                        <td>{{ $gambar->kategori->nama }}</td>
                        <td><img width="50" src="{{ asset('storage/' . $gambar->gambar) }}"></td>
                        <td>
                            <form action="/dashboard/gambar/{{ $gambar->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                            <span>
                                    <a href="/dashboard/gambar/{{ $gambar->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                            </span>
                        </td>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
