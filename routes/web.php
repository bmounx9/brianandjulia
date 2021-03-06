<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/our-story', function () {
    return view('our-story');
});

Route::get('/accommodation', function () {
    return view('accommodation');
});

Route::get('/registry', function () {
    return view('registry');
});

Route::get('/gallery', function () {
    return view('gallery');
});

// RSVP actions
Route::get('/rsvp', 'Rsvp\RsvpController@rsvp');
Route::post('/rsvp', 'Rsvp\RsvpController@rsvp');
