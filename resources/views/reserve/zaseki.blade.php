@extends('layouts.master')

@section('title')
    座席予約
@endsection

@section('main-class')
    reserve zaseki
@endsection

@section('main')
    <div class="page-title">
        <h2>座席予約</h2>
        <h3>Zaseki Yoyaku</h3>
    </div>
    <ul class="step-bar">
        <li class="current-step">座席予約</li>
        <li>券種選択</li>
        <li>お客様情報入力</li>
        <li>決済情報入力</li>
        <li>完了</li>
    </ul>

    @include('reserve.partials.mov-info')
    <form class="reserve-area" name="zaseki" method="get"
          action="./{{$schedule->SCHEDULE_ID}}/ticket/">
        <div class="text">
            <h3>座席予約</h3>
            <p>ご希望の座席を空席から、購入枚数分、選択してください。</p>
            <p>選択中の座席を解除する場合は、もう一度、座席をクリックしてください。<br>
                座席選択後に次のSTEPにて購入方法をお選びください。</p>
        </div>
        <h4 class="screen-info">名古屋HALシネマ スクリーン{{$schedule->screen->SCREEN_NO}}</h4>
        <div class="zaseki-list">
            @php($preRow = $seats->first()->ROW)
            <div>
                @foreach($seats as $seat)
                @if($seat->COLUMN === 1)
            </div>
            <div class="row {{$seat->ROW}}">
                @endif
                <div class="seat">
                    <input type="checkbox"
                           name="seats[]"
                           value="{{$seat->SEAT_ID}}"
                           id="{{$seat->SEAT_ID}}"
                           data-row-col="{{$seat->ROW}}-{{$seat->COLUMN}}">
                    <label for="{{$seat->SEAT_ID}}">
                        @include('components/seat_svg')
                    </label>
                </div>
                @php($preRow = $seat->ROW)
                @endforeach
            </div>
            <div class="btn-area">
                <button type="button" onclick="history.back()">戻る</button>
                <button type="submit">次へ進む</button>
            </div>
        </div>
    </form>
@endsection

@section('js')
@endsection
