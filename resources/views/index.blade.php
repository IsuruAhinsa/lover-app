@extends('layouts.guest')

@section('guest-content')

    @include('partials.guest.header')
    @include('partials.guest.home-section')
    @include('partials.guest.feature')
    @include('partials.guest.register')
    @include('partials.guest.get-in-touch')
    @include('partials.guest.active-user-section')
    @include('partials.guest.testimonial')
    @include('partials.guest.footer')
    @include('partials.guest.tap-to-top')

@endsection

@push('js')
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/slick.js') }}"></script>
    <script src="{{ asset('js/custom-slick.js') }}"></script>
    <script src="{{ asset('js/feather.min.js') }}"></script>
    <script>
        feather.replace();
        new WOW().init();
    </script>
@endpush
