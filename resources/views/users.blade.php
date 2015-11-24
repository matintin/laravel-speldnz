@extends('template.subPage')

@section('content')
<div class="container">
<div class="content">
	@foreach($users as $user)
	<div class="member-container">
		<div class="member-name">{{$user->firstname}} {{$user->lastname}}</div>
		<span>Email</span><div class="member-email margin-bottom" data-field="email">{{$user->email}}</div>
		<span>Address</span><div class="member-address margin-bottom" data-field="address">{{$user->address}}</div>
		<span>Contact</span><div class="member-phone margin-bottom" data-field="contact">{{$user->contact}}</div>
		
	</div>
	@endforeach
</div>
</div>
@stop