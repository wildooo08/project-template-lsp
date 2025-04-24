<?php

namespace App\Http\Controllers;

use App\Models\ItemKeranjang;
use App\Models\Produk;
use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = ItemKeranjang::with('produk')->get()->map(function ($item) {
            $item->total_harga = $item->produk->harga * $item->jumlah;
            return $item;
        });

        $total_belanja = $items->sum('total_harga');

        return view('keranjang.index', [
            'items' => $items,
            'total_belanja' => $total_belanja,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
