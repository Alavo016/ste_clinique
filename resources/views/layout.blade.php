<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} -- @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/app.css') }}">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
</head>
<body class="">

    <x-loader/>

    <div class="page-wrapper">
            @include('navbar.nav')

            @yield('content')

            @include('footer.footer')
    </div>

@include('script')
</body>
</html>
