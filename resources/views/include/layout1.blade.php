<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - {{ config('app.name') }} </title>
    <link rel="stylesheet" href="{{ asset('app1.css') }}">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
</head>

<body class="">

    {{-- <x-preloader /> --}}

    <div class="main-wrapper">
        @include('dashboard.nav_head')

        @include('dashboard.chat_box')

        @include('dashboard.header')

        @include('dashboard.sidebar')

        @yield('content')

        @include('dashboard.footer')


    </div>

    @include('include.scrpit1')
    @yield('script')
</body>

</html>
