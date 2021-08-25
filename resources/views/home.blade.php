<x-app-layout>

    <x-slot name="preloader">
        @include('pre-loaders.header')

        <div class="page-body container-fluid custom-padding">
            @include('pre-loaders.sidebar')
        </div>
    </x-slot>

    <div class="page-body container-fluid custom-padding">

        @include('partials.sidebar')

    </div>

</x-app-layout>
