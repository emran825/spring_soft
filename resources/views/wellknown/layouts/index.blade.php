<!DOCTYPE html>
<html lang="en-US">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <title>Spring Soft IT</title>
    <meta name="facebook-domain-verification" content="xhgitrmbu7vuqq86coa0rrqsjvtm6b" />
    <meta name="springsoftit" content="Leading IT solutions" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="canonical" href="Replace_with_your_PAGE_URL.html" />
    <script src="{{ asset('frontend')}}/js/jquery.js"></script>


    <!-- Stylesheets -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <link href="{{ asset('frontend') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/css/main.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/project/css/style.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/css/responsive.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/project/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <!--  <link href="{{ asset('frontend')}}/project/aos/aos.css" rel="stylesheet"> -->
    <link href="{{ asset('frontend')}}/project/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ asset('frontend')}}/project/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="{{ asset('frontend')}}/project/glightbox/css/glightbox.min.css" rel="stylesheet">

    <!-- Open Graph (OG) meta tags are snippets of code that control how URLs are displayed when shared on social media  -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Consulte - Investment Company Bootstrap HTML Template" />
    <meta property="og:url" content="PAGE_URL" />
    <meta property="og:site_name" content="SITE_NAME" />
    <!-- For the og:image content, replace the # with a link of an image -->
    <meta property="og:image" content="#" />
    <meta property="og:description" content="Consulte is a free Bootstrap HTML Template for Investment Company" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

    <!-- Sweet Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Add site Favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend') }}/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="{{ asset('frontend') }}/images/favicon.png" type="image/x-icon">
    <meta name="msapplication-TileImage" content="{{ asset('frontend') }}/images/favicon.png" />
    <!-- //<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->
    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script'
            , 'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1955833077774729');
        fbq('track', 'PageView');

    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1955833077774729&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->

    <!-- Structured Data  -->
    <script type="application/ld+json">
        {
            "@context": "http://schema.org"
            , "@type": "WebSite"
            , "name": "Replace_with_your_site_title"
            , "url": "Replace_with_your_site_URL"
        }

    </script>
</head>

