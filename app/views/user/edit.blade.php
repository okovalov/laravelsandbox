@extends('layouts.default')

@section('content')

    {{ Form::model($user, array('route' => array('user.update', $user->id), 'method' => 'PUT', 'class' => 'form' )) }}
    
        <li>
            {{ Form::label('email', 'Your email' ) }} 
            {{ Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'Your email')) }}
            {{ $errors->first('email') }}
        </li>
        <li>
            {{ Form::label('password', 'Your password' ) }} 
            {{ Form::password('password') }}
            {{ $errors->first('password') }}
        </li>
        <li>
            {{ Form::label('permission', 'Your permission' ) }} 
            {{ Form::select('permission', array('1' => 'Webmaster', '2' => 'User'), 2) }}
            {{ $errors->first('permission') }}
        </li>
        <li>
            {{ Form::submit() }}
        </li>
    {{ Form::close() }}
@stop
