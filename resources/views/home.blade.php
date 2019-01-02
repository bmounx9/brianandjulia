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
            <h2 class="header__title">March 30, 2019</h2>
            <hr class="hr--divider">
            <p><a href="https://goo.gl/maps/JjEnS9Y1zxE2">Playa Studios, Culver City</a><br/>
                4pm - 11pm
            </p>
        </div>
    </div>
</div>
<div class="container home-section">
    <div class="section-header row justify-content-center">
        <h6>RSVP</h6>
    </div>
    <a href="/rsvp" class="image row justify-content-center">
        <div class="image__container image--500x500">
            <div class="image__wrapper">
                <img src="/images/rsvp.JPG">
            </div>
        </div>
        <div class="image__overlay image--500x500">
            <div class="image__details row align-items-center">
                <div>
                    <h2>First things first, please RSVP</h2>
                </div>
            </div>
        </div>
    </a>
</div>
<div id="our-story" class="container home-section">
    <div class="section-header row justify-content-center">
        <h6>Our Story</h6>
    </div>
    <div class="image row justify-content-center">
        <div class="image__container image--800x500">
            <div class="image__wrapper">
                <img src="/images/tradesy-group.JPG">
            </div>
        </div>
        <div class="image__overlay image--800x500">
            <div class="image__details row align-items-center">
                <div class="text-white">
                    <h2>We met on September 9, 2013</h2>
                    <p>where we both worked at Tradesy.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="image row justify-content-left">
        <div class="image__container image--400x400">
            <div class="image__wrapper">
                <img src="/images/brian.JPG">
            </div>
        </div>
        <div class="image__overlay image--400x400">
            <div class="image__details row align-items-center">
                <div>
                    <h2>Brian was an engineer</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="image row justify-content-end">
        <div class="image__container image--400x400">
            <div class="image__wrapper">
                <img src="/images/julia.jpg">
            </div>
        </div>
        <div class="image__overlay image--400x400">
            <div class="image__details row align-items-center">
                <div>
                    <h2>Julia was a designer</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="image row justify-content-center">
        <div class="image__container image--800x500">
            <div class="image__wrapper">
                <img src="/images/tradesy2.JPG">
            </div>
        </div>
        <div class="image__overlay image--800x500">
            <div class="image__details row align-items-center">
                <div>
                    <h2>We soon became good friends</h2>
                    <p>through our shared Spotify playlist, our morning trips to Coffee Bean, and endless Hipchat/Slack
                        conversations.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="image row justify-content-center">
        <div class="image__container image--500x600">
            <div class="image__wrapper">
                <img src="/images/disneyland.JPG">
            </div>
        </div>
        <div class="image__overlay image--500x600">
            <div class="image__details row align-items-center">
                <div>
                    <h2>And started dating October 2014</h2>
                    <p>after Julia made the first move on Brian at a Tradesy Happy Hour. </p>
                </div>
            </div>
        </div>
    </div>
    <div class="image row justify-content-center">
        <div class="col-md-4 image__container image--380x500">
            <div class="image__wrapper">
                <img src="/images/barcelona.JPG">
            </div>
        </div>
        <div class="col-md-4 image__container image--380x500">
            <div class="image__wrapper">
                <img src="/images/cal-game.JPG">
            </div>
        </div>
        <div class="col-md-4 image__container image--380x500">
            <div class="image__wrapper">
                <img src="/images/beer-fest.JPG">
            </div>
        </div>
        <div class="image__overlay image--1140x500">
            <div class="image__details row align-items-center">
                <div class="text-white">
                    <h2>We dated almost 4 years</h2>
                    <p>travelling, eating, exploring, and growing together.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="image row justify-content-center">
        <div class="image__container image--600x600">
            <div class="image__wrapper">
                <img src="/images/engagement-dark.JPG">
            </div>
        </div>
        <div class="image__overlay image--600x600">
            <div class="image__details row align-items-center">
                <div class="text-white">
                    <h2>Until Brian finally
                        <br/>popped the question <br/>on April 23, 2018</h2>
                    <p>and of course Julia said Yes!</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="wedding-party" class="container home-section">
    <div class="section-header row justify-content-center">
        <h6>Wedding Party</h6>
    </div>
    <div class="row justify-content-center">
        <h2>Bridesmaids</h2>
    </div>
    <hr class="hr--divider">
    <div class="card-columns">
        <div class="card">
            <img class="card-img-top" src="/images/connie.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Connie Chun</h5>
                <h6 class="card-subtitle mb-2 text-muted">Maid of Honor</h6>
                <p class="card-text">My high school friend, roommate, and third sister. We bonded through McDonald's ice
                    cream and patbingsoo after summer classes at El Camino. She's my confidante and voice of reason.</p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="/images/christine.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Christine Kim</h5>
                <h6 class="card-subtitle mb-2 text-muted">Matron of Honor</h6>
                <p class="card-text">My older sister who has been through it all with me. She is the nicest person I
                    know with so much generosity.</p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="/images/gloria.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Gloria Kim</h5>
                <h6 class="card-subtitle mb-2 text-muted">Bridesmaid</h6>
                <p class="card-text">My baby sister who is a grown up in college now! Our favorite thing to do is to pig
                    out and make fun of our older sister.</p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="/images/joyce.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Joyce Cho</h5>
                <h6 class="card-subtitle mb-2 text-muted">Bridesmaid</h6>
                <p class="card-text">My first roommate at Cal and forever roommate in my heart. My favorite memories
                    were of us running to Rhinos before it closed and walking really fast to make it to class. She has a
                    contagious laugh and a love for life.</p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="/images/esther.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Esther Kang</h5>
                <h6 class="card-subtitle mb-2 text-muted">Bridesmaid</h6>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.This
                    card has supporting text below as a natural lead-in to additional content.</p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="/images/stella.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Stella Choi</h5>
                <h6 class="card-subtitle mb-2 text-muted">Bridesmaid</h6>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.This
                    card has supporting text below as a natural lead-in to additional content.</p>
            </div>
        </div>
    </div>

    <hr class="hr--clear">

    <div class="row justify-content-center">
        <h2>Groomsmen</h2>
    </div>
    <hr class="hr--divider">
    <div class="card-columns">
        <div class="card">
            <img class="card-img-top" src="http://placehold.it/500x500" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Nicolas Walder</h5>
                <h6 class="card-subtitle mb-2 text-muted">Best Man</h6>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.This
                    card has supporting text below as a natural lead-in to additional content.</p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="http://placehold.it/500x500" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Nicolas Walder</h5>
                <h6 class="card-subtitle mb-2 text-muted">Best Man</h6>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.This
                    card has supporting text below as a natural lead-in to additional content.</p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="http://placehold.it/500x500" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Nicolas Walder</h5>
                <h6 class="card-subtitle mb-2 text-muted">Best Man</h6>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.This
                    card has supporting text below as a natural lead-in to additional content.</p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="http://placehold.it/500x500" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Nicolas Walder</h5>
                <h6 class="card-subtitle mb-2 text-muted">Best Man</h6>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.This
                    card has supporting text below as a natural lead-in to additional content.</p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="http://placehold.it/500x500" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Nicolas Walder</h5>
                <h6 class="card-subtitle mb-2 text-muted">Best Man</h6>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.This
                    card has supporting text below as a natural lead-in to additional content.</p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="http://placehold.it/500x500" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Nicolas Walder</h5>
                <h6 class="card-subtitle mb-2 text-muted">Best Man</h6>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.This
                    card has supporting text below as a natural lead-in to additional content.</p>
            </div>
        </div>
    </div>
</div>
<div id="accommodations" class="container home-section">
    <div class="section-header row justify-content-center">
        <h6>Accommodations</h6>
    </div>
    <div class="image row justify-content-center">
        <div class="image__container image--500x500">
            <div class="image__wrapper">
                <img src="http://placehold.it/500x500">
            </div>
        </div>
        <div class="image__overlay image--500x500">
            <div class="image__details row align-items-center">
                <div>
                    <h2>Our travel recommendations</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="registry" class="container home-section">
    <div class="section-header row justify-content-center">
        <h6>Registry</h6>
    </div>
    <div class="image row justify-content-center">
        <div class="image__container image--500x500">
            <div class="image__wrapper">
                <img src="http://placehold.it/500x500">
            </div>
        </div>
        <div class="image__overlay image--500x500">
            <div class="image__details row align-items-center">
                <div>
                    <h2>Our registry</h2>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
