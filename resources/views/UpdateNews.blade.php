@extends('template.subPage')


@section('content')
<div class="navigation">
	<a href="{{url('/')}}" class="page-nav">Home</a>
	
	<span>/ News & Event</span> 

	
	<div class="container">
		<h1>News & Event</h1>
		<div class="content">


	<div class="about-content learning">
		
		<div class="accordion-wrap">
			
		{!! Form::model($post,['url'=>'news/'.$post->id,null,'class'=>'generic-form member-form','method'=>'put']) !!}
		
		@if($post->title)
		{!! Form::text('title', null , ['placeholder'=>'Title', 'class'=>'news-create-textarea']) !!}
		@endif
		{!! Form::textarea('content', null , ['id'=>'content','placeholder'=>'Content']) !!}
		
		{!! Form::select('thanks',[null=>'News & Post','1'=>'Thanks']) !!}	

		{!! Form::submit('Post') !!}

		<script>
		CKEDITOR.replace('content');
		</script>

		{!! Form::close() !!}

		</div><!-- accordion-wrap -->

	</div><!-- about-content -->

		</div>
	</div><!-- container -->
</div><!-- navigation -->
@stop			