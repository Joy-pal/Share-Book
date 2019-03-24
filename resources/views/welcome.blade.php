<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles & Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,500,700,400italic|Material+Icons">


        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
    <div id="app">
        <header>
            <header-component></header-component>
        </header>
        <router-view></router-view>
       <footer>
           <footer-component></footer-component>
       </footer>
    </div>
    </body>
</html>
