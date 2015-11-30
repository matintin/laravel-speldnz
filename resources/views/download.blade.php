@extends('template.subPage')

@section('content')
<div class="navigation">
	<a href="{{url('/')}}" class="page-nav">Home</a>
	<span>/ Download</span> 

	
	<div class="container">
		<h1>Download</h1>
		<div class="content">

				

<div class="login-page">
	<div class="profile-box">
		<p>Hello!</p>
		<span class="profile-name">{{$user->firstname}} {{$user->lastname}}</span> 
	</div>
	<div class="download-cart-box">
		<div class="counter" id="counter">
			<svg width="40" height="40" viewBox="0 0 60 60">
				<path d="M55.215 8.397c-0.336-1.32-1.968-2.397-3.63-2.397h-43.17c-1.665 0-3.297 1.077-3.63 2.397l-0.603 3.603h51.633l-0.6-3.603zM58.236 15h-56.475c-1.026 0-1.827 0.882-1.731 1.905l2.769 35.007c0.114 1.182 1.11 2.088 2.298 2.088h49.803c1.191 0 2.184-0.906 2.298-2.088l2.769-35.007c0.099-1.023-0.705-1.905-1.731-1.905zM37.314 25.125c1.554 0 2.814 1.26 2.814 2.814s-1.26 2.814-2.814 2.814-2.814-1.263-2.814-2.817c0-1.551 1.26-2.811 2.814-2.811zM16.5 42l7.458-17.142 8.481 13.728 7.272-3.612 3.789 7.026h-27z"></path>
			</svg>
			<span class="counter-number">0</span>
		</div>
	</div>

</div>


<div class="download-files">
	<div class="download-box">
		<div class="files">sdsfdg</div>
		<div class="check-box"><img src="http://localhost/laravel-speldnz/public/asset/icons/add2.png" alt=""></div>
	</div>
	<div class="download-box">
		<div class="files">agadgag</div>
		<div class="check-box"><img src="http://localhost/laravel-speldnz/public/asset/icons/add2.png" alt=""></div>
	</div>
	<div class="download-box">
		<div class="files">kjdfhkjshkjshfg</div>
		<div class="check-box"><img src="http://localhost/laravel-speldnz/public/asset/icons/add2.png" alt=""></div>
	</div>
	<div class="download-box">
		<div class="files">kjdfhkjshkjshfg</div>
		<div class="check-box"><img src="http://localhost/laravel-speldnz/public/asset/icons/add2.png" alt=""></div>
	</div>
	<div class="download-box">
		<div class="files">kjdfhkjshkjshfg</div>
		<div class="check-box"><img src="http://localhost/laravel-speldnz/public/asset/icons/add2.png" alt=""></div>
	</div>
	<div class="download-box">
		<div class="files">kjdfhkjshkjshfg</div>
		<div class="check-box"><img src="http://localhost/laravel-speldnz/public/asset/icons/add2.png" alt=""></div>
	</div>
	<div class="download-box">
		<div class="files">kjdfhkjshkjshfg</div>
		<div class="check-box"><img src="http://localhost/laravel-speldnz/public/asset/icons/add2.png" alt=""></div>
	</div>
	<div class="download-box">
		<div class="files">kjdfhkjshkjshfg</div>
		<div class="check-box"><img src="http://localhost/laravel-speldnz/public/asset/icons/add2.png" alt=""></div>
	</div>
	<div class="download-box">
		<div class="files">kjdfhkjshkjshfg</div>
		<div class="check-box"><img src="http://localhost/laravel-speldnz/public/asset/icons/add2.png" alt=""></div>
	</div>
	<div class="download-box">
		<div class="files">kjdfhkjshkjshfg</div>
		<div class="check-box"><img src="http://localhost/laravel-speldnz/public/asset/icons/add2.png" alt=""></div>
	</div>
</div>

		</div>
	</div><!-- container -->
</div><!-- navigation -->
@stop