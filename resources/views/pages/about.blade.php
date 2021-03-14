@extends('app')


@section('title', 'About Us |'.config('app.name'))




@section('content')

<p>Built with &hearts; by Pericles001</p>
 
<p><a href="{{route('home')}}">Revenir à la page d'accueil</a></p>


@endsection



@section('footer')

&copy; Copyright {{date('Y')}} 
@endsection  