	<!-- HEADER -->
    <div class="header header-2">

	    <!-- NAVBAR SECTION -->
		<div class="navbar-main">
			<div class="container">
			    <nav class="navbar navbar-expand-lg">
			        <a class="navbar-brand" href=" {{ url('/') }} ">
						<img src=" {{ asset('frontend/images/logo.png') }} " alt="sauzarhealthfoundation" />
					</a>
			        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			            <span class="navbar-toggler-icon"></span>
			        </button>
			        <div class="collapse navbar-collapse" id="navbarNavDropdown">
			            <ul class="navbar-nav ml-auto">
			                <li class="nav-item">
			                    <a class="nav-link  active" href=" {{ url('/') }} ">HOME</a>
			                </li>
			               
			                <li class="nav-item dropdown">
			                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          ABOUT
						        </a>
			                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			                    	<a class="dropdown-item" href=" {{ url('/about') }} ">ABOUT US</a>
	          						<a class="dropdown-item" href=" {{ asset('files/OperationalPolicy.pdf') }} ">OERATIONAL POLICY</a>
			                    	<a class="dropdown-item" href=" {{ url('/about') }} ">CONSTITUTION</a>
	          						<a class="dropdown-item" href=" {{ route('ourTeam') }} ">OUR TEAM</a>
							    </div>
			                </li>
			                <li class="nav-item dropdown">
			                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          PROGRAMS
						        </a>
			                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			                    	<a class="dropdown-item" href=" {{ url('/about') }} ">EDUCATION</a>
	          						<a class="dropdown-item" href=" {{ url('/our-team') }} ">SANITATION</a>
	          						<a class="dropdown-item" href=" {{ url('/our-team') }} ">POLLUTION</a>
	          						<a class="dropdown-item" href=" {{ url('/our-team') }} ">POLYTHENE FREE ENVIRONMENT</a>
	          						<a class="dropdown-item" href=" {{ url('/our-team') }} ">EMPOWERMENT</a>
	          						<a class="dropdown-item" href=" {{ url('/our-team') }} ">GARBAGE RECYCLING</a>
	          						<a class="dropdown-item" href=" {{ url('/our-team') }} ">DRUG ABUSE ENLIGHTMENT PROGRAMMES</a>
							    </div>
							</li>
			                <li class="nav-item">
			                    <a class="nav-link" href=" {{ url('/causes') }} ">CAMPAIGNS</a>
			                </li>
			                
			                <li class="nav-item">
			                    <a class="nav-link" href=" {{ url('/gallery') }} ">GALLERY</a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link" href=" {{ url('/blog') }} ">BLOG</a>
							</li>
							
							<li class="nav-item dropdown">
			                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          CAREER
						        </a>
			                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			                    	<a class="dropdown-item" href=" {{ route('volunteer.index') }} " target="_blank">VOLUNTEER</a>
	          						<a class="dropdown-item" href=" {{ asset('files/applicationEmploymentForm_3.doc') }} " target="_blank">EMPLOYMENT</a>
							    </div>
			                </li>
			                
			                <li class="nav-item">
			                    <a class="nav-link" href=" {{ url('/contact') }} ">CONTACT US</a>
			                </li>
			            </ul>
			            <a href=" {{ url('/contact') }} " class="btn btn-primary btn-nav ml-auto">DONATE NOW</a>
			        </div>
			    </nav>
			</div>
		</div>

		

    </div>