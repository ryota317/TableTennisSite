<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="{{ asset('js/form.js') }}"  defer></script>
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
  <fieldset>
  <legend>SignIn</legend>
  <form action="{{ url('/sign_in') }}" method="post">
  @csrf
  <p><label for="team_name">メールアドレス:<input type="text" id="team_name" name="email"></label></p>
  <p><label for="team_name">パスワード:<input type="text" id="team_name" name="pass"></label></p>
  <button type="submit">SignIN</button>
  </form>
</fieldset>
<form action="{{url('/')}}" onsubmit="return check()" >
<button type="submit" >送信テスト</button>
</form>
<form action="{{ url('/sign_up_page')}}">
新規登録
<button type="submit">こちらから新規登録</button>
</form>
</body>
</html>