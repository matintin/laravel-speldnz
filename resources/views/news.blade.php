@extends('template.subPage')


@section('content')
<div class="navigation">
	<a href="{{url('/')}}" class="page-nav">Home</a>
	
	<span>/ News & Event</span> 

	
	<div class="container">
		<h1>News & Event</h1>
		<div class="content">


	<div class="about-content learning">
		<a href="{{url('news/create')}}" class="admin-creater"><img src="{{asset('asset/icons/add-create.png')}}" alt="" /></a>
		@foreach($posts as $post)
		<div class="accordion-wrap">
			
			@if(isset($post->thanks))
		
			<span data-field="content" data-postid="{{$post->id}}" style="text-align:center;">{!! $post->content !!}</span>
		
			@else
			<h3 data-field="title" data-postid="{{$post->id}}">{{$post->title}}</h3>
			<div class="empty"></div>
			<!-- <div class="delete"><div class="delete-img"></div></div> -->

			{!! Form::open(["url"=>"news/".$post->id,"method"=>"delete"])!!}
			{!! Form::submit("",["class"=>"hiddenDelete"])!!}
			{!! Form::close()!!}
			<div class="image-wrap"><img src="{{asset('asset/icons/plus.png')}}" alt=""></div>
			<div class="accordion-news">
			<p class="posted-time">{{$post->created_at}}</p>
			<div data-field="content" data-postid="{{$post->id}}">{!! $post->content !!}</div>

			</div>	

			@endif

		</div><!-- accordion-wrap -->

		@endforeach

	</div><!-- about-content -->

		</div>
	</div><!-- container -->
</div><!-- navigation -->
@stop			