@extends('app')


@section('title', 'About Us |'.env('APP_NAME'))




@section('content')

<p>Built with &hearts; by Pericles001</p>
 
<p><a href="/">Revenir à la page d'accueil</a></p>


@endsection



@section('footer')

&copy; Copyright {{date('Y')}} 
@endsection