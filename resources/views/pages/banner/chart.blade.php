@extends('pages.master')

@section('content')
	<!-- BANNER -->
	<div class="section banner-page" data-background="{{ asset('frontend/images/site/sauzar-presentation.jpg') }}">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page">Organisation Chart</div>
			</div>
			<div class="d-flex justify-content-center bd-highlight mb-3">
			    <nav aria-label="breadcrumb">
				  <ol class="breadcrumb ">
				    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Organisation Chart</li>
				  </ol>
				</nav>
		  	</div>
		</div>
    </div>   
    
    <div class="section">
        <div class="content-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <img src="{{ asset('frontend/images/site/chart.jpg') }}" alt="sauzarhealthfoundation orgnisation chart">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection