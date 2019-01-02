<?php

namespace App\Http\Controllers\Rsvp;

use App\Http\Controllers\Controller;

class RsvpController extends Controller
{
    /**
     * Show the RSVP Login
     *
     * @return View
     */
    public function login()
    {
        return view('rsvp');
    }

    /**
     * Validate RSVP login information and redirect to view
     */
    public function handleLogin()
    {
        return view('rsvp');
    }

    /**
     * Show the RSVP Login
     *
     * @return View
     */
    public function view()
    {
        return view('rsvp');
    }
}
