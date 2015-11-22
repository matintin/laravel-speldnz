@extends('template.subPage')


@section('content')
<div class="navigation">
	<a href="{{url('/')}}" class="page-nav">Home</a>
	
	<span>/ Create <p>News & Event</p></span> 

	
	<div class="container">
		<h1>Create <p>News & Event</p></h1>
		<div class="content">


	<div class="about-content learning">

	
		{!! Form::open(['url'=>'users',null,'class'=>'generic-form member-form']) !!}



		{!! Form::text('title', null , ['placeholder'=>'Title']) !!}
	
		{!! Form::textarea('content', null , ['placeholder'=>'Content']) !!}
		
		{!! Form::text('lastname', null , ['placeholder'=>'Lastname']) !!}
	
		{!! Form::text('address', null , ['placeholder'=>'Address']) !!}
		
		{!! Form::text('contact', null , ['placeholder'=>'Contact']) !!}
		
		{!! Form::password('password', ['placeholder'=>'Password']) !!}

		{!! Form::password('password_confirmation', ['placeholder'=>'Password Confirm','class'=>'margin-bottom']) !!}			

		{!! Form::submit('Post') !!}

	{!! Form::close() !!}

		

	</div><!-- about-content -->

		</div>
	</div><!-- container -->
</div><!-- navigation -->
@stop			