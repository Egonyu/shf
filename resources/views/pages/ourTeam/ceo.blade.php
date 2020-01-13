@extends('pages.master')

@section('content')
    <!-- BANNER -->
    <div class="section banner-page" data-background="{{ asset('frontend/images/site/sauzar-presentation.jpg') }}">
        <div class="content-wrap pos-relative">
            <div class="d-flex justify-content-center bd-highlight mb-3">
                <div class="title-page">Director's Message</div>
            </div>
            <div class="d-flex justify-content-center bd-highlight mb-3">
                <nav aria-label="breadcrumb">
                <ol class="breadcrumb ">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Director's Message</li>
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

					<div class="col-sm-9 col-md-9">
                        <h1>SAUZAR HEALTH FOUNDATION</h1>
                        <p>Sauzar Health Foundation (SHF) is a non-governmental organization aiming at advocacy, education, sensitizing, and empowering for better health, creating livelihood, maintaining, preserving and protecting a healthy living environment.</p>
                        <p>Sauzar Health Foundation bases its activities on 7 aspects: Education, Empowerment, Drug Abuse Enlightenment and Rehabilitation, Pollution, Sanitation, Polythene free environment, and recycling. Some of these different aspects compliment each other in destroying our environment, but positively influencing one of these aspects can positively affect the other aspects. </p>
                        

                    </div>
                    
                    <div class="col-sm-3 col-md-3">
						
						<div class="media"><img src=" {{ asset('frontend/images/profiles/abu.png') }} " alt=""></div>

					</div>
                </div>
                <div class="space-70"></div>

                <div class="row">
                    <div class="col-ms-12 col-md-12">
                        <p>Illiteracy is a major concern as it is a backbone problem for Africans, the human resource is significantly degraded by lack of knowledge and skill. 38% of Nigerians are illiterates and probably uneducated. The lack of education being entirely different from illiteracy proves a more danger to the improvement of the society health-wise as it means that the populace has no understanding of how to improve their health, nor how the health of the community is collectively hampered by the hazardous nature of their own activities. Yet they neither have the knowledge nor skills to make the environment safer. </p>

                        <p>There can be no empowerment without education or skills, be it formal or informal. Just as there can be no sanitation without knowledge, only good Samaritans who try their best and in 6 out of 7 days, the environment is destroyed. Women and girl-child education and empowerment is also a distressing factor.</p>

                        <p>Pollution is the standard of the cities as it is the African nature for most individual to only look out for themselves and this reaches the industries and corporations, private or governmental, where profit is the goal, corruption and love for money has obstructed the view of the leaders that they do not care how much chaos and health threats they release into the environment, all in the name of acquiring money. </p>

                        <p>Sanitation cannot hold or be relied upon if the self-acclaimed educated but obviously uneducated doctors and public health officials prefer their own comfort to saving lives cannot prove in their actions and relation with the environment that they are true to the ethics they read and write on paper.</p>

                        <p>Polythene which takes almost 10 decades to decompose continues to pollute our environment and livelihood. Deaths due to cancer caused by polythene, diseases caused by the polythenan pollution and environmental disasters is on the rise, mortality increases because of the negligence and ignorance of the people towards what it is that destroys lives. </p>

                        <p>Recycling could convert waste to wealth, reduce pollution and increase the health and living standard for Africans, but this is highly unseen, and the potential diminishes. Recycling requires education, skill, and effort. This could bring empowerment, a polythene free environment, reduce pollution and solve many of the problems in the communities in ways that are unforeseen.</p>

                        <p>The SHF aims at curbing the disastrous practices that affects the environment and improving the status of the society health wise in the hope that it may be a stepping stone to improving the situation of the people. It shall accomplish this task in numerous ways, some of which are listed below: </p>

                        <ul>
                            <li>Advocating for Education.</li>
                            <li>Youth Entrepreneurship Scheme.</li>
                            <li>Women Skill Empowerment Programmes.</li>
                            <li>Waste to wealth programmes.</li>
                            <li>Research in Health.</li>
                            <li>Research and Implementation of Technological Advancements e.g. using robotics in pollution and sanitation.</li>
                            <li>Building Empowerment offices and centers across the country and Africa at large.</li>
                            <li>Improving educational standards in schools nationwide.</li>
                            <li>Assisting the government in achieving the SDGs.</li>
                            <li>Skill Acquisition POP Programmes (Practice over Paper).</li>
                            <li>Anti-Pollution Rallies.</li>
                            <li>Green Earth Programmes (i.e. rebuilding the ecosystem).</li>
                            <li>Enlightenment programmes for the uneducated.</li>
                            <li>Fundraising for Education and Empowerment.</li>
                        </ul>

                        <p>Sauzar Health Foundation begins with the local communities, Universities, within Nigeria and Uganda of East Africa and we look forward to expand our programmes to all African Countries. The individuals who partake in the success of the programmes of the foundation shall have all contributed to the progress of all Africans. Bringing true meaning to the spirit of Ubuntu.  This task does not belong to the Sauzar Health Foundation alone, it belongs to everyone. And we all have a role to play in the rebuilding of our communities and our dear Continent.</p>

                        <p>Africa's future starts with the right foundation</p>

                        <strong>Thank You.</strong>

                    </div>
                </div>

				<div class="spacer-70"></div>

				<div class="row">

					<div class="col-sm-3 col-md-3">
						<div class="rs-icon-funfact style-2">
							<div class="icon">
								<i class="fa fa-file-text-o"></i>
							</div>
							<div class="body-content">
								<h2>07</h2>
								<p class="uk18">Complete</p>
							</div>
						</div>
					</div>

					<div class="col-sm-3 col-md-3">
						<div class="rs-icon-funfact style-2">
							<div class="icon">
								<i class="fa fa-users"></i>
							</div>
							<div class="body-content">
								<h2>29</h2>
								<p class="uk18">Our Team</p>
							</div>
						</div>
					</div>

					<div class="col-sm-3 col-md-3">
						<div class="rs-icon-funfact style-2">
							<div class="icon">
								<i class="fa fa-trophy"></i>
							</div>
							<div class="body-content">
								<h2>09</h2>
								<p class="uk18">Programs</p>
							</div>
						</div>
					</div>

					<div class="col-sm-3 col-md-3">
						<div class="rs-icon-funfact style-2">
							<div class="icon">
								<i class="fa fa-male"></i>
							</div>
							<div class="body-content">
								<h2>49</h2>
								<p class="uk18">Volunteer</p>
							</div>
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>
@endsection