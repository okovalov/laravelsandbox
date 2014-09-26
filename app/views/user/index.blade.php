@extends('layouts.default')

@section('content')
    @if(count($users))
        @foreach ($users as $user)
            <p>{{{ $user->email or 'Default value' }}}</p>
        @endforeach
    @endif
@stop

