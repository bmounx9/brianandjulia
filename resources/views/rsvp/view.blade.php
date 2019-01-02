<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('common.head')
    <title>RSVP</title>
</head>
<body>
@include('common.nav')
<div class="page-header container">
    <div class="row align-items-center">
        <div class="col-lg-6 offset-lg-3 text-center">
            <h2 class="header__title">RSVP</h2>
            <hr class="hr--divider">
            <hr class="hr--clear">
        </div>
    </div>
</div>
<div class="page-section container">
    <div class="row align-items-center">
        <div class="col-lg-6 offset-lg-3">
            <?php if (!is_null($process) && $process): ?>
                <p>Your reservation has been updated.</p>
            <?php endif; ?>
            <?php if (!is_null($process) && !$process): ?>
                <p>Your reservation was not updated.</p>
            <?php endif; ?>
            <form method="POST" action="/rsvp">
                @csrf
                <input type="hidden" name="submit" value="1"/>
                <input type="hidden" name="first_name" value="<?= $rsvp->first_name; ?>"/>
                <input type="hidden" name="last_name" value="<?= $rsvp->last_name; ?>"/>
                <div class="form-row">
                    <div class="col-md-5">
                        Your Name: <?= $rsvp->first_name . ' ' . $rsvp->last_name; ?>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-5">
                        <div>Will you be attending?</div>
                        <input type="radio" name="attending[<?= $rsvp->id; ?>]" value="1" <?= !is_null($rsvp->attending) && $rsvp->attending ? 'checked="checked"' : ''?>> Yes
                        <input type="radio" name="attending[<?= $rsvp->id; ?>]" value="0" <?= !is_null($rsvp->attending) && !$rsvp->attending? 'checked="checked"' : ''?>> No
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-5">
                        <div>Please enter name(s) of any children that will be attending.</div>
                        <input type="text" name="children" class="form-control" placeholder="Name(s)" value="<?= $rsvp->children; ?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-5">
                        <div>Please enter any song requests.</div>
                        <input type="text" name="song_request" class="form-control" placeholder="Song Requests" value="<?= $rsvp->song_request; ?>">
                    </div>
                </div>
                <?php if (!empty($rsvp->group_members)): ?>
                <?php foreach ($rsvp->group_members as $member): ?>
                <div class="form-row">
                    <div class="col-md-5">
                        <div>Will <?= $member->first_name . ' ' . $member->last_name; ?> be attending?</div>
                        <input type="radio" name="attending[<?= $member->id; ?>]" value="1" <?= !is_null($member->attending) && $member->attending ? 'checked="checked"' : ''?>> Yes
                        <input type="radio" name="attending[<?= $member->id; ?>]" value="0" <?= !is_null($member->attending) && !$member->attending? 'checked="checked"' : ''?>> No
                    </div>
                </div>
                <?php endforeach; ?>
                <?php endif; ?>
                <div class="form-row">
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
