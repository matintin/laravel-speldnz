
<div class="navigation">
	<a href="{{url('/')}}" class="page-nav">Home</a>
	
	<span>/ News & Event</span> 

	
	<div class="container">
		<h1>News & Event</h1>
		<div class="content">


	<div class="about-content learning">
		
		<div class="accordion-wrap">
			<?php 

			$post = \App\Models\Post::find(2);

			 ?>
			@if(isset($post->thanks))
		
			{!! $post->content !!}
		
			@else
			<h3>{{$post->title}}</h3>
			
			<div class="accordion-news">
			<p class="posted-time">{{$post->created_at}}</p>
			{!! $post->content !!}
		
			</div>	
			@endif

		</div><!-- accordion-wrap -->


	</div><!-- about-content -->

		</div>
	</div><!-- container -->
</div><!-- navigation -->
	