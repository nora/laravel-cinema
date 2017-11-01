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
    <div class="reserve-info rinji">
        現在の情報まとめ
    </div>
    <div class="reserve-area rinji">
        <div class="text">
            <h3>座席予約</h3>
            <p>ご希望の座席を空席から、購入枚数分、選択してください。<br>
                選択中の座席を解除する場合は、もう一度、座席をクリックしてください。座席選択後に次のSTEPにて購入方法をお選びください。</p>
        </div>
        <h4 class="screen-info">名古屋HALシネマ スクリーン9</h4>
        <div id="zaseki">
        </div>
        <div class="btn-area">
            <div class="btn">前ページに戻る</div>
            <div class="btn">次へ進む</div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{mix('js/zaseki1.js')}}"></script>
@endsection
