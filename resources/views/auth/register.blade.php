<x-guest-layout>

    <x-slot name="title">
        Lover | Register
    </x-slot>

    <section class="login-section">
        <div class="header-section">
            <div class="logo-sec">
                <a href="#">
                    <img src="{{ asset('images/icon/logo.png') }}" alt="logo" class="img-fluid blur-up lazyload">
                </a>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-5 d-none d-lg-block">
                    <div class="login-welcome">
                        <div>
                            <img src="{{ asset('images/login/guest.svg') }}" class="img-fluid blur-up lazyload" alt="guest" style="width: 75%;">
                            <h1>Welcome Lovers!</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 col-md-10 col-12 m-auto">
                    <div class="login-form">
                        <div>
                            <div class="login-title">
                                <h2>{{ __('Register') }}</h2>
                            </div>
                            <div class="login-discription">
                                <h3>Hello lovers</h3>
                                <h4>Welcome to Lovers, create your account below to start usinf Lovers.</h4>
                            </div>
                            <div class="form-sec">

                                <div>

                                    <form class="theme-form" action="{{ route('register') }}" method="POST">

                                        @csrf

                                        <div class="form-group">
                                            <label for="name">{{ __('Full Name') }}</label>
                                            <input
                                                type="text"
                                                class="form-control @error('name') border-danger @enderror"
                                                id="name"
                                                placeholder="Your Name"
                                                name="name"
                                                value="{{ old('name') }}"
                                                autocomplete="name"
                                                autofocus
                                            >
                                            @error('name')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="email">{{ __('Email address') }}</label>
                                            <input
                                                id="email"
                                                type="email"
                                                class="form-control @error('email') border-danger @enderror"
                                                name="email"
                                                value="{{ old('email') }}"
                                                autocomplete="email"
                                                placeholder="Enter email"
                                            >
                                            @error('email')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="password">{{ __('Password') }}</label>
                                            <input
                                                id="password"
                                                type="password"
                                                class="form-control @error('password') border-danger @enderror"
                                                name="password"
                                                autocomplete="new-password"
                                                placeholder="Password"
                                            >
                                            @error('password')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                            <input
                                                id="password-confirm"
                                                type="password"
                                                class="form-control @error('password') border-danger @enderror"
                                                name="password_confirmation"
                                                autocomplete="new-password"
                                                placeholder="Confirm Password"
                                            >
                                        </div>

                                        <div class="btn-section">
                                            <button type="submit" class="btn btn-solid btn-lg">sign up</button>
                                            <a href="{{ route('login') }}" class="btn btn-solid btn-lg ms-auto">login</a>
                                        </div>

                                    </form>

                                    @include('auth.partials.social')

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="how-work">
            <div class="media">
                <i data-feather="play-circle"></i>
                <div class="media-body">
                    <h2>how it work?</h2>
                    <p>
                        Lovers is a website which allows users, who sign-up for free profiles, to connect with
                        friends, work colleagues or people they don't know, online.
                    </p>
                </div>
            </div>
        </div>
    </section>

    @push('js')
        <script src="{{ asset('js/feather.min.js') }}"></script>

        <script>
            feather.replace();
        </script>
    @endpush

</x-guest-layout>