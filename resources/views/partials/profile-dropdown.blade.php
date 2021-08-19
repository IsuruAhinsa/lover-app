<li class="header-btn custom-dropdown profile-btn btn-group">

    <a class="main-link" href="javascript:void(0)" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

        <x-feathericon-user class="icon-light stroke-width-3 d-sm-none d-block iw-16 ih-16"/>

        <div class="media d-none d-sm-flex">

            @if(!Laravel\Fortify\Features::updateProfileInformation())

            <div class="user-img">
                <img src="{{ Auth::user()->image ?? asset('images/user-sm/1.jpg') }}" class="img-fluid blur-up lazyloaded bg-img" alt="user">
                <span class="available-stats online"></span>
            </div>

            @else

            <div
                class="user-img bg-size blur-up lazyloaded"
                style="
                    background-image: url({{ Auth::user()->image ?? asset('images/user-sm/1.jpg') }});
                    background-size: cover;
                    background-position: center center;
                    background-repeat: no-repeat;
                    display: block;
                      "
                >

                <img
                    src="{{ Auth::user()->image ?? asset('images/user-sm/1.jpg') }}"
                    class="img-fluid blur-up lazyload bg-img"
                    alt="user"
                    style="display: none;"
                >

                <span class="available-stats online"></span>

            </div>

            @endif

            <div class="media-body d-none d-md-block">
                <h4>{{ Auth::user()->name }}</h4>
                <span>active now</span>
            </div>
        </div>

    </a>

    <div class="dropdown-menu dropdown-menu-right">
        <div class="dropdown-header">
            <span>{{ Auth::user()->name }}</span>
            <div class="mobile-close">
                <h5>close</h5>
            </div>
        </div>
        <div class="dropdown-content">
            <ul class="friend-list">
                <li>
                    <a href="{{ route('profile.edit') }}">
                        <div class="media">
                            <x-feathericon-user/>
                            <div class="media-body">
                                <div>
                                    <h5 class="mt-0">Profile</h5>
                                    <h6>Profile preview & settings</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="media">
                            <x-feathericon-settings/>
                            <div class="media-body">
                                <div>
                                    <h5 class="mt-0">setting & privacy</h5>
                                    <h6>all settings & privacy</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="media">
                            <x-feathericon-help-circle/>
                            <div class="media-body">
                                <div>
                                    <h5 class="mt-0">help & support</h5>
                                    <h6>browse help here</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                    >
                        <div class="media">
                            <x-feathericon-log-out/>
                            <div class="media-body">
                                <div>
                                    <h5 class="mt-0">{{ __('Logout') }}</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</li>
