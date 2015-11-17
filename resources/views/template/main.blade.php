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
	<link rel="stylesheet" href="{{asset('css/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('asset/slick/slick.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('asset/slick/slick-theme.css')}}"/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.6/d3.min.js" charset="utf-8"></script>

</head>
<body>
	
	<div id="login">
		<div class="close-login-box"><img src="{{asset('asset/icons/close-login.png')}}" alt=""></div>
		<div class="login-box">
			
			{!! Form::open(['url' => 'download',null,'class'=>'generic-form']) !!}
			
				<h3>Login Form</h3>
				
				{!! Form::text('email', null , ['placeholder'=>'Email']) !!}
		
				{!! Form::text('password', null , ['placeholder'=>'Password']) !!}
		
				{!! Form::submit('Login') !!}
			
			{!! Form::close() !!}
			
		</div>
	</div>
	<div id="overlay" >
		<div class="close-checklist"><img src="{{asset('asset/icons/close-login.png')}}" alt=""></div>
		<div id="checklist">
			<h3>SLD <span>(Specific Learning Disabilities)</span> Checklist</h3>
			<div class="list-wrap">
				<input type="checkbox" /><p class="checkbox">Problems with one or more od these: maths, spelling, writing, reading.</p>
			</div>
			<div class="list-wrap">
				<input type="checkbox" /><p class="checkbox">Knows spelling and maths one day but has forgotten it the next.</p>
			</div>
			<div class="list-wrap">
				<input type="checkbox" /><p class="checkbox">Talks about their ideas well but can't write them down.</p>
			</div>
			<div class="list-wrap">
				<input type="checkbox" /><p class="checkbox">Says sounds in words in the wrong order: e.g aminale (animal), hostiple(hospital).</p>
			</div>
			<div class="list-wrap">
				<input type="checkbox" /><p class="checkbox">Untidy, disorganised and often late.</p>
			</div>
			<div class="list-wrap">
				<input type="checkbox" /><p class="checkbox">Difficulty copying work.</p>
			</div>
			<div class="list-wrap">
				<input type="checkbox" /><p class="checkbox">Untidy writing that is hard to read.</p>
			</div>
			<div class="list-wrap">
				<input type="checkbox" /><p class="checkbox">Difficulty remembering names of things in order: e.g letters of the alphabet, days of week.</p>
			</div>
			<div class="list-wrap">
				<input type="checkbox" /><p class="checkbox">Difficulty telling time</p>
			</div>
			<div class="list-wrap">
				<input type="checkbox" /><p class="checkbox">Difficulty learning times tables.</p>
			</div>
			<div class="list-wrap">
				<input type="checkbox" /><p class="checkbox">Difficulty with punctuation, grammar and maths symbols.</p>
			</div>
			<div class="list-wrap">
				<input type="checkbox" /><p class="checkbox">Clumsy, with poor co-ordination.</p>
			</div>
			<div class="list-wrap">
				<input type="checkbox" /><p class="checkbox">Difficulty concentrating and easily distracted.</p>
			</div>
			<div class="list-wrap">
				<input type="checkbox" /><p class="checkbox">trouble in telling left from right, up from down, front from back.</p>
			</div>
			<div class="list-wrap">
				<input type="checkbox" /><p class="checkbox">Extremely active, easily frustrated and short-tempered. At other times may be charming abd delightful to have around.</p>
			</div>
			<div class="list-wrap">
				<input type="checkbox" /><p class="checkbox">Average or above average intelligence.</p>
			</div>
			<div class="list-wrap">
				<input type="checkbox" /><p class="checkbox">Doesn't listen, especially when there is other noise in the same area.</p>
			</div>
			<div class="list-wrap">
				<input type="checkbox" /><p class="checkbox">Doesn't cope well with sudden changes of activity.</p>
			</div>
			<div class="list-wrap">
				<input type="checkbox" /><p class="checkbox">Not good at taking a message.</p>
			</div>
			<div class="list-wrap">
				<input type="checkbox" /><p class="checkbox">Not good at following instructuibs or rules.</p>
			</div>
			<div class="list-wrap">
				<input type="checkbox" /><p class="checkbox">Seen as naughty or lazy.</p>
			</div>
			<div class="list-wrap">
				<input type="checkbox" /><p class="checkbox">Class clown, or very quite, to avoid attention.</p>
			</div>
			<div class="list-wrap">
				<input type="checkbox" /><p class="checkbox">Dislikes reading aloud.</p>
			</div>
			<div class="list-wrap">
				<input type="checkbox" /><p class="checkbox">Over-reacts in some situations.</p>
			</div>
			<div class="list-wrap">
				<input type="checkbox" /><p class="checkbox">Does well in some things, but unexpectedly poorly in others.</p>
			</div>
		</div><!-- checklist -->
	</div>
	<header>
		<div class="header-wrap">
			<div class="logo">
				<a href="{{url('/')}}"><img src="{{asset('asset/icons/logo-yellow1.png')}}" alt="logo"></a>
			</div>
			<div class="empty"></div>
			<div class="open menu mobile-button">
				<img src="{{asset('asset/icons/menu-1.png')}}" alt="menu-bar">
			</div>
			<div class="close menu mobile-button hidden">
				<img src="{{asset('asset/icons/close.png')}}" alt="menu-bar">
			</div>
			<div class="search mobile-button">
				<img src="{{asset('asset/icons/search-1.png')}}" alt="search-bar">
			</div>
		</div>
	</header>

		<div id="search-box">
			<form action="">
				<input type="text">
				<button>
					<img src="{{asset('asset/icons/search-1.png')}}" alt="">
				</button>
			</form>
		</div>

		<nav>
			<ul id="mobile-nav" >
				<li><a href="{{url('about')}}">About</a></li>

				<li class="learning"><a href="{{url('learning')}}">Learning</a>
					<span>
						<img class ="plus" src="{{asset('asset/icons/plus.png')}}" alt="">
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
				<div class="circle"><img src="{{asset('asset/icons/circle-off.png')}}" alt=""></div>
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
	
	<div class="showPopUp">{{Session::get("showPopUp")}}</div>
	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript" src="{{asset('asset/slick/slick.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('asset/slick/slick.js')}}"></script>	
	<script src="{{asset('js/javascript.js')}}"></script>
</body>
</html>