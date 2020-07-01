@extends('layouts.default')
@section('content')
<section class="top-section">
  <h2>練習場所を探そう!!!</h2>
  <div class="prefecture-list"> 
  <form action="{{url('/practice_info_list')}}">
  <fieldset>
  <legend>都道府県一覧</legend>
      <button class="link-style-btn" name="prefecture" value="hokkaido">北海道</button>
      <button class="link-style-btn" name="prefecture" value="aomori">青森</button>
      <button class="link-style-btn" name="prefecture" value="iwate">岩手県</button>
      <button class="link-style-btn" name="prefecture" value="miyagi">宮城県</button>
      <button class="link-style-btn" name="prefecture" value="akita">秋田県</button>
      <button class="link-style-btn" name="prefecture" value="yamagata">山形県</button>
      <button class="link-style-btn" name="prefecture" value="fukushima">福島県</button>
      <button class="link-style-btn" name="prefecture" value="ibaraki">茨城県</button>
      <button class="link-style-btn" name="prefecture" value="tochigi">栃木県</button>
      <button class="link-style-btn" name="prefecture" value="gunnma">群馬県</button>
      <button class="link-style-btn" name="prefecture" value="saitama">埼玉県</button>
      <button class="link-style-btn" name="prefecture" value="tiba">千葉県</button>
      <button class="link-style-btn" name="prefecture" value="tokyo">東京都</button>
      <button class="link-style-btn" name="prefecture" value="kanagawa">神奈川県</button>
      <button class="link-style-btn" name="prefecture" value="niigata">新潟県</button>
      <button class="link-style-btn" name="prefecture" value="toyama">富山県</button>
      <button class="link-style-btn" name="prefecture" value="ishikawa">石川県</button>
      <button class="link-style-btn" name="prefecture" value="fukui">福井県</button>
      <button class="link-style-btn" name="prefecture" value="yamanashi">山梨県</button>
      <button class="link-style-btn" name="prefecture" value="nagano">長野県</button>
      <button class="link-style-btn" name="prefecture" value="gifu">岐阜県</button>
      <button class="link-style-btn" name="prefecture" value="shizuoka">静岡県</button>
      <button class="link-style-btn" name="prefecture" value="aichi">愛知県</button>
      <button class="link-style-btn" name="prefecture" value="mie">三重県</button>
      <button class="link-style-btn" name="prefecture" value="shiga">滋賀県</button>
      <button class="link-style-btn" name="prefecture" value="kyoto">京都府</button>
      <button class="link-style-btn" name="prefecture" value="oosaka">大阪府</button>
      <button class="link-style-btn" name="prefecture" value="hyogo">兵庫県</button>
      <button class="link-style-btn" name="prefecture" value="nara">奈良県</button>
      <button class="link-style-btn" name="prefecture" value="wakayama">和歌山県</button>
      <button class="link-style-btn" name="prefecture" value="tottori">鳥取県</button>
      <button class="link-style-btn" name="prefecture" value="simane">島根県</button>
      <button class="link-style-btn" name="prefecture" value="okayama">岡山県</button>
      <button class="link-style-btn" name="prefecture" value="hiroshima">広島県</button>
      <button class="link-style-btn" name="prefecture" value="yamaguchi">山口県</button>
      <button class="link-style-btn" name="prefecture" value="tokushima">徳島県</button>
      <button class="link-style-btn" name="prefecture" value="kagawa">香川県</button>
      <button class="link-style-btn" name="prefecture" value="ehime">愛媛県</button>
      <button class="link-style-btn" name="prefecture" value="kochi">高知県</button>
      <button class="link-style-btn" name="prefecture" value="fukuoka">福岡県</button>
      <button class="link-style-btn" name="prefecture" value="saga">佐賀県</button>
      <button class="link-style-btn" name="prefecture" value="nagasaki">長崎県</button>
      <button class="link-style-btn" name="prefecture" value="kumamoto">熊本県</button>
      <button class="link-style-btn" name="prefecture" value="oita">大分県</button>
      <button class="link-style-btn" name="prefecture" value="miyazaki">宮崎県</button>
      <button class="link-style-btn" name="prefecture" value="kagoshima">鹿児島県</button>
      <button class="link-style-btn" name="prefecture" value="okinawa">沖縄県</button>
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

<label for="prefecture">県を選択してください:</label>
<select id="prefecture" name="prefecture">
<option value="de">北海道</option>
<option value="de">青森県</option>
<option value="de">岩手県</option>
<option value="de">宮城県</option>
<option value="de">秋田県</option>
<option value="de">山形県</option>
<option value="de">福島県</option>
<option value="de">茨城県</option>
<option value="de">栃木県</option>
<option value="de">群馬県</option>
<option value="de">埼玉県</option>
<option value="de">千葉県</option>
<option value="de">東京都</option>
<option value="de">神奈川県</option>
<option value="de">新潟県</option>
<option value="de">富山県</option>
<option value="de">石川県</option>
<option value="de">福井県</option>
<option value="de">山梨県</option>
<option value="de">長野県</option>
<option value="de">岐阜県</option>
<option value="de">静岡県</option>
<option value="de">愛知県</option>
<option value="de">三重県</option>
<option value="de">滋賀県</option>
<option value="de">京都府</option>
<option value="de">大阪府</option>
<option value="de">兵庫県</option>
<option value="de">奈良県</option>
<option value="de">和歌山県</option>
<option value="de">鳥取県</option>
<option value="de">島根県</option>
<option value="de">岡山県</option>
<option value="de">広島県</option>
<option value="de">山口県</option>
<option value="de">徳島県</option>
<option value="de">香川県</option>
<option value="de">愛媛県</option>
<option value="de">高知県</option>
<option value="de">福岡県</option>
<option value="de">佐賀県</option>
<option value="de">長崎県</option>
<option value="de">熊本県</option>
<option value="de">大分県</option>
<option value="de">宮崎県</option>
<option value="de">鹿児島県</option>
<option value="de">沖縄県</option>
</select><br>
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

