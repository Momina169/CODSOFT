<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Management System</title>
    <title>{{ config('app.name', 'Management System') }}</title>

    <script src="https://kit.fontawesome.com/275c3c76a3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ secure_asset('css_bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('style.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('/sidebars.css') }}">
    <!-- <link rel="stylesheet"  href="{{ secure_asset('build/assets/app-e802707b.css') }}" /> -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Favicons -->
    <link href="{{ secure_asset('images/logo.png') }}" rel="icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    
    <!-- <link rel="preload" as="style" href="{{ secure_asset('build/assets/app-e802707b.css') }}" />
    <link rel="modulepreload" href="{{ secure_asset('build/assets/app-4a08c204.js') }}" />
    <link rel="module" href="{{ secure_asset('build/assets/app-4a08c204.js') }}" /> -->
    <style>
    .admin-sidebar {
        max-width: 20%;
    }
    </style>
</head>

<body class="font-sans">

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>


    <div class="row">
        <div class="col-sm-12 col-md-3 col-lg-3 admin-sidebar">
            <nav class="navbar navbar-expand-lg d-flex flex-column  -light" >
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar"
                    aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>



                <div class="collapse navbar-collapse" id="sidebar">

                    <ul class="nav nav-pills flex-column mb-auto ">
                        <!-- Logo -->

                        <a href="{{ route('dashboard') }}">
                            <img class="d-flex justify-content-center mb-3 mb-md-0 m-2"
                                src="{{ secure_asset('images/logo.png') }}" width="90px" height="auto">
                        </a>

                        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 m-2 link-dark text-decoration-none">
                            <span class="fs-4">Medical Haven</span>
                        </a>
                        <hr>
                        <li class="nav-item">
                            <a href="{{ route('doctorcrud') }}" class="nav-link" aria-current="page">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#home" />
                                </svg>
                                Doctors
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('appoint.index') }}" class="nav-link link-dark">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#speedometer2" />
                                </svg>
                                Appointments
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('users') }}" class="nav-link link-dark">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#table" />
                                </svg>
                                Roles/Users
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('staff.index') }}" class="nav-link link-dark">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#grid" />
                                </svg>
                                Staff
                            </a>
                        </li>
                        <hr>
                        <li class="nav-item">
                            <a href="{{ route('index') }}" class="nav-link link-dark">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#grid" />
                                </svg>
                                Home
                            </a>
                        </li>
                        <div class=" dropdown mt-5">
                            <a class="nav-link dropdown-toggle btn d-flex align-items-center link-dark text-decoration-none "
                                href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="font-medium text-base text-gray-800 dark:text-gray-200">
                                    {{ Auth::user()->name }}
                                </div>
                                <div class="font-medium text-sm text-gray-500 " hidden>
                                    {{ Auth::user()->email }}
                                </div>
                            </a>


                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="dropdown-item ms-2 "
                                        href="{{ route('profile.edit') }}">Profile'</a>
                                </li>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <li class="nav-item"><a class="dropdown-item" href="{{ route('logout') }}">
                                            <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                            this.closest('form').submit();">
                                                {{ __(' Log Out') }}
                                            </x-responsive-nav-link>
                                        </a></li>
                                </form>
                            </ul>
                        </div>
            </nav>

        </div>

        <div class="col-sm-12 col-md-9 col-lg-9 mt-5" style="min-width: 60%;">
            <!-- Page Content -->

            {{ $slot }}
        </div>
    </div>



    <!-- Include Popper.js and Bootstrap JS from CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous">
    </script>

    <script src="{{ secure_asset('sidebars.js') }}"></script>
</body>

</html>