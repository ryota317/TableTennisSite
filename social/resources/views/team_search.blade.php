@extends('layouts.default')
@section('content')


<ul class="practice">
@foreach($teams as $team)

<li><a href=""><div class="practice-space-list">

{{ $team->name}}

</div></a></li>
@endforeach
</ul>



@endsection