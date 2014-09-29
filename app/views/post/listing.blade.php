@extends('layouts.default')

@section('content')
    @if(count($posts))
        @foreach ($posts as $post)
            <p><strong>{{{ $post->title}}}</strong> by {{{ $post->user->email }}}</p>
        @endforeach
        
        {{ dd(DB::getQueryLog()) }}
    @endif
@stop
