
<div class="navigation">
	<a href="{{url('/')}}" class="page-nav">Home</a>
	@if($page->parent_id)
	<span>

	/ Learning

	</span>
	@endif
	<span>/ {{$page->title}}</span> 

	
	<div class="container">
		<h1>{{$page->title}}</h1>
		<div class="content">

				{!! $page->content !!}

		</div>
	</div><!-- container -->
</div><!-- navigation -->

