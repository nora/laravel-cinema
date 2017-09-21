@extends('layouts.master')

@section('title')
    トップページ
@endsection

@section('body-class')
top
@endsection

@section('main')
    <div class="background top-back"></div>
    <div id="main-vis">
        <p> HALシネマへようこそ<br/>
            あなたの見たい映画を<br/>
            すぐ予約。 </p>
        <a href="/reserve" class="btn">座席予約をする</a>
    </div>
    <section id="mov-area">
        <div id="mov-btn-area">
            <div class="btn showing selected">上映中</div>
            <div class="btn willshow">公開予定</div>
        </div>
        @include('movie/list');
    </section>
    <section id="test"></section>
    <section id="mews"></section>
    <section id="mobie-info"></section>
@endsection
