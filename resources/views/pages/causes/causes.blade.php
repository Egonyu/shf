@extends('pages.master')

@section('content')
		<!-- BANNER -->
	<div class="section banner-page" data-background="images/dummy-img-1920x300.jpg">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page">Cause</div>
			</div>
			<div class="d-flex justify-content-center bd-highlight mb-3">
			    <nav aria-label="breadcrumb">
				  <ol class="breadcrumb ">
				    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Cause</li>
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

					<div class="rs-nav-tabs">
						<ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
						  <li class="nav-item">
						    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Education</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Wildlife</a>
						  </li>
						</ul>
						<div class="tab-content" id="pills-tabContent">
						  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
						  	<div class="col-md-12">
						  		<div class="row">

						  			<!-- Item 1 -->
									<div class="col-sm-4 col-md-4">
							            <div class="box-fundraising">
						              		<div class="media">
						                		<img src="{{ asset('frontend/images/site/vaccination.jpg') }}" alt="">
						              		</div>
						              		<div class="body-content">
						              			<p class="title"><a href="cause-single.html">EDUCATION FOR SYRIAN CHILD</a></p>
						              			<div class="text">Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent.</div>
						              		</div>
							            </div>
							        </div>

							        <!-- Item 2 -->
									<div class="col-sm-4 col-md-4">
							            <div class="box-fundraising">
						              		<div class="media">
						                		<img src="{{ asset('frontend/images/site/presentation.jpg') }}" alt="">
						              		</div>
						              		<div class="body-content">
						              			<p class="title"><a href="cause-single.html">HOME FOR KAMPAR'S CHILD</a></p>
						              			<div class="text">Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent.</div>
						              		</div>
							            </div>
							        </div>

							        <!-- Item 3 -->
									<div class="col-sm-4 col-md-4">
							            <div class="box-fundraising">
						              		<div class="media">
						                		<img src="images/dummy-img-600x400.jpg" alt="">
						              		</div>
						              		<div class="body-content">
						              			<p class="title"><a href="cause-single.html">CLEAN WATER FOR SOUTH SUDAN'S</a></p>
						              			<div class="text">Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent.</div>
						              		</div>
							            </div>
							        </div>

							        <!-- Item 4 -->
									<div class="col-sm-4 col-md-4">
							            <div class="box-fundraising">
						              		<div class="media">
						                		<img src="images/dummy-img-600x400.jpg" alt="">
						              		</div>
						              		<div class="body-content">
						              			<p class="title"><a href="cause-single.html">EDUCATION FOR SYRIAN CHILD</a></p>
						              			<div class="text">Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent.</div>
						              		</div>
							            </div>
							        </div>

							        <!-- Item 5 -->
									<div class="col-sm-4 col-md-4">
							            <div class="box-fundraising">
						              		<div class="media">
						                		<img src="images/dummy-img-600x400.jpg" alt="">
						              		</div>
						              		<div class="body-content">
						              			<p class="title"><a href="cause-single.html">HOME FOR KAMPAR'S CHILD</a></p>
						              			<div class="text">Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent.</div>
						              		</div>
							            </div>
							        </div>
							        
							        <!-- Item 6 -->
									<div class="col-sm-4 col-md-4">
							            <div class="box-fundraising">
						              		<div class="media">
						                		<img src="images/dummy-img-600x400.jpg" alt="">
						              		</div>
						              		<div class="body-content">
						              			<p class="title"><a href="cause-single.html">CLEAN WATER FOR SOUTH SUDAN'S</a></p>
						              			<div class="text">Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent.</div>
						              		</div>
							            </div>
							        </div>

						  		</div>
						  	</div>

						  </div>
						  <!-- END TAB 1 CONTENT -->

						  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
						  	<div class="col-md-12">
						  		<div class="row">

									<!-- Item 7 -->
									<div class="col-sm-4 col-md-4">
							            <div class="box-fundraising">
						              		<div class="media">
						                		<img src="images/dummy-img-600x400.jpg" alt="">
						              		</div>
						              		<div class="body-content">
						              			<p class="title"><a href="cause-single.html">EDUCATION FOR SYRIAN CHILD</a></p>
						              			<div class="text">Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent.</div>
						              		</div>
							            </div>
							        </div>

							        <!-- Item 8 -->
									<div class="col-sm-4 col-md-4">
							            <div class="box-fundraising">
						              		<div class="media">
						                		<img src="images/dummy-img-600x400.jpg" alt="">
						              		</div>
						              		<div class="body-content">
						              			<p class="title"><a href="cause-single.html">HOME FOR KAMPAR'S CHILD</a></p>
						              			<div class="text">Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent.</div>
						              		</div>
							            </div>
							        </div>

							        <!-- Item 9 -->
									<div class="col-sm-4 col-md-4">
							            <div class="box-fundraising">
						              		<div class="media">
						                		<img src="images/dummy-img-600x400.jpg" alt="">
						              		</div>
						              		<div class="body-content">
						              			<p class="title"><a href="cause-single.html">CLEAN WATER FOR SOUTH SUDAN'S</a></p>
						              			<div class="text">Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent.</div>
						              		</div>
							            </div>
							        </div>

							        <!-- Item 10 -->
									<div class="col-sm-4 col-md-4">
							            <div class="box-fundraising">
						              		<div class="media">
						                		<img src="images/dummy-img-600x400.jpg" alt="">
						              		</div>
						              		<div class="body-content">
						              			<p class="title"><a href="cause-single.html">EDUCATION FOR SYRIAN CHILD</a></p>
						              			<div class="text">Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent.</div>
						              		</div>
							            </div>
							        </div>

							        <!-- Item 11 -->
									<div class="col-sm-4 col-md-4">
							            <div class="box-fundraising">
						              		<div class="media">
						                		<img src="images/dummy-img-600x400.jpg" alt="">
						              		</div>
						              		<div class="body-content">
						              			<p class="title"><a href="cause-single.html">HOME FOR KAMPAR'S CHILD</a></p>
						              			<div class="text">Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent.</div>
						              		</div>
							            </div>
							        </div>

							        <!-- Item 12 -->
									<div class="col-sm-4 col-md-4">
							            <div class="box-fundraising">
						              		<div class="media">
						                		<img src="images/dummy-img-600x400.jpg" alt="">
						              		</div>
						              		<div class="body-content">
						              			<p class="title"><a href="cause-single.html">CLEAN WATER FOR SOUTH SUDAN'S</a></p>
						              			<div class="text">Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent.</div>
						              		</div>
							            </div>
							        </div>

						  		</div>
						  	</div>

						  </div>
						  <!-- END TAB 2 CONTENT -->
						</div>
					</div>


					
				</div>

			</div>
		</div>
	</div>
@endsection