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
                <x-offer-section :services="$services"/>
            </section>
            <section>
                <x-feature2-section/>
            </section>
            <section>
                <x-feature3-section/>
            </section>
            <section class="border-bottom mb-5">
                <x-feature4-section/>
            </section>
            <section>
                <x-feature5-section/>
            </section>
            <section>
                <x-feature6-section/>
                <div class="like-div-section py-4">
                    @include('/components/sub-components/second-feature')
                </div>
                <div class="contact-us-section py-5">
                    @include('/components/sub-components/contact-us')
                </div>
            </section>
        </main>
        <footer class="footer py-3">
            <x-footer/>
        </footer>
    </body>
</html>
