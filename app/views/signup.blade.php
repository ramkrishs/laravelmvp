@extends('layouts.main')
@section('title')
Sign up form
@stop
@section('body')
<h3>New User Sign up</h3>
{{ Form::open(array('url' => 'signup'))}}
	{{ Form::label('email','Email Address')}}
	{{ Form::text('email')}}

	{{ Form::label('username','Username')}}
	{{ Form::text('username')}}

	{{ Form::label('password','Password')}}
	{{ Form::password('password')}}

	{{ Form::submit('Sign up')}}
{{ Form::close() }}
@stop