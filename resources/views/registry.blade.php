<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('common.head')
    <title>Registry</title>
</head>
<body>
@include('common.nav')
<div class="page-header container">
    <div class="row align-items-center">
        <div class="col-lg-6 offset-lg-3 text-center">
            <h2 class="header__title">Registry</h2>
            <hr class="hr--divider">
            <hr class="hr--clear">
        </div>
    </div>
</div>

<div id="registry" class="container home-section">
    <div class="registry row justify-content-center">
        <div class="col-lg-8 text-center">
            <div class="row  justify-content-center">
                <a href="https://www.zola.com/registry/hoolsandbrian" target="_blank">
                    <img src="/images/zola.jpg">
                </a>
            </div>
            <hr class="hr--clear">
            <div class="row justify-content-center">
                <p>Just being there to share in the beginning of our new life is gift enough for us, but if you feel so inclined to purchase a gift, we have registered with Zola.</p>
                <p>We will also appreciate gifts in cash or digitally via
                PayPal (juliakim89@gmail.com) or Venmo (@hooliakim)</p>
                <p>Thank you!</p>
            </div>
        </div>
    </div>
</div>
@include('common.footer')