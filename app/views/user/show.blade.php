@extends('layouts.default')

@section('content')
    <p>{{{ $user->email or 'Default value' }}}</p>
@stop

@section('sidebar')
    <a href="#">Some link</a>
@stop