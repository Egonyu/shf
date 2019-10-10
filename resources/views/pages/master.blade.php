<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sauzar Health Foundation</title>
    <meta name="description" content="Strengthening advocay in health issues.">
    <meta name="keywords" content="campaign, cause, charity, donate, donations, event, foundation, fund, fundraising, kids, ngo, non-profit, organization, volunteer">
    <meta name="author" content="shf.org"> 
	
	<!-- ==============================================
	Favicons
	=============================================== -->
	<link rel="shortcut icon" href="frontend/images/favicon/favicon.ico">
	<link rel="apple-touch-icon" href="frontend/images/favicon/favicon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="frontend/images/favicon/favicon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="frontend/images/favicon/favicon-114x114.png">
	
	<!-- ==============================================
	CSS VENDOR
	=============================================== -->
	<link rel="stylesheet" type="text/css" href=" {{ asset('frontend/css/vendor/bootstrap.min.css') }} " />
	<link rel="stylesheet" type="text/css" href=" {{ asset('frontend/css/vendor/font-awesome.min.css') }} ">
	<link rel="stylesheet" type="text/css" href=" {{ asset('frontend/css/vendor/owl.carousel.min.css') }} ">
	<link rel="stylesheet" type="text/css" href=" {{ asset('frontend/css/vendor/owl.theme.default.min.css') }} ">
	<link rel="stylesheet" type="text/css" href=" {{ asset('frontend/css/vendor/magnific-popup.css') }} ">
	<link rel="stylesheet" type="text/css" href=" {{ asset('frontend/css/vendor/animate.min.css') }} ">
	
	<!-- ==============================================
	Custom Stylesheet
	=============================================== -->
	<link rel="stylesheet" type="text/css" href=" {{ asset('frontend/css/style.css') }} " />
	
    <script src=" {{ ('frontend/js/vendor/modernizr.min.js') }} "></script>

</head>

<body>

	<!-- LOAD PAGE --> 
	<div class="animationload">
		<div class="loader"></div>
	</div>
	
	<!-- BACK TO TOP SECTION -->
	<a href="#0" class="cd-top cd-is-visible cd-fade-out">Top</a>

@include('pages.layouts.header')
 
@yield('content')
    <!-- CTA -->
    <div class="section cta">
        <div class="content-wrap-20">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="cta-1">
                            <div class="body-text">
                                <h3>Join your hand with us for a better life and beautiful future.</h3>
                            </div>
                            <div class="body-action">
                                <a href="#" class="btn btn-secondary">DONATE NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@include('pages.layouts.footer')
	
	<!-- JS VENDOR -->
	<script src=" {{ asset('frontend/js/vendor/jquery.min.js') }} "></script>
	<script src=" {{ asset('frontend/js/vendor/bootstrap.min.js') }} "></script>
	<script src=" {{ asset('frontend/js/vendor/owl.carousel.js') }} "></script>
	<script src=" {{ asset('frontend/js/vendor/jquery.magnific-popup.min.js') }} "></script>

	<!-- SENDMAIL -->
	<script src=" {{ asset('frontend/js/vendor/validator.min.js') }} "></script>
	<script src=" {{ asset('frontend/js/vendor/form-scripts.js') }} "></script>
	
	<!-- MAIN JS -->
	<script src=" {{ asset('frontend/js/script.js') }} "></script>

		
</body>
</html>