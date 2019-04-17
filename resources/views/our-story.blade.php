<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('common.head')
    <title>Our Story</title>
</head>
<body>
@include('common.nav')
<div class="page-header container">
    <div class="row align-items-center">
        <div class="col-lg-6 offset-lg-3 text-center">
            <h2 class="header__title">Our Story</h2>
            <hr class="hr--divider">
            <hr class="hr--clear">
        </div>
    </div>
</div>
<hr class="hr--clear">
<div id="our-story" class="container home-section">
    <div class="section-header row justify-content-center">
        <h6>Our Story</h6>
    </div>
    <div class="image row justify-content-center">
        <div class="col-md-6">
            <div class="image__container image--500x500">
                <div class="image__wrapper">
                    <img src="/images/tradesy-group-2.jpg">
                </div>
            </div>
            <div class="image__details row">
                <div>
                    <h3>We met on September 9, 2013</h3>
                    <p>where we both worked at Tradesy.</p>
                </div>
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

        <div class="image__details align-items-center col-md-6">
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
        <div class="image__details align-items-center col-md-6">
            <div>
                <h3>And started dating October 2014</h3>
                <p>after Julia made the first move on Brian at a Tradesy Happy Hour. </p>
            </div>
        </div>
    </div>
    <div class="row image__details">
        <div>
            <h3>We dated almost 4 years</h3>
            <p>traveling, eating, exploring, and growing together.</p>
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
    <div class="image row justify-content-center">
        <div class="col-lg-8 text-center">
            <div class="image__details">
                <div>
                    <h3>Until Brian finally popped the question on April 23, 2018</h3>
                    <p>and of course Julia said Yes!</p>
                </div>
            </div>
            <div class="image row">
                <div class="col-md-6 image__container image--370x370">
                    <div class="image__wrapper">
                        <img src="/images/proposal-1.jpg">
                    </div>
                </div>
                <div class="col-md-6 image__container image--370x370">
                    <div class="image__wrapper">
                        <img src="/images/proposal-2.jpg">
                    </div>
                </div>
            </div>
            <div class="image row">
                <div class="col-md-12 image__container image--800x500">
                    <div class="image__wrapper">
                        <img src="/images/proposal-3.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('common.footer')