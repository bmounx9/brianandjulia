<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('common.head')
        <title>Accomodation</title>
    </head>
    <body>
        @include('common.nav')
        <div class="flex-center position-ref full-height">
            <div>Accommodation</div>
            <div class="content blue">
                <a href="/">HOME</a>
                <a href="/accomodation">Accommodation</a>
                <a href="/rsvp">RSVP</a>
            </div>
        </div>
    </body>
</html>
