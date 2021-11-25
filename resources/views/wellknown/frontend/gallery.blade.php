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



<br><br><br><br><br><br><br>


	<!-- gallery section -->
<div class="container">

<h1 class="font-weight-light text-center text-lg-center mt-4 mb-0">Events</h1>

<hr class="mt-2 mb-5">

<div class="row text-center text-lg-left">
  @foreach($events as $data)
  <div class="col-lg-3 col-md-4 col-6">
	<a href="#" class="d-block mb-4 h-100">
		  <img class="img-fluid img-thumbnail" src="{{ asset('frontend') }}/images/gallery/{{$data->gallery_image}}" alt="">
		</a>
  </div>
  @endforeach
  
</div>

</div>

<div class="container">
<h1 class="font-weight-light text-center text-lg-center mt-4 mb-0">Seminar</h1><hr><br><br>
<div class="lightbox">
  <div class="row">
    <div class="col-lg-6">
      <img
        src="{{ asset('frontend') }}/images/gallery/{{$seminar1->gallery_image}}"
        data-mdb-img="https://mdbootstrap.com/img/Photos/Slides/1.jpg"
        alt="Lightbox image 1"
        class="w-100 mb-2 mb-md-4 shadow-1-strong rounded"
      />
      <img
        src="{{ asset('frontend') }}/images/gallery/{{$seminar2->gallery_image}}"
        data-mdb-img="https://mdbootstrap.com/img/Photos/Square/1.jpg"
        alt="Lightbox image 2"
        class="w-100 shadow-1-strong rounded"
      />
    </div>
    <div class="col-lg-6">
      <img
        src="{{asset('frontend') }}/images/gallery/{{$seminar3->gallery_image}}"
        data-mdb-img="https://mdbootstrap.com/img/Photos/Vertical/1.jpg"
        alt="Lightbox image 3"
        class="w-100 shadow-1-strong rounded"
      />
    </div>
  </div>
</div>

<h1 class="font-weight-light text-center text-lg-center mt-4 mb-0">Award</h1><hr><br><br>
<div class="row">
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
    <img
      src="{{asset('frontend') }}/images/gallery/{{$award1->gallery_image}}"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />

    <img
      src="{{asset('frontend') }}/images/gallery/{{$award2->gallery_image}}"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="{{asset('frontend') }}/images/gallery/{{$award3->gallery_image}}"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />

    <img
      src="{{asset('frontend') }}/images/gallery/{{$award4->gallery_image}}"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="{{asset('frontend') }}/images/gallery/{{$award5->gallery_image}}"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />

    <img
      src="{{asset('frontend') }}/images/gallery/{{$award6->gallery_image}}"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />
  </div>
</div>
</div>
<!-- Gallery -->

	
	<!-- End About Section Two -->




	<!-- Main Footer -->
    


@endsection
