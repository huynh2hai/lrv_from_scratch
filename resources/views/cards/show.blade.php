@extends('layout')

@section('content')
	<h1>Card details</h1>

	<div>{{ $card->title }}</div>

	<ul>
		@foreach($card->notes as $note)
			<li>{{$note->body}}</li>
		@endforeach
	</ul>
@stop