<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

   
    <style>
        .nav-link {
            color: black;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg shadow-lg sticky-top bg-white">
        <div class="container">
            <!-- Logo on the left -->
            <a class="navbar-brand" href="{{ route('index') }}">
                <div class="row">
                    <div class="col-6">
                        <img src="{{secure_asset('images/logo.png')}}" width="60px" height="60px">
                    </div>
                    <div class="col-6">
                        <b style="color: #00B4CC;"><i>Medical Haven</i></b>
                    </div>
                </div>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav"
                aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navigation items on the right -->
            <div id="main-nav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <!-- Your menu items here -->
                </ul>
            </div>
        </div>
    </nav>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-Gn5384xq1aoWXA+058RXPacRY63CFtze/JIMnXaA9I=" crossorigin="anonymous"></script>
    <!-- Include Popper.js and Bootstrap JS from CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

    <script src="{{ secure_asset('cdn.jsdelivr.net_npm.js') }}"></script>
    <script src="{{ secure_asset('js_bootstrap.min.js') }}"></script>
    <script src="{{ secure_asset('sidebars.js') }}"></script>
</body>
</html>
