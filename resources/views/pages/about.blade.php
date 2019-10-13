@extends('pages.master')

@section('content')
	<!-- BANNER -->
	<div class="section banner-page" data-background="images/dummy-img-1920x300.jpg">
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

						<p>Sauzar Health Foundation was established by our Founding Director Dr. A. A. Sauzar in the year 2018 (Ideas and Paper works) and later developed to what you are seeing before you in May 2019. The foundation is located in Jalingo, Taraba State of Nigeria with ten (10) different coordinators (branches) in ten different states within the country. </p>
						<p>The foundation reached beyond Nigeria as it ha strong service delivery online through the use of social media platforms and website.</p>
						<div class="spacer-30"></div>
						<a href=" {{ url('/our-team') }} " class="btn btn-primary">MEET OUR TEAMS</a>
						<div class="spacer-30"></div>

					</div>

					<div class="col-sm-6 col-md-6">
						
						<img src="{{ asset('frontend/images/slider/solar-energy.jpg') }}" alt="" class="img-fluid img-border">

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
								<h2>12,280</h2>
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
								<h2>1,825</h2>
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
								<h2>37</h2>
								<p class="uk18">Awards</p>
							</div>
						</div>
					</div>

					<div class="col-sm-3 col-md-3">
						<div class="rs-icon-funfact style-2">
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

	<div class="section cta" data-background="{{ asset('frontend/images/slider/clean-water.jpg') }}">
		<div class="content-wrap">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<div class="cta-info">
						<h1 class="section-heading light no-after">
							<span>We Help Many</span> People
						</h1>
						<h3 class="color-primary">Want to Become a Volunteer</h3>

						<div class="spacer-10"></div>
						<p>Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent. Sed ut perspiciatis unde omnis iste natus error sit .</p>

						<a href="#" class="btn btn-light margin-btn">LEARN MORE</a> <a href="#" class="btn btn-primary margin-btn">JOIN US NOW</a>	
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- WHY CHOOSE US -->
	<div class="section">
		<div class="content-wrap">
			<div class="container">
				<div class="row">

					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading">
							Why <span>Choose</span> Us
						</h2>
					</div>

					<div class="col-sm-6 col-md-6">
						<p>Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent. Sed ut perspiciatis unde omnis iste natus error sit .</p>
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
						          Earn Impact Points
						        </button>
						      </h4>
						    </div>
						    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body">
						        Create and publilsh dynamic websites for desktop, tablet, and mobile devices that meet the latest web standards- without writing code. Design freely using familiar tools and hundreds of web fonts. easily add interactivity, including slide shows, forms, and more.
						      </div>
						    </div>
						  </div>

							<!-- Item 2 -->
						  <div class="card mb-2">
						    <div class="card-header" id="headingTwo">
						      <h4 class="title">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						          No Goal Requirements
						        </button>
						      </h4>
						    </div>
						    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
						      <div class="card-body">
						        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						      </div>
						    </div>
						  </div>
							
							<!-- Item 3 -->
						  <div class="card mb-2">
						    <div class="card-header" id="headingThree">
						      <h4 class="title">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						          Most Trusted
						        </button>
						      </h4>
						    </div>
						    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						      <div class="card-body">
						        <p>Unzip the file, locate muse file and double click the file and you will directly to adobe muse. Next step you can modifications our template, you can customize color, text, font, content, logo and image with your need using familiar tools on adobe muse without writing any code.</p>
								<p>You can't re-distribute the Item as stock, in a tool or template, or with source files. You can't re-distribute or make available the Item as-is or with superficial modifications. These things are not allowed even if the re-distribution is for Free.</p>
						      </div>
						    </div>
						  </div>

						  <!-- Item 4 -->
						  <div class="card mb-2">
						    <div class="card-header" id="headingFour">
						      <h4 class="title">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
						          Your Charitable Life
						        </button>
						      </h4>
						    </div>
						    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
						      <div class="card-body">
						        <p>Unzip the file, locate muse file and double click the file and you will directly to adobe muse. Next step you can modifications our template, you can customize color, text, font, content, logo and image with your need using familiar tools on adobe muse without writing any code.</p>
								<p>You can't re-distribute the Item as stock, in a tool or template, or with source files. You can't re-distribute or make available the Item as-is or with superficial modifications. These things are not allowed even if the re-distribution is for Free.</p>
						      </div>
						    </div>
						  </div>

						  <!-- Item 5 -->
						  <div class="card mb-2">
						    <div class="card-header" id="headingFive">
						      <h4 class="title">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
						          Daily Report
						        </button>
						      </h4>
						    </div>
						    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
						      <div class="card-body">
						        <p>Unzip the file, locate muse file and double click the file and you will directly to adobe muse. Next step you can modifications our template, you can customize color, text, font, content, logo and image with your need using familiar tools on adobe muse without writing any code.</p>
								<p>You can't re-distribute the Item as stock, in a tool or template, or with source files. You can't re-distribute or make available the Item as-is or with superficial modifications. These things are not allowed even if the re-distribution is for Free.</p>
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
						<p class="subheading text-center">Lorem ipsum dolor sit amet, onsectetur adipiscing cons ectetur nulla. Sed at ullamcorper risus.</p>
					</div>

					<div class="col-sm-6 col-md-6">
						<div class="testimonial-1">
		              		<div class="media">
	              				<img src="images/dummy-img-400x400.jpg" alt="" class="img-fluid">
	              			</div>
			              	<div class="body">
			                	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. Mauris ornare tortor in eleifend blanditullam ut ligula et neque. Nulla interdum dapibus erat nec elementum. </p>
			                	<div class="title">John Doel</div>
			                	<div class="company">Businessman</div>
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
						<p class="subheading text-center">Lorem ipsum dolor sit amet, onsectetur adipiscing cons ectetur nulla. Sed at ullamcorper risus.</p>
					</div>
					
				</div>
				<div class="row gutter-5">
					<div class="col-6 col-md-2">
						<a href="#"><img src="images/dummy-img-200x125.jpg" alt="" class="img-fluid img-border"></a>
					</div>
					<div class="col-6 col-md-2">
						<a href="#"><img src="images/dummy-img-200x125.jpg" alt="" class="img-fluid img-border"></a>
					</div>
					<div class="col-6 col-md-2">
						<a href="#"><img src="images/dummy-img-200x125.jpg" alt="" class="img-fluid img-border"></a>
					</div>
					<div class="col-6 col-md-2">
						<a href="#"><img src="images/dummy-img-200x125.jpg" alt="" class="img-fluid img-border"></a>
					</div>
					<div class="col-6 col-md-2">
						<a href="#"><img src="images/dummy-img-200x125.jpg" alt="" class="img-fluid img-border"></a>
					</div>
					<div class="col-6 col-md-2">
						<a href="#"><img src="images/dummy-img-200x125.jpg" alt="" class="img-fluid img-border"></a>
					</div>

				</div>
			</div>
		</div>
	</div>
@endsection