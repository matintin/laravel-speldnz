<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Speld NZ</title>

	<link rel="speldnz" href="{{asset('asset/icons/logo.png')}}">
	<link rel="icon" href="{{asset('asset/icons/logo.png')}}">

	<link rel="stylesheet" href="{{asset('css/main.css')}}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="asset/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="asset/slick/slick-theme.css"/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.6/d3.min.js" charset="utf-8"></script>

</head>
<body>
	<div id="overlay" class="hidden">checklist</div>
	<div id="login">
		<div class="close-login-box"><img src="asset/icons/close-login.png" alt=""></div>
		<div class="login-box">
			
			{!! Form::open(['url' => 'login']) !!}
			
				<h3>Login Form</h3>
				
				{!! Form::text('username', null , ['placeholder'=>'Username']) !!}
		
				{!! Form::text('password', null , ['placeholder'=>'Password']) !!}
		
				{!! Form::submit('Login') !!}
			
			{!! Form::close() !!}
			
		</div>
	</div>
	<header>
		<div class="header-wrap">
			<div class="logo">
				<a href="{{url('/')}}"><img src="asset/icons/logo-yellow1.png" alt="logo"></a>
			</div>
			<div class="empty"></div>
			<div class="open menu mobile-button">
				<img src="asset/icons/menu-1.png" alt="menu-bar">
			</div>
			<div class="close menu mobile-button hidden">
				<img src="asset/icons/close.png" alt="menu-bar">
			</div>
			<div class="search mobile-button">
				<img src="asset/icons/search-1.png" alt="search-bar">
			</div>
		</div>
	</header>

		<div id="search-box">
			<form action="">
				<input type="text">
				<button>
					<img src="asset/icons/search-1.png" alt="">
				</button>
			</form>
		</div>

		<nav>
			<ul id="mobile-nav" >
				<li><a href="{{url('about')}}">About</a></li>

				<li class="learning"><a href="{{url('learning')}}">Learning</a>
					<span>
						<img class ="plus" src="asset/icons/plus.png" alt="">
					</span>

					<ul id="learning-sub-menu" >
						<li><a href="{{url('dyslexia')}}">Dyslexia</a></li>
						<li><a href="">Dyspraxia</a></li>
						<li><a href="">ADHD</a></li>
						<li><a href="">Dyscalculia</a></li>
						<li><a href="">Dysgraohia</a></li>
					</ul>

				</li>
				<li><a href="{{url('news')}}">News & Event</a></li>
				<li><a href="{{url('faq')}}">FAQ</a></li>
				<li><a href="">Donate</a></li>

				<li><a href="{{url('contact')}}">Contact</a></li>
			</ul>
		</nav>

	<main>
		
		@yield('index')

	</main>
	<footer>
		
		<div class="footer-wrap">
			<ul>
				<li><a href="{{url('about')}}">About</a></li>
				<li><a href="{{url('learning')}}">Learning</a></li>
				<li><a href="{{url('privacy')}}">Privacy Policy</a></li>
				<li><a href="{{url('contact')}}">Contact</a></li>
				<li><a href="" id="login-button">Login</a></li>
			</ul>
		</div><!-- footer-wrap -->
		
	</footer>

	<div id="go-top">Top</div>

	
	<div id="reading-assist">
	
		<div class="reading-assist-top">
			<div class="empty"></div>
			<div class="assist-box-wrap">
				<div class="circle"><img src="asset/icons/circle-off.png" alt=""></div>
				<div class="assist-box">
					<p>Reading<br/>Assist</p>
				</div>
			</div>
		</div><!-- reading-assist-top -->
		<div class="reading-assist-bottom">
			<div class="empty"></div>
			<div class="assist-detail">
				<div class="text-size">
					<p>Text-size</p>
					<ul>
						<li>A</li>
						<li>A</li>
						<li>A</li>
					</ul>
				</div><!-- text-size -->
				<div class="assist-on-off">
					<div class="on-off-wrap">
						<div class="on-box"><p>Off</p></div>
						<div class="off-box"><p>On</p></div>
					</div>
				</div>
			</div>
		</div><!-- reading-assist-bottom -->
		
	</div><!-- reading-assist -->
	
	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript" src="asset/slick/slick.min.js"></script>
	<script type="text/javascript" src="asset/slick/slick.js"></script>	
	<script src="js/javascript.js"></script>
</body>
</html>