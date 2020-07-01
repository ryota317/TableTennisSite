<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  新規登録完了しました！！

  <form action="{{ url('/sign_in_page')}}">

  <button type="submit">ログイン</button>
  </form>
  <form action="{{ url('/')}}">

  <button type="submit">トップへ戻る</button>
  </form>
</body>
</html>