@extends('pages.master')

@section('content')
	<!-- BANNER -->
	<div class="section banner-page" data-background="{{ asset('frontend/images/site/group.jpg') }}">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page">Volunteer</div>
			</div>
			<div class="d-flex justify-content-center bd-highlight mb-3">
			    <nav aria-label="breadcrumb">
				  <ol class="breadcrumb ">
				    <li class="breadcrumb-item"><a href=" {{ url('/') }} ">Home</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Volunteer</li>
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
					
					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading">
							Submit  <span>Volunteer Application</span>
						</h2>
						<div class="section-subheading">Fill our volunteer form.</div>
						<div class="margin-bottom-50"></div>

						<div class="content">
							@if (session('status'))
		                        <div class="alert alert-success">
		                            {{ session('status') }}
		                        </div>
		                    @endif
		                    @if (session('warning'))
		                        <div class="alert alert-warning" style="color:red">
		                            {{ session('warning') }}
		                        </div>
		                    @endif
							<form method="post" action="{{ route('volunteer.store') }}" data-toggle="validator" novalidate="true">
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
										<div class="form-group {{ $errors->has('address') ? ' has-error' : '' }}">
											<input type="text" name="address" class="form-control" id="p_address" placeholder="Enter Your Address" required>
											@if ($errors->has('address'))
												<span class="help-block">
													<strong>{{ $errors->first('address') }}</strong>
												</span>
									 		@endif
											<div class="help-block with-errors"></div>
										</div>
									</div>
                                </div>
                                
                                <div class="row">
									<div class="col-sm-6 col-md-6">
										<div class="form-group {{ $errors->has('city') ? ' has-error' : '' }}">
											<input type="text" name="city" class="form-control" id="p_city" placeholder="Enter Your City" required="">
											@if ($errors->has('city'))
												<span class="help-block">
													<strong>{{ $errors->first('city') }}</strong>
												</span>
											@endif
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6">
										<div class="form-group {{ $errors->has('state') ? ' has-error' : '' }}">
											<input type="state" name="state" class="form-control" id="p_state" placeholder="Enter Your State" required>
											@if ($errors->has('state'))
												<span class="help-block">
													<strong>{{ $errors->first('state') }}</strong>
												</span>
									 		@endif
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6">
										<div class="form-group {{ $errors->has('zip') ? ' has-error' : '' }}">
											<input type="text" name="zip" class="form-control" id="p_zip" placeholder="Enter Your Zip Code" required>
											@if ($errors->has('zip'))
												<span class="help-block">
													<strong>{{ $errors->first('zip') }}</strong>
												</span>
									 		@endif
											<div class="help-block with-errors"></div>
										</div>
									</div>
                                </div>
                                
                                <div class="row">
									<div class="col-sm-6 col-md-6">
										<div class="form-group {{ $errors->has('phoneNo') ? ' has-error' : '' }}">
											<input type="text" name="phoneNo" class="form-control" id="p_phoneNo" placeholder="Enter Phone Number" required="">
											@if ($errors->has('phoneNo'))
												<span class="help-block">
													<strong>{{ $errors->first('phoneNo') }}</strong>
												</span>
											@endif
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6">
										<div class="form-group {{ $errors->has('position') ? ' has-error' : '' }}">
											<input type="position" name="position" class="form-control" id="p_position" placeholder="Enter Your Current Position" required>
											@if ($errors->has('position'))
												<span class="help-block">
													<strong>{{ $errors->first('position') }}</strong>
												</span>
									 		@endif
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6">
										<div class="form-group {{ $errors->has('skills') ? ' has-error' : '' }}">
											<input type="text" name="skills" class="form-control" id="p_skills" placeholder="Choose Your Skill" required>
											@if ($errors->has('skills'))
												<span class="help-block">
													<strong>{{ $errors->first('skills') }}</strong>
												</span>
									 		@endif
											<div class="help-block with-errors"></div>
										</div>
									</div>
                                </div>
                                
                                <div class="row">
									<div class="col-sm-6 col-md-6">
										<div class="form-group {{ $errors->has('areaofinterest') ? ' has-error' : '' }}">
											<input type="text" name="areaofinterest" class="form-control" id="p_areaofinterest" placeholder="Enter Your Area Of Interest" required="">
											@if ($errors->has('areaofinterest'))
												<span class="help-block">
													<strong>{{ $errors->first('areaofinterest') }}</strong>
												</span>
											@endif
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6">
										<div class="form-group {{ $errors->has('emergency_contact') ? ' has-error' : '' }}">
											<input type="emergency_contact" name="emergency_contact" class="form-control" id="p_emergency_contact" placeholder="Enter Emergency Contact" required>
											@if ($errors->has('emergency_contact'))
												<span class="help-block">
													<strong>{{ $errors->first('emergency_contact') }}</strong>
												</span>
									 		@endif
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6">
										<div class="form-group {{ $errors->has('physical_limitation') ? ' has-error' : '' }}">
											<input type="text" name="physical_limitation" class="form-control" id="p_physical_limitation" placeholder="Are You Physically Diabled?" required>
											@if ($errors->has('physical_limitation'))
												<span class="help-block">
													<strong>{{ $errors->first('physical_limitation') }}</strong>
												</span>
									 		@endif
											<div class="help-block with-errors"></div>
										</div>
									</div>
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