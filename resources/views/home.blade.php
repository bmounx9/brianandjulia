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
    <div class="image row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="image__container image--500x500">
                <div class="image__wrapper">
                    <img src="/images/julia-brian.jpg">
                </div>
            </div>
            <div class="image__details row">
                <div>
                    <h3>First things first, please RSVP</h3>
                    <a href="/rsvp" class="btn btn-primary">RSVP</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="our-story" class="container home-section">
    <div class="section-header row justify-content-center">
        <h6>Our Story</h6>
    </div>
    <div class="image row justify-content-center">
        <div class="image__container image--1120x600">
            <div class="image__wrapper">
                <img src="/images/tradesy-group.jpg">
            </div>
        </div>
        <div class="image__details row">
            <div>
                <h3>We met on September 9, 2013</h3>
                <p>where we both worked at Tradesy.</p>
            </div>
        </div>
    </div>
    <div class="image row">
        <div class="col-md-6 justify-content-left">
            <div class="image__container image--500x500">
                <div class="image__wrapper">
                    <img src="/images/brian.jpg">
                </div>
            </div>
            <div class="image__details row">
                <div>
                    <h3>Brian was an engineer</h3>
                </div>
            </div>
        </div>
        <div class="col-md-6 justify-content-end">
            <div class="image__container image--500x500">
                <div class="image__wrapper">
                    <img src="/images/julia.jpg">
                </div>
            </div>
            <div class="image__details row">
                <div>
                    <h3>Julia was a designer</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="image row">
        <div class="col-md-6">
            <div class="image__container image--500x500">
                <div class="image__wrapper">
                    <img src="/images/tradesy-friends.jpg">
                </div>
            </div>
        </div>

        <div class="image__details col-md-6">
            <div>
                <h3>We soon became good friends</h3>
                <p>through our shared Spotify playlist, our morning trips to Coffee Bean, and endless Hipchat/Slack
                    conversations.</p>
            </div>
        </div>
    </div>
    <div class="image row flex-row-reverse">
        <div class="col-md-6">
            <div class="image__container image--500x500">
                <div class="image__wrapper">
                    <img src="/images/dating.jpg">
                </div>
            </div>
        </div>
        <div class="image__details col-md-6">
            <div>
                <h3>And started dating October 2014</h3>
                <p>after Julia made the first move on Brian at a Tradesy Happy Hour. </p>
            </div>
        </div>
    </div>
    <div class="row image__details">
        <div>
            <h3>We dated almost 4 years</h3>
            <p>travelling, eating, exploring, and growing together.</p>
        </div>
    </div>
    <div class="image row">
        <div class="col-md-4 image__container image--370x370">
            <div class="image__wrapper">
                <img src="/images/eiffel.jpg">
            </div>
        </div>
        <div class="col-md-4 image__container image--370x370">
            <div class="image__wrapper">
                <img src="/images/london.jpg">
            </div>
        </div>
        <div class="col-md-4 image__container image--370x370">
            <div class="image__wrapper">
                <img src="/images/honolulu.jpg">
            </div>
        </div>
    </div>
    <div class="image row">
        <div class="col-md-4 image__container image--370x370">
            <div class="image__wrapper">
                <img src="/images/berkeley.jpg">
            </div>
        </div>
        <div class="col-md-4 image__container image--370x370">
            <div class="image__wrapper">
                <img src="/images/sagrada.jpg">
            </div>
        </div>
        <div class="col-md-4 image__container image--370x370">
            <div class="image__wrapper">
                <img src="/images/disneyland.jpg">
            </div>
        </div>
    </div>
    <div class="image row">
        <div class="image__details row align-items-center">
            <div>
                <h3>Until Brian finally popped the question on April 23, 2018</h3>
                <p>and of course Julia said Yes!</p>
            </div>
        </div>
        <div class="image__container image--600x600">
            <div class="image__wrapper">
                <img src="/images/engagement-dark.jpg">
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
            <img class="card-img-top" src="/images/ahrash.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Ahrash Rastegar</h5>
                <h6 class="card-subtitle mb-2 text-muted">Groomsman</h6>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.This
                    card has supporting text below as a natural lead-in to additional content.</p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="http://placehold.it/500x500" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Eric Taylor</h5>
                <h6 class="card-subtitle mb-2 text-muted">Groomsman</h6>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.This
                    card has supporting text below as a natural lead-in to additional content.</p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="/images/robert.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Robert Toledo</h5>
                <h6 class="card-subtitle mb-2 text-muted">Groomsman</h6>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.This
                    card has supporting text below as a natural lead-in to additional content.</p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="/images/mike.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Mike Hemelberg</h5>
                <h6 class="card-subtitle mb-2 text-muted">Groomsman</h6>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.This
                    card has supporting text below as a natural lead-in to additional content.</p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="http://placehold.it/500x500" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Gustavo Blanco</h5>
                <h6 class="card-subtitle mb-2 text-muted">Groomsman</h6>
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
