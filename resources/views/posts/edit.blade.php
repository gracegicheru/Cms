@extends('layout.app')
@section('content')

<h1>Edit Post</h1>
<form method="post" action="/posts/{{$post->id}}">
	{{ csrf_field() }}
	<input type="hidden" name="_method" value="PUT">
	<input type="text" name="title" placeholder="Enter your title" value="{{$post->title}}">
	<input type="submit" name="submit" value="update">
	</form>

	<form method="post" action="/posts/{{$post->id}}">
	
		<input type="hidden" name="_method" value=Delete>
		<input type="submit" value="Delete">
	</form>

@endsection