@extends('template.main')

@section('index')		
			<section>
			
				<div class="main-photo">
					<div class="photo-wrap">
						<h1 class="hidden">Speldnz About us</h1>
					
						<div class="about-box">
							<h3>SNZ love to help<br/>to drivers of success.</h3>
							<div class="learn-more-wrap">
								<a href="{{url('pages/1')}}">Learn More</a>
							</div>
						</div>
					</div>
				</div>
			
			</section>
			
			<section>
			
				<h1 class="hidden">learning disabilites</h1>
					
				<div class="learning-box">
					<span>
						<a href="{{url('pages/3')}}">Dyslexia</a>
					</span>
					<div class="inspire">
						<?php 
							$quotes = \App\Models\Quote::all();
							$quote = $quotes->random();

						 ?>
						<h2>Inspiration</h2>
						<p class="quote-content"><i class="fa fa-quote-left"></i> {{$quote->content}} <i class="fa fa-quote-right"></i></p>
						<p class="quote-person">- {{$quote->name}} -</p>
					</div>
				</div>
				
				<div class="learning-box">
					<span>
						<a href="{{url('pages/4')}}">Dyspraxia</a>
					</span>
					<div class="dyslexia-desktop">
						<div class="flipper">
							<div class="front">
								<div class="border"><h2>Learning</h2></div>
							</div><!-- front -->
							<div class="back">
								<div class="dyslexia-flip-box">
									<h3>Learning Issues</h3>
									<p>Looking for information about learning and attention issues like dyslexia, dypraxia and ADHD?</p>
									<a href="{{url('pages/2')}}">Let's start</a>
								</div>
							</div><!-- back -->
						</div>
					</div><!-- dyslexia-desktop -->
				</div>
				
				<div class="learning-box">
					<span>
						<a href="{{url('pages/5')}}">ADHD</a>
					</span>
					<div class="dyslexia-desktop">
						<div class="flipper">
							<div class="training-front">
								<div class="border"><h2>Training</h2></div>
							</div><!-- front -->
							<div class="training-back">
								<div class="dyslexia-flip-box">
									<h3>SNZ Courses</h3>
									<p>SNZ level 5 CCSLD<br />
									SNZ level 3 ISLD<br />
									SNZ Assessor Training</p>
									<a href="{{url('training')}}">Read More</a>
								</div>
							</div><!-- back -->
						</div>
					</div><!-- dyslexia-desktop -->
					
				</div>
				
				<div class="learning-box">
					<span class="donation-normal"><a href="https://www.fundraiseonline.co.nz/fundraise/makedonation_direct.aspx?c=203">Donate</a></span>
					<div class="donation">
						<div class="donate-box">
							<div class="donate-text">
								<h2>Donate Today</h2>
								<p>Support to continue important work.</p>
							</div>
							<div class="donate-img">
								<img src="{{asset('asset/icons/donation.png')}}" alt="" />
							</div>
							<div class="donate-button">
								<a href="https://www.fundraiseonline.co.nz/fundraise/makedonation_direct.aspx?c=203">Donate</a>
							</div>
						</div>
					</div>
				</div>
			
			</section>
			
			<section>
			
				<h1 class="hidden">news& event,faq</h1>
				<div class="news">
					<h3 >News & Event</h3>
					<h2>RADIO NEW ZEALAND INTERVIEW WITH SPELD NZ</h2>
					<p>In case you missed it, here’s a chance to listen to SPELD NZ’s recent interview on Radio New Zealand National. The “One In Five” programme focuses on the parliamentary inquiry into identification and support for pupils with dyslexia, dyspraxia and autism spectrum...</p>
					<a href="{{url('news_guest')}}">Read More</a>
				</div>
			
				<div class="faq">
						<h3>FAQ</h3>
					<div class="faq-wrap">
						<p><a href="{{url('pages/10')}}">What is dyslexia?</a></p>
						<p><a href="{{url('pages/10')}}">What causes dyslexia?</a></p>
						<p><a href="{{url('pages/10')}}">What are some common symptoms of dyslexia?</a></p>
					</div>
				</div>
			
			</section>
			
			<section>
			
				<h1 class="hidden">newsletter, support</h1>
				<div class="newsletter">
					<h5>Newsletters Sign Up</h5>
					<p>Stay informed with our e-newsletters</p>

					<div class="newsletter-wrap">
						{!! Form::open(["url"=>"signupnewsletter"])!!}
						{!! Form::email("email", "", ["class"=>"news-email","placeholder"=>"Email Address"]) !!}
					
							<input type="submit" value="Sign Up">
						
						{!! Form::close()!!}
						<div class="facebook"><a href="https://www.facebook.com/SPELD-New-Zealand-1512199148997024"><i class="fa fa-facebook-official"></i></a></div>
					</div>
				</div>
				<div class="support">
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


