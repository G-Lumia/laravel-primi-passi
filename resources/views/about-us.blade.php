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
            <div class="pageHeader">
                <h1>
                   {{$page_title}}
                </h1>
                <p>
                    {{$description}}
                </p>
            </div>
            <div class="teamList">
                @foreach ( $team as $member)
                    <div class="card">
                        <div class="card-title">
                            {{$member['name']}}
                        </div>
                        <div class="card-body">
                            <img src="{{$member['img']}}" alt="{{$member['name']}}">
                            <div class="d-flex">
                                <h4>
                                    Job:
                                </h4>
                                <p>
                                    {{$member['job']}}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="linksList">
                <a href="/"> Home </a>
                @foreach ( $links as $link)
                    <a href="/{{$link}}"> {{$link}} </a>
                @endforeach
            </div>
        </div>
    </body>
</html>