<body>

    <div class="page-wrapper">

        <!-- Main Header-->
        <header class="main-header">

            <!-- Header Top -->
            <div class="header-top">
                <div class="auto-container">
                    <div class="inner-container clearfix">
                        <!-- Top Left -->
                        <div class="top-left">
                            <!-- Info List -->
                            <ul class="info-list">

                                 <li><a href="//{{$header->email}}"><span class="icon icofont-envelope"></span>{{$header->email}}</a></li>
                                <li><a href="tel:+88{{$header->phone}}"><span class="icon icofont-phone"></span> +88 {{$header->phone}}</a></li>

                                <li><a href="#"><span class="icon icofont-clock-time"></span>{{$header->open_time}}</a></li>
                            </ul>
                        </div>

                        <!-- Top Right -->
                        <div class="top-right pull-right">
                            <!-- Social Box -->
                             <ul class="social-box">
                                <li class="share">Our Social</li>
                                <li><a href="{{url($header->t_link)}}" class="icofont-twitter" target="blank"></a></li>
                                <li><a href="{{url($header->f_link)}}" class="icofont-facebook" target="blank"></a></li>
                                <li><a href="{{url($header->i_link)}}" class="icofont-instagram" target="blank"></a></li>

                                <li><a href="{{url($header->u_link)}}" class="icofont-play-alt-1" target="blank"></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Header Upper -->
            <div class="header-upper  bg-white">
                <div class="auto-container">
                    <div class="inner-container clearfix">

                        <div class="pull-left logo-box">
                            <div class="logo"><a href="{{ route ('home') }}"><img src="{{ asset('frontend') }}/images/logo/{{$nav->logo}}" alt="" title=""></a></div>
                        </div>

                      <div class="nav-outer pull-left clearfix">
                            <!-- Main Menu -->
                            <nav class="main-menu  navbar-expand-md">
                                <div class="navbar-header">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse show collapse clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class="current"><a href="{{ route ('home') }}">{{$nav->nav_one}}</a></li>
                                        <li class="dropdown"><a href="{{ route ('about') }}">{{$nav->nav_two}} <i class="fas fa-caret-down"></i></a>
                                            <ul>
                                                <li><a href="{{ route ('about') }}">About Us</a></li>
                                                <li><a href="{{ route('service') }}">{{$nav->nav_three}}</a></li>
                                                <li><a href="{{ route ('blog') }}">Blog</a></li>
                                                <li><a href="{{ route ('get.team') }}">Our Team</a></li>
                                                <li><a href="{{ route ('gallery') }}">Gallery</a></li>

                                            </ul>
                                        </li>

                                        <li class="dropdown"><a href="{{ route('project') }}">{{$nav->nav_four}} <i class="fas fa-caret-down"></i></a>
                                            <ul>
                                                <li><a href="{{ route ('project') }}">Projects</a></li>
                                                <li><a href="{{ route ('product.display') }}">Products</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('get.career') }}">Career</a>

                                        </li>
                                        <li><a href="{{ route('contact') }}">{{$nav->nav_six}}</a></li>

                                        <li class="dropdown"><a href="{{ route('course') }}">{{$nav->nav_seven}} <i class="fas fa-caret-down"></i></a>
                                            <ul>

                                                <li><a href="{{ route('course') }}">Our Courses</a></li>
                                                <li><a href="{{route('course-details')}}">Course Details</a></li>
                                            </ul>
                                        </li>


									@if( Session::get('customer_id'))
										  <li class="dropdown"><a href="{{ route('course') }}">LOGIN</a>
                                            <ul>

                                                <li><a href="{{ route('Customer.Dashboard',['id'=> Session::get('customer_id')]) }}">Dashboard</a></li>
                                                <li><a  href="{{route('customer.logout')}}">Log out</a></li>
                                            </ul>
                                        </li>
                                         @elseif( Session::get('LoginStudent'))
                                          <li class="dropdown"><a href="{{ route('course') }}"> <i style="font-size:22px" class="fas fa-sign-out-alt"></i></a>
                                            <ul>

                                                <li><a href="{{route('student')}}">Dashboard</a></li>
                                                <li><a  href="{{route('student.logout')}}">Log out</a></li>
                                            </ul>
                                        </li>


                                       @else
                                          <li class="dropdown"><a href="{{ route('course') }}">LOGIN <i class="fas fa-caret-down"></i></a>
                                            <ul>

                                                <li><a href="{{route('student.login')}}">Student Login</a></li>
                                                <li><a  href="{{route('customer.login.form')}}">Customer Login</a></li>
                                            </ul>
                                        </li>

                                          @endif



                                           <li>
                                               {{-- <a data-target="#myModal" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#myModal"><i class="fas fa-shopping-cart"></i><span class='badge badge-warning' id='lblCartCount'>{{ Cart::count() }} </span></a> --}}
                                               @if(Cart::count()>0)
                                               <a href="{{ route('cart.view') }}"><i class="fas fa-shopping-cart"></i><span class='badge badge-warning' id='lblCartCount'>{{ Cart::count() }} </span></a>
                                               @else
                                               <a href="{{ route('cart.view') }}"><i class="fas fa-shopping-cart"></i></a>
                                               @endif

                                           </li>








                                    </ul>


                                </div>

                            </nav>

                        </div>

                        <!-- Outer Box -->
                        <div class="outer-box">
                            <!-- Search Btn -->
                            <!-- <div class="search-box-btn search-box-outer"><span class="icon icofont-search"></span></div> -->
                            <!-- Mobile Navigation Toggler -->
                            <div class="mobile-nav-toggler"><span class="icon ti-menu"></span></div>
                          <!--   @if( Session::get('LoginStudent'))
                       <div class="search-box-btn "><a href="{{route('student')}}">{{Session::get('StudentName')}}</a></div>
                       
                      
                       @endif -->





                            {{-- @if( Session::get('customer_id'))
                            <div class="search-box-btn ">
							
							
							
							<a href="{{route('customer.logout')}}"><i style="font-size:22px" class="fas fa-sign-out-alt"></i></a></div>
							
                            @endif --}}


                        </div>

                    </div>
                </div>
            </div>
            <!--End Header Upper-->

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon lnr lnr-cross"></span></div>

                <nav class="menu-box">
                    <div class="nav-logo"><a href="{{ route ('home') }}"><img src="{{ asset('frontend') }}/images/logo.png" alt="" title=""></a></div>
                    <div class="menu-outer">
                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                    </div>
                </nav>
            </div><!-- End Mobile Menu -->

        </header>
        <!--End Main Header -->

        @yield('content');



        <!-- Main Footer -->
        <footer class="main-footer">
            <div class="auto-container">
                <!--Widgets Section-->
                <div class="widgets-section">
                    <div class="row clearfix">

                        <!-- Column -->
                        <div class="big-column col-lg-3 col-md-12 col-sm-6 col-12">
                            <div class="row clearfix">

                                <!-- Footer Column -->
                                <div class="footer-column col-lg-12 col-md-6 col-sm-12">
                                    <div class="footer-widget logo-widget">
                                        <div class="logo">
                                            <a href="{{ route ('home') }}"><img src="{{ asset('frontend') }}/images/logo/{{$nav->logo}}" alt="" /></a>
                                        </div>
                                        <div class="call">
                                           UK OFFICE CALL US DIRECTLY
                                            <a class="phone" href="tel:+1-212-226-3126">+44{{ $our_details->uk_phone}}</a>
                                            <a class="email" href="mailto:info@springsoftit.com">{{$header->email}}</a>
                                             BD OFFICE CALL US DIRECTLY
                                             <a class="phone" href="tel:+1-212-226-3126">+88{{$header->phone}}</a>
                                            <a class="email" href="mailto:info@springsoftit.com">{{$header->email}}</a>

                                        </div>
                                    </div>
                                </div>

                                <!-- Footer Column -->



                            </div>
                        </div>

                        <!-- Column -->
                        <div class="big-column col-lg-9 col-md-12 col-sm-6 col-12">
                            <div class="row clearfix">

                                <!-- Footer Column -->
                                <div class="footer-column col-lg-9 col-md-6 col-sm-12 d-inline">
                                    @foreach($footer as $data)
                                    <div class="d-inline-block footer-widget links-widget" style="margin-left: 100px">
                                        <h5>{{$data->title}}</h5>
                                        <ul class="list-link">
                                            <li><a href="#">{{$data->link1}}</a></li>
                                            <li><a href="#">{{$data->link2}}</a></li>
                                            <li><a href="#">{{$data->link3}}</a></li>
                                            <li><a href="#">{{$data->link4}}</a></li>
                                            <li><a href="#">{{$data->link5}}</a></li>
                                        </ul>

                                    </div>
                                    @endforeach

                                </div>
                                 @if(session()->has('subscribemessage'))
                                <script type="text/javascript">
                                    swal("Spring Soft IT!", "{!! session()->get('subscribemessage') !!}", "success");

                                </script>
                                @endif
                                
                      @error('email')
                                <script type="text/javascript">
                                    swal("Spring Soft IT!", "{!! $message  !!}", "error");

                                </script>
                            @enderror


                                <!-- Footer Column -->
                                <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                                    <div class="footer-widget newsletter-widget">
                                        <h5>Our Newsletter</h5>
                                        <div class="text">Subscribe to our newsletter and we will inform you about latest updates and offers</div>
                                        <!-- Newsletter Form -->
                                        <div class="newsletter-form">
                                            <form method="post" action="{{route('subscribe.post')}}">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="email" name="email" value="" placeholder="Email Address..." required>
                                                    <button type="submit" class="theme-btn icofont-arrow-right"></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <!-- Footer Bottom -->
                <div class="footer-bottom">
                    <div class="auto-container">
                        <div class="bottom-inner">
                            <div class="row clearfix">

                                <div class="col-lg-8 col-md-12 col-sm-12">
                                    <div class="copyright">© 2021 <strong>{{$header->copyright}}</strong> </div>
                                </div>

                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <ul class="social-nav">
                                        <li><a href="{{url($header->t_link)}}" class="icofont-twitter" target="blank"></a></li>
                                        <li><a href="{{url($header->f_link)}}
										" class="icofont-facebook" target="blank"></a></li>
                                        <li><a href="{{url($header->i_link)}}" class="icofont-instagram" target="blank"></a></li>

                                        <li><a href="{{url($header->u_link)}}" class="icofont-play-alt-1" target="blank"></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </footer>

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

    <!-- Scroll To Top -->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-circle-up"></span></div>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <!-- <script src="{{ asset('frontend')}}/js/jquery.js"></script> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    <script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.fancybox.js"></script>
    <script src="{{ asset('frontend') }}/js/appear.js"></script>
    <script src="{{ asset('frontend') }}/js/owl.js"></script>
    <script src="{{ asset('frontend') }}/js/wow.js"></script>
    <script src="{{ asset('frontend') }}/js/parallax.min.js"></script>
    <script src="{{ asset('frontend') }}/js/tilt.jquery.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.paroller.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery-ui.js"></script>
    <script src="{{ asset('frontend') }}/js/script.js"></script>


    <!-- Vendor JS Files -->
    <script src="{{ asset('frontend') }}/project/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="{{ asset('frontend') }}/project/aos/aos.js"></script>
    <script src="{{ asset('frontend') }}/project/php-email-form/validate.js"></script>
    <script src="{{ asset('frontend') }}/project/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('frontend') }}/project/purecounter/purecounter.js"></script>
    <script src="{{ asset('frontend') }}/project/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('frontend') }}/project/glightbox/js/glightbox.min.js"></script>
    <!-- Template Main JS File -->
    <script src="{{ asset('frontend') }}/project/js/main.js"></script>




</body>

</html>

