@extends('template.subPage')

@section('content')

<div class="navigation">
	<a href="{{url('/')}}" class="page-nav">Home</a>
	
	<span>/ Contact Us</span> 

	
	<div class="container">
		<h1>Contact Us</h1>
		<div class="content">


	<div class="about-content learning">

		<div class="contact-content">
		 
		<div class="contact-wrap">	
			<h3>National Office</h3>
			
			<p><i class="fa fa-envelope-o"></i>PO Box 24-617, Royal Oak, Auckland 1345</p>
			<p><i class="fa fa-phone"></i>0800 773 536</p> 
			<p><i class="fa fa-fax"></i>09 6243717</p>
			<p class="bottom"><i class="fa fa-map-marker"></i>14 Erson Ave, Royal Oak, Auckland 1061</p>
		</div>

		<div class="question-wrap">
			<h3>Ask Question</h3>
			{!! Form::open(['url'=>'bla']) !!}
			
			{!! Form::select('location',array('1'=>'1')) !!}

			{!! Form::text('name',null,['placeholder'=>'Name']) !!}

			{!! Form::text('email',null,['placeholder'=>'Email']) !!}

			{!! Form::text('phone',null,['placeholder'=>'Contact']) !!}

			{!! Form::textarea('message',null,['placeholder'=>'Message']) !!}

			{!! Form::submit('Send') !!}

			{!! Form::close() !!}
			<!-- <form action="">
				<select name="" id="" >
					<option value="" disabled selected>choose your location</option>
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
				</select>
					
				<input type="text" placeholder="Name" />
				<input type="text" placeholder="Email" />
				<input type="text" placeholder="Phone" />
				<textarea rows="5" placeholder="Message" ></textarea>
				<input type="submit" placeholder="Send" />
					
			</form> -->
		</div>
	</div>

	</div><!-- about-content -->

		</div>
	</div><!-- container -->
</div><!-- navigation -->

@stop