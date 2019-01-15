<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('common.head')
    <title>Accommodations</title>
</head>
<body>
@include('common.nav')
<div class="page-header container">
    <div class="row align-items-center">
        <div class="col-lg-8 offset-lg-2 text-center">
            <h2 class="header__title">Accommodations</h2>
            <hr class="hr--divider">
            <p>For those travelling to LA or who wish to stay at a hotel near our venue in Culver City, we recommend that you stay at Four Points by Sheraton or Courtyard by Marriott. Both hotels are right near each other and conveniently only 5 minutes away from Playa Studios.</p>
        </div>
    </div>
    <hr class="hr--clear">
    <div class="hotel row justify-content-center">
        <div class="col-lg-10">
            <div class="row">
   				<div class="col-lg-6">
   					<div class="card">
   						<img class="card-img-top" src="/images/sheraton-room.jpg" alt="Card image cap">
					  	<div class="card-body text-center">
					  		<a class="hotel-logo" href="https://www.google.com/travel/hotels/Culver%20City/place/12484221211765741802?ap=MAFaWgoFCPoBEAAiA1VTRCoWCgcI4w8QARgCEgcI4w8QARgDGAEoALABAXICCAKaAQ0SC0N1bHZlciBDaXR5ogEXCggvbS8wcjA0cBILQ3VsdmVyIENpdHmSAQIgAWIUMTI0ODQyMjEyMTE3NjU3NDE4MDI&g2lb=4181926%2C4208993%2C4209588%2C4223281%2C4225813%2C4225901%2C4227717%2C4207631%2C4215556%2C4220469&hl=en&gl=us&un=0&q=culver%20city%20hotels&rp=OAFAAA&ictx=1&ved=0CBoQqOACKAFqFwoTCNDjkOiWxt8CFQAAAAAdAAAAABAR&hrf=CgUI-gEQACIDVVNEKhYKBwjjDxADGB0SBwjjDxADGB8YAiABsAEBcgIIApoBDRILQ3VsdmVyIENpdHmiARcKCC9tLzByMDRwEgtDdWx2ZXIgQ2l0eZIBAiAB&tcfs=EjEKCC9tLzByMDRwEgtDdWx2ZXIgQ2l0eRoYCgoyMDE5LTAzLTI5EgoyMDE5LTAzLTMxGAIiGAoKMjAxOS0wMy0yORIKMjAxOS0wMy0zMVIA">
		                    	<img src="/images/sheraton.png">
		                	</a>
					  	  	<h5 class="card-title">Four Points by Sheraton</h5>
					  	  	<p class="card-text text-muted">5990 Green Valley Cir, Culver City, CA 90230</p>
					  	</div>
					  	<ul class="list-group list-group-flush">
					  	  	<li class="list-group-item">1 King or 2 Queen: $125/night</li>
					  	  	<li class="list-group-item">3 people: $135/night, 4 people: $145/night</li>
					  	</ul>
					  	<div class="card-body">
					  	  	<a href="#" class="card-link">Card link</a>
					  	  	<a href="#" class="card-link">Another link</a>
					  	</div>
					</div>
   				</div>
   				<div class="col-lg-6">
   					<div class="card">
   						<img class="card-img-top" src="/images/courtyard-room.jpg" alt="Card image cap">
					  	<div class="card-body text-center">
					  		<a class="hotel-logo" href="https://www.google.com/travel/hotels/Culver%20City/place/1852112664960715485?ap=MAFaWgoFCPoBEAAiA1VTRCoWCgcI4w8QARgCEgcI4w8QARgDGAEoALABAXICCAKaAQ0SC0N1bHZlciBDaXR5ogEXCggvbS8wcjA0cBILQ3VsdmVyIENpdHmSAQIgAWIUMTI0ODQyMjEyMTE3NjU3NDE4MDI&g2lb=4181926%2C4208993%2C4209588%2C4223281%2C4225813%2C4225901%2C4227717%2C4207631%2C4215556%2C4220469&hl=en&gl=us&un=0&q=culver%20city%20hotels&rp=OAFAAA&ictx=1&ved=0CAwQqOACKABqFwoTCNDjkOiWxt8CFQAAAAAdAAAAABAR&hrf=CgUI-gEQACIDVVNEKhYKBwjjDxADGB0SBwjjDxADGB8YAiABsAEBcgIIApoBDRILQ3VsdmVyIENpdHmiARcKCC9tLzByMDRwEgtDdWx2ZXIgQ2l0eZIBAiAB&tcfs=EjEKCC9tLzByMDRwEgtDdWx2ZXIgQ2l0eRoYCgoyMDE5LTAzLTI5EgoyMDE5LTAzLTMxGAIiGAoKMjAxOS0wMy0yORIKMjAxOS0wMy0zMVIA">
		                    <img src="/images/marriott.jpg">
		                </a>
					  	  	<h5 class="card-title">Courtyard by Marriott</h5>
					  	  	<p class="card-text text-muted">6333 Bristol Pkwy, Culver City, CA 90230</p>
					  	</div>
					  	<ul class="list-group list-group-flush">
					  	  	<li class="list-group-item">Standard 1 King: $149/night</li>
					  	  	<li class="list-group-item">Standard 2 Queen: $159/night</li>
					  	  	<li class="list-group-item">
					  	  		<h6>How to Book:</h6>
					  	  		1. Use this link: 
					  	  		<a href="https://www.marriott.com/meeting-event-hotels/group-corporate-travel/groupCorp.mi?resLinkData=Julia%20%26%20Brian%27s%20Wedding%20Room%20Block%5Elaxcv%60jbwjbwa%7Cjbwjbwb%7Cjbwjbwe%60149-199%60USD%60false%605%603/29/19%603/31/19%602/25/19&app=resvlink&stop_mobi=yes">Book your group rate for Julia & Brian's Wedding Room Block</a><br/>
					  	  		OR <br/>
					  	  		2. Call our reservations number at (800) 736-0698 and ask for the "Julia & Brian's Wedding" group rate at the Courtyard Marriott LA Westside in Culver City, CA. Note that the 800-reservation number is the ONLY number that can confirm/change a reservation over the phone.
					  	  	</li>
					  	  	<li class="list-group-item">Book by: February 25, 2019</li>
					  	</ul>
					  	<div class="card-body">
					  	  	<a href="https://www.marriott.com/meeting-event-hotels/group-corporate-travel/groupCorp.mi?resLinkData=Julia%20%26%20Brian%27s%20Wedding%20Room%20Block%5Elaxcv%60jbwjbwa%7Cjbwjbwb%7Cjbwjbwe%60149-199%60USD%60false%605%603/29/19%603/31/19%602/25/19&app=resvlink&stop_mobi=yes" class="card-link">Book your room</a>
					  	</div>
					</div>
   				</div>

                
            </div>
            <hr class="hr--clear">
        </div>
    </div>
</div>
@include('common.footer')
