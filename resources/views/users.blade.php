@extends('layout')

@section('title')
|| Collection User Here ||
@endsection

@section('body')

@foreach($user as $username)
<ul class="list-group">
<li class="list-group-item">
{{$username->name}}

</li>
</ul>

@endforeach
@endsection