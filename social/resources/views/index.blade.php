@extends('layouts.default')
@section('content')

@if (Session::has('key'))
{{ Session::get('key') }}
@endif
@if (Session::has('user'))

@endif
<section class="top-section">
  <h2>練習場所を探そう!!!</h2>
  <div class="prefecture-list"> 
  <form action="{{url('/practice_info_list')}}">
  <fieldset>
  <legend>都道府県一覧</legend>
      <button class="link-style-btn" name="prefecture" value="北海道">北海道</button>
      <button class="link-style-btn" name="prefecture" value="青森県">青森県</button>
      <button class="link-style-btn" name="prefecture" value="岩手県">岩手県</button>
      <button class="link-style-btn" name="prefecture" value="宮城県">宮城県</button>
      <button class="link-style-btn" name="prefecture" value="秋田県">秋田県</button>
      <button class="link-style-btn" name="prefecture" value="山形県">山形県</button>
      <button class="link-style-btn" name="prefecture" value="福島県">福島県</button>
      <button class="link-style-btn" name="prefecture" value="茨城県">茨城県</button>
      <button class="link-style-btn" name="prefecture" value="栃木県">栃木県</button>
      <button class="link-style-btn" name="prefecture" value="群馬県">群馬県</button>
      <button class="link-style-btn" name="prefecture" value="埼玉県">埼玉県</button>
      <button class="link-style-btn" name="prefecture" value="千葉県">千葉県</button>
      <button class="link-style-btn" name="prefecture" value="東京都">東京都</button>
      <button class="link-style-btn" name="prefecture" value="神奈川県">神奈川県</button>
      <button class="link-style-btn" name="prefecture" value="新潟県">新潟県</button>
      <button class="link-style-btn" name="prefecture" value="富山県">富山県</button>
      <button class="link-style-btn" name="prefecture" value="石川県">石川県</button>
      <button class="link-style-btn" name="prefecture" value="福井県">福井県</button>
      <button class="link-style-btn" name="prefecture" value="山梨県">山梨県</button>
      <button class="link-style-btn" name="prefecture" value="長野県">長野県</button>
      <button class="link-style-btn" name="prefecture" value="岐阜県">岐阜県</button>
      <button class="link-style-btn" name="prefecture" value="静岡県">静岡県</button>
      <button class="link-style-btn" name="prefecture" value="愛知県">愛知県</button>
      <button class="link-style-btn" name="prefecture" value="三重県">三重県</button>
      <button class="link-style-btn" name="prefecture" value="滋賀県">滋賀県</button>
      <button class="link-style-btn" name="prefecture" value="京都府">京都府</button>
      <button class="link-style-btn" name="prefecture" value="大阪府">大阪府</button>
      <button class="link-style-btn" name="prefecture" value="兵庫県">兵庫県</button>
      <button class="link-style-btn" name="prefecture" value="奈良県">奈良県</button>
      <button class="link-style-btn" name="prefecture" value="和歌山県">和歌山県</button>
      <button class="link-style-btn" name="prefecture" value="鳥取県">鳥取県</button>
      <button class="link-style-btn" name="prefecture" value="島根県">島根県</button>
      <button class="link-style-btn" name="prefecture" value="岡山県">岡山県</button>
      <button class="link-style-btn" name="prefecture" value="広島県">広島県</button>
      <button class="link-style-btn" name="prefecture" value="山口県">山口県</button>
      <button class="link-style-btn" name="prefecture" value="徳島県">徳島県</button>
      <button class="link-style-btn" name="prefecture" value="香川県">香川県</button>
      <button class="link-style-btn" name="prefecture" value="愛媛県">愛媛県</button>
      <button class="link-style-btn" name="prefecture" value="高知県">高知県</button>
      <button class="link-style-btn" name="prefecture" value="福岡県">福岡県</button>
      <button class="link-style-btn" name="prefecture" value="佐賀県">佐賀県</button>
      <button class="link-style-btn" name="prefecture" value="長崎県">長崎県</button>
      <button class="link-style-btn" name="prefecture" value="熊本県">熊本県</button>
      <button class="link-style-btn" name="prefecture" value="大分県">大分県</button>
      <button class="link-style-btn" name="prefecture" value="宮崎県">宮崎県</button>
      <button class="link-style-btn" name="prefecture" value="鹿児島県">鹿児島県</button>
      <button class="link-style-btn" name="prefecture" value="沖縄県">沖縄県</button>
</fieldset>
</div>
</form>
</section>
<section  class="top-section">
<h2>チームを探そう!!!</h2>
<form action="{{ url('/team_search')}}" method="get">
<fieldset>
  <legend>チーム検索</legend>
  <p><label for="team_name">チーム名:<input type="text" id="team_name" name="team_name"></label></p>

  <p><label for="prefecture">県を選択してください:
<select name="prefecture"  id="prefecture">
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
<button type="submit" class="team-seach-button">検索</button>
</fieldset>
 </form>
 </section>
 <section  class="top-section">
  <h2>最新の情報!!!</h2>
  <div class="new-info">
  <ul>
  <li><a href="">2020/6/29 テストの最新情報です！！</a></li>
  <li><a href="">2020/6/29 テストの最新情報です！！</a></li>
  <li><a href="">2020/6/29 テストの最新情報です！！</a></li>
  <li><a href="">2020/6/29 テストの最新情報です！！</a></li>
  <li><a href="">2020/6/29 テストの最新情報です！！</a></li>
  </ul>
  </div>
  </section>
@endsection

