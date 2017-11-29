@extends('layouts.master')

@section('title')
    座席予約
@endsection

@section('main-class')
    reserve ticket
@endsection

@section('main')
    <div class="page-title">
        <h2>座席予約</h2>
        <h3>Zaseki Yoyaku</h3>
    </div>
    <ul class="step-bar">
        <li>座席予約</li>
        <li class="current-step">券種選択</li>
        <li>お客様情報入力</li>
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
            <h3>券種選択</h3>
            <p>鑑賞券の種類を選択してください。</p>
        </div>
        <div class="ticket-list">
            <div class="t-head">
                <span class="no">No.</span>
                <span class="seat">座席番号</span>
                <span class="ticket">券種名/料金</span>
            </div>
            <ul>
                <li>
                    <span class="no">01</span>
                    <span class="seat">A-1</span>
                    <span class="ticket">
                        <select name="ticket" id="">
                        <option value="1">おとな：1500円</option>
                        <option value="2">こども：1000円</option>
                        </select>
                    </span>
                </li>
            </ul>
        </div>
    </form>
@endsection

@section('js')
@endsection
