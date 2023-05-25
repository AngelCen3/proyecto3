@extends('template')

@section('content')
    <!--here working about a only post -->
    <h1>{{$post ->title}}</h1>
    <p> {{$post->body}}</p> 
@endsection