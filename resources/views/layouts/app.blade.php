<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
        @yield('title',config('app.name'))
        </title>

        <link rel="stylesheet" href="<?php echo asset('css/dist/app.css')?>" type="text/css">  


    </head>
    <body class="antialiased">

@yield('content')


<p>{{config('project.slogan')}}</p>

@include('layouts/partials/_footer')

            </body>
</html>
