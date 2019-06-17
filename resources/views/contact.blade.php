@extends('layout.app')
@section('content')
 <h1> Contact Page</h1>

@if(count($people)>=1)
<ul>
@foreach($people as $person)
<li>{{$person}}</li>
@endforeach
</ul>
@endif
<p> this is the contact page </p>
    @endsection

        @section('footer')
        {{--<script> alert('hello there')</script>--}}
        @endsection