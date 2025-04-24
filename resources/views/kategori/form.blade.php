<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ isset($kategori) ? 'Edit Kategori' : 'Tambah Kategori' }}
        </h2>
    </x-slot>

    <div class="max-w-xl mx-auto mt-10 bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
        <form method="POST" action="{{ isset($kategori) ? route('kategori.update', $kategori) : route('kategori.store') }}">
            @csrf
            @if(isset($kategori))
                @method('PUT')
            @endif

            <div class="mb-4">
                <label for="nama_kategori" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nama Kategori</label>
                <input type="text" name="nama_kategori" id="nama_kategori"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                    value="{{ old('nama_kategori', $kategori->nama_kategori ?? '') }}" required>
            </div>

            <div class="flex justify-end">
                <a href="{{ route('kategori.index') }}" class="mr-3 inline-block px-4 py-2 text-gray-600 hover:text-gray-800">Batal</a>
                <button type="submit"
                    class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                    {{ isset($kategori) ? 'Update' : 'Simpan' }}
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
