@extends('pages.master')

@section('content')
	<!-- BANNER -->
	<div id="oc-fullslider" class="banner owl-carousel" style="opacity: 34">
        <div class="owl-slide">
        	<div class="item">
	            <img src=" {{ asset('frontend/images/slider/clean-water.jpg') }} " alt="Slider" >
	            <div class="slider-pos">
		            <div class="container">
		            	<div class="wrap-caption center">
			                <h1 class="caption-heading"><span>#POOR</span> WASTE MANAGEMENT</h1>
			                <p>Waste management are the activities and actions required to manage waste from its inception to its final disposal. This includes the collection, transport, treatment and disposal of waste, together with monitoring and regulation of the waste management process.</p>
			                <a href=" {{ url('/causes') }} " class="btn btn-light">LEARN MORE</a>
			                <a href=" {{ url('/contact') }} " class="btn btn-primary">DONATE NOW</a>
			            </div>  
		            </div>  
	            </div>  
            </div>  
        </div>

        <div class="owl-slide">
        	<div class="item">
	            <img src=" {{ asset('frontend/images/slider/noplanetb.jpg') }} " alt="Slider" style="opacity: 3">
	            <div class="slider-pos">
		            <div class="container">
		            	<div class="wrap-caption right">
			                <h1 class="caption-heading"><span>#Promote</span> Renewable Energy</h1>
			                <p>Renewable energy is energy that is collected from renewable resources, which are naturally replenished on a human timescale, such as sunlight, wind, rain, tides, waves, and geothermal heat</p>
			                <a href=" {{ url('/contact') }} " class="btn btn-primary">Support NOW</a>
			            </div>  
		            </div>  
	            </div>  
            </div>  
        </div>

        <div class="owl-slide">
        	<div class="item">
	            <img src=" {{ asset('frontend/images/slider/team-back.jpg') }} " alt="Slider" style="opacity: 3">
	            <div class="slider-pos">
		            <div class="container">
		            	<div class="wrap-caption right">
			                <h1 class="caption-heading"><span>#ECO</span> FRIENDLY COMPAIGN</h1>
			                <p>Promote Solar Power: Eco Friendly Energy Consumption. Solar power is the form of renewable energy available for human actions apart from wind, tide, and hydroelectric energy.</p>
			                <a href="#" class="btn btn-primary">DONATE NOW</a>
			            </div>  
		            </div>  
	            </div>  
            </div>  
        </div>
    </div>

	<div class="clearfix"></div>
	 
	<!-- WELCOME TO Sauzar Health Foundation-->
	<div class="section services">
		<div class="content-wrap">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading center">
							Welcome <span>To</span> Sauzar Health Foundation
						</h2>
						<p class="subheading text-center"> Sauzar Health Foundation Abbreviated SHF is a for and not for profit
							Organization aiming at advocacy, education, sensitizing, and empowering for better health,
							creating livelihood, maintaining, preserving and protecting a healthy living environment.</p>
					</div>
					<div class="clearfix"></div>
					<!-- Item 1 -->
					<div class="col-sm-4 col-md-4">
			            <div class="icon-with-text">
		              		<div class="icon">
		                		<i class="fa fa-recycle"></i>
		              		</div>
		              		<div class="no">01</div>
		              		<p class="subtitle">GARBAGE RECYCLING </p>
		              		<h3 class="title">Join Us Now</h3>
		              		<div class="text">One of our major leading compaigns is that as sauzar health foundation its priotized to mass sentize the publich about the dangers, devise creative ways around the problem in oder to meet our vison.
		              		 </div>
			            </div>
			        </div>
			        <!-- Item 2 -->
					<div class="col-sm-4 col-md-4">
			            <div class="icon-with-text">
		              		<div class="icon">
		                		<i class="fa fa-gift"></i>
		              		</div>
		              		<div class="no">02</div>
		              		<p class="subtitle">ECO FRIENDLY</p>
		              		<h3 class="title">Donate Now</h3>
		              		<div class="text">Promote Solar Power: Eco Friendly Energy Consumption. Solar power is the form of renewable energy available for human actions apart from wind, tide, and hydroelectric energy.</div>
			            </div>
			        </div>
			        <!-- Item 3 -->
					<div class="col-sm-4 col-md-4">
			            <div class="icon-with-text">
		              		<div class="icon">
		                		<i class="fa fa-bullhorn"></i>
		              		</div>
		              		<div class="no">03</div>
		              		<p class="subtitle">View Our Events</p>
		              		<h3 class="title">Get involved</h3>
		              		<div class="text">With a wide range of activities that sauzar health foundation is engaed with from Teaching, Actioned tree planting, Mass sentization, one or more events take place every now and them, look out our latest events.</div>
			            </div>
			        </div>

					<div class="col-sm-12 col-md-12">
						<div class="spacer-50"></div>
						<div class="text-center">
							<a href=" {{ url('/causes') }} " class="btn btn-primary">SEE ALL CAUSE</a>
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- URGENT CAUSE -->
	<div class="section" data-background=" {{ asset('frontend/images/slider/smoke.jpg') }} ">
		<div class="content-wrap">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-6">
						<h2 class="section-heading light">
							Urgent <span>Cause</span>
						</h2>

						<h2 class="color-white"><span class="color-primary">#Globle</span> Warming</h2>
						<p>Climate change in Africa pertains to aspects of climate change within the continent of Africa. Climate change is already a reality in Africa. According to the Intergovernmental Panel on Climate Change, Africa is among the most vulnerable continents to climate change.</p>

						<!-- <div class="progress-fundraising progress-lg">
	              			<div class="total">Donated</div>
	          			  	<div class="persen color-white">80%</div>
	              			<div class="progress">
							  <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="detail">
								<h3>$18,500 <small class="color-white">Raised of</small> $25,000 <small class="color-white">Goal</small></h3>
							</div>
						</div> -->


					</div>

					<!-- <div class="col-sm-6 col-md-6">
						<div class="img-button">
							<img src=" {{ asset('frontend/images/slider/sea.jpg') }} " alt="">
							<div class="btn-overlay">
								
							<a href="#" class="btn btn-primary">DONATE NOW</a>
							</div>
						</div>
					</div> -->

				</div>
			</div>
		</div>
	</div>
	 
	<!-- CAUSE -->
	<div class="section services">
		<div class="content-wrap">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading center">
							Recent <span>Cause</span>
						</h2>
						<p class="subheading text-center">We started up this movement to focus on the leading problems Africa face as a continent with fast industrial growth rates and where the AmericanEuropeanAsian industry dumps its products.</p>
					</div>
					<div class="clearfix"></div>
					<!-- Item 1 -->
					<div class="col-sm-4 col-md-4">
			            <div class="box-fundraising">
		              		<div class="media">
		                		<img src=" {{ asset('frontend/images/slider/sea-turtle.jpg') }} " alt="water pollution affects living creatures">
		              		</div>
		              		<div class="body-content">
		              			<p class="title"><a href="cause-single.html">Pollution</a></p>
		              			<div class="text">Pollution is the introduction of contaminants into the natural environment that cause adverse change. Pollution can take the form of chemical substances or energy, such as noise, heat or light. Pollutants, the components of pollution, can be either foreign substances/energies or naturally occurring contaminants.</div>
								<div class="spacer-50"></div>
								<div class="text-center">
									<a href="{{url('/causes')}}" class="btn btn-primary">Read More</a>
								</div>
		              		</div>
			            </div>
			        </div>
			        <!-- Item 2 -->
					<div class="col-sm-4 col-md-4">
			            <div class="box-fundraising">
		              		<div class="media">
		                		<img src=" {{ asset('frontend/images/slider/garbage.jpg') }} " alt="">
		              		</div>
		              		<div class="body-content">
		              			<p class="title"><a href="{{url('/causes')}}">Polythen Free Environment</a></p>
		              			<div class="text">They get into soil and slowly release toxic chemicals. They eventually break down into the soil, with the unfortunate result being that animals eat them and often choke and die.</div>
								<div class="spacer-50"></div>
								<div class="text-center">
									<a href="{{url('/causes')}}" class="btn btn-primary">Read More</a>
								</div>
		              		</div>
			            </div>
			        </div>
			        <!-- Item 3 -->
					<div class="col-sm-4 col-md-4">
			            <div class="box-fundraising">
		              		<div class="media">
		                		<img src=" {{ asset('frontend/images/slider/africa.jpg') }} " alt="">
		              		</div>
		              		<div class="body-content">
		              			<p class="title"><a href="cause-single.html">Renewable Enery</a></p>
		              			<div class="text">Renewable energy is energy produced from sources that do not deplete or can be replenished within a human's life time. The most common examples include wind, solar, geothermal, biomass, and hydropower. </div>

								<div class="spacer-50"></div>
								<div class="text-center">
									<a href="{{url('/causes')}}" class="btn btn-primary">Read More</a>
								</div>
		              		</div>
			            </div>
			        </div>

					<div class="col-sm-12 col-md-12">
						<div class="spacer-50"></div>
						<div class="text-center">
							<a href="{{url('/causes')}}" class="btn btn-primary">SEE ALL CAUSE</a>
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
						<p>Sauzar Health Foundation Abbreviated SHF is a for and not for profit Organization aiming at advocacy, education, sensitizing, and empowering for better health, creating livelihood, maintaining, preserving and protecting a healthy living environment.</p>
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
						        
								<p>Sauzar Health Foundation was established by our Founding Director Dr. A. A. Sauzar in the year 2018 (Ideas and Paper works) and later developed to what you are seeing before you in May 2019. The foundation is located in Jalingo, Taraba State of Nigeria with ten (10) different coordinators (branches) in ten different states within the country. The foundation reached beyond Nigeria as it ha strong service delivery online through the use of social media platforms and website..</p>
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

	<!-- FUN FACT -->
