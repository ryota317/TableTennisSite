@extends('layouts.default')
@section('content')
この県の練習一覧
<ul class="practice">
<li><a href=""><div class="practice-space-list">
<p>練習題名</p>
<p>練習場所</p>
<p>練習日時</p>
<p>チーム名（任意）</p>
<p>規模（人数など）</p>
<p>参加費</p>
<p>レベル感</p>
<p>説明</p>



</div></a></li>
<li><a href=""><div class="practice-space-list">練習1</div></a></li>
<li><a href=""><div class="practice-space-list">練習1</div></a></li>
<li><a href=""><div class="practice-space-list">練習1</div></a></li>
<li><a href=""><div class="practice-space-list">練習1</div></a></li>
<li><a href=""><div class="practice-space-list">練習1</div></a></li>
<li><a href=""><div class="practice-space-list">練習1</div></a></li>
</ul>




<ul class="practice">
@foreach($practice_list as $practice)

<li><a href=""><div class="practice-space-list">
<p>練習場所:{{ $practice->place }}</p>
<p>練習日時:{{ $practice->practice_time }}</p>
<p>チーム名:{{ $practice->name }}</p>
<p>規模（人数など）:{{ $practice->scale }}</p>
<p>レベル感:{{ $practice->level }}</p>
<p>参加費:{{ $practice->entry_fee }}</p>
<p>説明:{{ $practice->explanation }}</p>
<p>投稿者:{{ $practice->contributor }}</p>

</div></a></li>
@endforeach
</ul>






















@endsection
