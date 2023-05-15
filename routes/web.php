<?php

use App\Models\User;
use App\Models\Barang;
use App\Models\Gambar;
use App\Models\Gudang;
use App\Models\Kategori;
use App\Models\Supplier;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\GambarController;
use App\Http\Controllers\GudangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SupplierController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('/dashboard/supplier', SupplierController::class)->middleware('auth');

Route::resource('/dashboard/gudang', GudangController::class)->middleware('auth');

Route::resource('/dashboard/gambar', GambarController::class)->middleware('auth');

Route::resource('/dashboard/barang', BarangController::class)->middleware('auth');

Route::resource('/dashboard/kategori', KategoriController::class)->middleware('auth');

Route::get('/home/product-details/{kategori:nama}', [HomeController::class, 'show']);

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'title' => 'Dashboard',
        'totalBarang' => Barang::all()->count(),
        'totalKategori' => Kategori::all()->count(),
        'totalGambar' => Gambar::all()->count(),
        'totalSupplier' => Supplier::all()->count(),
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
})->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/', function () {
    return view('homepage.index',[
        'title'=> 'Tiga Putra Mandiri',
        'barangs'=>Barang::whereNotNull('gambar')->get(),
        'kategoris'=>Kategori::all(),
    ]);
});

// Route::get('/', function () {
//     return view('welcome');
// });
