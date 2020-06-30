<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <header>
  <h1 class="top-h1"><img  class="logo"src="/storage/img/tabletennis_racket.png" alt="">卓球練習サイト<img  class="logo"src="/storage/img/tabletennis_racket.png" alt=""></h1>
  <div class="header-nav">
  <nav>
  <ul>
  <li class="header-nav-list"><a href="">新規登録</a></li>
  <li class="header-nav-list"><a href="">ログイン</a></li>
  <li class="header-nav-list"><a href="">ログアウト</a></li>
  <li class="header-nav-list"><a href="">プロフィール</a></li>
  <li class="header-nav-list"><a href="">チームページ作成</a></li>
  <li class="header-nav-list"><a href="">練習相手募集</a></li>
  </ul>
  </nav>
 </div>
  </header>
  @yield('content')