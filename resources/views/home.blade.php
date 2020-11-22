<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Niagahoster - Niagaweb</title>
        <link rel="stylesheet" href="{{URL::asset('/css/app.css')}}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body class="mx-auto flex-row antialiased justify-content-center">
        <header class="d-flex justify-content-center mx-auto border-bottom">
            <h1>Hello Worlds</h1>
        </header>
        <h1>Hello Worlds</h1>
         <img class="mx-auto"src="{{URL::asset('/images/mockup.png')}}" alt="profile Pic">
    </body>
</html>
