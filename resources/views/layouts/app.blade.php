<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon"/>

    <title>{{ config('app.name', 'Laravel') }} @yield('title')</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&amp;display=swap"
          rel="stylesheet">

    <link id="change-link" rel="stylesheet" type="text/css" href="{{ asset('css/style-1.css') }}">
    <link rel="stylesheet" href=" {{ asset('vendor/fontawesome/css/all.min.css') }}">
</head>
<body>

    <div class="pre-loader">
        @section('pre-loader') @show
    </div>

    @include('partials.header')

    @yield('content')

<!-- latest jquery-->
<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>

<!-- popper js-->
<script src="{{ asset('js/popper.min.js') }}"></script>

<!-- slick slider js -->
<script src="{{ asset('js/slick.js') }}"></script>
<script src="{{ asset('js/custom-slick.js') }}"></script>

<!-- chatbox js -->
<script src="{{ asset('js/chatbox.js') }}"></script>

<!-- counter js -->
<script src="{{ asset('js/counter.js') }}"></script>

<!-- popover js for custom popover -->
<script src="{{ asset('js/popover.js') }}"></script>

<!-- feather icon js-->
<script src="{{ asset('js/feather.min.js') }}"></script>

<!-- emoji picker js-->
<script src="{{ asset('js/emojionearea.min.js') }}"></script>

<!-- Bootstrap js-->
<script src="{{ asset('js/bootstrap.js') }}"></script>

<!-- lazyload js-->
<script src="{{ asset('js/lazysizes.min.js') }}"></script>

<!-- Theme js-->
<script src="{{ asset('js/script.js') }}"></script>

<script>
    feather.replace();
    $(".emojiPicker ").emojioneArea({
        inline: true,
        placement: 'absleft',
        pickerPosition: "top left ",
    });
</script>

</body>
</html>
