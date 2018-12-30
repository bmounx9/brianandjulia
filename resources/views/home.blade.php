<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('common.head')
        <title>Brian & Julia</title>
    </head>
    <body>
        @include('common.nav')
        <div class="header container">
            <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-3">
                    <p>We can’t wait for you to join us on</p>
                    <h2 class="header__date">March 30, 2019</h2>
                    <hr class="hr--divider">
                    <p>Playa Studios, Culver City<br/>
                        4pm - 11pm
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="section-header row justify-content-center">
                <h6>RSVP</h6>
            </div>
            <div class="row justify-content-center">
                <div class="image-wrapper">
                    <img src="http://placehold.it/550x620">
                </div>
            </div>
        </div>
    </body>
</html>
