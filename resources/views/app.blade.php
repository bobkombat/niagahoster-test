<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Niagahoster - Niagaweb</title>
        <link rel="stylesheet" href="{{URL::asset('/css/app.css')}}">
    </head>
    <body class="mx-auto antialiased justify-content-center">
        <header class="border-bottom">
            <x-top-header/>
        </header>
        <nav class="border-bottom">
            <x-navigation/>
        </nav>
        <main>
            <section class="border-bottom">
                <x-top-section/>
            </section>
            <section>
                <x-feature-section/>
            </section>
            <section>
                <x-offer-section/>
            </section>
            <section>
                <x-feature2-section/>
            </section>
            <section>
                <x-feature3-section/>
            </section>
            <section>
                <x-feature4-section/>
            </section>
            <section class="border-bottom">
                <x-feature5-section/>
            </section>
            <section>

            </section>
        </main>
        <footer>
            <x-footer/>
        </footer>
         <img class="mx-auto"src="{{URL::asset('/images/mockup.png')}}" alt="profile Pic">
    </body>
</html>
