@extends('layouts.master')

@section('title')
    座席予約
@endsection

@section('main-class')
    reserve user
@endsection

@section('main')
    <div class="page-title">
        <h2>座席予約</h2>
        <h3>Zaseki Yoyaku</h3>
    </div>
    <ul class="step-bar">
        <li>座席予約</li>
        <li>券種選択</li>
        <li class="current-step">お客様情報入力</li>
        <li>決済情報入力</li>
        <li>完了</li>
    </ul>

    <div class="mov-info">
        <div class="img-area">
            <img src="{{asset('img/mov/'.$movInfo->MOV_IMG)}}" alt="">
        </div>
        <div class="text-area">
            <ul>
                <li>
                    <label>作品名</label>
                    <span>{{$movInfo->MOV_NAME}}</span>
                </li>
                <li>
                    <label>劇場名</label>
                    <span>{{$schedule->screen->theater->THEATER_NAME}}</span>
                </li>
                <li>
                    <label>スクリーン</label>
                    <span>スクリーン{{$schedule->screen->SCREEN_NO}}</span>
                </li>
                <li>
                    <label>鑑賞日</label>
                    <span>{{$schedule->date}}</span>
                </li>
                <li>
                    <label>時間</label>
                    <span>{{$schedule->start}} ~ {{$schedule->end}}</span>
                </li>
                <li>
                    <label>枚数</label>
                    <span>{{$seats->count()}}枚 [A-1]</span>
                </li>
            </ul>
        </div>
    </div>
    <form class="reserve-area" name="zaseki" method="get"
          action="./{{$schedule->SCHEDULE_ID}}/ticket/">
        <div class="text">
            <h3>お客様情報入力</h3>
        </div>
        <div class="user-info">
            <ul>
                <li>
                    <label>氏名</label>
                    <input type="text" name="name">
                </li>
                <li>
                    <label>氏名(かな)</label>
                    <input type="text" name="name">
                </li>
                <li>
                    <label>電話番号</label>
                    <input type="text" name="name">
                </li>
                <li>
                    <label>メールアドレス</label>
                    <input type="text" name="name">
                </li>
                <li>
                    <label>メールアドレス(確認)</label>
                    <input type="text" name="name">
                </li>
            </ul>
        </div>
        <div class="btn-area">
            <button type="button" onclick="history.back()">戻る</button>
            <button type="submit">次へ進む</button>
        </div>
    </form>
@endsection

@section('js')
@endsection
