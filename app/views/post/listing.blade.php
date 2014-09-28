@extends('layouts.default')

@section('content')
    @if(count($posts))
        @foreach ($posts as $post)
            <p><strong>{{{ $post->title}}}</strong></p>
        @endforeach
    @endif
@stop
