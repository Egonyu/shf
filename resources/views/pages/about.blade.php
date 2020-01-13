@extends('pages.master')

@section('content')
	<!-- BANNER -->
	<div class="section banner-page" data-background="{{ asset('frontend/images/site/sauzar-presentation.jpg') }}">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page">About Us</div>
			</div>
			<div class="d-flex justify-content-center bd-highlight mb-3">
			    <nav aria-label="breadcrumb">
				  <ol class="breadcrumb ">
				    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
				    <li class="breadcrumb-item active" aria-current="page">About Us</li>
				  </ol>
				</nav>
		  	</div>
		</div>
	</div>

	<!-- CONTENT -->
	<div class="section">
		<div class="content-wrap">
			<div class="container">
				<div class="row">

					<div class="col-sm-6 col-md-6">
						<h2 class="section-heading">
							Sauzar <span>Health</span> Foundation
						</h2>

						<p>Sauzar Health Foundation was established by our Founding Director ABUSUFYAN AYYUB in the year 2018. The foundation is located in Jalingo, Taraba State of Nigeria with two (2) coordinators representing Southern and Northern part of the country. The foundation reached beyond Nigeria as it has strong service delivery online through the use of social media platforms and website.</p>
						<div class="spacer-30"></div>
						<a href=" {{ url('/our-team') }} " class="btn btn-primary">MEET OUR TEAMS</a>
						<div class="spacer-30"></div>

					</div>

					<div class="col-sm-6 col-md-6">
						
						<img src="{{ asset('frontend/images/site/group.jpg') }}" alt="" class="img-fluid img-border">

					</div>
					

				</div>

				<div class="spacer-70"></div>

				<div class="row">

					<div class="col-sm-3 col-md-3">
						<div class="rs-icon-funfact style-2">
							<div class="icon">
								<i class="fa fa-file-text-o"></i>
							</div>
							<div class="body-content">
								<h2>07</h2>
								<p class="uk18">Complete</p>
							</div>
						</div>
					</div>

					<div class="col-sm-3 col-md-3">
						<div class="rs-icon-funfact style-2">
							<div class="icon">
								<i class="fa fa-users"></i>
							</div>
							<div class="body-content">
								<h2>29</h2>
								<p class="uk18">Our Team</p>
							</div>
						</div>
					</div>

					<div class="col-sm-3 col-md-3">
						<div class="rs-icon-funfact style-2">
							<div class="icon">
								<i class="fa fa-trophy"></i>
							</div>
							<div class="body-content">
								<h2>09</h2>
								<p class="uk18">Programs</p>
							</div>
						</div>
					</div>

					<div class="col-sm-3 col-md-3">
						<div class="rs-icon-funfact style-2">
							<div class="icon">
								<i class="fa fa-male"></i>
							</div>
							<div class="body-content">
								<h2>49</h2>
								<p class="uk18">Volunteer</p>
							</div>
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>

	<div class="section cta" data-background="{{ asset('frontend/images/slider/clean-water.jpg') }}">
		<div class="content-wrap">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<div class="cta-info">
						<h1 class="section-heading light no-after">
							<span>We Help Many People</span> 
						</h1>
						<a href="{{ route('volunteer.index') }}"><h3 class="color-primary">Want to Become a Volunteer</h3></a>

						<div class="spacer-10"></div>
						<p>Our organization encourages the participation of volunteers who support our mission. If you agree with our mission and are willing to be interviewed and trained in our procedures, we encourage you to complete this application. The information on this form will be kept confidential and will help us find the most satisfying and appropriate volunteer opportunity for you. click the button below to volunteer</p>

						<a href="{{ route('ceo') }}" class="btn btn-light margin-btn">Read Director's Message</a> <a href="{{ route('volunteer.index') }}" class="btn btn-primary margin-btn">Become A Volunteer</a>	
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- WHY CHOOSE US -->
	<div class="section" data-background=" {{ asset('frontend/images/slider/scene.jpg') }} ">
		<div class="content-wrap">
			<div class="container">
				<div class="row">

					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading">
							<span>Why Choose Us</span>
						</h2>
					</div>

					<div class="col-sm-6 col-md-6">
						<p>Sauzar Health Foundation Abbreviated SHF is non governmental
							Organization aiming at advocacy, education, sensitizing, and empowering for better health, reating livelihood, maintaining, preserving and protecting a healthy living environment.<</p>
						<div class="embed-responsive embed-responsive-16by9">
						  <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/vNDrLjOmUY4?autoplay=0&loop=0&showinfo=0&theme=dark&color=red&controls=1&modestbranding=0&start=0&fs=1&iv_load_policy=1"></iframe>

						</div>
						<div class="spacer-30"></div>

					</div>

					<div class="col-sm-6 col-md-6">
						
						<div class="accordion rs-accordion" id="accordionExample">
							<!-- Item 1 -->
						  <div class="card mb-2">
						    <div class="card-header" id="headingOne">
						      <h4 class="title">
						        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						          Vision
						        </button>
						      </h4>
						    </div>
						    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body">
						        To develop into an organization of international repute focused on creating a better place for all.
						      </div>
						    </div>
						  </div>

							<!-- Item 2 -->
						  <div class="card mb-2">
						    <div class="card-header" id="headingTwo">
						      <h4 class="title">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						          MISSION
						        </button>
						      </h4>
						    </div>
						    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
						      <div class="card-body">
						        To restore, preserve, protect and make the world a better place for us and the future generation by inculcating into the general public a sense of respect for the environment through proper waste management practices for sustainable health.
						      </div>
						    </div>
						  </div>
							
							<!-- Item 3 -->
						  <div class="card mb-2">
						    <div class="card-header" id="headingThree">
						      <h4 class="title">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						          WHO WE ARE
						        </button>
						      </h4>
						    </div>
						    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						      <div class="card-body">
						        
								<p>Sauzar Health Foundation was established by our Founding Director Dr. A. A. Sauzar in the year 2018 (Ideas and Paper works) and later developed to what you are seeing before you in May 2019. The foundation is located in Jalingo, Taraba State of Nigeria with two (2) coordinators representing Southern and Northern part of the country. The foundation reached beyond Nigeria as it has strong service delivery online through the use of social media platforms and website</p>
						      </div>
						    </div>
						  </div>

						  <!-- Item 4 -->
						  <div class="card mb-2">
						    <div class="card-header" id="headingFour">
						      <h4 class="title">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
						          WHO WE SERVE
						        </button>
						      </h4>
						    </div>
						    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
						      <div class="card-body">
								<p>Our products and services is for everybody, regardless of race, religion, gender, ethnicity, class, cultural diversity and or social background with a special focus where we are needed the most especially those living in rural areas.</p>
						      </div>
						    </div>
						  </div>

						  <!-- Item 5 -->
						  <div class="card mb-2">
						    <div class="card-header" id="headingFive">
						      <h4 class="title">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
						          WHERE WE WORK	
						        </button>
						      </h4>
						    </div>
						    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
						      <div class="card-body">
						        <p>Our services is not limited to  certain location and that we support and encourage everyone especially the youths to come and join the movement for a better generation and generations to come, it is only by working together we can attain our full potentials.</p>
						      </div>
						    </div>
						  </div>

						  <!-- Item 4 -->
						  <div class="card mb-2">
						    <div class="card-header" id="headingFour">
						      <h4 class="title">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
						          WHO WE WORK WITH
						        </button>
						      </h4>
						    </div>
						    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
						      <div class="card-body">
								<p>Our core function is to direct and coordinate health and environment through collaborations with other organization whose aim is for the betterment of all. SHF is willing to partner with but not limited to, Universities, Polytechnics, Colleges, schools, research institutions, restaurants etc.</p>
						      </div>
						    </div>
						  </div>

						  <!-- Item 4 -->
						  <div class="card mb-2">
						    <div class="card-header" id="headingFour">
						      <h4 class="title">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
						          WHAT WE DO
						        </button>
						      </h4>
						    </div>
						    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
						      <div class="card-body">
								<p>SHF is a product/service based organization with a primary role of empowering for generations, making the environment a better place for the survival of the survivalist. We provide alternative and cheap source of fuel for cooking through garbage recycling, offering services (Seminars, workshops, community outreach, sanitations, Advocacy etc.) and empowering inclusive community health programmes.</p>
						      </div>
						    </div>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- OUR VOLUUNTER SAYS -->
	<div class="section" data-background="images/dummy-img-1920x900-2.jpg">
		<div class="content-wrap">
			<div class="container">
				<div class="row">

					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading center">
							Our <span>Volunteers</span> Says
						</h2>
						<p class="subheading text-center">Don't take our word for it, hear from these people..</p>
					</div>

					<div class="col-sm-6 col-md-6">
						<div class="testimonial-1">
		              		<div class="media">
	              				<img src="{{('frontend/images/volunteers/nirere.jpg')}}" alt="" class="img-fluid">
	              			</div>
			              	<div class="body">
			                	<p>We are in a crisis; our actions have led to continuous destruction of our only planet. We have to achieve our set climate action goals and this will be done by individuals, governments, Civil Society, Corporations and Organizations. Am glad that Sauzar Health Foundation is part of chieving their objectives.</p>
			                	<div class="title">NIRERE SADRACH</div>
			                	<div class="company">CO-FOUNDER AND CORDINATOR FRIDAYS FOR FUTURE UGANDA, UGANDA</div>
			              	</div>
			            </div>
					</div>

					{{-- <div class="col-sm-6 col-md-6">
						<div class="testimonial-1">
		              		<div class="media">
	              				<img src="images/dummy-img-400x400.jpg" alt="" class="img-fluid">
	              			</div>
			              	<div class="body">
			                	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. Mauris ornare tortor in eleifend blanditullam ut ligula et neque. Nulla interdum dapibus erat nec elementum. </p>
			                	<div class="title">Raisa Doel</div>
			                	<div class="company">House Keeper</div>
			              	</div>
			            </div>
					</div>

					<div class="col-sm-6 col-md-6">
						<div class="testimonial-1">
		              		<div class="media">
	              				<img src="images/dummy-img-400x400.jpg" alt="" class="img-fluid">
	              			</div>
			              	<div class="body">
			                	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. Mauris ornare tortor in eleifend blanditullam ut ligula et neque. Nulla interdum dapibus erat nec elementum. </p>
			                	<div class="title">Josh Doel</div>
			                	<div class="company">Contractor</div>
			              	</div>
			            </div>
					</div>

					<div class="col-sm-6 col-md-6">
						<div class="testimonial-1">
		              		<div class="media">
	              				<img src="images/dummy-img-400x400.jpg" alt="" class="img-fluid">
	              			</div>
			              	<div class="body">
			                	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. Mauris ornare tortor in eleifend blanditullam ut ligula et neque. Nulla interdum dapibus erat nec elementum. </p>
			                	<div class="title">Sasha Doel</div>
			                	<div class="company">Freelance</div>
			              	</div>
			            </div>
					</div> --}}

				</div>
			</div>
		</div>
	</div>

@endsection