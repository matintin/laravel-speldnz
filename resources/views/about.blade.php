@extends('template.main')

@section('index')	

	<div class="navigation">
		<a href="{{url('index')}}">Home</a>
		<span> / About us</span>
	</div>
	
	<div class="container">
		<h1>About Us</h1>
		<div class="about-content">
			<h3>Our mission</h3>
			<p>The aim of the Government's special education policy is 
				to improve learning outcomes for all children and young 
				people with special educational needs at their local school, 
				early childhood centre, or wherever they are educated.</p>
			
			<h3>Our Purpose</h3>
			<p>The purpose of speld nz, therefore, is to work within the 
				framework established by the Ministry of Education, to assist 
				in reducing underachievement in education by students with dyslexia
				 and other specific learning disabilities. SPELD NZ is one of many voluntary organisations around the world, 
				which works to ensure every learner with a specific learning 
				disability has equitable educational experiences.</p>
			
			<h3>Our History</h3>
			<p>SPELD NZ was founded in Christchurch in 1971 by Brother Damien 
				Keane, a teacher at the Marylands School in Christchurch, and 
				Dr Jean Seabrook, a speech therapist and psychologist. As the 
				organisation expanded, branches with their individual constitutions 
				soon formed. In 1974 they federated to become SPELD NZ (Inc) with a 
				national constitution and a National Council consisting of a President,
				 two Vice Presidents, a Treasurer, a Secretary and one representative
				  from each region in New Zealand. There are currently 28 Member Associations of speld throughout 
				New Zealand. Each Association is autonomous within the constitutional
				 rules of the National body and is affiliated to that body.</p>
			
			<h3>Provides</h3>
			<p>SPELD NZ provides the following services across New Zealand:
			Information and advice on dyslexia and other specific learning 
			disabilities.
			Individual student screening and assessment services for those 
			suspected of dyslexia or other specific learning disabilities.
			Individual tuition by qualified teachers with specialist training 
			(theory and practical) in dyslexia and specific learning disabilities.
			Support for families and whanau.
			Training courses for parents, caregivers and other interested 
			people – Course approved by NZQA.
			NZQA approved training course for qualified teachers and those 
			with relevant university qualifications.
			SPELD NZ is registered with NZQA and is accredited to deliver 
			the courses.
			For a detailed, free information pack on how SPELD NZ can help, 
			please click here </p>
		</div>
	</div>
	<section>
		
		<h1 class="hidden">newsletter, support</h1>
		<div class="newsletter">
			<h5>Newsletters Sign Up</h5>
			<p>Stay informed with our e-newsletters</p>

			<form action="">
				<input type="text" name="email" placeholder="Email Address">
				<input type="submit" value="Sign Up">

			</form>
		</div>

	<div class="donation">
		<div class="donate-box">
			<div class="donate-text">
				<h2>Donate Today</h2>
				<p>Support to continue this important work.</p>
			</div>
			<div class="donate-img">
				<img src="asset/icons/donation.png" alt="" />
			</div>
			<div class="donate-button">
				<a href="">Donate</a>
			</div>
		</div>
	</div>
	</section>
@stop