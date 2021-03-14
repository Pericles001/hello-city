@extends('app')



@section('title')

@section('content')

<h1>Hello from Benin!</h1>

<p>It's currently {{date('h:i A')}}.</p>

@endsection

@section('footer')

&copy; Copyright {{date('Y')}} &middot;
 <a href="{{route('about')}}">About Us</a>

@endsection