@extends('pages.master')

@section('content')
	<!-- BANNER -->
	<div class="section banner-page" data-background="images/dummy-img-1920x300.jpg">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page">Gallery</div>
			</div>
			<div class="d-flex justify-content-center bd-highlight mb-3">
			    <nav aria-label="breadcrumb">
				  <ol class="breadcrumb ">
				    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Gallery</li>
				  </ol>
				</nav>
		  	</div>
		</div>
	</div>

		<!-- OUR GALLERY -->
	<div class="section">
		<div class="content-wrap">
			<div class="container">

				<div class="row">
					<div class="col-sm-12 col-md-12">
						<div class="row popup-gallery gutter-5">
							<!-- ITEM 1 -->
							<div class="col-xs-6 col-md-3">
								<div class="box-gallery">
									<a href="{{ asset('frontend/images/gallery/1.jpg') }}" title="Gallery #1">
										<img src="{{ asset('frontend/images/gallery/1.jpg') }}" alt="" class="img-fluid">
										<div class="project-info">
											<div class="project-icon">
												<span class="fa fa-search"></span>
											</div>
										</div>
									</a>
								</div>
							</div>
							<!-- ITEM 2 -->
							<div class="col-xs-6 col-md-3">
								<div class="box-gallery">
									<a href=" {{ asset('frontend/images/gallery/2.JPG') }} " title="Gallery #2">
										<img src="{{ asset('frontend/images/gallery/2.jpg') }}" alt="" class="img-fluid">
										<div class="project-info">
											<div class="project-icon">
												<span class="fa fa-search"></span>
											</div>
										</div>
									</a>
								</div>
							</div>
							<!-- ITEM 3 -->
							<div class="col-xs-6 col-md-3">
								<div class="box-gallery">
									<a href="{{ asset('frontend/images/gallery/3.JPG') }}" title="Gallery #3">
										<img src="{{ asset('frontend/images/gallery/3.jpg') }}" alt="" class="img-fluid">
										<div class="project-info">
											<div class="project-icon">
												<span class="fa fa-search"></span>
											</div>
										</div>
									</a>
								</div>
							</div>
							<!-- ITEM 4 -->
							<div class="col-xs-6 col-md-3">
								<div class="box-gallery">
									<a href="{{ asset('frontend/images/gallery/4.JPG') }}" title="Gallery #4">
										<img src="{{ asset('frontend/images/gallery/4.JPG') }}" alt="" class="img-fluid">
										<div class="project-info">
											<div class="project-icon">
												<span class="fa fa-search"></span>
											</div>
										</div>
									</a>
								</div>
							</div>
							<!-- ITEM 5 -->
							<div class="col-xs-6 col-md-3">
								<div class="box-gallery">
									<a href="{{ asset('frontend/images/gallery/5.JPG') }}" title="Gallery #5">
										<img src="{{ asset('frontend/images/gallery/5.JPG') }}" alt="" class="img-fluid">
										<div class="project-info">
											<div class="project-icon">
												<span class="fa fa-search"></span>
											</div>
										</div>
									</a>
								</div>
							</div>
							<!-- ITEM 6 -->
							<div class="col-xs-6 col-md-3">
								<div class="box-gallery">
									<a href="{{ asset('frontend/images/gallery/6.JPG') }}" title="Gallery #6">
										<img src="{{ asset('frontend/images/gallery/6.JPG') }}" alt="" class="img-fluid">
										<div class="project-info">
											<div class="project-icon">
												<span class="fa fa-search"></span>
											</div>
										</div>
									</a>
								</div>
							</div>
							<!-- ITEM 7 -->
							<div class="col-xs-6 col-md-3">
								<div class="box-gallery">
									<a href="{{ asset('frontend/images/gallery/7.JPG') }}" title="Gallery #7">
										<img src="{{ asset('frontend/images/gallery/7.JPG') }}" alt="" class="img-fluid">
										<div class="project-info">
											<div class="project-icon">
												<span class="fa fa-search"></span>
											</div>
										</div>
									</a>
								</div>
							</div>
							<!-- ITEM 8 -->
							<div class="col-xs-6 col-md-3">
								<div class="box-gallery">
									<a href="{{ asset('frontend/images/gallery/8.JPG') }}" title="Gallery #8">
										<img src="{{ asset('frontend/images/gallery/8.JPG') }}" alt="" class="img-fluid">
										<div class="project-info">
											<div class="project-icon">
												<span class="fa fa-search"></span>
											</div>
										</div>
									</a>
								</div>
							</div>
							<!-- ITEM 9 -->
							<div class="col-xs-6 col-md-3">
								<div class="box-gallery">
									<a href="{{ asset('frontend/images/gallery/9.JPG') }}" title="Gallery #9">
										<img src="{{ asset('frontend/images/gallery/9.JPG') }}" alt="" class="img-fluid">
										<div class="project-info">
											<div class="project-icon">
												<span class="fa fa-search"></span>
											</div>
										</div>
									</a>
								</div>
							</div>
							<!-- ITEM 10 -->
							<div class="col-xs-6 col-md-3">
								<div class="box-gallery">
									<a href="{{ asset('frontend/images/gallery/10.JPG') }}" title="Gallery #10">
										<img src="{{ asset('frontend/images/gallery/10.JPG') }}" alt="" class="img-fluid">
										<div class="project-info">
											<div class="project-icon">
												<span class="fa fa-search"></span>
											</div>
										</div>
									</a>
								</div>
							</div>
							<!-- ITEM 11 -->
							<div class="col-xs-6 col-md-3">
								<div class="box-gallery">
									<a href="{{ asset('frontend/images/gallery/11.jpg') }}" title="Gallery #11">
										<img src="{{ asset('frontend/images/gallery/11.jpg') }}" alt="" class="img-fluid">
										<div class="project-info">
											<div class="project-icon">
												<span class="fa fa-search"></span>
											</div>
										</div>
									</a>
								</div>
							</div>
							<!-- ITEM 12 -->
							<div class="col-xs-6 col-md-3">
								<div class="box-gallery">
									<a href="{{ asset('frontend/images/gallery/12.jpg') }}" title="Gallery #12">
										<img src="{{ asset('frontend/images/gallery/12.jpg') }}" alt="" class="img-fluid">
										<div class="project-info">
											<div class="project-icon">
												<span class="fa fa-search"></span>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>
@stop