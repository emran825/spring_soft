@extends('wellknown.layouts.index')

@section("content")

<div class="page-wrapper">

    <!-- Main Header-->
    
    <!--End Main Header -->

	<!--Sidebar Page Container-->
    <div class="sidebar-page-container">
    	<div class="auto-container">
			<!-- Service Title Box -->
			<div class="service-title-box">
				<h2>{{$service_detail->service_topic}}</h2>
			</div>
        	<div class="row clearfix">

                <!-- Content Side -->
                <div class="content-side col-lg-9 col-md-12 col-sm-12">
					<div class="service-detail">
						<div class="inner-box">
							<div class="image">
								<img src="{{ asset('frontend') }}/images/service/{{$service_detail->service_image}}" alt="" />
							</div>
							<div class="lower-content">
								{!! $service_detail->service_details !!}
								<h4>Specific Services</h4>
								<div class="row clearfix">

									<!-- Service Block -->
									<div class="service-block style-two col-lg-4 col-md-6 col-12">
										<div class="inner-box">
											<div class="icon-box">
												<span class="icon ti-user"></span>
											</div>
											<h5><a href="service-detail.html">Talent & HR Analytics</a></h5>
											<div class="text">Which of ever undertke laborious physical exercised excepts.</div>
										</div>
									</div>

									<!-- Service Block -->
									<div class="service-block style-two col-lg-4 col-md-6 col-12">
										<div class="inner-box">
											<div class="icon-box">
												<span class="icon ti-pie-chart"></span>
											</div>
											<h5><a href="service-detail.html">Fraud & Risk Analytics</a></h5>
											<div class="text">Great explorer the master builder working human happiness.</div>
										</div>
									</div>

									<!-- Service Block -->
									<div class="service-block style-two col-lg-4 col-md-6 col-12">
										<div class="inner-box">
											<div class="icon-box">
												<span class="icon ti-stats-up"></span>
											</div>
											<h5><a href="service-detail.html">Marketing Analytics</a></h5>
											<div class="text">Chooses to enjoy a pleasure that has no anoing consequences</div>
										</div>
									</div>

								</div>

								<!-- Analysis Columns -->
								<div class="analysis-columns">
									<div class="row clearfix">
										<!-- Column -->
										<div class="column col-lg-6 col-md-6 col-sm-12">
											<h4>Advantages Of Services</h4>
											<p>Beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire trouble.</p>
											<ul class="list-style-one">
												<li>Develop new ideas and market them</li>
												<li>Build leadership and management skills</li>
												<li>Improve manufacturing processes</li>
												<li>Build a business strategy and plan</li>
												<li>Demoralized by the charm of the moment</li>
											</ul>
										</div>
										<!-- Column -->
										<div class="column col-lg-6 col-md-6 col-sm-12">
											<h4>Competitors Research & Analysis</h4>
											<div class="graph-image">
												<img src="{{ asset('frontend') }}/images/resource/graph.jpg" alt="" />
											</div>
										</div>
									</div>
								</div>
								<!-- End Analysis Columns -->

								<div class="accordian-box">
									<h4>Research Beyond The Business Plan</h4>

									<!--Accordian Box-->
									<ul class="accordion-box">

										<!--Block-->
										<li class="accordion block active-block">
											<div class="acc-btn active"><div class="icon-outer"><span class="icon icofont-plus"></span> <span class="icon icofont-minus"></span></div>Client Prospecting</div>
											<div class="acc-content current">
												<div class="content">
													<div class="accordian-text">We also ensure that the whole team is included in the process and that no one is left out during the turnaround. The most crucial part is ensuring some degree of financial stability during the turnaround.</div>
												</div>
											</div>
										</li>

										<!--Block-->
										<li class="accordion block">
											<div class="acc-btn"><div class="icon-outer"><span class="icon icofont-plus"></span> <span class="icon icofont-minus"></span></div>Website Research</div>
											<div class="acc-content">
												<div class="content">
													<div class="accordian-text">We also ensure that the whole team is included in the process and that no one is left out during the turnaround. The most crucial part is ensuring some degree of financial stability during the turnaround.</div>
												</div>
											</div>
										</li>

										<!--Block-->
										<li class="accordion block">
											<div class="acc-btn"><div class="icon-outer"><span class="icon icofont-plus"></span> <span class="icon icofont-minus"></span></div>Grant & Funding Research</div>
											<div class="acc-content">
												<div class="content">
													<div class="accordian-text">We also ensure that the whole team is included in the process and that no one is left out during the turnaround. The most crucial part is ensuring some degree of financial stability during the turnaround.</div>
												</div>
											</div>
										</li>

									</ul>

								</div>

							</div>
						</div>
					</div>
				</div>

				<!--Sidebar Side-->
                <div class="sidebar-side col-lg-3 col-md-12 col-sm-12">
                	<aside class="sidebar sticky-top">

						<!-- Category Widget -->
                        <div class="sidebar-widget categories-widget">

                        	<div class="category-boxed">
								<a href="#" class="overlay-link"></a>
								<div class="boxed-inner">
									<div class="icon ti-blackboard"></div>
									<h6>Business Strategy Planning</h6>
								</div>
							</div>

							<div class="category-boxed">
								<a href="#" class="overlay-link"></a>
								<div class="boxed-inner">
									<div class="icon ti-stats-up"></div>
									<h6>Economic and Financial</h6>
								</div>
							</div>

							<div class="category-boxed">
								<a href="#" class="overlay-link"></a>
								<div class="boxed-inner">
									<div class="icon ti-shield"></div>
									<h6>Insurance Planning Consulation</h6>
								</div>
							</div>

							<div class="category-boxed">
								<a href="#" class="overlay-link"></a>
								<div class="boxed-inner">
									<div class="icon ti-home"></div>
									<h6>Estate & Properties Planning</h6>
								</div>
							</div>

							<div class="category-boxed">
								<a href="#" class="overlay-link"></a>
								<div class="boxed-inner">
									<div class="icon ti-stamp"></div>
									<h6>Audit & Evaluation Consulting</h6>
								</div>
							</div>

							<div class="category-boxed">
								<a href="#" class="overlay-link"></a>
								<div class="boxed-inner">
									<div class="icon ti-money"></div>
									<h6>Taxes & Efficiency Consulting</h6>
								</div>
							</div>

							<div class="category-boxed">
								<a href="#" class="overlay-link"></a>
								<div class="boxed-inner">
									<div class="icon ti-shopping-cart-full"></div>
									<h6>Consumer Product Market</h6>
								</div>
							</div>

							<div class="category-boxed">
								<a href="#" class="overlay-link"></a>
								<div class="boxed-inner">
									<div class="icon ti-truck"></div>
									<h6>Transportation and Logistic Planning</h6>
								</div>
							</div>

						</div>

						<!-- brochure Widget -->
                        <div class="sidebar-widget brochures-widget">
							<div class="widget-content">
								<h4>Our brochures</h4>
								<div class="text">Download our comapny profile & 2017 financial brochure.</div>
								<ul class="brochure-list">
									<li><a href="#"><span class="icon far fa-file-pdf"></span>Donwload PDF</a></li>
									<li><a href="#"><span class="icon far fa-file-word"></span>Donwload DOC</a></li>
								</ul>
							</div>
						</div>

						<!-- Enquiry Widget -->
                        <div class="sidebar-widget enquiry-widget">
							<div class="widget-content">
								<h4>For Business Enquiry</h4>
								<div class="text">You can also send us an email and we’ll get in touch shortly, or Troll Free</div>
								<div class="number">Number :<a href="tel:+91-00-700-6202">(+91) 00-700-6202.</a></div>
								<a href="#" class="theme-btn btn-style-two"><span class="txt">Send Email</span></a>
							</div>
						</div>

					</aside>
				</div>

			</div>
		</div>
	</div>

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
@endsection

