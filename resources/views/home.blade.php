@extends('layouts.app')

@section('pre-loader')

    @include('pre-loaders.header')

    <div class="page-body container-fluid custom-padding">
        @include('pre-loaders.sidebar')
    </div>

@endsection

@section('content')

    <div class="page-body container-fluid custom-padding">

        @include('partials.sidebar')

    </div>

@endsection
