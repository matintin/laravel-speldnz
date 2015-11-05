@extends('template.main')

@section('index')		
			<section>
			
				<div class="main-photo">
					<div class="photo-wrap">
						<h1 class="hidden">Speldnz About us</h1>
					
						<div class="about-box">
							<h3>SNZ love to help<br/>to drivers of success.</h3>
							<div class="learn-more-wrap">
								<a href="{{url('about')}}">Learn More</a>
							</div>
						</div>
					</div>
				</div>
			
			</section>
			
			<section>
			
				<h1 class="hidden">learning disabilites</h1>
					
				<div class="learning-box"><span><a href="">Dyslexia</a></span></div>
				<div class="learning-box"><span><a href="">Dyspraxia</a></span></div>
				<div class="learning-box"><span><a href="">ADHD</a></span></div>
				<div class="learning-box"><span><a href="">Donate</a></span></div>
			
			</section>
			
			<section>
			
				<h1 class="hidden">news& event,faq</h1>
				<div class="news">
					<h3 >News & Event</h3>
					<h2>RADIO NEW ZEALAND INTERVIEW WITH SPELD NZ</h2>
					<p>In case you missed it, here’s a chance to listen to SPELD NZ’s recent interview on Radio New Zealand National. The “One In Five” programme focuses on the parliamentary inquiry into identification and support for pupils with dyslexia, dyspraxia and autism spectrum...</p>
					<a href="">Read More</a>
				</div>
			
				<div class="faq">
					<div class="faq-wrap">
						<h3>FAQ</h3>
						<p><a href="">What is dyslexia?</a></p>
						<p><a href="">What causes dyslexia?</a></p>
						<p><a href="">What are some common symptoms of dyslexia?</a></p>
					</div>
				</div>
			
			</section>
			
			<section>
			
				<h1 class="hidden">newsletter, support</h1>
				<div class="newsletter">
					<h5>Newsletters Sign Up</h5>
					<p>Stay informed with our e-newsletters</p>

					<form action="">
						<input type="text" name="email" placeholder="Email Address">
						<input type="submit" value="Sign Up">

					</form>
				</div>
				<div class="support ">
					<div class="image-slider">
						<div class="img-wrap"><img src="asset/supporters/lionredlogo.png" alt="" /></div>
						<div class="img-wrap"><img src="asset/supporters/pubcharitylogo.png" alt="" /></div>
						<div class="img-wrap"><img src="asset/supporters/mtlogo.png" alt="" /></div>
						<div class="img-wrap"><img src="asset/supporters/peloruslogo.png" alt="" /></div>
						<div class="img-wrap"><img src="asset/supporters/deloittelogo.png" alt="" /></div>
						<div class="img-wrap"><img src="asset/supporters/guardiantrustlogo.png" alt="" /></div>
						<div class="img-wrap"><img src="asset/supporters/nzpostlogo.png" alt="" /></div>
						<div class="img-wrap"><img src="asset/supporters/canterburylogo.png" alt="" /></div>
						<div class="img-wrap"><img src="asset/supporters/lotterylogo.png" alt="" /></div>
						

					</div>
				</div>
			
			</section>
	
@stop

