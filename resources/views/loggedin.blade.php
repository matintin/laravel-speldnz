@extends('template.subPage')

@section('content')

	<div class="loggedin">
		
		<a href="{{url('download')}}" class="download-squire squire">
			<span>Download</span>
		</a>	
		<a href="{{url('users')}}" class="member-squire squire">
			<span>Members</span>
		</a>
		<a href="" class="news-squire squire">
			<span>News Post</span>
		</a>
	</div>

@stop