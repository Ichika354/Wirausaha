<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-semibold ms-2">GrowBiz</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="mdi menu-toggle-icon d-xl-block align-middle mdi-20px"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>
    @if (Auth::user()->role == 'Admin')
        <ul class="menu-inner py-1">
            <!-- Dashboards -->
            <li class="menu-item {{ request()->routeIs('dashboard.admin') ? 'active' : '' }}">
                <a href="{{ route('dashboard.admin') }}" class="menu-link">
                    <i class="menu-icon tf-icons mdi mdi-home-outline"></i>
                    <div data-i18n="Dashboards">Dashboards</div>
                </a>
            </li>
            {{-- Class =  active open --}}
            <li class="menu-item {{ request()->routeIs('home.text.admin') ? 'active open' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons mdi mdi-window-maximize"></i>
                    <div data-i18n="Layouts">Text Page</div>
                </a>

                <ul class="menu-sub">
                    <li class="menu-item {{ request()->routeIs('home.text.admin') ? 'active' : '' }}">
                        <a href="{{ route('home.text.admin') }}" class="menu-link">
                            <div data-i18n="Home">Home</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="layouts-without-navbar.html" class="menu-link">
                            <div data-i18n="Feature Home">Feature Home</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="layouts-without-navbar.html" class="menu-link">
                            <div data-i18n="About">About</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="layouts-container.html" class="menu-link">
                            <div data-i18n="Contact">Contact</div>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Data Master -->
            <li class="menu-item {{ request()->routeIs('product.admin') ? 'active' : '' }}">
                <a href="{{ route('product.admin') }}" class="menu-link ">
                    <i class="menu-icon tf-icons mdi mdi-cube-outline"></i>
                    <div data-i18n="Layouts">Products</div>
                </a>
            </li>

            <li class="menu-item {{ request()->routeIs('category.admin') ? 'active' : '' }}">
                <a href="{{ route('category.admin') }}" class="menu-link ">
                    <i class="menu-icon tf-icons mdi mdi-folder-outline"></i>
                    <div data-i18n="Layouts">Categories</div>
                </a>
            </li>

            <!-- Data Transaksi -->
            <li class="menu-item {{ request()->routeIs('order.admin') ? 'active' : '' }}">
                <a href="{{ route('order.admin') }}" class="menu-link">
                    <i class="menu-icon tf-icons mdi mdi-form-select"></i>
                    <div data-i18n="Front Pages">Orders</div>
                </a>
            </li>


            <li class="menu-item {{ request()->routeIs('transaction.admin') ? 'active' : '' }}">
                <a href="{{ route('transaction.admin') }}" class="menu-link">
                    <i class="menu-icon tf-icons mdi mdi-credit-card-outline"></i>
                    <div data-i18n="Front Pages">Transactions</div>
                </a>
            </li>

            <li class="menu-item {{ request()->routeIs('seller.admin') ? 'active' : '' }}">
                <a href="{{ route('seller.admin') }}" class="menu-link">
                    <i class="menu-icon tf-icons mdi mdi-account"></i>
                    <div data-i18n="Front Pages">Seller</div>
                </a>
            </li>

            <li class="menu-item {{ request()->routeIs('buyer.admin') ? 'active' : '' }}">
                <a href="{{ route('buyer.admin') }}" class="menu-link">
                    <i class="menu-icon tf-icons mdi mdi-account-outline"></i>
                    <div data-i18n="Front Pages">Buyer</div>
                </a>
            </li>

            <li class="menu-item {{ request()->routeIs('page') ? 'active' : '' }}">
                <a href="{{ route('page') }}" class="menu-link">
                    <i class="menu-icon tf-icons mdi mdi-flip-to-front"></i>
                    <div data-i18n="Front Pages">Pages</div>
                </a>
            </li>

            <li class="menu-item">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="menu-link border-transparent bg-transparent">
                        <!-- Unique Logout Icon -->
                        <i class="menu-icon tf-icons mdi mdi-flip-to-front"></i>
                        <div data-i18n="Front Pages">Logout</div>
                    </button>
                </form>

            </li>
        </ul>
    @elseif (Auth::user()->role == 'Seller' && Auth::user()->role == 'Admin')
        <ul class="menu-inner py-1">
            <!-- Dashboards -->
            <li class="menu-item {{ request()->routeIs('dashboard.seller') ? 'active' : '' }}">
                <a href="{{ route('dashboard.seller') }}" class="menu-link">
                    <i class="menu-icon tf-icons mdi mdi-home-outline"></i>
                    <div data-i18n="Dashboards">Dashboards</div>
                </a>
            </li>

            <!-- Data Master -->
            <li class="menu-item {{ request()->routeIs('product.seller') ? 'active' : '' }}">
                <a href="{{ route('product.seller') }}" class="menu-link ">
                    <i class="menu-icon tf-icons mdi mdi-cube-outline"></i>
                    <div data-i18n="Layouts">Products</div>
                </a>
            </li>

            <!-- Data Transaksi -->
            <li class="menu-item {{ request()->routeIs('order.seller') ? 'active' : '' }}">
                <a href="{{ route('order.seller') }}" class="menu-link">
                    <i class="menu-icon tf-icons mdi mdi-form-select"></i>
                    <div data-i18n="Front Pages">Orders</div>
                </a>
            </li>


            <li class="menu-item {{ request()->routeIs('transaction.seller') ? 'active' : '' }}">
                <a href="{{ route('transaction.seller') }}" class="menu-link">
                    <i class="menu-icon tf-icons mdi mdi-credit-card-outline"></i>
                    <div data-i18n="Front Pages">Transactions</div>
                </a>
            </li>

            <li class="menu-item {{ request()->routeIs('page') ? 'active' : '' }}">
                <a href="{{ route('page') }}" class="menu-link">
                    <i class="menu-icon tf-icons mdi mdi-flip-to-front"></i>
                    <div data-i18n="Front Pages">Pages</div>
                </a>
            </li>

            <li class="menu-item">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="menu-link border-transparent bg-transparent">
                        <!-- Unique Logout Icon -->
                        <i class="menu-icon tf-icons mdi mdi-flip-to-front"></i>
                        <div data-i18n="Front Pages">Logout</div>
                    </button>
                </form>

            </li>
        </ul>
    @endif



</aside>
