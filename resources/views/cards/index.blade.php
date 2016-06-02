@extends('layout')

@section('content')
	<h1>All cards</h1>

	@foreach($cards as $card)
		<a href="/cards/{{$card->id}}"><div>{{ $card->title }}</div></a>
	@endforeach
@stop