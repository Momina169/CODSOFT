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