<!-- 	<div class="section cta" data-background=" {{ asset('images/dummy-img-1920x900-3.jpg') }} ">
		<div class="content-wrap content-wrap-2x">
			<div class="container">
				<div class="row">

					<div class="col-sm-3 col-md-3">
						<div class="rs-icon-funfact">
							<div class="icon">
								<i class="fa fa-file-text-o"></i>
							</div>
							<div class="body-content">
								<h2>12,280</h2>
								<p class="uk18">Complete</p>
							</div>
						</div>
					</div>

					<div class="col-sm-3 col-md-3">
						<div class="rs-icon-funfact">
							<div class="icon">
								<i class="fa fa-users"></i>
							</div>
							<div class="body-content">
								<h2>1,825</h2>
								<p class="uk18">Our Team</p>
							</div>
						</div>
					</div>

					<div class="col-sm-3 col-md-3">
						<div class="rs-icon-funfact">
							<div class="icon">
								<i class="fa fa-trophy"></i>
							</div>
							<div class="body-content">
								<h2>37</h2>
								<p class="uk18">Awards</p>
							</div>
						</div>
					</div>

					<div class="col-sm-3 col-md-3">
						<div class="rs-icon-funfact">
							<div class="icon">
								<i class="fa fa-male"></i>
							</div>
							<div class="body-content">
								<h2>256,861</h2>
								<p class="uk18">Volunteer</p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
 -->
	<!-- MEET UR VOLUUNTER -->
	<div class="section">
		<div class="content-wrap">
			<div class="container">
				<div class="row">

					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading">
							Meet <span>Our</span> Volunteer
						</h2>
					</div>

					<div class="col-sm-3 col-md-3">
						<div class="rs-team-1">
							<div class="media"><img src=" {{ asset('frontend/images/profiles/sauzar.jpg') }} " alt=""></div>
							<div class="body">
								<div class="title">A.A Sauzar</div>
								<div class="position">CEO & Founder</div>
								<ul class="social-icon">
									<li><a href="www.facebook.com/"><span class="fa fa-facebook"></span></a></li>
									<li><a href="www.twitter.com/"><span class="fa fa-twitter"></span></a></li>
									<li><a href="www.linkedin.com/"><span class="fa fa-google-plus"></span></a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-sm-3 col-md-3">
						<div class="rs-team-1">
							<div class="media"><img src=" {{ asset('frontend/images/profiles/taure.jpg') }} " alt=""></div>
							<div class="body">
								<div class="title">Drusila Ahmed Taure</div>
								<div class="position">Vice President</div>
								<ul class="social-icon">
									<li><a href="www.facebook.com/"><span class="fa fa-facebook"></span></a></li>
									<li><a href="www.twitter.com/"><span class="fa fa-twitter"></span></a></li>
									<li><a href="www.linkedin.com/"><span class="fa fa-google-plus"></span></a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-sm-3 col-md-3">
						<div class="rs-team-1">
							<div class="media"><img src=" {{ asset('frontend/images/profiles/mustapha.jpg') }} " alt=""></div>
							<div class="body">
								<div class="title">Mustapha Muhammad</div>
								<div class="position">Communication and Dissemination Manager/Coordinator </div>
								<ul class="social-icon">
									<li><a href="www.facebook.com/"><span class="fa fa-facebook"></span></a></li>
									<li><a href="www.twitter.com/"><span class="fa fa-twitter"></span></a></li>
									<li><a href="www.linkedin.com/"><span class="fa fa-google-plus"></span></a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-sm-3 col-md-3">
						<div class="promo-ads" data-background=" {{ ('frontend/images/20220.jpg') }} ">
							<div class="content font__color-white">
								<i class="fa fa-bullhorn"></i>
								<h4 class="title">Become a Volunteer</h4>
								<p class="uk16">Health Africa & world</p>
								<p class="font__color-white">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur pellentesque neque eget diam.</p>
								<div class="spacer-30"></div>
								<a href=" {{url('/contact')}} " class="btn btn-secondary">JOIN US NOW</a>
							</div>
						</div>
					</div>


				</div>
			</div>
		</div>
	</div>

	<!-- EVENTS -->
	<div class="section" data-background=" {{ asset('frontend/images/slider/team-front.jpg') }} ">
		<div class="content-wrap">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-6">

						<div class="event-pin">
							<h1 class="color-white">#Events</h1>
							<h3><a href="#">Meet Ocu Deyen</a></h3>
							<p>Sad ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent.</p>
							<a href="#" class="read-more">Read More...</a>
							<div class="more-event"><a href="#"><i class="fa fa-long-arrow-left"></i></a></div>
						</div>

					</div>

					<div class="col-sm-6 col-md-5 col-md-offset-1">
						<h2 class="section-heading light">
							<span>Upcoming</span> Events
						</h2>
						<p>With a wide range of activities that sauzar health foundation is engaed with from Teaching, Actioned tree planting, Mass sentization, one or more events take place every now and them, look out our latest events</p>
											
						<div class="list-events">
							<div class="box-event">
								<div class="meta-date">
									<div class="date">01</div>
									<div class="month">OCT</div>
								</div>
								<div class="body-content">
									<h4><a href="events-detail.html">Sauzar Health Foundation Workshop</a></h4>
									<div class="meta">
										<span class="date"><i class="fa fa-clock-o"></i>  09:00 am - 4:00 pm</span>
										<span class="location"><i class="fa fa-map-marker"></i> Kampala, Kansanga</span>
									</div>
									<p>The primary activity in this event is to expand the boarders of our movenment to reach the public ear, where the theme is "Eco frienfly environment, Sustainable habitable water bodies of Lake vicotia for greater good of Uganda". </p>
								</div>
							</div>
							<div class="box-event">
								<div class="meta-date">
									<div class="date">20</div>
									<div class="month">JAN</div>
								</div>
								<div class="body-content">
									<h4><a href="events-detail.html">Our volunteer</a></h4>
									<div class="meta">
										<span class="date"><i class="fa fa-clock-o"></i>  12:00 am - 5:00 pm</span>
										<span class="location"><i class="fa fa-map-marker"></i> Nigeria</span>
									</div>
									<p>General cleanup of the Mulago Children's Facility </p>
								</div>
							</div>
						</div>
						
					</div>

				</div>


			</div>
		</div>
	</div>

	<!-- OUR PARTNERS -->
	<div class="section">
		<div class="content-wrap">
			<div class="container">
				<div class="row">

					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading center">
							Our <span>Partners</span>
						</h2>
						<p class="subheading text-center">We work with other government and NGO organs to realize our vision.</p>
					</div>
					
				</div>
				<div class="row gutter-5">
					<div class="col-6 col-md-2">
						<a href="#"><img src=" {{ asset('frontend/images/partners/greenbondsnigeria.jpg') }} " alt="" class="img-fluid img-border"></a>
					</div>
					<div class="col-6 col-md-2">
						<a href="#"><img src=" {{ asset('frontend/images/partners/primaryhealthcare.jpg') }} " alt="" class="img-fluid img-border"></a>
					</div>
					<div class="col-6 col-md-2">
						<a href="#"><img src=" {{ asset('frontend/images/partners/niac.jpg') }} " alt="" class="img-fluid img-border"></a>
					</div>
					<div class="col-6 col-md-2">
						<a href="#"><img src=" {{ asset('frontend/images/partners/agricandruraldevelopment.jpg') }} " alt="" class="img-fluid img-border"></a>
					</div>
					<div class="col-6 col-md-2">
						<a href="#"><img src=" {{ asset('frontend/images/partners/power.jpg') }} " alt="" class="img-fluid img-border"></a>
					</div>
					<div class="col-6 col-md-2">
						<a href="#"><img src=" {{ asset('frontend/images/partners/ruralelectricfication.jpg') }} " alt="" class="img-fluid img-border"></a>
					</div>
					
				</div>

				</div>
			</div>
		</div>
	</div>

@endsection