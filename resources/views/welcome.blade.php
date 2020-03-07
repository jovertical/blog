<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Main Style -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                font-family: 'Nunito', sans-serif;
                margin: 0;
                padding: 0;
            }
        </style>
    </head>
    <body class="h-screen flex items-center justify-center">
        <h1 class="text-xl text-gray-700 font-bold">
            Hello, I'm Jovert Palonpon...
        </h1>

        <!-- Main Script -->
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
