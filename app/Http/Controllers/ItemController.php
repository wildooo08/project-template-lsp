<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::with('category')->paginate(10);
        return view('produk.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all(['id', 'name']);
        return view('produk.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'category_id' => ['required', 'exists:kategoris,id'],
            'price' => ['required', 'integer', 'min:0'],
            'stock' => ['required', 'integer', 'min:0'],
        ], [
            'name.required' => 'Nama produk harus diisi.',
            'category_id.required' => 'Kategori produk harus dipilih.',
            'category_id.exists' => 'Kategori tidak ditemukan.',
            'price.required' => 'Harga produk harus diisi.',
            'price.min' => 'Harga produk tidak boleh kurang dari 0.',
            'stock.required' => 'Stok produk harus diisi.',
            'stock.min' => 'Stok produk tidak boleh kurang dari 0.',
        ]);

        Item::create($validated);
        return redirect()->route('produk.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        $item->load('category');
        return view('produk.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        $item->load('category');
        $categories = Category::all(['id', 'name']);

        return view('produk.edit', compact('item', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'category_id' => ['required', 'exists:kategoris,id'],
            'price' => ['required', 'integer', 'min:0'],
            'stock' => ['required', 'integer', 'min:0'],
        ], [
            'name.required' => 'Nama produk harus diisi.',
            'category_id.required' => 'Kategori produk harus dipilih.',
            'category_id.exists' => 'Kategori tidak ditemukan.',
            'price.required' => 'Harga produk harus diisi.',
            'price.min' => 'Harga produk tidak boleh kurang dari 0.',
            'stock.required' => 'Stok produk harus diisi.',
            'stock.min' => 'Stok produk tidak boleh kurang dari 0.',
        ]);

        $item->update($validated);
        return redirect()->route('produk.index')->with('success', 'Produk berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('produk.index')->with('success', 'Produk berhasil dihapus.');
    }
}
