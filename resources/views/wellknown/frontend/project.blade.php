@extends('wellknown.layouts.index')

@section("content")

<br>
<br>
  <!-- Page Title Section -->
    <div class="page-title-section">
      <div class="auto-container">
      <ul class="post-meta">

                <br>
                <br>
                <br>
        <li><a href="{{route('home')}}">Index</a></li>
        <li>Project</li>
      </ul>
      <h2><span>Latest</span> From Our Project</h2>
    </div>
  </div>
  <!-- End Page Title Section -->

  <!-- Project Section -->
  <div class="project-section">
    <div class="auto-container">

      <!-- Sec Title -->
      <!-- <div class="sec-title">
        <div class="clearfix">
          <div class="pull-left">
            <div class="title">latest projects</div>
            <h2>See Our <span>Successful Projects</span></h2>
          </div>
          <div class="pull-right">
            <a href="service.html" class="cases">all Projects <span class="arrow ti-angle-right"></span></a>
          </div>
        </div>
      </div> -->

    </div>
    <div class="outer-container">
      <div class="row clearfix">

        <!-- Column -->
        <div class="column  col-md-12">
          <div class="row clearfix">

            <!-- Inner Column -->
            @foreach($project as $data)
            <div class="inner-column col-md-4">
              <div class="gallery-block">
                <div class="inner-box">
                  <div class="image"><a href="{{$data->demo_link}}" class="arrow ti-angle-right">
                    <img src="{{ asset('frontend') }}/project/images/{{$data->project_image}}" alt="" />
                    </a>
                    <div class="overlay-box">
                      <div class="overlay-inner">
                       
                        <h3><a href="{{route('project_detail',['id'=>$data->id])}}" target="blank">{{$data->project_name}}</a></h3>
                        <div class="designation">{{$data->project_type}}</div>
                        <a href="{{$data->demo_link}}" class="arrow ti-angle-right"></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach

            <!-- Inner Column -->
          <!--   <div class="inner-column col-md-4">
              <div class="gallery-block">
                <div class="inner-box">
                  <div class="image">
                    <img src="{{ asset('frontend') }}/images/gallery/3.jpg" alt="" />
                    <div class="overlay-box">
                      <div class="overlay-inner">
                        <h3><a href="project-details.html">Client Relationship Management software</a></h3>
                        <div class="designation">ERP Base</div>
                        <a href="project-details.html" class="arrow ti-angle-right"></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="column col-md-4">
              <div class="gallery-block">
                <div class="inner-box">
                  <div class="image">
                    <img src="{{ asset('frontend') }}/images/gallery/1.jpg" alt="" />
                    <div class="overlay-box">
                      <div class="overlay-inner">
                        <h3><a href="project-details.html">Human Resource Management software</a></h3>
                        <div class="designation">ERP Base</div>
                        <a href="project-details.html" class="arrow ti-angle-right"></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
 -->
            <!-- Inner Column -->
            <!-- <div class="inner-column col-lg-12 col-md-12 col-sm-12">
              <div class="gallery-block">
                <div class="inner-box">
                  <div class="image">
                    <img src="{{ asset('frontend') }}/images/gallery/4.jpg" alt="" />
                    <div class="overlay-box">
                      <div class="overlay-inner">
                        <h3><a href="project-details.html">WOTa Money Save</a></h3>
                        <div class="designation">Finance, Consulting</div>
                        <a href="project-details.html" class="arrow ti-angle-right"></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->

          </div>
        </div>

        <!-- Column -->


      </div>
    </div>
  </div>
  <!-- End Project Section -->
@endsection
