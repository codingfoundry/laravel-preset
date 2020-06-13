<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @hasSection('title')
        <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>
    @else
        <title>{{ config('app.name', 'Laravel') }}</title>
@endif

<!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script>
        document.addEventListener('turbolinks:load', function (event) {
            document.querySelectorAll('a[href^="#"]').forEach(function (el) {
                el.setAttribute('data-turbolinks', false);
            });
        });
    </script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="antialiased">
    <div id="app" class="min-h-screen sm:bg-gray-50 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        @yield('content')
    </div>
</body>
</html>