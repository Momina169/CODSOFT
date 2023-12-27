<nav x-data="{ open: false }" class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <a class="navbar-brand" href="{{ route('dashboard') }}">
            {{ __('Medical Haven') }}
        </a>
        <button @click="open = ! open" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div :class="{'collapse': ! open, 'navbar-collapse': true}" id="navbarNav">
            <!-- Navigation Links -->
            <ul class="navbar-nav">
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-nav-link>
                <x-nav-link :href="route('index')" :active="request()->routeIs('dashboard')">
                    {{ __('Home') }}
                </x-nav-link>
            </ul>

            <!-- Settings Dropdown -->
            <div class="ms-auto">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="btn btn-link" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
        </div>
    </div>
</nav>
