@extends('template.subPage')

@section('content')
	<div class="learning-five">

		@foreach( $page->children as $subpage)
		<div class="five Dyslexia">
			<a href="{{url('dyslexia')}}">{{$subpage->title}}</a>	
		</div>
		@endforeach
	</div>

	<h1 class="hidden">{{$page->title}}</h1>
	
	<div class="about-content learning">
	{!! $page->content!!}

	</div><!-- about-content -->
	@foreach( $page->children as $subpage)
		<div >
			{{$subpage->content}}
		</div>
	@endforeach



@stop