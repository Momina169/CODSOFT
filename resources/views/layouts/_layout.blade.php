<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/275c3c76a3.js" crossorigin="anonymous"></script>
    <script integrity="sha384-kJ3o2DKtIkvYIK3UENzmM7KCkRrV/4ZFR8Rw2B8NOhi9GMkz6V+3O1D5IzJpPSz0" crossorigin="anonymous" src="{{ secure_asset('jquery_3.6.4_jquery.min.js') }}"></script>
    <link rel="stylesheet" href="{{ secure_asset('css_bootstrap.min.css') }}">
    <script integrity="sha384-hSHtWGz6rDHgJOYzQ6YO9h8jfxlF5I6/cbzwaWHMo6+MqO25kouEv3FZEGIpbwr1" crossorigin="anonymous" src="{{ secure_asset('path/to/bootstrap.bundle.min.js') }}"></script>

    <link rel="stylesheet" href="{{ secure_asset('style.css') }}">

    <!-- Favicons -->
    <link href="{{ secure_asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ secure_asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Secure Links -->
    <link rel="preload" as="style" href="{{ secure_asset('build/assets/app-e802707b.css') }}" />
    <link rel="modulepreload" href="{{ secure_asset('build/assets/app-4a08c204.js') }}" />
    <link rel="stylesheet" href="{{ secure_asset('build/assets/app-e802707b.css') }}" />
    <script type="module" src="{{ secure_asset('build/assets/app-4a08c204.js') }}"></script>
    <link rel="stylesheet" href="{{ secure_asset('css_bootstrap.min.css') }}">
</head>

<body>
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')

    <!-- Include Popper.js and Bootstrap JS from CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

    <!-- Include other scripts -->
    <script src="{{ secure_asset('cdn.jsdelivr.net_npm.js') }}"></script>
    <script src="{{ secure_asset('js_bootstrap.min.js') }}"></script>
    <script src="{{ secure_asset('sidebars.js') }}"></script>
</body>

</html>
