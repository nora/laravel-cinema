@extends('layouts.master')

@section('title')
    座席予約
@endsection

@section('main-class')
    reserve fin
@endsection

@section('main')
    <div class="page-title">
        <h2>座席予約</h2>
        <h3>Zaseki Yoyaku</h3>
    </div>
    <ul class="step-bar">
        <li>座席予約</li>
        <li>券種選択</li>
        <li>お客様情報入力</li>
        <li>決済情報入力</li>
        <li class="current-step">完了</li>
    </ul>

    <form class="reserve-area">
        <p>予約番号: 1-1-1</p>
        <p>座席予約が完了しました</p>
    </form>
@endsection

@section('js')
@endsection
