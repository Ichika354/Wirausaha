<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-semibold ms-2">WAU</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="mdi menu-toggle-icon d-xl-block align-middle mdi-20px"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item {{ request()->routeIs('dashboard.admin') ? 'active' : '' }}">
            <a href="{{ route('dashboard.admin') }}" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-home-outline"></i>
                <div data-i18n="Dashboards">Dashboards</div>
            </a>
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

</aside>