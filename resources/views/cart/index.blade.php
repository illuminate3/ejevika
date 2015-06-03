@extends('app')
@section('content')
	@foreach($result as $item)
		{{$item->name}}<br>
	@endforeach
@stop