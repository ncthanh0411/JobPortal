<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

        <base href="{{asset('public/layout/backend')}}/">



        <title>{{config('app.name', 'JobWork')}}</title>
        <link href="css/stylejob.css" rel="stylesheet">
        <style>
            .left{
                margin-left: 5%;
            }
            .lefts{
                margin-left: 2%;
            }

            .right{
                margin-right: 9%;
            }
        </style>

    </head>
    <body>
     
        @include('include.nav')
        <div class = "container">
            @yield('content')
        </div>
    
    </body>
</html>
