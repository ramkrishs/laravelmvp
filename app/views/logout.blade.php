@extends('layouts.main')
@section('title')
Logged Out
@stop
@section('body')
<h4>Logout</h4>
<p>You have successfully logged out. <a href="{{ URL::to('/login')}}">Login?</a></p>
@stop