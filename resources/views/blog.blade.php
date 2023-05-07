@extends('template')

@section('content')
<h1>Listado</h1>

@foreach($posts as $post)
<!--este es un ciclo for -->
<p><strong>{{ $post['id'] }}</strong>
    <a href="{{ route('post', $post['slug']) }}">
        {{ $post['title'] }}
    </a>
</p>
@endforeach
@endsection