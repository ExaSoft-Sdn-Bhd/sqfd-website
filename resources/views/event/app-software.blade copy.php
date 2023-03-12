<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('universal.head')
    </head>
    <body class="antialiased">

        @include('universal.header')

        <main>
            exp 1
        </main>

        @include('universal.footer')

        @include('universal.js')

    </body>
</html>
