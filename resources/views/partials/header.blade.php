<header>
    <div class="mobile-fix-menu"></div>

    <div class="container-fluid custom-padding">

        <div class="header-section">

            <div class="header-left">

                <div class="brand-logo">
                    <a href="{{ url('/home') }}">
                        <img src="{{ asset('images/icon/logo.png') }}" alt="logo" class="img-fluid blur-up lazyload">
                    </a>
                </div>

                @include('partials.search-box')

                <ul class="btn-group">

                    <li class="header-btn home-btn">
                        <a class="main-link" href="#">
                            <x-feathericon-home class="icon-light stroke-width-3 iw-16 ih-16"/>
                        </a>
                    </li>

                    @include('partials.friend-request-dropdown')

                </ul>

            </div>

            <div class="header-right">

                <div class="post-stats">
                    <ul>
                        <li>
                            <h3>326</h3>
                            <span>total posts</span>
                        </li>
                        <li>
                            <h3>2456</h3>
                            <span>total friends</span>
                        </li>
                    </ul>
                </div>

                <ul class="option-list">

                    @include('partials.message-dropdown')

                    <li class="header-btn custom-dropdown">

                        <a id="dark-1" class="main-link" href="javascript:void(0)">
                            <x-feathericon-moon class="icon-light stroke-width-3 iw-16 ih-16"/>
                        </a>

                        <a id="light-1" class="main-link d-none" href="javascript:void(0)">
                            <x-feathericon-sun class="icon-light stroke-width-3 iw-16 ih-16"/>
                        </a>

                    </li>

                    @include('partials.mobile-app-menu')

                    @include('partials.notification-dropdown')

                    @include('partials.profile-dropdown')

                </ul>

            </div>

        </div>

    </div>

</header>
