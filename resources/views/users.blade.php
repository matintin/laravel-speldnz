@extends('template.subPage')

@section('content')

	@foreach($users as $user)
	<div class="member-container">
		<div class="member-name">{{$user->firstname}} {{$user->lastname}}</div>
		<span>Email</span><div class="member-email margin-bottom">{{$user->email}}</div>
		<span>Address</span><div class="member-address margin-bottom">{{$user->address}}</div>
		<span>Contact</span><div class="member-phone margin-bottom">{{$user->contact}}</div>
		
	</div>
	@endforeach

@stop