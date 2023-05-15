<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Barang extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }

    public function gudangs(){
        return $this->hasMany(Gudang::class);
    }
}
