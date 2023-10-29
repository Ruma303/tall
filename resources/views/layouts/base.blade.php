<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'TALL stack')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex flex-col justify-center items-center space-y-4">
    <h1 class="text-center text-indigo-700 text-6xl font-semibold my-8">TALL stack</h1>
    <main class="min-h-[100vh] container mx-auto flex flex-col items-center space-y-4">
        @yield('main')
    </main>
</body>

</html>
