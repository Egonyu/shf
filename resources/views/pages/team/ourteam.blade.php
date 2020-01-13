@extends('pages.master')

@section('content')
<!-- BANNER -->
<div class="section banner-page" data-background=" {{ asset('frontend/images/site/conf.jpg') }} ">
	<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page">Management Team</div>
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
					<div class="col-sm-4 col-md-4">
						<div class="rs-team-1">
							<div class="media"><img src=" {{ asset('frontend/images/profiles/abu.png') }} " alt=""></div>
							<div class="body">
								<div class="title">ABUSUFYAN AYYUB</div>
								<div class="position">CEO & Founder</div>
							</div>
						</div>
					</div>

					<div class="col-sm-4 col-md-4">
						<div class="rs-team-1">
							<div class="media"><img src="{{ asset('frontend/ourteam/faskari.jpg') }}" alt=""></div>
							<div class="body">
								<div class="title">MUBARAK ALHASSAN FASKARI</div>
								<div class="position">Direcctor Finance</div>
							</div>
						</div>
					</div>

					
					<div class="col-sm-4 col-md-4">
						<div class="rs-team-1">
							<div class="media"><img src="{{ asset('frontend/ourteam/Bila.jpg') }}" alt=""></div>
							<div class="body">
								<div class="title">ABUBAKAR BILA MUHAMMAD</div>
								<div class="position">Chairman Advisory Committee</div>
							</div>
						</div>
					</div>

					<div class="col-sm-4 col-md-4">
						<div class="rs-team-1">
							<div class="media"><img src="{{ asset('frontend/ourteam/drucila.jpg') }} "" alt=""></div>
							<div class="body">
								<div class="title">AHMED DRUSILA TAURE</div>
								<div class="position">Vice President</div>
							</div>
						</div>
					</div>

					<div class="col-sm-4 col-md-4">
						<div class="rs-team-1">
							<div class="media"><img src=" {{ asset('frontend/images/profiles/tata.JPG') }} " alt=""></div>
							<div class="body">
								<div class="title">MUSTAPHA MUHAMMAD</div>
								<div class="position">Northern Coordiantor, Nigeria</div>
							</div>
						</div>
					</div>

					<div class="col-sm-4 col-md-4">
						<div class="rs-team-1">
							<div class="media"><img src="{{ asset('frontend/ourteam/ade.jpg') }}" alt=""></div>
							<div class="body">
								<div class="title">ADEDEJI ABDULHAMEED ADEOLU</div>
								<div class="position">Southern Coordinator, Nigeria</div>
							</div>
						</div>
					</div>

					<div class="col-sm-4 col-md-4">
						<div class="rs-team-1">
							<div class="media"><img src="{{ asset('frontend/ourteam/khalil.jpg') }}" alt=""></div>
							<div class="body">
								<div class="title">IBRAHIM MUHAMMAD</div>
								<div class="position">Director Project Planning, Management and Implementation</div>
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