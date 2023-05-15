<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Gudang;
use App\Models\Kategori;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreGudangRequest;
use App\Http\Requests\UpdateGudangRequest;

class GudangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.gudang.index', [
            'title' => 'Data Gudang',
            'gudangs' => Gudang::latest()->get(),
            'barang_masuk' => Gudang::all()->sum('barang_masuk'),
            'barang_keluar' => Gudang::all()->sum('barang_keluar'),
            'trans_masuk' => Gudang::all()->where('jenis', '=', 'Barang Masuk')->count('jenis'),
            'trans_keluar' => Gudang::all()->where('jenis', '=', 'Barang Keluar')->count('jenis'),
            'total_stok' => Gudang::selectRaw('SUM(stok_sekarang) as total_stok')
            ->joinSub(Gudang::selectRaw('MAX(gudangs.created_at) as updated_at')->groupBy('gudangs.barang_id'),'g', function ($join) {
                $join->on('gudangs.updated_at', '=', 'g.updated_at');
            })
            ->pluck('total_stok')->first(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.gudang.create', [
            'title' => 'Tambah Data Gudang',
            'barangs' => Barang::all(),
            'suppliers' => Supplier::all(),
            'kategoris' => Kategori::all()
            //
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGudangRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Gudang $gudang)
    {
        $validateData = $request->validate([
            'kode_transaksi'=>'required|min:3|max:5',
            'supplier_id'=>'required',
            'barang_id'=>'required',
            'kategori_id'=>'required',
            'stok_awal'=>'required',
            'jenis'=>'required',
            'barang_masuk'=>'required',
            'barang_keluar'=>'required',
        ]);
        Gudang::create($validateData);
        $gudangs = Gudang::where('kode_transaksi', $request->kode_transaksi)->first();
        $gudangs->stok_sekarang = $request->stok_awal  +  $request->barang_masuk - $request->barang_keluar;
        $gudangs->update();
        return redirect('/dashboard/gudang');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gudang  $gudang
     * @return \Illuminate\Http\Response
     */
    public function show(Gudang $gudang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gudang  $gudang
     * @return \Illuminate\Http\Response
     */
    public function edit(Gudang $gudang)
    {
        return view('dashboard.gudang.edit', [
            'title' => 'Edit Data Gudang',
            'gudang'=>$gudang,
            'kategoris' => Kategori::all(),
            'barangs'=>Barang::all(),
            'suppliers' => Supplier::all(),
            //
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGudangRequest  $request
     * @param  \App\Models\Gudang  $gudang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gudang $gudang)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gudang  $gudang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gudang $gudang)
    {
        Gudang::destroy($gudang->id);
        return redirect('/dashboard/gudang');
    }
}
