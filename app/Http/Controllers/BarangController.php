<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreBarangRequest;
use App\Http\Requests\UpdateBarangRequest;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.barang.index', [
            'title' => 'Data Barang',
            'barangs' => Barang::all(),
            'total' => Barang::all()->count(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.barang.create', [
            'title' => 'Tambah Data Barang',
            'kategoris'=>Kategori::all(),
            //
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBarangRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'kode_barang'=>'required|unique:barangs|min:3|max:5',
            'nama'=>'required|min:3|max:24',
            'ukuran_mm'=>'required',
            'grade'=>'required',
            'kategori_id'=>'required',
            'tebal_mm'=>'required',
            'harga'=>'required',
            'berat_item_kg'=>'required',
            'gambar'=>'image|file|max:2048',
        ]);

        if ($request->file('gambar')){
            $validateData['gambar'] = $request->file('gambar')->store('gambar-barang');
        }

        Barang::create($validateData);
        return redirect('/dashboard/barang');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang)
    {
        return view('dashboard.barang.edit', [
            'title' => 'Edit Data Barang',
            'barang'=>$barang,
            'kategoris'=>Kategori::all(),
            //
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBarangRequest  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        $rules = [
            'nama' => 'required|min:3|max:24',
            'ukuran_mm' => 'required',
            'grade' => 'required',
            'kategori_id' => 'required',
            'tebal_mm' => 'required',
            'harga' => 'required',
            'berat_item_kg' => 'required',
            'gambar'=>'image|file|max:2048',
        ];

        if ($request->kode_barang != $barang->kode_barang) {
            $rules['kode_barang'] = 'required|unique:barangs';
        }

        $validateData = $request->validate($rules);

        if ($request->file('gambar')){
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateData['gambar'] = $request->file('gambar')->store('gambar-barang');
        }

        Barang::where('id', $barang->id)->update($validateData);
        return redirect('/dashboard/barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        if ($barang->gambar) {
            Storage::delete($barang->gambar);
        }
        Barang::destroy($barang->id);
        return redirect('/dashboard/barang');
    }
}
