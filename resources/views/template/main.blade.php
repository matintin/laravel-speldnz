<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Speld NZ</title>

	<meta content="Aiming to help children who are not realizing their educational potential because of specific learning disabilities like dyslexia." name="description" />
    <meta content="speld nz, specific learning disabilities, difficulties, children, child, educational, potential, learn differently, parents, tutors, aides, problems, dyslexia, dyscalculia, dyspraxia, aphasia, attention deficits ADD, ADHD autism, school, difficult, neurological, behavioural problems, frustration, anger, cognitive ability, number skills, reading, memory, laterality, motor co-ordination, remedial, above average, intellectual, dyscalculia, writing, spelling, spatial relationships, memory, auditory, visual, perception, advocacy, training, professional development, tutors, nzqa, approved, distance, block, course, anatomy, eye, ear, assessment, exceptional, emotional development, sdl neurology reading, spelling, writing, sensory integration, motor development, parents, failure, frustration, trouble, literacy, numeracy" name="keywords" />

	<link rel="speldnz" href="{{asset('asset/icons/logo.png')}}">
	<link rel="icon" href="{{asset('asset/icons/logo.png')}}">

	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	<!-- <link rel="stylesheet" href="{{asset('css/animate.css')}}"> -->
	<link rel="stylesheet" type="text/css" href="{{asset('asset/slick/slick.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('asset/slick/slick-theme.css')}}"/>
	<script src="{{asset('js/ckeditor/ckeditor.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.6/d3.min.js" charset="utf-8"></script>

</head>
<body>
	
	<div id="login">
		<div class="close-login-box"><img src="{{asset('asset/icons/close-login.png')}}" alt=""></div>
		<div class="login-box">
			
			{!! Form::open(['url' => 'login',null,'class'=>'generic-form']) !!}
			
				<h3>Login Form</h3>
				
				{!! Form::text('email', null , ['placeholder'=>'Email']) !!}
		
				{!! Form::text('password', null , ['placeholder'=>'Password']) !!}
		
				{!! Form::submit('Login') !!}
			
			{!! Form::close() !!}
			@if (\Session::has("error"))
			    <div class="login-error">
			        <ul>
			            
			            <li>{{\Session::get("error") }}</li>
			           
			        </ul>
			    </div>
			@endif
			
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
		<div class="inner">
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
				<nav class="desktop-menu">
					<ul class="desktop-nav">
						<li><a href="{{url('pages/1')}}">About</a></li>

						<li class="mouse-over"><a href="{{url('pages/2')}}">Learning</a>
							<ul id="desktop-sub-menu" >
								<li><a href="{{url('pages/3')}}">Dyslexia</a></li>
								<li><a href="{{url('pages/4')}}">Dyspraxia</a></li>
								<li><a href="{{url('pages/5')}}">ADHD</a></li>
								<li><a href="{{url('pages/6')}}">Dyscalculia</a></li>
								<li><a href="{{url('pages/7')}}">Dysgraohia</a></li>
							</ul>
						</li>
						
						<li><a href="{{url('news_guest')}}">News & Event</a></li>
						<li><a href="{{url('pages/10')}}">FAQ</a></li>
						<li><a href="{{url('training')}}">Training</a></li>
						<!-- <li><a href="https://www.fundraiseonline.co.nz/fundraise/makedonation_direct.aspx?c=203">Donate</a></li> -->
						<li><a href="{{url('contact')}}">Contact</a></li>
						@if(Auth::check())

						<li><a href="{{url('logout')}}" class="logout-button"><i class="fa fa-sign-out"></i><span>Log Out</span></a></li>

							@if(Auth::user()->role == "1")
								<li><a href="{{url('loggedin')}}">Admins</a></li>
							@endif

						@else

						<li class="login-button"><i class="fa fa-sign-in"></i><span>Log In</span></li>
						
						@endif
						
						<li class="search-desktop">
							<form action="">
								<input type="text">
								<button>
									<img src="{{asset('asset/icons/search-1.png')}}" alt="">
								</button>
							</form>
							<!-- <div class="search-out-box"><img src="{{asset('asset/icons/search-1.png')}}" alt=""></div> -->
						</li>
					</ul>
				</nav>
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
				<li><a href="{{url('pages/1')}}">About</a></li>

				<li class="learning">

					<div class="learning-flex">
						<a href="{{url('pages/2')}}">Learning</a>
						<span>
							<img class ="plus" src="{{asset('asset/icons/plus.png')}}" alt="">
						</span>
					</div>

					<ul id="learning-sub-menu" >
						<li><a href="{{url('pages/3')}}">Dyslexia</a></li>
						<li><a href="{{url('pages/4')}}">Dyspraxia</a></li>
						<li><a href="{{url('pages/5')}}">ADHD</a></li>
						<li><a href="{{url('pages/6')}}">Dyscalculia</a></li>
						<li><a href="{{url('pages/7')}}">Dysgraohia</a></li>
					</ul>

				</li>
				<li><a href="{{url('news_guest')}}">News & Event</a></li>
				<li><a href="{{url('pages/10')}}">FAQ</a></li>
				<li><a href="{{url('training')}}">Training</a></li>
				<li><a href="https://www.fundraiseonline.co.nz/fundraise/makedonation_direct.aspx?c=203">Donate</a></li>
				<li><a href="{{url('contact')}}">Contact</a></li>
				@if(Auth::check())
					<li><a href="{{url('logout')}}" class="logout-button tomato">Logout</a></li>
					@if(Auth::user()->role == "1")
							<li><a href="{{url('loggedin')}}">Admins</a></li>
					@endif

				@else
					<li class="login-button"><a href="">Log In</a></li>
				@endif
				
			</ul>
		</nav>

	<main>
		<div class="inner">
		@yield('index')
		</div>
	</main>
	<footer>
		
		<div class="footer-wrap">
			<ul>
				<li><a href="{{url('pages/1')}}">About</a></li>
				<li><a href="{{url('pages/2')}}">Learning</a></li>
				<li><a href="{{url('pages/9')}}">Privacy Policy</a></li>
				<li><a href="{{url('training')}}">Training</a></li>
				<li><a href="{{url('contact')}}">Contact</a></li>

				@if(Auth::check())

				<li><a href="{{url('logout')}}" class="logout-button">Logout</a></li>

				@else

				<li><a href="" class="login-button">Login</a></li>
				@endif
				
			</ul>
		</div><!-- footer-wrap -->
		
	</footer>

	<div class="bottom-ids">
		<div class="inner">
		    
			
			<div id="go-top">Top</div>
			
			
			<div id="reading-assist">
		
			<div class="reading-assist-top">
				<div class="assist-box-wrap">
					<div class="circle"><img src="{{asset('asset/icons/circle-off.png')}}" alt=""></div>
					<div class="assist-box">
						<p>Reading<br/>Assist</p>
					</div>
				</div>
			</div><!-- reading-assist-top -->
			<div class="reading-assist-bottom">
				<!-- <div class="empty"></div> -->
				<div class="assist-detail">
					<div class="text-size">
						<p>Text-size</p>
						<ul>
							<li id="sfont">A</li>
						
							<li id="lfont">A</li>
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
		</div>
	</div>
	<div class="showPopUp hidden">{{Session::get("showPopUp")}}</div>
	<div id="token" class="hidden">{{ csrf_token() }}</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript" src="{{asset('asset/slick/slick.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('asset/slick/slick.js')}}"></script>	
	<script src="{{asset('js/jquery.jeditable.js')}}"></script>
	<script src="{{asset('js/javascript.js')}}"></script>
	
</body>
</html>