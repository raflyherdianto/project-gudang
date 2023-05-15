@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid px-4">
    <h1 class="mt-4 h2">Data Supplier</h1>
    <ol class="breadcrumb mb-4">
    </ol>
    <div class="row">
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
            <a class="btn btn-success btn-lg text-white mb-3" href="/dashboard/supplier/create">Tambah Data</a>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Tabel Supplier
        </div>
        <div class="card-body table-responsive">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Kode Supplier</th>
                        <th>Nama Supplier</th>
                        <th>Alamat</th>
                        <th>Kota</th>
                        <th>Provinsi</th>
                        <th>Negara</th>
                        <th>Kode Pos</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Kode Supplier</th>
                        <th>Nama Supplier</th>
                        <th>Alamat</th>
                        <th>Kota</th>
                        <th>Provinsi</th>
                        <th>Negara</th>
                        <th>Kode Pos</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($suppliers as $supplier)
                    <tr>
                        <td>{{ $supplier->kode_supplier }}</td>
                        <td>{{ $supplier->nama }}</td>
                        <td>{{ $supplier->alamat }}</td>
                        <td>{{ $supplier->kota }}</td>
                        <td>{{ $supplier->provinsi }}</td>
                        <td>{{ $supplier->negara }}</td>
                        <td>{{ $supplier->kode_pos }}</td>
                        <td>
                            <form action="/dashboard/supplier/{{ $supplier->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                            <span>
                                    <a href="/dashboard/supplier/{{ $supplier->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
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
