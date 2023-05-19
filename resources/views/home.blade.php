<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$page_title}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="wrapper">
            <h1>
               Benvenuto!
            </h1>
            <p>
                {{$description}}
            </p>
            <div class="linksList">
                @foreach ( $links as $link)
                    <a href="/{{$link}}"> {{$link}} </a>
                @endforeach
            </div>
        </div>
    </body>
</html>
