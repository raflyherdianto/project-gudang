<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function barangs(){
        return $this->hasMany(Barang::class);
    }

    public function gambars(){
        return $this->hasMany(Gambar::class);
    }

    public function gudangs(){
        return $this->hasMany(Gudang::class);
    }
}
