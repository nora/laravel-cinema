{{--header--}}
<header class="main-header">
    <form action="m-search" method="get" name="mov-search-form">
        <div class="left">
            <h1><a href="#" class="">HALcinema</a></h1>
            <div class="search-area">
                <input type="text" name="mov-title" placeholder="映画タイトル検索">
                <i class="fa fa-search"></i></div>
        </div>
        <div class="right">
            @if (Auth::guest())
                <button class="login" class="menu-open-btn" onclick="location.href='/login'; return false;">ログイン</button>
                <button class="reg">会員登録</button>
            @else
                <button class="login"　
                        onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    ログアウト
                </button>
            @endif
        </div>
    </form>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
</header>{{--end header--}}
