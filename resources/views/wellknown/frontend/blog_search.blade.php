@extends('wellknown.layouts.index')

@section("content")


@if($blog->count() != 0)
<br><br><br><br><br>

	<!-- Page Title Section -->
	
    <div class="page-title-section">
    	<div class="auto-container">
			<ul class="post-meta">
				<li><a href="index.html">Index</a></li>
				<li>Blog</li>
			</ul>
			<h2><span>Latest</span> From Our Press</h2>
		</div>
	</div>
	<!-- End Page Title Section -->

	<!--Sidebar Page Container-->
    <div class="sidebar-page-container padding-top">
    	<div class="auto-container">
			<div class="row clearfix">

                <!-- Content Side -->
                <div class="content-side col-lg-9 col-md-12 col-sm-12">
					<div class="our-blogs">
                        @foreach($blog as $data)
                
						<!-- News Block Three -->
						<div class="news-block-three">
							<div class="inner-box">
								<div class="image">
									<a href="{{route('blog_detail',['id'=>$data->id])}}"><img src="{{ asset('frontend') }}/images/resource/{{$data->blog_image}}" alt="" /></a>
								</div>
								<div class="title">{{$data->blog_title}}</div>
								<h4><a href="{{route('blog_detail',['id'=>$data->id])}}">{{$data->blog_discription}}</a></h4>
								<div class="post-date">{{date('jS M Y',strtotime($data->updated_at))}} by <span>{{$data->blog_author}}</span></div>
							</div>
						</div>
						@endforeach

						<!-- News Block Three -->
						<!-- <div class="news-block-three">
							<div class="inner-box">
								<div class="image">
									<a href="blog-detail.html"><img src="{{ asset('frontend') }}/images/resource/news-5.jpg" alt="" /></a>
								</div>
								<div class="title">news</div>
								<h4><a href="blog-detail.html">Payment Online -Things That You Know To Protect Your Money Before Perform A Checkout</a></h4>
								<div class="post-date">Decmber 14th, 2020 by <span>Admin</span></div>
							</div>
						</div>
 -->
						<!-- News Block Three -->
						<!-- <div class="news-block-three">
							<div class="inner-box">
								<div class="image">
									<a href="blog-detail.html"><img src="{{ asset('frontend') }}/images/resource/news-6.jpg" alt="" /></a>
								</div>
								<div class="title">business</div>
								<h4><a href="blog-detail.html">5 Steps To Build Strategy Planning</a></h4>
								<div class="post-date">Decmber 14th, 2020 by <span>Admin</span></div>
							</div>
						</div> -->

						<!-- News Block Three -->
					<!-- 	<div class="news-block-three">
							<div class="inner-box">
								<div class="image">
									<a href="blog-detail.html"><img src="{{ asset('frontend') }}/images/resource/news-7.jpg" alt="" /></a>
								</div>
								<div class="title">tips & tricks</div>
								<h4><a href="blog-detail.html">5 Secrets To Coaching Your Employees To Greatness</a></h4>
								<div class="post-date">Decmber 14th, 2020 by <span>Admin</span></div>
							</div>
						</div> -->

						<!-- News Block Three -->
						<!-- <div class="news-block-three">
							<div class="inner-box">
								<div class="image">
									<a href="blog-detail.html"><img src="{{ asset('frontend') }}/images/resource/news-8.jpg" alt="" /></a>
								</div>
								<div class="title">News</div>
								<h4><a href="blog-detail.html">Trend Of Consumer Market 2020</a></h4>
								<div class="post-date">Decmber 14th, 2020 by <span>Admin</span></div>
							</div>
						</div> -->

					</div>

					<!-- Post Share Options -->
					<div class="styled-pagination">
						<ul class="clearfix">
							{{$blog->links()}}

							<!-- <li><a href="#">1</a></li>
							<li class="active"><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li class="next"><a href="#"><span class="ti-angle-right"></span> </a></li> -->
						</ul>
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
	</div>
	@else 
	<br><br><br><br><br><br><br><br><br>
	<h3>Result Not Found</h3>
	
	@endif
@endsection
