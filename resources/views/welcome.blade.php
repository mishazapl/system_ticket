@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links text-center">
                    @auth
                        <a href="{{ url('/home') }}" style="font-size: 30px;">Home</a>
                        <hr>
                    @endauth
                    @foreach($categoriesList as $category)
                        <div style="display: block; font-size: 30px;"><a href="{{ url('/categories/'.$category->slug) }}">{{ $category->name }}</a></div>
                        <div style="display: block; font-size: 20px; padding: 20px; ">Кол-во тикетов - {{ $category::find($category->id)->tickets->count() }}</div>
                    @endforeach
                </div>
            @endif

            <div class="content">

                <table class="table-bordered table">

                    <thread>
                        <tr>
                          <th>Тема</th>
                          <th>Статус</th>
                        </tr>
                    </thread>
                <tbody>
                @foreach($ticketStatusAll as $ticketStatus)


                    @foreach($ticketStatus->tickets->sortByDesc('created_at') as $ticket)
                        <tr>
                        <td><a href="{{ url('/ticket/'.$ticket->id) }}"> {{ $ticket->theme }} </a></td>

                        @foreach($ticket->status as $status)

                            <td>{{ $status->name }}</td>

                        @endforeach
                        </tr>
                    @endforeach
                @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
@endsection
