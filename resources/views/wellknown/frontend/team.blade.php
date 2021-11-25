@extends('wellknown.layouts.index')

@section("content")






 

        <!--End Header Upper-->

		<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon lnr lnr-cross"></span></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="{{route('home')}}"><img src="{{ asset('frontend') }}/images/logo.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div><!-- End Mobile Menu -->

    </header>
    <!--End Main Header --> 



   

	<!-- Page Banner Image Section -->
    <div class="page-banner-image-section">



<br><br><br><br><br><br>
		<div class="image">
			<img src="{{ asset('frontend') }}/images/background/{{$teamdetail->bg_image}}" alt="team iamge"/>
		</div>
	</div>
	<!-- End Page Banner Image Section -->
  

	<!-- About Section Two -->
	<div class="about-section">

		<div class="auto-container">
			<div class="inner-container">
				<div class="row align-items-center clearfix">
					<!-- Content Column -->
					<div class="content-column col-lg-6 col-md-12 col-sm-12 mb-0">
						<div class="about-column">
							<div class="sec-title">
								<div class="title">Our Team</div>
								<h2>Best Team <span>Ready To Work</span> With You</h2>
							</div>
							<div class="text">
								<p>{{$teamdetail->team_details}}</p>
							</div>
							
						</div>
					</div>
					<!-- Image Column -->
					<div class="image-column col-lg-6">
						<div class="about-image">
							<div class="about-inner-image ml-5">
								<img class="ml-5" src="{{ asset('frontend') }}/images/team/{{$teamdetail->team_image}}" alt="about">
							</div>
						</div>
					</div>

					

				</div>
			</div>
		</div>
	</div>

	<!-- Experts Section -->
	<div class="experts-section">
		<div class="auto-container">
		
			<!-- Sec Title -->
			<div class="sec-title">
				<div class="clearfix">
					<div class="pull-left">
						<div class="title">Meet Our team</div>
						<h2>We Are <span>Friendly & Profressional</span></h2>
					</div>
					<div class="pull-right">
						<a href="service.html" class="experts">all experts <span class="arrow ti-angle-right"></span></a>
					</div>
				</div>
			</div>
			
			<div class="row clearfix">
				
				<!-- Team Block -->
				@foreach($team as $data)
				<div class="team-block col-lg-3 col-md-6 col-sm-6 col-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="#"><img src="{{ asset('frontend') }}/images/team/{{$data->image}}" alt="" /></a>
							<!-- Social Box -->
							<ul class="social-box">
								<li><a href="{{url($data->t_link)}}" class="icofont-twitter" target="blank"></a></li>
								<li><a href="{{url($data->f_link)}}" class="icofont-facebook" target="blank"></a></li>
								<li><a href="{{url($data->i_link)}}" class="icofont-instagram" target="blank"></a></li>
								<li><a href="{{url($data->l_link)}}" class="icofont-linkedin" target="blank"></a></li>
							</ul>
						</div>
						<div class="lower-box mt-0">
							<h4><a href="#">{{$data->name}}</a></h4>
							<div class="designation">{{$data->designation}}</div>
						</div>
					</div>
				</div>
				@endforeach

				
			
				
			</div>
		</div>
	</div>
	<!-- End Experts Section -->

	
	<!-- End About Section Two -->




	<!-- Main Footer -->
    


@endsection
