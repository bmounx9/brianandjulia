<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('common.head')
    <title>Gallery</title>
</head>
<body>
@include('common.nav')
<div class="page-header container">
    <div class="row align-items-center">
        <div class="col-lg-6 offset-lg-3 text-center">
            <h2 class="header__title">Gallery</h2>
            <hr class="hr--divider">
            <hr class="hr--clear">
        </div>
    </div>
</div>
@include('common.footer')