@extends('layouts.master')

@section('title')
    座席予約
@endsection

@section('main-class')
    reserve payment
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
        <li class="current-step">決済情報入力</li>
        <li>完了</li>
    </ul>

    {{--movInfo--}}
    @include('reserve.partials.mov-info')

    <form class="reserve-area" name="zaseki" method="post" id="frm" action="/reserve/fin">
        <div class="text">
            <h3>お客様情報入力</h3>
        </div>
        <div class="user-info">
            <ul>
                <li>
                    <label>氏名</label>
                    <input type="text" name="name" readonly value="{{$params['name']}}">
                </li>
                <li>
                    <label>氏名(かな)</label>
                    <input type="text" name="kana" readonly value="{{$params['kana']}}">
                </li>
                <li>
                    <label>電話番号</label>
                    <input type="tel" name="tel" readonly value="{{$params['tel']}}">
                </li>
                <li>
                    <label>メールアドレス</label>
                    <input type="email" name="email" readonly value="{{$params['email']}}">
                </li>
            </ul>
        </div>
        <div class="btn-area">
            <button type="button" onclick="history.back()">戻る</button>
            <button type="button" onclick='$(".stripe-button-el").click()'>決済</button>
        </div>
        <div class="hidden">
            <script
                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                    data-key="pk_test_qoJbsKeFVpBwqL3XrpUK5tez"
                    data-amount="3000"　
                    data-name="HALシネマ"
                    data-description="チケット予約料金"
                    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                    data-locale="ja"
                    data-currency="jpy">
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
            </script>
        </div>
    </form>
    <form action="/fin" method="POST" style="" id="checkout">
    </form>
@endsection

@section('js')
@endsection
