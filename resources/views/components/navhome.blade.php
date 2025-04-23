<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="index.html" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            {{-- <img src="assets/img/logo.png" alt=""> --}}
            <h1 class="sitename">GrowBiz</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('page') }}" class="{{ request()->routeIs('page') ? 'active' : '' }}">Home<br></a>
                </li>
                <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
                </li>
                <li><a href="{{ route('product') }}"
                        class="{{ request()->routeIs('product') ? 'active' : '' }}">Product</a></li>
                <li><a href="{{ route('contact') }}"
                        class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        @auth
            @if (Auth::user()->role == 'Admin')
                <a class="btn-getstarted flex-md-shrink-0" href="{{ route('dashboard.admin') }}">Dashboard</a>
            @elseif (Auth::user()->role == 'Seller')
                <a class="btn-getstarted flex-md-shrink-0" href="{{ route('dashboard.seller') }}">Dashboard</a>
            @elseif (Auth::user()->role == 'Buyer')
                <form method="POST" action="{{ route('logout') }}" class="border-transparent">
                    @csrf
                    <button type="submit" class="menu-link btn-getstarted flex-md-shrink-0">
                        <!-- Unique Logout Icon -->
                        <i class="menu-icon tf-icons mdi mdi-flip-to-front"></i>
                        <div data-i18n="Front Pages">Logout</div>
                    </button>
                </form>
            @endif
        @else
            <a class="btn-getstarted flex-md-shrink-0" href="{{ route('login') }}">Login</a>
        @endauth

    </div>
</header>
