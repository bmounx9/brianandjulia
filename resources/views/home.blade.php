<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <script src="/js/bootstrap.js"></script>
    <script src="/js/app.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
</head>
<body>
    <div class="position-ref full-height">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand" href="/">Brian & Julia</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/accommodation">Accommodations</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">RSVP</a>
              </li>
            </ul>
          </div>
        </nav>
    </div>
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



