@extends('layouts.default')
@section('content')


@if ( $hit === 0)
<div class="search-hit">
{{ $prefecture }} の検索結果　　<span>{{ $hit }}</span>　件ヒットしました
</div>
@elseif ($hit > 0)
<div class="search-hit">
この県の検索結果　　<span>{{ $hit }}</span>　件ヒットしました
</div>
@endif


<!-- <ul class="practice">

<li><a href=""><div class="practice-space-list">
</div></a></li>

</ul> -->
@foreach($practice_list as $practice)
<section class="practice">
<table width="100%">
  <tr>
    <th width="20%" class="th-left">NO.1</th><th width="80%">詳細</th>
  </tr>
  <tr>
  <tr>
    <td width="20%" class="th-left">練習場所</td><td width="80%">{{ $practice->place }}</td>
  </tr>
  <tr>
    <td class="th-left">練習日時</td><td>{{ $practice->practice_time }}</td>
  </tr>
  <tr>
    <td class="th-left">チーム名</td><td>{{ $practice->name }}</td>
  </tr>
  <tr>
    <td class="th-left">規模（人数など）</td><td>{{ $practice->level }}</td>
  </tr>
  <tr>
    <td class="th-left">レベル感</td><td>{{ $practice->level }}</td>
  </tr>
  <tr>
    <td class="th-left">参加費</td><td>{{ $practice->entry_fee }}</td>
  </tr>
  <tr>
    <td class="th-left">説明</td><td>{{ $practice->explanation }}</td>
  </tr>
  <tr>
    <td class="th-left">投稿者</td><td>{{ $practice->contributor }}</td>
  </tr>
  <tr>
    <td class="th-left">連絡先・SNSなど</td><td>追加中....</td>
  </tr>
</table>
</section>
@endforeach




















@endsection
