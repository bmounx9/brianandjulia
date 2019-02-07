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
<hr class="hr--clear">
<div class="gallery row justify-content-center">
  <div class="card-columns">
  		<img src="/images/gallery-01.jpg">
		<img src="/images/gallery-02.jpg">
		<img src="/images/gallery-03.jpg">
		<img src="/images/gallery-04.jpg">
        <img src="/images/gallery-05.jpg">
		<img src="/images/gallery-06.jpg">
		<img src="/images/gallery-07.jpg">
		<img src="/images/gallery-08.jpg">
		<img src="/images/gallery-09.jpg">
		<img src="/images/gallery-10.jpg">
		<img src="/images/gallery-11.jpg">
		<img src="/images/gallery-12.jpg">
		<img src="/images/gallery-13.jpg">
		<img src="/images/gallery-14.jpg">
		<img src="/images/gallery-15.jpg">
		<img src="/images/gallery-16.jpg">
		<img src="/images/gallery-16.jpg">
		<img src="/images/gallery-18.jpg">
    </div>
    <div>
    	<hr class="hr--clear">
    	<p>Photo Credits: <a href="http://joncu.com/" target="_blank">Jon Cu</a></p>
    </div>
  </div>
<div>
@include('common.footer')