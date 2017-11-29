<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>HALシネマ | @yield('title')</title>
    @section('styles')
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @show
    <link rel="stylesheet" href="/css/font-awesome.min.css">
</head>
<body class="@yield('body-class')">
@include('components/sign_in_modal')
@include('components/main_nav')
<div id="wrap">
    @include('components/header')
    <div class="without-aside-nav">
        <header class="ghost">&nbsp;</header>
        <div class="content">
            <section class="pan-list"> ホーム > * </section>
            <main class="@yield('main-class')">
                @yield('main')
            </main>
            @include('components/footer')
        </div>
    </div>
</div>
    <script src="{{ mix('js/app.js') }}"></script>
    @yield('js')
</body>
</html>