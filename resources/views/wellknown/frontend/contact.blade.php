@extends('wellknown.layouts.index')

@section("content")
<div class="page-wrapper">

    <!-- Main Header-->
    

    <!-- End Main Header -->

	<!-- Map Section -->
	<div class="map-section">

      
		<div class="contact-map-area">
     
			<iframe class="contact-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.346750722902!2d90.39737631498379!3d23.877319884527033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c5c2bd27484f%3A0x5630d98beae118ad!2sSpring%20Soft%20IT!5e0!3m2!1sen!2sbd!4v1616679535259!5m2!1sen!2sbd"   allowfullscreen="" tabindex="0" loading="lazy"></iframe>
		</div>
	</div>
	<!-- End Map Section -->

	<!-- Contact Page Section -->
	<div class="contact-page-section">
		<div class="auto-container">
			<!-- Contact Info Boxed -->
			<div class="contact-info-boxed">
				<div class="row clearfix">

					<!-- Column -->
					<div class="column col-lg-6 col-md-6 col-sm-12">
						<h2>BD Office<span>{{$our_details->thana}}, {{$our_details->district}} , Bangladesh</span></h2>
						<div class="text"> House#{{$our_details->house_no}}({{$our_details->floor_no}} floor), Road#{{$our_details->road_no}}, <br> Sector#{{$our_details->sector}}</div>
						<div class="email">Email: <a href="mailto:infor@springsoftit.com">{{$header->email}}</a></div>
						<div class="call">Call directly:<br><a href="#">+880-{{$header->phone}}</a></div>
						<ul class="location-list">
							<li><span>Head Offices:</span>  <br>{{$our_details->thana}}, Dhaka,Bangladesh</li>
							<li><span>Work Hours:{{$our_details->working_hours}}</span></li>
						</ul>
					</div>

					<!-- Column -->
					<div class="column col-lg-6 col-md-6 col-sm-12"> 

						 <h2>UK Office <span>{{$our_details->uk_road}}</span></h2>
						<div class="text">LONDON<br>UB2 3XH</div>
						<div class="email">Email: <a href="mailto:infor@springsoftit.com">{{$header->email}}</a></div>
						<div class="call">Call directly:<br><a href="#">+44{{$our_details->uk_phone}}</a></div>
						<ul class="location-list">
							<li><span>Head Offices:</span>  <br>{{$our_details->uk_road}},LONDON,UB2 3XH</li>
							<li><span>Work Hours:{{$our_details->working_hours}}</span></li>
						</ul>
					</div>

				</div>
			</div>

			<!-- Form Boxed -->
			@if(session()->has('message'))
             <script type="text/javascript">
             	swal("Good job!", "{!! session()->get('message') !!}", "success");
             </script>
            @endif
			<div class="form-boxed">
				<div class="sec-title centered">
					<div class="title">contact us</div>
					<h2>We Always Here <span>To Help You</span></h2>
				</div>

				<div class="boxed-inner">
					<!-- Contact Form -->
					<div class="contact-form">
						<!-- Contact Form -->
						<form method="post" action="{{route('post.contact')}}" id="contact-form">
							<div class="row clearfix">
								 {{ csrf_field() }}
								<div class="col-lg-4 col-md-6 col-sm-12 form-group">
									<input type="text" name="name" placeholder="Name *" required>
								</div>

								<div class="col-lg-4 col-md-6 col-sm-12 form-group">
									<input type="email" name="email" placeholder="Emaill Address *" required>
								</div>

								<div class="col-lg-4 col-md-12 col-sm-12 form-group">
									<input type="text" name="subject" placeholder="Subject (Optional)" >
								</div>

								<div class="col-lg-12 col-md-12 col-sm-12 form-group">
									<textarea name="message" placeholder="Message"></textarea>
								</div>

								<div class="col-lg-12 col-md-12 col-sm-12 text-center form-group">
									<button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="txt">Send Message</span></button>
								</div>

							</div>
						</form>
						<p class="form-messege"></p>

					</div>
					<!--End Contact Form -->
				</div>

			</div>

		</div>
	</div>
	<!-- End Blog Detail Section -->

	<!-- Main Footer -->
    
</div>
<!--End pagewrapper-->

<!-- Search Popup -->
<div class="search-popup">
	<button class="close-search style-two"><span class="icofont-brand-nexus"></span></button>
	<button class="close-search"><span class="icofont-arrow-up"></span></button>
	<form method="post" action="https://htmldemo.hasthemes.com/consultix/consultix/blog.html">
		<div class="form-group">
			<input type="search" name="search-field" value="" placeholder="Search Here" required="">
			<button type="submit"><i class="fa fa-search"></i></button>
		</div>
	</form>
</div>
<!-- End Header Search -->

@endsection


