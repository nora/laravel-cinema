<section class="mov-list-area">
    <ul class="mov-list">
        @foreach($mov_list as $mov)
            <li>
                <a href="#">
                    <img src="/img/mov/{{$mov->MOV_IMG}}" alt="1" class="mov-img">
                    <div class="mov-time-meter">
                        <span class="meter1">&nbsp;</span>
                        <span class="meter2">&nbsp;</span>
                        <span class="meter3">&nbsp;</span>
                        <span class="meter4">&nbsp;</span>
                        <span class="meter5">&nbsp;</span>
                    </div>
                    <div class="mov-info">
                        <div class="top">
                            <span class="mov-time">{{$mov->MOV_TIME}}分</span>
                            <span class="mov-start-date">2017/07/07〜</span>
                        </div>
                        <div class="bot">
                            <span class="mov-title">{{$mov->MOV_NAME}}</span>
                        </div>
                    </div>
                </a>
                <div class="btn reserve">
                    <a href="#" class="block">すぐに座席予約</a>
                </div>
            </li>
        @endforeach
    </ul>
</section>