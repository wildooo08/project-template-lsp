@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto mt-10 bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-6">
        {{ isset($produk) ? 'Edit Produk' : 'Tambah Produk' }}
    </h1>

    <form method="POST" action="{{ isset($produk) ? route('produk.update', $produk) : route('produk.store') }}">
        @csrf
        @if(isset($produk))
            @method('PUT')
        @endif

        <div class="mb-4">
            <label for="nama_produk" class="block text-sm font-medium text-gray-700">Nama Produk</label>
            <input type="text" name="nama_produk" id="nama_produk"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                value="{{ old('nama_produk', $produk->nama_produk ?? '') }}" required>
        </div>

        <div class="mb-4">
            <label for="kategori_id" class="block text-sm font-medium text-gray-700">Kategori</label>
            <select name="kategori_id" id="kategori_id"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                @foreach($kategoris as $kategori)
                    <option value="{{ $kategori->id }}"
                        {{ (old('kategori_id', $produk->kategori_id ?? '') == $kategori->id) ? 'selected' : '' }}>
                        {{ $kategori->nama_kategori }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="kuantitas" class="block text-sm font-medium text-gray-700">Kuantitas</label>
            <input type="number" name="kuantitas" id="kuantitas" min="0"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                value="{{ old('kuantitas', $produk->kuantitas ?? '') }}" required>
        </div>

        <div class="mb-4">
            <label for="harga" class="block text-sm font-medium text-gray-700">Harga</label>
            <input type="number" name="harga" id="harga" min="0"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                value="{{ old('harga', $produk->harga ?? '') }}" required>
        </div>

        <div class="flex justify-end">
            <a href="{{ route('produk.index') }}" class="mr-3 inline-block px-4 py-2 text-gray-600 hover:text-gray-800">Batal</a>
            <button type="submit"
                class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                {{ isset($produk) ? 'Update' : 'Simpan' }}
            </button>
        </div>
    </form>
</div>
@endsection
