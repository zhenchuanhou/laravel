@extends('layouts')

@section('title')
主页
@stop

@section('header')
@parent
header
@stop

@section('sidebar')
sidebar
@stop

@section('content')
content
<br>
<a href="{{url('urlTest')}}">url()</a>
<br>
<a href="{{action('StudentController@urlTest')}}">action()</a>
<br>
<a href="{{route('url')}}">route()</a>
<br>

@stop
