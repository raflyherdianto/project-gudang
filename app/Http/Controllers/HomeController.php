<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Gambar;
use App\Models\Gudang;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function show(Kategori $kategori)
    {
        $stocks = DB::table('gudangs')
            ->select(DB::raw('MAX(gudangs.created_at) as updated_at'))
            ->where('gudangs.kategori_id', $kategori->id)
            ->groupBy('gudangs.barang_id');

        $brgs = DB::table('gudangs')
            ->select('barangs.kode_barang','barangs.nama','barangs.tebal_mm','barangs.grade',
            'barangs.ukuran_mm','barangs.berat_item_kg','gudangs.stok_sekarang','gudangs.updated_at')
            ->join('barangs', 'gudangs.barang_id', '=', 'barangs.id')
            ->joinSub($stocks, 'b', function ($join) {
                $join->on('gudangs.updated_at', '=', 'b.updated_at');
            })->get();

        return view('homepage.details', [
            'title' => 'Product Details',
            'kategoris' => Kategori::all(),
            'gambars' => Gambar::where('kategori_id', $kategori->id)->get(),
            'gudangs' => $brgs,
        ]);
    }
}
