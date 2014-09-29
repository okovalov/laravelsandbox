@extends('layouts.default')

@section('content')
    <p>{{{ $user->email or 'Default value' }}}</p>

    <ul>    
    @foreach($user->posts as $post)
        <li>{{{ $post->title }}} </li>
    @endforeach
    </ul>
@stop

@section('sidebar')
    <a href="#">Some link</a>
@stop