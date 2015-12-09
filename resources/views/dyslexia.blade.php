

	<h1 class="hidden">Dyslexia, Dyspraxia, ADHD, Dysgraphia, Dyscalculia</h1>

	<div class="about-content learning">	

		<div class="learning-dyslexia-wrap learning-five">
			<div class="five Dyslexia" data-shown="{{$page->id==3 ? 1 : 0}}">
				<p class="color-white">Dyslexia<i class="fa fa-angle-down"></i></p>
			</div>
	
		 	<div class="learning-five learning-dyslexia">
	
				@foreach(\App\Models\Page::find(3)->subpages as $subpage)
		 		<div class="accordion-wrap">
		 			<span>{{$subpage->title}}</span>
		 			<div class="empty"></div>
		 			<div class="image-wrap"><img src="{{asset('asset/icons/plus.png')}}" alt=""></div>
		 				<div class="accordion">	
		 			 		{!! $subpage->content !!}	  
		 				</div>
		 		</div>
		 		@endforeach
		 		
		 	</div><!-- learning-dyslexia -->
			<!-- Dyslexia -->


		 	<div class="five Dyspraxia" data-shown="{{$page->id==4 ? 1 : 0}}">
				<p class="color-white">Dyspraxia<i class="fa fa-angle-down"></i></p>
			</div>
			<div class="learning-five">

				@foreach(\App\Models\Page::find(4)->subpages as $subpage)
		 		<div class="accordion-wrap">
		 			<span>{{$subpage->title}}</span>
		 			<div class="empty"></div>
		 			<div class="image-wrap"><img src="{{asset('asset/icons/plus.png')}}" alt=""></div>
		 				<div class="accordion">
		 			 		{!! $subpage->content !!}	  
		 				</div>
		 		</div>
		 		@endforeach

			</div><!-- learning-five -->
			<!-- Dyspraxia -->


			<div class="five ADHD" data-shown="{{$page->id==5 ? 1 : 0}}">
				<p class="color-white">ADHD<i class="fa fa-angle-down"></i></p>
			</div>
			<div class="learning-five">

				@foreach(\App\Models\Page::find(5)->subpages as $subpage)
		 		<div class="accordion-wrap">
		 			<span>{{$subpage->title}}</span>
		 			<div class="empty"></div>
		 			<div class="image-wrap"><img src="{{asset('asset/icons/plus.png')}}" alt=""></div>
	 				<div class="accordion">
	 					{!! $subpage->content !!}	 
	 				</div>
		 		</div>
				@endforeach
		 		
			</div><!-- learning-five -->
			<!-- ADHD -->

			<div class="five Dysgraphia" data-shown="{{$page->id==6 ? 1 : 0}}">
				<p class="color-white">Dysgraphia<i class="fa fa-angle-down"></i></p>
			</div>
			<div class="learning-five">

				@foreach(\App\Models\Page::find(6)->subpages as $subpage)
		 		<div class="accordion-wrap">
		 			<span>{{$subpage->title}}</span>
		 			<div class="empty"></div>
		 			<div class="image-wrap"><img src="{{asset('asset/icons/plus.png')}}" alt=""></div>
		 				<div class="accordion">
							{!! $subpage->content !!}
		 				</div>
		 		</div>
				@endforeach

			</div><!-- learning-five -->
			<!-- Dysgraphia -->

			<div class="five Dyscalculia" data-shown="{{$page->id==7 ? 1 : 0}}">
				<p class="color-white">Dyscalculia<i class="fa fa-angle-down"></i></p>
			</div>
			<div class="learning-five">

				@foreach(\App\Models\Page::find(7)->subpages as $subpage)
		 		<div class="accordion-wrap">
		 			<span>{{$subpage->title}}</span>
		 			<div class="empty"></div>
		 			<div class="image-wrap"><img src="{{asset('asset/icons/plus.png')}}" alt=""></div>
		 				<div class="accordion">
		 					{!! $subpage->content !!}
		 				</div>
		 		</div>
		 		@endforeach

			</div><!-- learning-five -->
			<!-- Dyscalculia	 -->

		</div><!-- learning-dyslexia-wrap -->


	</div><!-- about-content -->
