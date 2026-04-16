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
    <div class="min-h-screen">
        <header>
            @include('layouts.header')
        </header>
        <main class="">
            <!-- BACKGROUND BALLS -->
            <div class="absolute inset-0 -z-10 min-h-[200vh] overflow-hidden opacity-50">
                <div class="ball ball-1"></div>
                <div class="ball ball-2"></div>
                <div class="ball ball-3"></div>
                <div class="ball ball-4"></div>
                <div class="ball ball-5"></div>
                <div class="ball ball-6"></div>
            </div>
            @yield('main')
        </main>
        <footer class="bg-gray-900 text-gray-300 w-full">
            @include('layouts.footer')
        </footer>
    </div>
</body>

</html>
