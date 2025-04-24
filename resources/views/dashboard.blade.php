<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
                </h2>
                <p class="text-gray-600 dark:text-gray-400">Hai, {{ Auth::user()->name }}!</p>
            </div>
            <div class="text-sm text-gray-600 dark:text-gray-400">
                {{ \Carbon\Carbon::now()->format('d M Y, H:i') }}
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow text-center">
                <div class="text-lg text-gray-600 dark:text-gray-300">Jumlah Transaksi</div>
                <div class="text-3xl font-bold text-blue-600 mt-2">{{ $jumlahTransaksi }}</div>
            </div>

            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow text-center">
                <div class="text-lg text-gray-600 dark:text-gray-300">Total Pendapatan</div>
                <div class="text-3xl font-bold text-green-500 mt-2">Rp {{ number_format($totalPendapatan, 0, ',', '.') }}</div>
            </div>

            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow text-center">
                <div class="text-lg text-gray-600 dark:text-gray-300">Total Stok Produk</div>
                <div class="text-3xl font-bold text-yellow-500 mt-2">{{ $totalStok }}</div>
            </div>
        </div>
    </div>
</x-app-layout>
