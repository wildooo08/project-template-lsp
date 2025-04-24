<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Kasir</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,600" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 items-center justify-center min-h-screen font-sans">

    <div class=" w-full max-w-md text-center">
        <h1 class="text-2xl font-semibold text-gray-800 mb-4">Selamat Datang di Web Kasir</h1>
        <p class="text-gray-600 mb-6">
            Aplikasi kasir yang memudahkan pengelolaan transaksi dan produk secara efisien.
        </p>
        <a href="{{ route('login') }}"
           class="inline-block bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-200">
            Login
        </a>
    </div>

</body>

</html>
