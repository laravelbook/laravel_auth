@extends('layout')

@section('content')
    <h2>Welcome "{{ $user->username }}" to the protected page!</h2>
    <p>Your user ID is: {{ Auth::user()->id }}</p>
@stop