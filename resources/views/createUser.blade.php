@extends('template.subPage')

@section('content')

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

@stop