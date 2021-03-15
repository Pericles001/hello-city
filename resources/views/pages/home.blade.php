@extends('layouts.app')



@section('title')

@section('content')

<img src="{{asset('img/benin-flag-medium.png')}}" height="200" width="300" alt="Benin flag">

<h1>Hello from Benin!</h1>

<p>It's currently {{date('h:i A')}}.</p>

@endsection

