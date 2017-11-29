@extends('layouts.master')

@section('title')
    座席予約
@endsection

@section('main-class')
    reserve page1
@endsection

@section('main')
    <div class="page-title">
        <h2>座席予約</h2>
    </div>
    <div class="mov-info">
        <div class="img-area">
            <img src="{{asset('img/mov/'.$movInfo->MOV_IMG)}}" alt="">
        </div>
        <div class="text-area">
            <h4>{{$movInfo->MOV_NAME}}</h4>
            <div class="detail">
                <div class="category">
                    <b>監督</b>
                    <span>マーク・ドルシア</span>
                </div>
                <div class="time">
                    <b>主演</b>
                    <span>デビッド・ルークマン</span>
                </div>
                <div class="start-date">
                    <b>上映時間</b>
                    <span>{{$movInfo->MOV_TIME}}分</span>
                </div>
            </div>
        </div>
    </div>
    <h5 class="underline mov-data-head">上映日</h5>
    <div class="mov-date">
        <ul class="mov-date-list">
            @for($i=1; $i<=7; $i++)
                <li>
                    {{Form::radio('day', $today->format('ymd'), false, ['id' => "radio-day{$today->format('ymd')}"])}}
                    {{Form::label("radio-day{$today->format('ymd')}", $today->format('m/d'))}}
                </li>
                @php($today->addDay(1))
            @endfor
        </ul>
    </div>
    <div class="underline screen-padding">
        <h5>スケジュール</h5>
    </div>
    <div class="btm-area" style="display: none;">
        <div class="mov-schedule">
            <ul>
                @foreach($schedules as $key => $schedule)
                    <li>
                            <span class="showing-time">{{$schedule->MOV_START_TIME}}〜{{$schedule->MOV_END_TIME}}</span>
                            <div class="purchase-btn">
                                <a href="./{{$mov_id}}/{{$schedule->SCHEDULE_ID}}">◎&nbsp購入</a>
                            </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{mix('js/zaseki1.js')}}"></script>
@endsection
