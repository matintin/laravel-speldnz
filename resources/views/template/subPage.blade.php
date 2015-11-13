@extends('template.main')

@section('index')	
	
	<?php 

		$page = \App\Models\Page::find(2);
	 ?>

	<div class="navigation">
		<a href="{{url('/')}}" class="page-nav">Home</a>
		<span> / {{$page->title}}</span>
	
		<div class="container">
			<h1>{{$page->title}}</h1>
			<div class="content">
				
				@yield('content')

			</div>
		</div><!-- container -->
	</div><!-- navigation -->

	<section>
		

	<div class="donation">
		<div class="donate-box">
			<div class="donate-text">
				<h2>Donate Today</h2>
				<p>Support to continue this important work.</p>
			</div>
			<div class="donate-img">
				<img src="asset/icons/donation.png" alt="" />
			</div>
			<div class="donate-button">
				<a href="https://www.fundraiseonline.co.nz/fundraise/makedonation_direct.aspx?c=203">Donate</a>
			</div>
		</div>
	</div>

	<div class="newsletter">
		<h5>Newsletters Sign Up</h5>
		<p>Stay informed with our e-newsletters</p>

		<form action="">
			<input type="text" name="email" placeholder="Email Address">
			<input type="submit" value="Sign Up">

		</form>
	</div>
	</section>
@stop