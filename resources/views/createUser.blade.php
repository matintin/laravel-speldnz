@extends('template.subPage')

@section('content')
<div class="navigation">
	<a href="{{url('/')}}" class="page-nav">Home</a>
	
	<a href="{{url('loggedin')}}">
		<span>

		/ Administor Page
		</span>
	</a>
	
	<a href="{{url('users')}}">
	<span>/ Member Details</span> 
	</a>

	<span>/ Member Create</span>

	<div class="container">
		<div class="content">

		{!! Form::open(['url'=>'users',null,'class'=>'generic-form member-form']) !!}



		{!! Form::text('email', null , ['placeholder'=>'Email']) !!}

		{!! Form::text('firstname', null , ['placeholder'=>'Firstnam']) !!}
	
		{!! Form::text('lastname', null , ['placeholder'=>'Lastname']) !!}

		{!! Form::text('address', null , ['placeholder'=>'Address']) !!}

		{!! Form::text('contact', null , ['placeholder'=>'Contact']) !!}

		{!! Form::password('password', ['placeholder'=>'Password']) !!}

		{!! Form::password('password_confirmation', ['placeholder'=>'Password Confirm','class'=>'margin-bottom']) !!}			

		{!! Form::submit('Create') !!}

		{!! Form::close() !!}

		@if (count($errors) > 0)
		    <div class="alert">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>- {{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
		</div>
	</div>
</div>
@stop