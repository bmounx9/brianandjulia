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
<div id="rsvp-view" class="page-section container">
    <div class="row align-items-center">
        <div class="col-lg-6 offset-lg-3">
            <form method="POST" action="/rsvp">
                @csrf
                <input type="hidden" name="submit" value="1"/>
                <input type="hidden" name="first_name" value="<?= $rsvp->first_name; ?>"/>
                <input type="hidden" name="last_name" value="<?= $rsvp->last_name; ?>"/>
                <div class="form-row">
                    <div class="col-md-12">
                        <h4>Reservation for <b><?= $rsvp->first_name . ' ' . $rsvp->last_name; ?></b></h4>
                    </div>
                    <div class="col-md-12">
                        <?php if (!is_null($process) && $process): ?>
                        <small class="text-success">Your reservation has been updated.</small>
                    <?php endif; ?>
                    <?php if (!is_null($process) && !$process): ?>
                        <small class="text-danger">Your reservation was not updated.</small>
                    <?php endif; ?>
                    </div>
                    <div class="col-md-12">
                        <p>Will you be attending?</p>
                        <p>
                            <input type="radio" name="attending[<?= $rsvp->id; ?>]" value="1" <?= !is_null($rsvp->attending) && $rsvp->attending ? 'checked="checked"' : ''?>> Yes
                            <input type="radio" name="attending[<?= $rsvp->id; ?>]" value="0" <?= !is_null($rsvp->attending) && !$rsvp->attending? 'checked="checked"' : ''?>> No
                        </p>
                    </div>
                    <?php if (!empty($rsvp->group_members)): ?>
                    <?php foreach ($rsvp->group_members as $member): ?>
                    <div class="col-md-12">
                        <p>Will <b><?= $member->first_name . ' ' . $member->last_name; ?></b> be attending?</p>
                        <p>
                            <input type="radio" name="attending[<?= $member->id; ?>]" value="1" <?= !is_null($member->attending) && $member->attending ? 'checked="checked"' : ''?>> Yes
                            <input type="radio" name="attending[<?= $member->id; ?>]" value="0" <?= !is_null($member->attending) && !$member->attending? 'checked="checked"' : ''?>> No   
                        </p>
                    </div>
                    <?php endforeach; ?>
                    <?php endif; ?>
                    <?php if($rsvp->has_children): ?>
                    <div class="col-md-12">
                        <p>Please enter name(s) of any children that will be attending</p>
                        <input type="text" name="children" class="form-control" placeholder="Name(s)" value="<?= $rsvp->children; ?>">
                    </div>
                    <?php endif; ?>
                    <div class="col-md-12">
                        <p>Do you have any song requests?</p>
                        <textarea name="song_request" class="form-control" placeholder="Song Requests"><?= $rsvp->song_request; ?></textarea>
                    </div>
                </div>
                <div class="submit-button form-row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
