@extends('template.subPage')


@section('content')
<div class="navigation">
	<a href="{{url('/')}}" class="page-nav">Home</a>
	
	<span>/ Create <p>News & Event</p></span> 

	
	<div class="container">
		<h1>Create <p>News & Event</p></h1>
		<div class="content">


	<div class="about-content learning">

	
		{!! Form::open(['url'=>'news',null,'class'=>'generic-form member-form']) !!}

		{!! Form::text('title', null , ['placeholder'=>'Title', 'class'=>'news-create-textarea']) !!}
	
		{!! Form::textarea('content', null , ['id'=>'content','placeholder'=>'Content']) !!}
		
		{!! Form::select('thanks',[null=>'News & Post','1'=>'Thanks']) !!}	

		{!! Form::submit('Post') !!}

		<script>
		CKEDITOR.replace('content');
		</script>

		{!! Form::close() !!}
		
		

	</div><!-- about-content -->

		</div>
	</div><!-- container -->
</div><!-- navigation -->
@stop			