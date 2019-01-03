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
            
            <form method="POST" action="/rsvp">
                @csrf
                <input type="hidden" name="login" value="1"/>
                <div class="form-row">
                    <div class="col-md-12">
                        <p>Enter your first and last name to RSVP</p>
                        <?php if (!is_null($login) && !$login): ?>
                            <small class="text-danger">We could not find that reservation. Please try again.</small>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-5">
                        <input type="text" name="first_name" class="form-control" placeholder="First name"/>
                    </div>
                    <div class="col-md-5">
                        <input type="text" name="last_name" class="form-control" placeholder="Last name"/>
                    </div>
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
