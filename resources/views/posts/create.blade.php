@extends('layout.app')
@section('content')

<h1>Create Post</h1>
<form method="post">
	{{ csrf_field() }}
	<input type="text" name="title" placeholder="Enter your title">
	<input type="submit" name="submit">
	</form>

@endsection
