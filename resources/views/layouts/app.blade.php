<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        HALシネマ | @yield('title')
    </title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/templete.css">
    <link rel="stylesheet" href="css/index.css">
    <!--font-awesome-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
@include('components/sign_in_modal')
<div id="wrap">
    @include('components/main_nav')
    <aside id="main-aside-ghost">&nbsp;</aside>
    <div id="cont">
        @include('components/header')
        <div id="main-header-ghost">&nbsp;</div>
        <div id="main-area">
            <div class="background top-back"></div>
            <section class="pan-list"> ホーム &gt; アメリカンビューティー</section>
            <!--  main  -->
            @yield('main')
            @include('components/footer')
        </div>
    </div>
</div>

<!-- Scripts -->
{{--bundle--}}
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>