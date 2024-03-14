<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    @vite('resources/js/app.js')
</head>
<body>
    {{-- welcome.blade --}}
    @yield('Database')

    {{-- header --}}
    {{-- @include('partials.header') --}}
</body>
</html>