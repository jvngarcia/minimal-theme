<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') | Minimal Theme</title>

        @vite(['resources/js/app.js'])
        @vite(['resources/css/app.css'])
    </head>
    <body>
        
        @include('layouts.header-principal')

        <div class="container-fluid">
            <div class="container">
                @yield('content')
            </div>
        </div>


        @include('layouts.footer-principal')
    </body>
</html>
