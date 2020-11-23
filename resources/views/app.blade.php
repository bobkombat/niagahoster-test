<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Niagahoster - Niagaweb</title>
        <link rel="stylesheet" href="{{URL::asset('/css/app.css')}}">
        <!-- Fonts -->
        <link rel="Fonts" href="{{URL::asset('/fonts/montserrat/Montserrat-Black.otf')}}">
    </head>
    <body class="mx-auto antialiased justify-content-center">
        <header class="border-bottom">
            <x-top-header/>
        </header>
        <nav class="border-bottom">
            <x-navigation/>
        </nav>
        <main>
        </main>
         <img class="mx-auto"src="{{URL::asset('/images/mockup.png')}}" alt="profile Pic">
    </body>
</html>
