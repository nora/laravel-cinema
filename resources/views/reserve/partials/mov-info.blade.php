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
        </ul>
    </div>
</div>