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
			<img src="{{ asset('frontend') }}/images/background/{{$about->bg_image}}" alt="" />
		</div>
	</div>
	<!-- End Page Banner Image Section -->
  

	<!-- About Section Two -->
	<div class="about-section">

		<div class="auto-container">
			<div class="inner-container">
				<div class="row align-items-center clearfix">
					<!-- Image Column -->
					<div class="image-column col-lg-6">
						<div class="about-image">
							<div class="about-inner-image">
								<img src="{{ asset('frontend') }}/images/about/{{$about->ceo_image}}" alt="about">
							</div>
						</div>
					</div>

					<!-- Content Column -->
					<div class="content-column col-lg-6 col-md-12 col-sm-12 mb-0">
						<div class="about-column">
							<div class="sec-title">
								<div class="title">about us</div>
								<h2>{{$about->title_name}}  <span>{{$about->highlite_name}}</span><br>{{$about->next_title}}</h2>
							</div>
							<div class="text">
								<p>{{$about->about_details}}</p>
							</div>
							<div class="signature">shaun <span>CEO</span> <span>Shahoriar Shaun</span></div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Experts Section -->
	
	<!-- End Experts Section -->


	
	<!-- End About Section Two -->




	<!-- Main Footer -->
    


@endsection
