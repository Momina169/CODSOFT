  <head>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <style>
    .nav-link {
        color: black;
    }
  </style>

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
          </div>


          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav"
              aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Navigation items on the right -->
          <div id="main-nav">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a class="nav-link " aria-current="page" href="{{route('index')}}">Home</a>
                  </li>

                  <li class="nav-item"><a class="nav-link" href="{{route('finddoctor')}}">Find Doctors</a></li>

                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                          aria-expanded="false">
                          Our Purpose
                      </a>
                      <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="{{route('mission')}}">Our Mission</a></li>
                          <li>
                              <hr class="dropdown-divider">
                          </li>

                          <li><a class="dropdown-item" href="{{route('vision')}}">Our Vision</a></li>

                      </ul>
                  </li>


                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                          aria-expanded="false">
                          Our Team
                      </a>
                      <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Doctors</a></li>
                          <li>
                              <hr class="dropdown-divider">
                          </li>

                          <li><a class="dropdown-item" href="{{route('nurses')}}">Nurses</a></li>
                          <li>
                              <hr class="dropdown-divider">
                          </li>

                          <li><a class="dropdown-item" href="{{route('sweepers')}}">Sweepers</a></li>
                      </ul>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                          aria-expanded="false">
                          Departments
                      </a>
                      <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="{{route('surgries')}}">Surgery</a></li>
                          <li>
                              <hr class="dropdown-divider">
                          </li>

                          <li><a class="dropdown-item" href="{{route('opd')}}">OPD</a></li>
                          <li>
                              <hr class="dropdown-divider">
                          </li>
                          <li><a class="dropdown-item" href="{{route('labs')}}">Labs</a></li>

                      </ul>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link " aria-current="page" href="{{route('contact')}}">Contact us</a>
                  </li>

                  <li class=" nav-item  dropdown">
                      <a class="nav-link dropdown-toggle py-0 px-2 btn " href="#" role="button"
                          data-bs-toggle="dropdown" aria-expanded="false">
                          <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}
                          </div>
                          <div class="font-medium text-sm text-gray-500 " hidden>{{ Auth::user()->email }}</div>
                      </a>


                      <ul class="dropdown-menu">
                          <li><a class="dropdown-item ms-2 " href="{{route('profile.edit')}}">Profile'</a></li>

                          <!-- Authentication -->
                          <form method="POST" action="{{ route('logout') }}">
                              @csrf
                              <li><a class="dropdown-item" href="{{route('logout')}}">
                                      <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                          {{ __( ' Log Out') }}
                                      </x-responsive-nav-link>
                                  </a></li>
                          </form>
                      </ul>

                  </li>


              </ul>

          </div>
          </div>
      </nav>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>