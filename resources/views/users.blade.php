@extends('template.subPage')

@section('content')
<div class="navigation">
	<a href="{{url('/')}}" class="page-nav">Home</a>
	
	<a href="{{url('loggedin')}}">
		<span>

		/ Administor Page
		</span>
	</a>

	<span>/ Member Details</span> 

	<div class="container">
		<div class="content">
			<a href="{{url('users/create')}}" class="admin-creater"><img src="{{asset('asset/icons/add-create.png')}}" alt="" /></a>
			@foreach($users as $user)
			<div class="member-container">
				<div class="member-name">{{$user->firstname}} {{$user->lastname}}</div>
				<span>Email</span><div class="member-email margin-bottom" data-field="email" data-userid="{{$user->id}}">{{$user->email}}</div>
				<span>Address</span><div class="member-address margin-bottom" data-field="address" data-userid="{{$user->id}}">{{$user->address}}</div>
				<span>Contact</span><div class="member-phone margin-bottom2" data-field="contact" data-userid="{{$user->id}}">{{$user->contact}}</div>
				{!! Form::open(["url"=>"users/".$user->id,"method"=>"delete"])!!}
				{!! Form::submit("Delete",['class'=>'user-delete'])!!}
				{!! Form::close()!!}
			</div>
			@endforeach
		</div>
	</div>
</div>
@stop