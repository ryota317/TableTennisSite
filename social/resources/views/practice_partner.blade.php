@extends('layouts.default')
@section('content')

<fieldset>
  <legend>練習相手募集投稿</legend>
  <form action="{{ url('practice_partner_post')}}" method="post">
  @csrf

<p><label for="prefecture">県:
<select name="prefecture"  id="prefecture">
  <option value="" selected>-------</option>
  <option value="北海道">北海道</option>
  <option value="青森県">青森県</option>
  <option value="岩手県">岩手県</option>
  <option value="宮城県">宮城県</option>
  <option value="秋田県">秋田県</option>
  <option value="山形県">山形県</option>
  <option value="福島県">福島県</option>
  <option value="茨城県">茨城県</option>
  <option value="栃木県">栃木県</option>
  <option value="群馬県">群馬県</option>
  <option value="埼玉県">埼玉県</option>
  <option value="千葉県">千葉県</option>
  <option value="東京都">東京都</option>
  <option value="神奈川県">神奈川県</option>
  <option value="新潟県">新潟県</option>
  <option value="富山県">富山県</option>
  <option value="石川県">石川県</option>
  <option value="福井県">福井県</option>
  <option value="山梨県">山梨県</option>
  <option value="長野県">長野県</option>
  <option value="岐阜県">岐阜県</option>
  <option value="静岡県">静岡県</option>
  <option value="愛知県">愛知県</option>
  <option value="三重県">三重県</option>
  <option value="滋賀県">滋賀県</option>
  <option value="京都府">京都府</option>
  <option value="大阪府">大阪府</option>
  <option value="兵庫県">兵庫県</option>
  <option value="奈良県">奈良県</option>
  <option value="和歌山県">和歌山県</option>
  <option value="鳥取県">鳥取県</option>
  <option value="島根県">島根県</option>
  <option value="岡山県">岡山県</option>
  <option value="広島県">広島県</option>
  <option value="山口県">山口県</option>
  <option value="徳島県">徳島県</option>
  <option value="香川県">香川県</option>
  <option value="愛媛県">愛媛県</option>
  <option value="高知県">高知県</option>
  <option value="福岡県">福岡県</option>
  <option value="佐賀県">佐賀県</option>
  <option value="長崎県">長崎県</option>
  <option value="熊本県">熊本県</option>
  <option value="大分県">大分県</option>
  <option value="宮崎県">宮崎県</option>
  <option value="鹿児島県">鹿児島県</option>
  <option value="沖縄県">沖縄県</option>
</select>
</label></p>

  <p><label for="place">場所:<input type="text" id="place" name="place"></label></p>
  <p><label for="team_name">チーム名:<input type="text" id="team_name" name="team_name"></label></p>
//開催日と開催時間を分ける
  <p><label for="practice_time">練習時間:<input type="text" id="practice_time" name="practice_time"></label></p>
  <p><label for="scale">想定参加人数:<input type="text" id="scale" name="scale"></label></p>
  <p><label for="level">レベル:<input type="text" id="level" name="level"></label></p>
  <p><label for="entry_fee">参加費:<input type="text" id="entry_fee" name="entry_fee"></label></p>
  <p><label for="explanation">説明:
  <textarea name="explanation" rows="10" cols="20"></textarea></label></p>
  <br>
  <button type="submit">投稿</button>
</form>
</fieldset>
@endsection('content')