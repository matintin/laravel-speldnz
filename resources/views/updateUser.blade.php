@extends('template.subPage')

@section('content')

	{!! Form::model($user ,['url'=>'users/'.$user->id,null,'class'=>'generic-form member-form','method'=>'put']) !!}



		{!! Form::text('email', null , ['placeholder'=>'Email']) !!}
		{!! $errors->first('email') !!}	

		{!! Form::text('firstname', null , ['placeholder'=>'Firstnam']) !!}
		{!! $errors->first('firstname') !!}
	
		{!! Form::text('lastname', null , ['placeholder'=>'Lastname']) !!}
		{!! $errors->first('lastname') !!}

		{!! Form::text('address', null , ['placeholder'=>'Address']) !!}
		{!! $errors->first('address') !!}

		{!! Form::text('contact', null , ['placeholder'=>'Contact']) !!}
		{!! $errors->first('contact') !!}

		{!! Form::password('password', ['placeholder'=>'Password']) !!}

		{!! Form::password('password_confirmation', ['placeholder'=>'Password Confirm','class'=>'margin-bottom']) !!}	
		{!! $errors->first('password') !!}			

		{!! Form::submit('Update') !!}

	{!! Form::close() !!}

@stop