@extends("layout")

@section("content")
	<h1>{{$photo->title}}</h1>
	<img src="{{$photo->url}}" />
@endsection