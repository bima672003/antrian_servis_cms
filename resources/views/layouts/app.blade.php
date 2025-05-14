<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'KaiAdmin Dashboard')</title>
    <!-- Stylesheets -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/kaiadmin.css') }}" rel="stylesheet">
    @stack('styles')
</head>
<body>
    <div id="app">
        @include('layouts.header')
        @include('layouts.sidebar')

        <main class="py-4">
            @yield('content')
        </main>

        @include('layouts.footer')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/kaiadmin.js') }}"></script>
    @stack('scripts')
</body>
</html>
