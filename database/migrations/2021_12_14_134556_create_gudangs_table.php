<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGudangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gudangs', function (Blueprint $table) {
            $table->id();
            $table->string('kode_transaksi')->unique();
            $table->foreignId('supplier_id');
            $table->foreignId('barang_id');
            $table->foreignId('kategori_id');
            $table->integer('stok_awal')->nullable();
            $table->enum('jenis', ['Barang Masuk', 'Barang Keluar']);
            $table->integer('barang_masuk')->nullable();
            $table->integer('barang_keluar')->nullable();
            $table->integer('stok_sekarang')->nullable();
            $table->timestampsTz();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gudangs');
    }
}
