<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
        @yield('title', 'Hello City')
        </title>

    </head>
    <body class="antialiased">

@yield('content')

<footer>
<p> @yield('footer') </p>
</footer>

            </body>
</html>
