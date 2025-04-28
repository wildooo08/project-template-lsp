<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div>
                <h2 class="font-semibold text-xl text-black-700 leading-tight">
                    {{ __('Dashboard') }}
                </h2>
                <p class="text-black-700">Hai, {{ Auth::user()->name }}!</p>
            </div>
            <div class="text-sm text-white">
                {{ \Carbon\Carbon::now()->format('d M Y, H:i') }}
            </div>
        </div>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-lg shadow text-center border border-orange-500">
            <div class="text-lg text-gray-600">Jumlah Transaksi</div>
            <div class="text-3xl font-bold text-orange-500 mt-2">{{ $jumlahTransaksi }}</div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow text-center border border-orange-500">
            <div class="text-lg text-gray-600">Total Pendapatan</div>
            <div class="text-3xl font-bold text-green-500 mt-2">Rp {{ number_format($totalPendapatan, 0, ',', '.') }}</div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow text-center border border-orange-500">
            <div class="text-lg text-gray-600">Total Stok Produk</div>
            <div class="text-3xl font-bold text-yellow-500 mt-2">{{ $totalStok }}</div>
        </div>
        
        <div class="bg-white p-6 rounded-lg shadow text-center border border-orange-500 invisible">
            <div class="text-lg text-gray-600">Total Pendapatan</div>
            <div class="text-3xl font-bold text-green-500 mt-2">Rp {{ number_format($totalPendapatan, 0, ',', '.') }}</div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow text-center border border-orange-500">
            <div class="text-lg text-gray-600">Kategori</div>
            <div class="text-3xl font-bold text-orange-500 mt-2">{{ $jumlahKategori }}</div>
        </div>


        <div class="bg-white p-6 rounded-lg shadow text-center border border-orange-500 invisible">
            <div class="text-lg text-gray-600">Total Stok Produk</div>
            <div class="text-3xl font-bold text-yellow-500 mt-2">{{ $totalStok }}</div>
        </div>
    </div>
</div>
</x-app-layout>

