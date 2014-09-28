@extends('layouts.default')

@section('content')
    @if(count($users))
        @foreach ($users as $user)
            <p><strong>{{{ $user->title}}}</strong> by {{{ $user->email or 'Default value' }}}</p>
        @endforeach
    @endif
@stop

@section('sidebar')
    @parent
    <a href="#">Some link</a>
    @parent
    <a href="#">Some link</a>
    <a href="#">Some link</a>
    <a href="#">Some link</a>
@stop