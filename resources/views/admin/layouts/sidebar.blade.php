<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">techOPedia</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">OP</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <div class="pl-3 pr-3 hide-sidebar-mini">
                <a href="{{ route('admin.dashboard') }}" class="btn btn-primary btn-lg btn-block btn-icon-split">
                    <i class="fas fa-fire"></i> Dashboard
                </a>
            </div>
            <li><a class="nav-link sidebar-brand sidebar-brand-sm btn btn-primary text-white" href="#"><i
                        class="fas fa-fire"></i></a>
            </li>
            {{-- <li class="nav-item dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link mb-1" href="index-0.html">General Dashboard</a></li>
                    <li class="active"><a class="nav-link" href="index.html">Ecommerce Dashboard</a></li>
                </ul>
            </li> --}}
            <li class="menu-header">Starter</li>
            <li class="nav-item dropdown {{ ($page == 'Product' ? 'active' : '') }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Products</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ ($page2 == 'Product-All' ? 'active' : '') }}">
                        <a class="nav-link mb-2" href="{{ route('products.index') }}">
                            <span>All Products</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown {{ ($page == 'User' ? 'active' : '') }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-user"></i> <span>User</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ ($page2 == 'User-All' ? 'active' : '') }}">
                        <a class="nav-link mb-2" href="{{ route('user.index') }}">
                            <span>All User</span>
                        </a>
                    </li>
                    <li class="{{ ($page2 == 'Shipping-All' ? 'active' : '') }}">
                        <a class="nav-link mb-2" href="{{ route('shipping.index') }}">
                            <span>User Shippings</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
