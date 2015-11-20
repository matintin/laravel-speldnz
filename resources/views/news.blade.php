@extends('template.subPage')


@section('content')
<div class="navigation">
	<a href="{{url('/')}}" class="page-nav">Home</a>
	
	<span>/ News & Event</span> 

	
	<div class="container">
		<h1>News & Event</h1>
		<div class="content">


	<div class="about-content learning">

		@foreach(\App\Models\Post::all() as $post)
		<div class="accordion-wrap">
			
			@if(isset($post->thanks))
			
				{!! $post->content !!}
		
			@else
			<h3>{{$post->title}}</h3>
			<div class="empty"></div><div class="image-wrap"><img src="{{asset('asset/icons/plus.png')}}" alt=""></div>
			<div class="accordion-news">
				{!! $post->content !!}
			</div>	

			@endif

		</div><!-- accordion-wrap -->

		@endforeach

	</div><!-- about-content -->

		</div>
	</div><!-- container -->
</div><!-- navigation -->
@stop		

			
			
	