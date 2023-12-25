<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/275c3c76a3.js" crossorigin="anonymous"></script>
    <script rel="jquery" src="{{secure_asset('/jquery_3.6.4_jquery.min.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="{{secure_asset('/css_bootstrap.min.css')}}">

    <script src="{{ secure_asset('path/to/bootstrap.bundle.min.js') }}"></script>

    <link rel="stylesheet" href="{{secure_asset('/style.css')}}">

    <!-- Favicons -->
    <link href="{{secure-asset('assets/img/favicon.png')" rel="icon">
    <link href="secure_asset('assets/img/apple-touch-icon.png')" rel="apple-touch-icon">

</head>

<body>
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous">
    </script>
    <script src="{{ secure_asset('/cdn.jsdelivr.net_npm.js') }}"></script>
    <script src="{{ secure_asset('/js_bootstrap.min.js') }}"></script>
    <script src="{{ secure_asset('/sidebars.js') }}"></script>
</body>

</html>