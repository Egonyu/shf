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
			                    <a class="nav-link  active" href=" {{ url('/') }} ">Home</a>
			                </li>
			               
			                <li class="nav-item dropdown">
			                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          ABOUT
						        </a>
			                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			                    	<a class="dropdown-item" href=" {{ url('/about') }} ">About Us</a>
	          						<a class="dropdown-item" href=" {{ route('ourTeam') }} ">Our Team</a>
							    </div>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link" href=" {{ url('/causes') }} ">Cause</a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link" href=" {{ url('/contact') }} ">Contact Us</a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link" href=" {{ url('/gallery') }} ">Gallery</a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link" href=" {{ url('/blog') }} ">Blog</a>
			                </li>
			            </ul>
			            <a href=" {{ url('/contact') }} " class="btn btn-primary btn-nav ml-auto">DONATE NOW</a>
			        </div>
			    </nav>
			</div>
		</div>

		

    </div>