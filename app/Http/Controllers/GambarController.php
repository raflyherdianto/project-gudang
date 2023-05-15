<?php

namespace App\Http\Controllers;

use App\Models\Gambar;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreGambarRequest;
use App\Http\Requests\UpdateGambarRequest;

class GambarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.gambar.index', [
            'title' => 'Data Gambar Kategori Barang',
            'gambars' => Gambar::all(),
            'total' => Gambar::all()->count(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.gambar.create', [
            'title' => 'Tambah Gambar Kategori Barang',
            'kategoris'=>Kategori::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGambarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'kode_gambar'=>'required|unique:gambars|min:3|max:5',
            'nama'=>'required|min:3|max:24',
            'kategori_id'=>'required',
            'gambar'=>'image|file|max:2048',
        ]);

        if ($request->file('gambar')){
            $validateData['gambar'] = $request->file('gambar')->store('gambar-barang');
        }

        Gambar::create($validateData);
        return redirect('/dashboard/gambar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gambar  $gambar
     * @return \Illuminate\Http\Response
     */
    public function show(Gambar $gambar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gambar  $gambar
     * @return \Illuminate\Http\Response
     */
    public function edit(Gambar $gambar)
    {
        return view('dashboard.gambar.edit', [
            'title' => 'Edit Gambar Kategori',
            'gambar'=>$gambar,
            'kategoris'=>Kategori::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGambarRequest  $request
     * @param  \App\Models\Gambar  $gambar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gambar $gambar)
    {
        $rules = [
            'nama' => 'required|min:3|max:24',
            'kategori_id' => 'required',
            'gambar'=>'image|file|max:2048',
        ];

        if ($request->kode_gambar != $gambar->kode_gambar) {
            $rules['kode_gambar'] = 'required|unique:gambars';
        }

        $validateData = $request->validate($rules);

        if ($request->file('gambar')){
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateData['gambar'] = $request->file('gambar')->store('gambar-barang');
        }

        Gambar::where('id', $gambar->id)->update($validateData);
        return redirect('/dashboard/gambar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gambar  $gambar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gambar $gambar)
    {
        if ($gambar->gambar) {
            Storage::delete($gambar->gambar);
        }
        Gambar::destroy($gambar->id);
        return redirect('/dashboard/gambar');
    }
}
