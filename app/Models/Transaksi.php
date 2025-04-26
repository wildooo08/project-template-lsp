<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable = ['total_harga', 'total_bayar'];

    public function items()
    {
        return $this->hasMany(ItemTransaksi::class);
    }
}
