@extends('wellknown.layouts.index')

@section("content")


 <!-- Banner Section -->
    <div class="banner-section" >
		<div class="main-slider-carousel owl-carousel owl-theme">
          @foreach($banner as $data)
			<div class="slide" @if($loop->first) active @endif data-bg-image="frontend/images/main-slider/{{$data->bg_image}}" style="background-image:url('frontend/images/main-slider/{{$data->bg_image}}}') ">
				<div class="auto-container w-100">
					<div class="row clearfix">

						<!-- Content Column -->
						<div class="content-column col-lg-7 col-md-12 col-sm-12">
							<div class="inner-column">
								<!-- <div class="title">Welcome To</div> -->
								<h1> {{$data->banner_name}} <span>{{$data->highlight_name}}</span> {{$data->next_name}}
</h1>
								<div class="text">{{$data->banner_details}}</div>
								<div class="btn-box">
									<a href="" class="theme-btn btn-style-one"><span class="txt">Work With Us</span></a>
								</div>
							</div>
						</div>

					</div>

				</div>
			</div>


          @endforeach
			<!-- <div class="slide" data-bg-image="images/main-slider/intro-1.jpg">
				<div class="auto-container w-100">
					<div class="row clearfix"> -->

						<!-- Content Column -->
						<!-- <div class="content-column col-lg-7 col-md-12 col-sm-12">
							<div class="inner-column"> -->
								<!-- <div class="title"> </div> -->
					<!-- 			<h1>Enterprise <span>ERP</span> Software Development</h1>
								<div class="text">Run Your Organization within a centralized and integrated
system in one platform.

</div>
								<div class="btn-box">
									<a href="" class="theme-btn btn-style-one"><span class="txt">Work With Us</span></a>
								</div>
							</div>
						</div>

					</div>

				</div>
			</div>

			<div class="slide" data-bg-image="images/main-slider/intro-1.jpg">
				<div class="auto-container w-100">
					<div class="row clearfix"> -->

						<!-- Content Column -->
						<!-- <div class="content-column col-lg-7 col-md-12 col-sm-12">
							<div class="inner-column"> -->
								<!-- <div class="title">consulte company</div> -->
				<!-- 				<h1>Digital <span>Branding</span> with IT solutions</h1>
								<div class="text">Grow your business with our IT expertise.</div>
								<div class="btn-box">
									<a href="" class="theme-btn btn-style-one"><span class="txt">Work With Us</span></a>
								</div>
							</div>
						</div>

					</div>

				</div>
			</div> -->

		</div>


	</div>
	<!-- End Banner Section -->

	<!-- Service Banner Section -->
    
	<!-- End Service Banner Section -->

	<!-- Services Section -->
	
	<div class="services-section">

		<div class="auto-container">
			<div class="sec-title">
				<div class="title">our services</div>
				<h2><span>Best Solutions</span> For Your Business</h2>
			</div>
			<div class="inner-container">
				<div class="row g-0">

					<!-- Service Block -->
					@foreach($service as $data)
					<div class="service-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<span class="icon ti-{{$data->service_class}}"></span>
							</div>
							<h5><a href="">{{$data->service_name}}</a></h5>
							<div class="text">{{$data->service_topic}}</div>
							<a class="read-more" href="{{route('service_detail',['id'=>$data->id])}}">More <span class="ti-angle-right"></span></a>
						</div>
					</div>
					@endforeach

					<!-- Service Block -->
					<!-- <div class="service-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<span class="icon ti-stats-up"></span>
							</div>
							<h5><a href="service-detail.html">Software Development</a></h5>
							<div class="text">Enterprise Software Makes your Business Easier</div>
							<a class="read-more" href="service-detail.html">More <span class="ti-angle-right"></span></a>
						</div>
					</div>

					Service Block
					<div class="service-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<span class="icon ti-shield"></span>
							</div>
							<h5><a href="service-detail.html">Web Application</a></h5>
							<div class="text">By using Cloud App you can monitor your business everywhere.</div>
							<a class="read-more" href="service-detail.html">More <span class="ti-angle-right"></span></a>
						</div>
					</div>
 -->
					<!-- Service Block -->
					<!-- <div class="service-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<span class="icon ti-home"></span>
							</div>
              <h5><a href="service-detail.html">Mobile Application</a></h5>
							<div class="text">We Build Android IOS and integrate with Desktop Software</div>

							<a class="read-more" href="service-detail.html">More <span class="ti-angle-right"></span></a>
						</div>
					</div>
 -->
					<!-- Service Block -->
					<!-- <div class="service-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<span class="icon ti-stamp"></span>
							</div>
							<h5><a href="service-detail.html">Management Software</a></h5>
							<div class="text">HRM , CRM , Inventory , POS , Survey</div>
							<a class="read-more" href="service-detail.html">More <span class="ti-angle-right"></span></a>
						</div>
					</div>
 -->
					<!-- Service Block -->
					<!-- <div class="service-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<span class="icon ti-money"></span>
							</div>
              <h5><a href="service-detail.html">Web Development</a></h5>
              <div class="text">We make your Business identity and focus on goal</div>
							<a class="read-more" href="service-detail.html">More <span class="ti-angle-right"></span></a>
						</div>
					</div>
 -->
					<!-- Service Block -->
					<!-- <div class="service-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<span class="icon ti-shopping-cart-full"></span>
							</div>
							<h5><a href="service-detail.html">Digital Barnding & Marketing</a></h5>
							<div class="text">UI UX design will make your own business brand & marketing make grow more</div>
							<a class="read-more" href="service-detail.html">More <span class="ti-angle-right"></span></a>
						</div>
					</div> -->

					<!-- Service Block -->
					<!-- <div class="service-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<span class="icon ti-truck"></span>
							</div>
							<h5><a href="service-detail.html">Youth Career Development</a></h5>
							<div class="text">We provide leadership traingn & industrial attachment for young generation</div>
							<a class="read-more" href="service-detail.html">More <span class="ti-angle-right"></span></a>
						</div>
					</div> -->

				</div>

			</div>
		</div>
	</div>
	
	<!-- End Services Section -->

	<!-- Reputation Section Two -->

	<!-- End Reputation Section -->

	<!-- Testimonial Section -->

	<!-- End Testimonial Section -->

	<!-- Sponsors Section -->
	<div class="sponsors-section">
		<div class="auto-container">

			<div class="carousel-outer">
                <!--Sponsors Slider-->
                <ul class="sponsors-carousel owl-carousel owl-theme">

                	@foreach($sponsor as $data)
                    <li><div class="image-box"><a href="#"><img src="{{ asset('frontend') }}/images/clients/{{$data->sponsor_image}}" alt=""></a></div></li>
                    @endforeach
                    <!-- <li><div class="image-box"><a href="#"><img src="{{ asset('frontend') }}/images/clients/1.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="{{ asset('frontend') }}/images/clients/2.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="{{ asset('frontend') }}/images/clients/3.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="{{ asset('frontend') }}/images/clients/4.png" alt=""></a></div></li>
					<li><div class="image-box"><a href="#"><img src="{{ asset('frontend') }}/images/clients/5.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="{{ asset('frontend') }}/images/clients/1.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="{{ asset('frontend') }}/images/clients/2.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="{{ asset('frontend') }}/images/clients/3.png" alt=""></a></div></li> -->
                </ul>
            </div>

		</div>
	</div>
	<!--End Sponsors Section-->

@endsection
