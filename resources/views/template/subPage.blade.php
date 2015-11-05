@extends('template.main')

@section('index')	
	
	<?php 

		$page = \App\Models\Page::find(8);
	 ?>

	<div class="navigation">
		<a href="{{url('index')}}">Home</a>
		<span> / {{$page->title}}</span>
	</div>
	
	<div class="container">
		<h1>{{$page->title}}</h1>
		<div class="content">
			
			@yield('content')

		</div>
	</div>
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
				<a href="">Donate</a>
			</div>
		</div>
	</div>
	</section>
@stop