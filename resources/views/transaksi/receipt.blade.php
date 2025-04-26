<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        <main>
            <div class="py-12 max-w-3xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-4">Transaksi pada
                        {{ $transaksi->created_at }}</h3>

                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead>
                            <tr>
                                <th
                                    class="px-6 py-3 bg-gray-50 dark:bg-gray-900 text-left text-xs leading-4 font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                    Nama Produk
                                </th>
                                <th
                                    class="px-6 py-3 bg-gray-50 dark:bg-gray-900 text-left text-xs leading-4 font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                    Harga Satuan
                                </th>
                                <th
                                    class="px-6 py-3 bg-gray-50 dark:bg-gray-900 text-left text-xs leading-4 font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                    Jumlah
                                </th>
                                <th
                                    class="px-6 py-3 bg-gray-50 dark:bg-gray-900 text-left text-xs leading-4 font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                    Harga Total
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                            @forelse ($transaksi->items as $item)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                        {{ $item->produk->nama_produk }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                        Rp {{ number_format($item->produk->harga, 0, ',', '.') }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                        {{ $item->jumlah }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                        Rp {{ number_format($item->total_harga, 0, ',', '.') }}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300"
                                        colspan="2">
                                        Belum ada data item.
                                    </td>
                                </tr>
                            @endforelse
                            <tr>
                                <td
                                    class="px-6 py-4 font-bold whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                    Total
                                </td>
                                <td
                                    class="px-6 py-4 font-bold whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                    -
                                </td>
                                <td
                                    class="px-6 py-4 font-bold whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                    -
                                </td>
                                <td
                                    class="px-6 py-4 font-bold whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                    Rp {{ number_format($transaksi->total_harga, 0, ',', '.') }}
                                </td>
                            </tr>
                            <tr>
                                <td
                                    class="px-6 py-4 font-bold whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                    Total Bayar
                                </td>
                                <td
                                    class="px-6 py-4 font-bold whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                    -
                                </td>
                                <td
                                    class="px-6 py-4 font-bold whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                    -
                                </td>
                                <td
                                    class="px-6 py-4 font-bold whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                    Rp {{ number_format($transaksi->total_bayar, 0, ',', '.') }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <a href="{{ route('transaksi.index') }}"
                    class="inline-block mt-6 px-4 py-2 bg-gray-300 hover:bg-gray-400 text-gray-800 rounded font-semibold">
                    Kembali ke History Transaksi
                </a>
            </div>
        </main>
    </div>
</body>

</html>
