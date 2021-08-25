<x-guest-layout>

    <x-slot name="title">
        Lover | Login
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
                            <img src="{{ asset('images/login/guest-login.svg') }}" class="img-fluid blur-up lazyload" alt="guest" style="width: 75%;">
                            <h1>Welcome Back!</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 col-md-10 col-12 m-auto">
                    <div class="login-form">
                        <div>
                            <div class="login-title">
                                <h2>Login</h2>
                            </div>
                            <div class="login-discription">
                                <h3>Hello Everyone, Welcome Back</h3>
                                <h4>Welcome to Friendbook, please login to your account.
                                </h4>
                            </div>
                            <div class="form-sec">
                                <div>

                                    <form class="theme-form"  action="{{ route('login') }}" method="POST">
                                        @csrf

                                        <div class="form-group">
                                            <label for="email">Email address</label>
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
                                            <label for="password">Password</label>
                                            <input
                                                id="password"
                                                type="password"
                                                class="form-control @error('password') border-danger @enderror"
                                                name="password"
                                                autocomplete="current-password"
                                                placeholder="Password"
                                            >
                                            @error('password')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>

                                        <div class="bottom-sec">
                                            <div class="form-check checkbox_animated">
                                                <input
                                                    type="checkbox"
                                                    class="custom-control-input"
                                                    name="remember"
                                                    id="remember"
                                                    {{ old('remember') ? 'checked' : '' }}
                                                >
                                                <label class="form-check-label" for="remember">remember me</label>
                                            </div>
                                            <a href="#" class="ms-auto forget-password">forget password?</a>
                                        </div>

                                        <div class="btn-section">
                                            <button type="submit" class="btn btn-solid btn-lg">login</button>
                                            <a href="{{ route('register') }}" class="btn btn-solid btn-lg ms-auto">sign up</a>
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
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.
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