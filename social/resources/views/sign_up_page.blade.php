<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <fieldset>
  <legend>新規登録</legend>
 
  <form action="{{ url('/sign_up') }}" method="post">
  @csrf
  <p><label for="team_name">ニックネーム:<input type="text" id="team_name" name="name"></label></p>
  <p><label for="team_name">県名:<input type="text" id="team_name" name="prefecture"></label></p>
  <p><label for="team_name">メールアドレス:<input type="text" id="team_name" name="email"></label></p>
  <p><label for="team_name">パスワード:<input type="text" id="team_name" name="pass"></label></p>
  <p><label for="team_name">確認用パスワード:<input type="text" id="team_name" name="confirm_pass"></label></p>
  <button type="submit">新規登録</button>
  </form>
</fieldset>
</body>
</html>