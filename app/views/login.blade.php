@extends('layouts.main')
@section('title')
Login Page
@stop
@section('body')
<h3>User Login</h3>
{{ Form::open(array('url' => 'login'))}}
	{{ Form::label('username','Username')}}
	{{ Form::text('username')}}

	{{ Form::label('password','Password')}}
	{{ Form::password('password')}}

	{{ Form::submit('Sign in')}}
{{ Form::close() }}
@stop