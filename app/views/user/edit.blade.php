@extends('layouts.default')

@section('content')

    {{ Form::open(array('route' => array('user.update', $user->id), 'method' => 'PUT', 'class' => 'form' )) }}
    
        <li>
            {{ Form::label('email', 'Your email' ) }} 
            {{ Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'Your email')) }}
        </li>
        <li>
            {{ Form::label('password', 'Your password' ) }} 
            {{ Form::email('password') }}
        </li>
        <li>
            {{ Form::label('permission', 'Your permission' ) }} 
            {{ Form::select('permission', array('1' => 'Webmaster', '2' => 'User'), 2) }}
        </li>
        <li>
            {{ Form::submit() }}
        </li>
    {{ Form::close() }}
@stop
