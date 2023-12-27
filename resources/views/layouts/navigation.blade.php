<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('dashboard') }}">
            {{ __('Medical Haven') }}
        </a>

        <!-- Navigation Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link " aria-current="page" href="{{route('dashboard')}}">DashBoard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " aria-current="page" href="{{route('index')}}">Home</a>
            </li>
        </ul>

        <!-- Settings Dropdown -->
        <div class="ms-auto float-right">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <button> {{ Auth::user()->name }} </button>
                </a>

                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route(profile.edit) }}">  {{ __('Profile') }}</a></li>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </li>
                    </form>
                </ul>
            </li>
        </div>
    </div>
</nav>