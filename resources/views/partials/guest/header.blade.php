<header class="no-sticky bg-transparent home-landing overflow-hidden">
    <div class="container">
        <div class="header-section">
            <div class="header-left">
                <div class="brand-logo">
                    <a href="#">
                        <img src="{{ asset('images/icon/logo-color.png') }}" alt="logo"
                             class="img-fluid blur-up lazyload">
                    </a>
                </div>
            </div>
            <div class="header-right">
                <nav class="navbar navbar-expand-lg pe-0">
                    <div class="overlay-bg"></div>
                    <button class="navbar-toggler p-0" type="button">
                        <i data-feather="menu" class="icon iw-22 ih-22 icon-light"></i>
                    </button>
                    <div class="navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item d-block d-lg-none back-btn">
                                <a class="nav-link" href="javascript:void(0)">back</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">contact</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link d-flex align-items-center btn btn-dark" href="{{ route('register') }}">
                                        <i class="me-2 iw-18 ih-18" data-feather="user-plus"></i>
                                        register
                                    </a>
                                @endif
                            </li>

                            <li class="nav-item">
                                @if (Route::has('login'))
                                    <a class="nav-link d-flex align-items-center btn btn-white" href="{{ route('login') }}">
                                        <i class="me-2 iw-18 ih-18" data-feather="log-in"></i>
                                        login
                                    </a>
                                @endif
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
