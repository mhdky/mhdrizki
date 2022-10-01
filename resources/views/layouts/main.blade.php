<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <meta itemprop="name" content="mhdrizki">
    <meta itemprop="description" content="Muhammad Rizki Site">
    <meta itemprop="image" content="{{ asset('img/mhdrizki_logo.png') }}">
 
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://mhdrizki.com/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="mhdrizki">
    <meta property="og:description" content="Muhammad Rizki Site">
    <meta property="og:image" content="{{ asset('img/mhdrizki_logo.png') }}">
 
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="mhdrizki">
    <meta name="twitter:description" content="Muhammad Rizki Site">
    <meta name="twitter:image" content="{{ asset('img/mhdrizki_logo.png') }}">
    @vite('resources/css/app.css')
    <link rel="icon" type="image" href="{{ asset('img/mhdrizki.png') }}">
</head>
<body>
    @include('partials.nav')
    @yield('container')

    <script src="{{ asset('js/script.js') }}"></script>
    {{-- font awsome --}}
    <script src="https://kit.fontawesome.com/209072fbdb.js" crossorigin="anonymous"></script>
</body>
</html>