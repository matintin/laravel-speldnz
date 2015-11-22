
<div class="navigation">
	<a href="{{url('/')}}" class="page-nav">Home</a>
	@if($page->parent_id)
	<a href="{{url('pages/2')}}">
		<span>

		/ Learning
		</span>
	</a>
	@endif
	<span>/ {{$page->title}}</span> 

	
	<div class="container">
		<h1>{{$page->title}}</h1>
		<div class="content">
				@if(($page->id)==2)
					@include('learning')
				@elseif($page->parent_id)
					@include('dyslexia')
				@else
					{!! $page->content !!}
						
				@endif	

				@if(($page->id)== 9 )

				@else
				<div class="information-pack">
					<p>For a detailed, free information pack on how SPELD NZ can help,please click <a href="{{asset('asset/downloads/SPELD NZ Information Pack Oct 2015.pdf')}}">here</a></p> 
				</div>
				@endif
		</div>
	</div><!-- container -->
</div><!-- navigation -->

