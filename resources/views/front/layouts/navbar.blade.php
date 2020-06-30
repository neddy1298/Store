<div class="site-navbar bg-white py-2 position-relative">

    <div class="search-wrap">
        <div class="container">
            <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
            <form action="#" method="post">
                <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
            </form>
        </div>
    </div>

    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <div class="logo">
                <div class="site-logo">
                    <a href="{{ url('/') }}" class="js-logo-clone">Techopedia</a>
                </div>
            </div>
            <div class="main-nav d-none d-lg-block">
                <nav class="site-navigation text-right text-md-center" role="navigation">
                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                        <li class="has-children {{ ($page == 'Home') ? ' active' : '' }}">
                            <a>Collection</a>
                            <ul class="dropdown">
                                <li><a href="#">Phone</a></li>
                                <li><a href="#">Laptop</a></li>
                                <li><a href="#">Computer</a></li>
                                <li><a href="#">Earphone</a></li>
                                <li><a href="#">Smart Watch</a></li>
                                {{-- <li class="has-children">
                                    <a href="#">Sub Menu</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Men</a></li>
                                        <li><a href="#">Women</a></li>
                                        <li><a href="#">Children</a></li>
                                    </ul>
                                </li> --}}
                            </ul>
                        </li>

                        <li class="{{ ($page == 'Shop') ? ' active' : '' }}"><a href="{{ url('/shop') }}">Shop</a></li>
                        <li class="{{ ($page == 'Contact') ? ' active' : '' }}"><a
                                href="{{ url('/contact') }}">Contact</a></li>
                        <li class="{{ ($page == 'About') ? ' active' : '' }}"><a href="{{ url('/about') }}">About US</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="icons">
                <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
                <a href="#" class="icons-btn d-inline-block"><span class="icon-heart-o"></span></a>
                <a href="{{ url('/1/cart') }}" class="icons-btn d-inline-block bag">
                    <span class="icon-shopping-bag"></span>
                    <span class="number">2</span>
                </a>
                <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
                        class="icon-menu"></span></a>
                <div class="btn-group">
                    <a href="#" class="icons-btn d-inline-block" id="dropdownMenuReference" data-toggle="dropdown"><span
                            class="icon-user"></span></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                        @guest
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('user.register'))
                        <a class="nav-link" href="{{ route('user.register') }}">{{ __('Register') }}</a>
                        @endif
                        @else
                        <a class="nav-link" href="#">{{ Auth::user()->name }}</a>
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
