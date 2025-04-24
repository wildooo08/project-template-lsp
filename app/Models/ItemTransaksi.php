<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemTransaksi extends Model
{
    protected $fillable = ['transaksi_id', 'produk_id', 'jumlah', 'total_harga'];

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class);
    }
}
