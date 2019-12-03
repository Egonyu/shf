@extends('pages.master')

@section('content')
<!-- BANNER -->
<div class="section banner-page" data-background=" {{ asset('frontend/images/site/conf.jpg') }} ">
	<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page">Team Members</div>
			</div>
			<div class="d-flex justify-content-center bd-highlight mb-3">
			    <nav aria-label="breadcrumb">
				  <ol class="breadcrumb ">
				    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Our Team</li>
				  </ol>
				</nav>
		  	</div>
		</div>
	</div>

	<!-- HOW TO HELP US -->
	<div class="section">
		<div class="content-wrap">
			<div class="container">
				<div class="row">

					<div class="col-sm-3 col-md-3">
						<div class="rs-team-1">
							<div class="media"><img src="{{ asset('frontend/images/profiles/cbt.jpg') }}" alt=""></div>
							<div class="body">
								<div class="title">ABUBAKAR BILA MUHAMMAD</div>
								<div class="position">Chairman Board Of Trustee</div>
							</div>
						</div>
					</div>

					<div class="col-sm-3 col-md-3">
						<div class="rs-team-1">
							<div class="media"><img src=" {{ asset('frontend/images/profiles/abu.png') }} " alt=""></div>
							<div class="body">
								<div class="title">Abusufyan Ayyub</div>
								<div class="position">CEO & Founder</div>
							</div>
						</div>
					</div>

					<div class="col-sm-3 col-md-3">
						<div class="rs-team-1">
							<div class="media"><img src="{{ asset('frontend/images/profiles/drull.jpg') }} "" alt=""></div>
							<div class="body">
								<div class="title">Ahmed Drusila Taure</div>
								<div class="position">Vice President</div>
							</div>
						</div>
					</div>

					<div class="col-sm-3 col-md-3">
						<div class="rs-team-1">
							<div class="media"><img src="images/dummy-img-400x400.jpg" alt=""></div>
							<div class="body">
								<div class="title">Ibrahim Khalil</div>
								<div class="position">Director Project Planning, Management & Implementation</div>
							</div>
						</div>
					</div>

					<div class="col-sm-3 col-md-3">
						<div class="rs-team-1">
							<div class="media"><img src=" {{ asset('frontend/images/profiles/tata.JPG') }} " alt=""></div>
							<div class="body">
								<div class="title">MUSTAPHA MUHAMMAD</div>
								<div class="position">Norther Coordiantor, Nigeria</div>
							</div>
						</div>
					</div>

					<div class="col-sm-3 col-md-3">
						<div class="rs-team-1">
							<div class="media"><img src="images/dummy-img-400x400.jpg" alt=""></div>
							<div class="body">
								<div class="title">Adedeji AbdulHameed Adeolu</div>
								<div class="position">Southern Coordinator, Nigeria</div>
							</div>
						</div>
					</div>

					<div class="col-sm-3 col-md-3">
						<div class="rs-team-1">
							<div class="media"><img src="images/dummy-img-400x400.jpg" alt=""></div>
							<div class="body">
								<div class="title">Mubarak Alhassan Faskari</div>
								<div class="position">Public Relations Officer</div>
							</div>
						</div>
					</div>

				</div>

				<div class="row">

					<div class="cta-info">
						<h1 class="section-heading center">
							Join <span>Our</span> Team?
						</h1>
						<p>Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste natus error</p>
						<div class="spacer-50"></div>
						<a href=" {{ url('/about') }} " class="btn btn-primary margin-btn">LEARN MORE</a> <a href=" {{ url('/contact') }} " class="btn btn-secondary margin-btn">JOIN US NOW</a>	
					</div>

				</div>

			</div>
		</div>
	</div>
@stop