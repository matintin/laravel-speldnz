@extends('template.subPage')

@section('content')

<div class="navigation">
	<a href="{{url('/')}}" class="page-nav">Home</a>
	
	<span>/ Administor Page</span> 

	
	<div class="container">

		<div class="content">

			<div class="loggedin">
				
				<a href="{{url('download')}}" class="download-squire squire">
					<span>Download</span>
				</a>	
				<a href="{{url('users')}}" class="member-squire squire">
					<span>Members</span>
				</a>
				<a href="{{url('news')}}" class="news-squire squire">
					<span>News & Event</span>
				</a>
			</div>
		</div>
	</div>
</div>
@stop