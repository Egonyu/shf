@extends('pages.master')

@section('content')
	<!-- BANNER -->
	<div class="section banner-page" data-background="{{ asset('frontend/images/site/group.jpg') }}">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page">Reach Us On</div>
			</div>
			<div class="d-flex justify-content-center bd-highlight mb-3">
			    <nav aria-label="breadcrumb">
				  <ol class="breadcrumb ">
				    <li class="breadcrumb-item"><a href=" {{ url('/') }} ">Home</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Contact</li>
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
					
					<div class="col-sm-8 col-md-8">
						<!-- MAPS -->
						<div class="maps-wraper">
							<div id="cd-zoom-in"></div>
							<div id="cd-zoom-out"></div>
							<div id="maps" class="maps" data-lat="8.9036856" data-lng="11.3537515" data-marker="images/cd-icon-location.png">
							</div>
						</div>
						<div class="spacer-90"></div>
					</div>

					<div class="col-sm-4 col-md-4">
						<h2 class="section-heading">
							Contact Details
						</h2>

						<div class="rs-icon-info">
							<div class="info-icon">
								<i class="fa fa-map-marker"></i>
							</div>
							<div class="info-text">Jalingo, Taraba State, Nigeria</div>
						</div>

						<div class="rs-icon-info">
							<div class="info-icon">
								<i class="fa fa-envelope"></i>
							</div>
							<div class="info-text">info@sauzarhealthfoundation.org</div>
						</div>

						<div class="rs-icon-info">
							<div class="info-icon">
								<i class="fa fa-phone"></i>
							</div>
							<div class="info-text">+234 (0) 703 486 1488</div>
						</div>

						
					</div>

					<div class="clearfix"></div>
					
					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading">
							Send a <span>Message</span>
						</h2>
						<div class="section-subheading">Contact us today for any inquiries or support as through your donations we can always achieve the best for our planet together.</div>
						<div class="margin-bottom-50"></div>

						<div class="content">
							@if (session('status'))
		                        <div class="alert alert-success">
		                            {{ session('status') }}
		                        </div>
		                    @endif
		                    @if (session('warning'))
		                        <div class="alert alert-warning">
		                            {{ session('warning') }}
		                        </div>
		                    @endif
							<form method="post" action="/contact" data-toggle="validator" novalidate="true">
								{{ csrf_field() }}
								<div class="row">
									<div class="col-sm-6 col-md-6">
										<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
											<input type="text" name="name" class="form-control" id="p_name" placeholder="Enter Name" required="">
											@if ($errors->has('name'))
												<span class="help-block">
													<strong>{{ $errors->first('name') }}</strong>
												</span>
											@endif
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6">
										<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
											<input type="email" name="email" class="form-control" id="p_email" placeholder="Enter Email" required>
											@if ($errors->has('email'))
												<span class="help-block">
													<strong>{{ $errors->first('email') }}</strong>
												</span>
									 		@endif
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6">
										<div class="form-group {{ $errors->has('Subject') ? ' has-error' : '' }}">
											<input type="text" name="subject" class="form-control" id="p_subject" placeholder="Subject" required>
											@if ($errors->has('subject'))
												<span class="help-block">
													<strong>{{ $errors->first('subject') }}</strong>
												</span>
									 		@endif
											<div class="help-block with-errors"></div>
										</div>
									</div>
								</div>
								<div class="form-group {{ $errors->has('message') ? ' has-error' : '' }}">
									 <textarea id="p_message" name="message" class="form-control" rows="6" placeholder="Enter Your Message" required></textarea>
									@if ($errors->has('message'))
										<span class="help-block">
											<strong>{{ $errors->first('message') }}</strong>
										</span>
								    @endif
									<div class="help-block with-errors"></div>
								</div>
								<div class="form-group">
									<div id="success"></div>
									<button type="submit" class="btn btn-primary" value="Send Message" name="btnSubmit">SEND MESSAGE</button>
								</div>
							</form>
							<div class="margin-bottom-50"></div>
							<p><em>We will get back to you as soon as possible</em></p>
						 </div>
					</div>

				</div>
				
			</div>
		</div>
	</div>	
@stop