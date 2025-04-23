<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = ['nama_produk', 'kategori_id', 'kuantitas', 'harga'];

    public function kategori() {
        return $this->belongsTo(Kategori::class);
    }
}
