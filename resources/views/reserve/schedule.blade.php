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
        <h3>Zaseki Yoyaku</h3>
    </div>
    <div class="mov-info">
        <div class="img-area">
            <img src="{{asset('img/mov/'.$movInfo->MOV_IMG)}}" alt="">
        </div>
        <div class="text-area">
            <h4>{{$movInfo->MOV_NAME}}</h4>
            <div class="detail">
                <div class="category">
                    <b>ジャンル</b>
                    <span>ラブストーリー, コメディ</span>
                </div>
                <div class="time">
                    <b>上映時間</b>
                    <span>{{$movInfo->MOV_TIME}}分</span>
                </div>
                <div class="start-date">
                    <b>上映開始日</b>
                    <span>2017/09/09〜</span>
                </div>
            </div>
            <div class="theater-list">
                @foreach($theaters as $theater)
                    <li>
                        {{Form::radio('theater', $theater->THEATER_ID, false, ['id' => "radio-theater{$theater->THEATER_ID}"])}}
                        {{Form::label("radio-theater{$theater->THEATER_ID}", $theater->THEATER_NAME)}}
                    </li>
                @endforeach
            </div>
        </div>
    </div>
    <div class="mov-date rinji">
        <ul class="mov-date-list">
            @for($i=1; $i<=7; $i++)
                <li>
                    {{Form::radio('day', $today->format('ymd'), false, ['id' => "radio-day{$today->format('ymd')}"])}}
                    {{Form::label("radio-day{$today->format('ymd')}", $today->format('m月d日'))}}
                </li>
                @php($today->addDay(1))
            @endfor
        </ul>
    </div>
    <div class="btm-area" style="display: none;">
        <div class="mov-schedule rinji">
            <ul>
                @foreach($schedules as $key => $schedule)
                    <li>
                        <a href="./{{$mov_id}}/{{$schedule->SCHEDULE_ID}}">
                            <span class="showing-time">{{$schedule->MOV_START_TIME}}〜{{$schedule->MOV_END_TIME}}</span>
                            <span class="showing-screen">Screen {{$schedule->screen->SCREEN_NO}}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="mov-icon rinji">
            アイコン
        </div>
    </div>
@endsection

@section('js')
    <script src="{{mix('js/zaseki1.js')}}"></script>
@endsection
