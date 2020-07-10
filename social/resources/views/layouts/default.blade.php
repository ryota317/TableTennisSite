<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <script>
  function check(){

let result = window.confirm('送信してよろしいですか？');
if(result){ // 確認ダイアログを表示

  return true; // 「OK」時は送信を実行

}else{ // 「キャンセル」時の処理
  window.alert('キャンセルされました'); // 警告ダイアログを表示
  return false; // 送信を中止
}
}
</script>
</head>
<body>
  <header>
  <h1 class="top-h1"><img  class="logo"src="{{ asset('/img/tabletennis_racket.png') }}" alt="">卓球練習サイト<img  class="logo"src="/img/tabletennis_racket.png" alt=""></h1>
  <div class="header-nav">
  <nav>
  <ul>
    <li class="header-nav-list"><a href="{{ url('/')}}">TOP</a></li>
    @if (!Session::has('user'))
    <li class="header-nav-list"><a href="{{ url('/sign_in_page')}}">ログイン</a></li>
    @endif
    @if (Session::has('user'))
    <li class="header-nav-list"><a href="{{ url('/sign_out')}}"
    onclick="check();">(if)ログアウト</a></li>
    @endif

    <li class="header-nav-list"><a href="{{ url('/profile')}}">(if)プロフィール</a></li>
    <li class="header-nav-list"><a href="{{ url('/create_team')}}">(if)チームページ作成</a></li>
    <li class="header-nav-list"><a href="{{ url('/practice_partner')}}">(if)練習相手募集</a></li>
  </ul>
  </nav>
 </div>
  </header>
  @yield('content')
  <footer>
<div>
  Happy table tennis life!!
</div>
  </footer>
  </body>
</html>