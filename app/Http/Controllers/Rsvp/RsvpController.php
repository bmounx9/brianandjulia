<?php

namespace App\Http\Controllers\Rsvp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class RsvpController extends Controller
{
    /**
     * Show the RSVP form
     *
     * @param Request $request
     *
     * @return View
     */
    public function rsvp(Request $request)
    {
        $login = null;
        $process = null;

        if ($request->isMethod('post') && $request->input('login') == '1') {
            if ($rsvp = $this->getRSVP($request)) {
                return view('rsvp.view', ['rsvp' => $rsvp, 'process' => $process]);
            } else {
                $login = false;
            }
        } elseif ($request->isMethod('post') && $request->input('submit') == '1') {
            $process = $this->processRSVP($request);
            $rsvp = $this->getRSVP($request);

            return view('rsvp.view', ['rsvp' => $rsvp, 'process' => $process]);
        }

        return view('rsvp.login', ['login' => $login]);
    }

    /**
     * Get RSVP information
     *
     * @param Request $request
     *
     * @return mixed
     */
    protected function getRSVP(Request $request)
    {
        $rsvps = DB::select(
            'SELECT * FROM rsvp WHERE first_name = :first_name AND last_name = :last_name',
            [
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name')
            ]
        );

        if (count($rsvps) == 1) {
            // get other group members
            if ($group_members = $this->getRSVPGroup($rsvps[0]->id, $rsvps[0]->group)) {
                $rsvps[0]->group_members = $group_members;
            }

            return $rsvps[0];
        }

        return null;
    }

    /**
     * Get other RSVPs in group
     *
     * @param int $id
     * @param int $group
     *
     * @return array
     */
    protected function getRSVPGroup($id, $group)
    {
        $rsvps = DB::select('SELECT * FROM rsvp WHERE `group` = :group AND id != :id',
            [
                'group' => $group,
                'id' => $id
            ]
        );

        return $rsvps;
    }

    /**
     * Process RSVP form
     *
     * @param Request $request
     *
     * @return bool
     */
    protected function processRSVP(Request $request)
    {
        $rsvp = $this->getRSVP($request);
        $attendings = $request->input('attending');

        // update main rsvp
        $affected = DB::update(
            'UPDATE rsvp
             SET attending = :attending, children = :children, song_request = :song_request, updated_at = NOW()
             WHERE id = :id',
            [
                'attending' => $attendings[$rsvp->id],
                'children' => $request->input('children'),
                'song_request' => $request->input('song_request'),
                'id' => $rsvp->id
            ]
        );

        // update group rsvp
        $group_affected = 0;
        if (!empty($attendings)) {
            foreach ($attendings as $id => $attending) {
                if ($id == $rsvp->id) {
                    continue;
                }
                $group_affected = DB::update(
                    'UPDATE rsvp SET attending = :attending, updated_at = NOW() WHERE id = :id',
                    ['attending' => $attending, 'id' => $id]
                );
            }
        }

        return $affected > 0 || $group_affected > 0;
    }
}
