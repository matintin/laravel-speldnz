@extends('template.main')

@section('index')	
	
<div class="triangle-point" ><img src="{{asset('asset/icons/triangle3.png')}}" alt=""></div>
<div class="download-overlay" data-shown="0">
	
	<div class="cart-box">
		<p>download this 1</p>
		<div class="download-each">
			<img src="{{asset('asset/icons/download.png')}}" alt="">
		</div>
		<div class="download-delete">
			<img src="{{asset('asset/icons/delete.png')}}" alt="">
		</div>
	</div>

	<div class="cart-box">
		<p>download this 2</p>
		<div class="download-each">
			<img src="{{asset('asset/icons/download.png')}}" alt="">
		</div>
		<div class="download-delete">
			<img src="{{asset('asset/icons/delete.png')}}" alt="">
		</div>
	</div>

	<div class="download-all-wrap">
		<div class="download-all">
			<span>Download All</span>	
		</div>
	</div>
</div>
	
	@if(isset($page->id))
	@include('template.navigation')
	@else
	@yield('content')
	@endif
	<section>
		

	<div class="donation">
		<div class="donate-box">
			<div class="donate-text">
				<h2>Donate Today</h2>
				<p>Support to continue this important work.</p>
			</div>
			<div class="donate-img">
				<img src="{{asset('asset/icons/donation.png')}}" alt="" />
			</div>
			<div class="donate-button">
				<a href="https://www.fundraiseonline.co.nz/fundraise/makedonation_direct.aspx?c=203">Donate</a>
			</div>
		</div>
	</div>

	<div class="newsletter">
		<h5>Newsletters Sign Up</h5>
		<p>Stay informed with our e-newsletters</p>

		<div class="newsletter-wrap">
			<form action="">
				<input type="text" name="email" placeholder="Email Address">
				<input type="submit" value="Sign Up">
			
			</form>
			<div class="facebook"><span>Follow Us</span><a href=""><i class="fa fa-facebook-official"></i></a></div>
		</div>
	</div>
	</section>
@stop