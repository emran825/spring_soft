@extends('wellknown.layouts.index')

@section("content")
<!-- <div class="page-wrapper"> -->

    <!-- Main Header-->
    
    <!--End Main Header -->

	<!-- Page Title Section -->
   
	<!-- End Page Title Section -->

	<!--Sidebar Page Container-->
	<br><br><br><br><br>
    <div class="sidebar-page-container padding-top style-two">
    	<div class="auto-container">
			<div class="row clearfix">

                <!-- Content Side -->
                <div class="content-side col-lg-9 col-md-12 col-sm-12">
					<div class="blog-detail">
						<div class="inner-box">
							<div class="image">
								<img src="{{ asset('frontend') }}/images/resource/{{$blog_detail->blog_image}}" alt="" />
							</div>
							<div class="lower-content">
								<div class="post-info"><span class="theme_color">{{$blog_detail->blog_title}}</span> {{date('jS M Y',strtotime($blog_detail->updated_at))}} by <span>{{$blog_detail->blog_author}}</span></div>
								{!! $blog_detail->blog_details !!}
								<!-- Post Share Options-->
								<div class="post-share-options">
									<div class="tags"><a href="#">Structure</a> <a href="#">Envato</a> <a href="#">Premium</a></div>
								</div>

							</div>
						</div>
					</div>
					

					<!-- Related Projects -->
					
					<div class="related-projects">
						<div class="title-box">
							<h3>Related Posts</h3>
						</div>
						<div class="row clearfix">
                          @foreach($relatedpost as $data)
							<!-- News Block Four -->
							<div class="news-block-four col-lg-6 col-md-6 col-sm-12">
								<div class="inner-box">
									<div class="image">
										<a href="{{route('blog_detail',['id'=>$data->id])}}"><img src="{{ asset('frontend') }}/images/resource/{{$data->blog_image}}" alt="" /></a>
									</div>
									<div class="lower-content">
										<div class="title">{{$data->blog_title}}</div>
										<h4><a href="{{route('blog_detail',['id'=>$data->id])}}">{{$data->blog_discription}}</a></h4>
									</div>
								</div>
							</div>
							@endforeach


							<!-- News Block Four -->
							<!-- <div class="news-block-four col-lg-6 col-md-6 col-sm-12">
								<div class="inner-box">
									<div class="image">
										<a href="blog-detail.html"><img src="{{ asset('frontend') }}/images/resource/news-5.jpg" alt="" /></a>
									</div>
									<div class="lower-content">
										<div class="title">News</div>
										<h4><a href="blog-detail.html">5 Steps To Build Strategy Planning</a></h4>
									</div>
								</div>
							</div>
 -->
						</div>
					</div>
					





				</div>

				<!--Sidebar Side-->
                <div class="sidebar-side col-lg-3 col-md-12 col-sm-12">
                	<aside class="sidebar sticky-top margin-left">

						<!-- Search -->
                        <div class="sidebar-widget search-box">
							<div class="sidebar-title">
                            	<h4>Search</h4>
                            </div>
                        	<form method="get" action="{{route('blog.search')}}">
                        		@csrf
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Type & Hit Enter..." required>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
						</div>

						<!--Category Blog-->
                        <div class="sidebar-widget categories-blog">
                        	<div class="sidebar-title">
                            	<h4>Categories</h4>
                            </div>
                            <ul>
								<li><a href="{{route('blog')}}">All<span>{{$all}}</span></a></li>
								<li><a href="{{route('blog_categori',['type'=>'tips'])}}">Tips<span>{{$tips}}</span></a></li>
								<li><a href="{{route('blog_categori',['type'=>'business'])}}">Business<span>{{$business}}</span></a></li>
								<li><a href="{{route('blog_categori',['type'=>'bank'])}}">Bank <span>{{$bank}}</span></a></li>
								<li><a href="{{route('blog_categori',['type'=>'other'])}}">Others <span>{{$other}}</span></a></li>
							</ul>
                        </div>

						<!-- Popular Posts -->
                        <div class="sidebar-widget popular-posts">
							<div class="sidebar-title">
                            	<h4>Recent Posts</h4>
                            </div>
                            <div class="widget-content">
                            	@foreach($recent_blog as $data)
                                <div class="post">
                                    <figure class="post-thumb"><a href="blog-single.html"><img src="{{ asset('frontend')}}/images/resource/{{$data->blog_image}}" alt=""></a></figure>
                                    <div class="text"><a href="{{route('blog_detail',['id'=>$data->id])}}">{{$data->blog_title}}</a></div>
                                   {{ $data->updated_at->diffForHumans() }}

								</div>
								@endforeach

                               <!--  <div class="post">
                                    <figure class="post-thumb"><a href="blog-single.html"><img src="{{ asset('frontend') }}/images/resource/post-thumb-2.jpg" alt=""></a></figure>
                                    <div class="text"><a href="blog-single.html">5 Steps To Build Strategy Planning</a></div>
                                </div>

                                <div class="post">
                                    <figure class="post-thumb"><a href="blog-single.html"><img src="{{ asset('frontend') }}/images/resource/post-thumb-3.jpg" alt=""></a></figure>
                                    <div class="text"><a href="blog-single.html">Trend Of Consumer Market 2020</a></div>
                                </div> -->
                            </div>
						</div>

						<!-- Tags -->
                        <div class="sidebar-widget tags">
							<div class="sidebar-title">
                            	<h4>Tags</h4>
                            </div>
							<div class="widget-content">
								<a href="{{route('blog_categori',['type'=>'business'])}}">Business</a>
								<a href="{{route('blog_categori',['type'=>'tips'])}}">Tips&Trics</a>
								<a href="{{route('blog_categori',['type'=>'bank'])}}">Bank</a>
								<a href="{{route('blog_categori',['type'=>'other'])}}">Other</a>

								
							</div>
						</div>

					</aside>
				</div>
			</div>
		</div>
		  @if(session()->has('message'))
             <script type="text/javascript">
             	swal("Good job!", "{!! session()->get('message') !!}", "success");
             </script>
            @endif

		<!-- Lower Section -->
		<div class="lower-section">
			<div class="auto-container">
				<!-- Comment Form -->
				<div class="comment-form">
					<div class="group-title">
						<h3>Leave A Reply</h3>
						<div class="comment-text">Your email address will not be published</div>
					</div>
					<!--Comment Form-->
					<form method="post" action="{{route('blog.comments',['name' =>$blog_detail->blog_title])}}">
						  {{ csrf_field() }}
						<div class="row clearfix">
							<div class="col-md-12 col-sm-12 col-xs-12 form-group">
								<input type="text" name="name" placeholder="Name *" required>
							</div>

							<div class="col-md-6 col-sm-12 col-xs-12 form-group">
								<input type="email" name="email" placeholder="Emaill Address *" required>
							</div>

							<div class="col-md-6 col-sm-12 col-xs-12 form-group">
								<input type="text" name="subject" placeholder="Subject (Optional)" required>
							</div>

							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
								<textarea name="comments" placeholder="Message"></textarea>
							</div>

							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
								<button class="theme-btn btn-style-one" type="submit"><span class="txt">Post Comment</span></button>
							</div>

						</div>
					</form>

				</div>
				<!--End Comment Form -->
			</div>
		</div>
		<!-- End Lower Section -->

	</div>

	<!-- Main Footer -->
    @endsection
