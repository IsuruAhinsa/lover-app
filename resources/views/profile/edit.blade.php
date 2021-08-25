<x-app-layout>

    <x-slot name="preloader">
        @include('pre-loaders.header')

        <div class="page-body container-fluid custom-padding">
            @include('pre-loaders.sidebar')

            <div class="page-center">

                @include('pre-loaders.profile-cover')

                @include('pre-loaders.profile-menu')

                <div class="container-fluid section-t-space px-0 layout-default">

                    @include('pre-loaders.profile-information')

                </div>

            </div>

        </div>
    </x-slot>

    <div class="page-body container-fluid custom-padding profile-page">

        @include('partials.sidebar')

        <div class="page-center">

            @include('profile.partials.profile-cover')

            @include('profile.partials.profile-menu')

            <div class="container-fluid section-t-space px-0 layout-default">

                <div class="profile-about">
                    <div class="card-title">
                        <h3>about</h3>
                        <h5>intro my self</h5>
                    </div>
                    <div class="about-content">

                        @if(Laravel\Fortify\Features::canUpdateProfileInformation())

                            @livewire('profile.update-profile-information-form')

                        @endif

                    </div>
                </div>

            </div>

        </div>

    </div>

</x-app-layout>
