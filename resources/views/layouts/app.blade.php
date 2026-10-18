<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Beranda') - Furnio</title>

    {{-- BOOTSTRAP CSS --}}
    {{-- Otomatis pakai file lokal kalau sudah ada di public/Bootstrap/css/bootstrap.min.css, kalau belum pakai link online (CDN) --}}
    @if (file_exists(public_path('Bootstrap/css/bootstrap.min.css')))
        <link href="{{ asset('Bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    @else
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    @endif

    {{-- CSS tema Furnio --}}
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">

    @include('partials.navbar')

    <main class="flex-grow-1">
        @yield('content')
    </main>

    @include('partials.footer')

    {{-- BOOTSTRAP JS --}}
    @if (file_exists(public_path('Bootstrap/js/bootstrap.bundle.min.js')))
        <script src="{{ asset('Bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    @else
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @endif
</body>
</html>
