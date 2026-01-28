@extends('frontend.layouts.master')

@section('head')

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

        <title>Travio - HTML 5 Template Preview</title>

        <!-- Fav Icon -->
        <link rel="icon" href="{{ url('') }}/frontend/assets/images/favicon.ico" type="image/x-icon">

        <!-- Google Fonts -->
        <link
            href="{{ url('') }}/frontend/https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">
        <link
            href="{{ url('') }}/frontend/https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">

        <!-- Stylesheets -->
        <link href="{{ url('') }}/frontend/assets/css/font-awesome-all.css" rel="stylesheet">
        <link href="{{ url('') }}/frontend/assets/css/flaticon.css" rel="stylesheet">
        <link href="{{ url('') }}/frontend/assets/css/owl.css" rel="stylesheet">
        <link href="{{ url('') }}/frontend/assets/css/bootstrap.css" rel="stylesheet">
        <link href="{{ url('') }}/frontend/assets/css/jquery.fancybox.min.css" rel="stylesheet">
        <link href="{{ url('') }}/frontend/assets/css/animate.css" rel="stylesheet">
        <link href="{{ url('') }}/frontend/assets/css/nice-select.css" rel="stylesheet">
        <link href="{{ url('') }}/frontend/assets/css/jquery-ui.css" rel="stylesheet">
        <link href="{{ url('') }}/frontend/assets/css/color.css" rel="stylesheet">
        <link href="{{ url('') }}/frontend/assets/css/style.css" rel="stylesheet">
        <link href="{{ url('') }}/frontend/assets/css/responsive.css" rel="stylesheet">

    </head>
@endsection

@section('content')
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="{{ url('') }}/frontend/index.html"><img
                        src="{{ url('') }}/frontend/assets/images/logo-2.png" alt="" title=""></a>
            </div>
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
            <div class="contact-info">
                <h4>Contact Info</h4>
                <ul>
                    <li>Chicago 12, Melborne City, USA</li>
                    <li><a href="{{ url('') }}/frontend/tel:+8801682648101">+88 01682648101</a></li>
                    <li><a href="{{ url('') }}/frontend/mailto:info@example.com">info@example.com</a></li>
                </ul>
            </div>
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="{{ url('') }}/frontend/index.html"><span class="fab fa-twitter"></span></a>
                    </li>
                    <li><a href="{{ url('') }}/frontend/index.html"><span class="fab fa-facebook-square"></span></a>
                    </li>
                    <li><a href="{{ url('') }}/frontend/index.html"><span class="fab fa-pinterest-p"></span></a></li>
                    <li><a href="{{ url('') }}/frontend/index.html"><span class="fab fa-instagram"></span></a>
                    </li>
                    <li><a href="{{ url('') }}/frontend/index.html"><span class="fab fa-youtube"></span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div><!-- End Mobile Menu -->


    <!-- banner-section -->
    <section class="banner-section" style="background-image: url({{ url('') }}/frontend/assets/images/banner/banner2.jpg);">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/ban);"></div>
        <div class="auto-container">
            <div class="content-box">
                <h2>Explore <br />Your Travel</h2>
                <p>Discover your next great adventure, become an explorer to get started!</p>
                <div class="form-inner">
                    <form action="index.html" method="post" class="booking-form clearfix">
                        <div class="form-group">
                            <input type="text" name="service" placeholder="Where to?" required="">
                        </div>
                        <div class="form-group input-date">
                            <i class="far fa-angle-down"></i>
                            <input type="text" name="date" placeholder="When?" id="datepicker">
                        </div>
                        <div class="form-group">
                            <div class="select-box">
                                <select class="wide">
                                    <option data-display="Travel Type">Travel Type</option>
                                    <option value="1">Adventure Tours</option>
                                    <option value="2">City Tours</option>
                                    <option value="3">Couple Tours</option>
                                    <option value="4">Group Tours</option>
                                </select>
                            </div>
                        </div>
                        <div class="message-btn">
                            <button type="submit" class="theme-btn"><i class="far fa-search"></i>Find
                                Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->


    <!-- feature-section -->
    <section class="feature-section centred bg-color-1 sec-pad">
        <div class="auto-container">
            <div class="sec-title text-center">
                <p>Travio Specials</p>
                <h2>Why Travel with Tutive?</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-one wow fadeInUp animated animated" data-wow-delay="00ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><img
                                    src="{{ url('') }}/frontend/assets/images/resource/download.jpg"
                                    alt="NO Image"></figure>
                            <div class="lower-content">
                                <div class="icon-box"><i class="icon-1"></i></div>
                                <h4>2000+ Our Worldwide Guides</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-one wow fadeInUp animated animated" data-wow-delay="200ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><img
                                    src="{{ url('') }}/frontend/assets/images/resource/download1.jpg"
                                    alt=""></figure>
                            <div class="lower-content">
                                <div class="icon-box"><i class="icon-2"></i></div>
                                <h4>100% Trusted Tour Agency</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-one wow fadeInUp animated animated" data-wow-delay="400ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><img
                                    src="{{ url('') }}/frontend/assets/images/resource/feature-3.jpg"
                                    alt=""></figure>
                            <div class="lower-content">
                                <div class="icon-box"><i class="icon-3"></i></div>
                                <h4>12+ Years of Travel Experience</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-one wow fadeInUp animated animated" data-wow-delay="600ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><img
                                    src="{{ url('') }}/frontend/assets/images/resource/feature-4.jpg"
                                    alt=""></figure>
                            <div class="lower-content">
                                <div class="icon-box"><i class="icon-4"></i></div>
                                <h4>98% of Our Travelers are Happy</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature-section end -->


    <!-- about-section -->
    <section class="about-section">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image_block_1">
                        <div class="image-box">
                            <div class="shape">
                                <div class="shape-1" style="background-image: url(assets/images/shape/shape-2.png);">
                                </div>
                                <div class="shape-2" style="background-image: url(assets/images/shape/shape-3.png);">
                                </div>
                            </div>
                            <figure class="image image-1">
                                <img src="{{ url('') }}/frontend/assets/images/resource/about-1.jpg"
                                    alt="">
                                <div class="shape-3" style="background-image: url(assets/images/shape/shape-3.png);">
                                </div>
                            </figure>
                            <figure class="image image-2"><img
                                    src="{{ url('') }}/frontend/assets/images/resource/about-2.jpg" alt="">
                            </figure>
                            <div class="video-content">
                                <h3>Find Your Best Destination</h3>
                                <div class="video-btn">
                                    <a href="{{ url('') }}/frontend/https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s"
                                        class="lightbox-image" data-caption=""><i class="icon-Video"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_1">
                        <div class="content-box">
                            <div class="sec-title">
                                <p>About Travio</p>
                                <h2>World Best Travel Agency Company Since 2008.</h2>
                            </div>
                            <div class="text">
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiu smod tempor
                                    incididunt ut labore dolore magna aliqua.Quis ipsum suspen disse ultrices
                                    gravida Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                            </div>
                            <ul class="list clearfix">
                                <li>Ratione voluptatem.sequi nesciunt.</li>
                                <li>Ratione voluptatem.</li>
                                <li>Ratione voluptatem sequi.</li>
                            </ul>
                            <div class="btn-box">
                                <a href="{{ url('') }}/frontend/tour-1.html" class="theme-btn">Find
                                    Tours</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-section end -->


    <!-- tour-section -->
    <section class="tour-section bg-color-1 sec-pad">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-4.png);"></div>
        <div class="auto-container">
            <div class="sec-title text-center">
                <p>Modern & Beautiful</p>
                <h2>Our Most Popular Adventures</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 tour-block">
                    <div class="tour-block-one wow fadeInUp animated animated" data-wow-delay="00ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="{{ url('') }}/frontend/assets/images/tour/tour-1.jpg" alt="">
                                <a href="{{ url('') }}/frontend/tour-details.html"><i class="fas fa-link"></i></a>
                            </figure>
                            <div class="lower-content">
                                <div class="rating"><span><i class="fas fa-star"></i>8.0 Superb</span></div>
                                <h3><a href="{{ url('') }}/frontend/tour-details.html">Moscow Red City
                                        Land</a></h3>
                                <h4>$170.00<span> / Per person</span></h4>
                                <ul class="info clearfix">
                                    <li><i class="far fa-clock"></i>5 Days</li>
                                    <li><i class="far fa-map"></i>G87P, Birmingham</li>
                                </ul>
                                <p>Lorem ipsum dolor amet consectetur adipiscing sed.</p>
                                <div class="btn-box">
                                    <a href="{{ url('') }}/frontend/tour-details.html">See Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 tour-block">
                    <div class="tour-block-one wow fadeInUp animated animated" data-wow-delay="300ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="{{ url('') }}/frontend/assets/images/tour/tour-2.jpg" alt="">
                                <a href="{{ url('') }}/frontend/tour-details.html"><i class="fas fa-link"></i></a>
                            </figure>
                            <div class="lower-content">
                                <div class="rating"><span><i class="fas fa-star"></i>8.0 Superb</span></div>
                                <h3><a href="{{ url('') }}/frontend/tour-details.html">Moscow Red City
                                        Land</a></h3>
                                <h4>$170.00<span> / Per person</span></h4>
                                <ul class="info clearfix">
                                    <li><i class="far fa-clock"></i>5 Days</li>
                                    <li><i class="far fa-map"></i>G87P, Birmingham</li>
                                </ul>
                                <p>Lorem ipsum dolor amet consectetur adipiscing sed.</p>
                                <div class="btn-box">
                                    <a href="{{ url('') }}/frontend/tour-details.html">See Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 tour-block">
                    <div class="tour-block-one wow fadeInUp animated animated" data-wow-delay="600ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="{{ url('') }}/frontend/assets/images/tour/tour-3.jpg" alt="">
                                <a href="{{ url('') }}/frontend/tour-details.html"><i class="fas fa-link"></i></a>
                            </figure>
                            <div class="lower-content">
                                <div class="rating"><span><i class="fas fa-star"></i>8.0 Superb</span></div>
                                <h3><a href="{{ url('') }}/frontend/tour-details.html">Moscow Red City
                                        Land</a></h3>
                                <h4>$170.00<span> / Per person</span></h4>
                                <ul class="info clearfix">
                                    <li><i class="far fa-clock"></i>5 Days</li>
                                    <li><i class="far fa-map"></i>G87P, Birmingham</li>
                                </ul>
                                <p>Lorem ipsum dolor amet consectetur adipiscing sed.</p>
                                <div class="btn-box">
                                    <a href="{{ url('') }}/frontend/tour-details.html">See Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tour-section end -->


    <!-- deals-section -->
    <section class="deals-section" style="background-image: url(assets/images/background/deals-1.jpg);">
        <div class="auto-container">
            <div class="content_block_2">
                <div class="content-box">
                    <h3>Group Travel <br />to New Zealand</h3>
                    <div class="price">
                        <h4>$150</h4><del>$300</del>
                    </div>
                    <p>Lorem ipsum dolor amet consectetur adipiscing sed do eiusmod tempor ux incidunt labore dolore
                        magna aliqua Quis ipsum suspen.</p>
                    <a href="{{ url('') }}/frontend/tour-details.html" class="theme-btn">See Details</a>
                </div>
            </div>
        </div>
    </section>
    <!-- deals-section end -->


    <!-- place-section -->
    <section class="place-section sec-pad">
        <div class="anim-icon">
            <div class="icon anim-icon-1" style="background-image: url(assets/images/icons/anim-icon-1.png);">
            </div>
            <div class="icon anim-icon-2" style="background-image: url(assets/images/shape/shape-3.png);"></div>
            <div class="icon anim-icon-3" style="background-image: url(assets/images/shape/shape-3.png);"></div>
        </div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 title-column">
                    <div class="sec-title">
                        <p>Choose Your place</p>
                        <h2>Popular Destinations</h2>
                    </div>
                    <div class="text">
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiu smod tempor incididunt.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 place-block">
                    <div class="place-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img
                                    src="{{ url('') }}/frontend/assets/images/resource/place-1.jpg" alt="">
                            </figure>
                            <div class="text">
                                <h3><a href="{{ url('') }}/frontend/destination-details.html">New York
                                        City</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 place-block">
                    <div class="place-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img
                                    src="{{ url('') }}/frontend/assets/images/resource/place-2.jpg" alt="">
                            </figure>
                            <div class="text">
                                <h3><a href="{{ url('') }}/frontend/destination-details.html">Norway
                                        Lake</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 place-block">
                    <div class="place-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img
                                    src="{{ url('') }}/frontend/assets/images/resource/place-3.jpg" alt="">
                            </figure>
                            <div class="text">
                                <h3><a href="{{ url('') }}/frontend/destination-details.html">Affrican
                                        Park</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 place-block">
                    <div class="place-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img
                                    src="{{ url('') }}/frontend/assets/images/resource/place-4.jpg" alt="">
                            </figure>
                            <div class="text">
                                <h3><a href="{{ url('') }}/frontend/destination-details.html">Vietnam</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 link-column">
                    <div class="link-box centred">
                        <h3>Find All <br />Destination</h3>
                        <a href="{{ url('') }}/frontend/destination.html" class="theme-btn">Find Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- place-section end -->


    <!-- map-section -->
    <section class="map-section bg-color-1">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-9.png);"></div>
        <div class="outer-container">
            <div class="sec-title centred">
                <p>Modern & Beautiful</p>
                <h2>Explore the World for Travel</h2>
            </div>
            <div class="map-inner" style="background-image: url(assets/images/shape/map-1.png);">
                <div class="map-content clearfix">
                    <div class="single-location-box">
                        <figure class="map-marker">
                            <img src="{{ url('') }}/frontend/assets/images/icons/marker-1.png" alt="">
                            <span>1</span>
                        </figure>
                        <div class="address-box">
                            <h3>Moscow City</h3>
                            <p>Lorem ipsum dolor amet consectetur adipiscing sed do eiusmod tempor incididunt.</p>
                        </div>
                    </div>
                    <div class="single-location-box">
                        <figure class="map-marker">
                            <img src="{{ url('') }}/frontend/assets/images/icons/marker-1.png" alt="">
                            <span>2</span>
                        </figure>
                        <div class="address-box">
                            <h3>Affrican Park</h3>
                            <p>Lorem ipsum dolor amet consectetur adipiscing sed do eiusmod tempor incididunt.</p>
                        </div>
                    </div>
                    <div class="single-location-box current">
                        <figure class="map-marker">
                            <img src="{{ url('') }}/frontend/assets/images/icons/marker-1.png" alt="">
                            <span>3</span>
                        </figure>
                        <div class="address-box">
                            <h3>Norway Lake</h3>
                            <p>Lorem ipsum dolor amet consectetur adipiscing sed do eiusmod tempor incididunt.</p>
                        </div>
                    </div>
                    <div class="single-location-box">
                        <figure class="map-marker">
                            <img src="{{ url('') }}/frontend/assets/images/icons/marker-1.png" alt="">
                            <span>4</span>
                        </figure>
                        <div class="address-box">
                            <h3>New York City</h3>
                            <p>Lorem ipsum dolor amet consectetur adipiscing sed do eiusmod tempor incididunt.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- map-section end -->


    <!-- funfact-section -->
    <section class="funfact-section centred">
        <div class="anim-icon">
            <div class="icon anim-icon-1" style="background-image: url(assets/images/shape/shape-3.png);"></div>
            <div class="icon anim-icon-2" style="background-image: url(assets/images/shape/shape-3.png);"></div>
        </div>
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                        <div class="counter-block-one">
                            <div class="inner-box">
                                <div class="pattern" style="background-image: url(assets/images/shape/shape-5.png);">
                                </div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="2000">0</span><span>+</span>
                                    <p>Awesome Hikers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                        <div class="counter-block-one">
                            <div class="inner-box">
                                <div class="pattern" style="background-image: url(assets/images/shape/shape-6.png);">
                                </div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="70">0</span><span>+</span>
                                    <p>Stunning Places</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                        <div class="counter-block-one">
                            <div class="inner-box">
                                <div class="pattern" style="background-image: url(assets/images/shape/shape-7.png);">
                                </div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="1200">0</span><span>+</span>
                                    <p>Miles to Hike</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                        <div class="counter-block-one">
                            <div class="inner-box">
                                <div class="pattern" style="background-image: url(assets/images/shape/shape-8.png);">
                                </div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="15">0</span>
                                    <p>Years in Service</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- funfact-section end -->


    <!-- testimonial-section -->
    <section class="testimonial-section sec-pad centred">
        <div class="auto-container">
            <div class="sec-title centred">
                <p>Review & Testimonials</p>
                <h2>Top Reviews for Travio</h2>
            </div>
            <div class="three-item-carousel owl-carousel owl-theme owl-nav-none">
                <div class="testimonial-block-one">
                    <div class="inner-box">
                        <ul class="rating-box clearfix">
                            <li><i class="icon-Star"></i></li>
                            <li><i class="icon-Star"></i></li>
                            <li><i class="icon-Star"></i></li>
                            <li><i class="icon-Star"></i></li>
                            <li><i class="icon-Star"></i></li>
                        </ul>
                        <div class="text">
                            <div class="icon" style="background-image: url(assets/images/icons/quote-1.png);">
                            </div>
                            <p>Lorem ipsum dolor amet consectet adipiscing sed do eiusmod tempor incididunt labore
                                et dolore magna aliqua ipsum suspen disse ultrices gravida Risus</p>
                        </div>
                        <div class="author-box">
                            <h4>Mike Hardson</h4>
                            <span class="designation">Traveler</span>
                            <figure class="thumb-box"><img
                                    src="{{ url('') }}/frontend/assets/images/resource/testimonial-1.png"
                                    alt=""></figure>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block-one">
                    <div class="inner-box">
                        <ul class="rating-box clearfix">
                            <li><i class="icon-Star"></i></li>
                            <li><i class="icon-Star"></i></li>
                            <li><i class="icon-Star"></i></li>
                            <li><i class="icon-Star"></i></li>
                            <li><i class="icon-Star"></i></li>
                        </ul>
                        <div class="text">
                            <div class="icon" style="background-image: url(assets/images/icons/quote-1.png);">
                            </div>
                            <p>Lorem ipsum dolor amet consectet adipiscing sed do eiusmod tempor incididunt labore
                                et dolore magna aliqua ipsum suspen disse ultrices gravida Risus</p>
                        </div>
                        <div class="author-box">
                            <h4>Amy Johnson</h4>
                            <span class="designation">Traveler</span>
                            <figure class="thumb-box"><img
                                    src="{{ url('') }}/frontend/assets/images/resource/testimonial-2.png"
                                    alt=""></figure>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block-one">
                    <div class="inner-box">
                        <ul class="rating-box clearfix">
                            <li><i class="icon-Star"></i></li>
                            <li><i class="icon-Star"></i></li>
                            <li><i class="icon-Star"></i></li>
                            <li><i class="icon-Star"></i></li>
                            <li><i class="icon-Star"></i></li>
                        </ul>
                        <div class="text">
                            <div class="icon" style="background-image: url(assets/images/icons/quote-1.png);">
                            </div>
                            <p>Lorem ipsum dolor amet consectet adipiscing sed do eiusmod tempor incididunt labore
                                et dolore magna aliqua ipsum suspen disse ultrices gravida Risus</p>
                        </div>
                        <div class="author-box">
                            <h4>Luaka Smith</h4>
                            <span class="designation">Traveler</span>
                            <figure class="thumb-box"><img
                                    src="{{ url('') }}/frontend/assets/images/resource/testimonial-3.png"
                                    alt=""></figure>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block-one">
                    <div class="inner-box">
                        <ul class="rating-box clearfix">
                            <li><i class="icon-Star"></i></li>
                            <li><i class="icon-Star"></i></li>
                            <li><i class="icon-Star"></i></li>
                            <li><i class="icon-Star"></i></li>
                            <li><i class="icon-Star"></i></li>
                        </ul>
                        <div class="text">
                            <div class="icon" style="background-image: url(assets/images/icons/quote-1.png);">
                            </div>
                            <p>Lorem ipsum dolor amet consectet adipiscing sed do eiusmod tempor incididunt labore
                                et dolore magna aliqua ipsum suspen disse ultrices gravida Risus</p>
                        </div>
                        <div class="author-box">
                            <h4>Mike Hardson</h4>
                            <span class="designation">Traveler</span>
                            <figure class="thumb-box"><img
                                    src="{{ url('') }}/frontend/assets/images/resource/testimonial-1.png"
                                    alt=""></figure>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block-one">
                    <div class="inner-box">
                        <ul class="rating-box clearfix">
                            <li><i class="icon-Star"></i></li>
                            <li><i class="icon-Star"></i></li>
                            <li><i class="icon-Star"></i></li>
                            <li><i class="icon-Star"></i></li>
                            <li><i class="icon-Star"></i></li>
                        </ul>
                        <div class="text">
                            <div class="icon" style="background-image: url(assets/images/icons/quote-1.png);">
                            </div>
                            <p>Lorem ipsum dolor amet consectet adipiscing sed do eiusmod tempor incididunt labore
                                et dolore magna aliqua ipsum suspen disse ultrices gravida Risus</p>
                        </div>
                        <div class="author-box">
                            <h4>Amy Johnson</h4>
                            <span class="designation">Traveler</span>
                            <figure class="thumb-box"><img
                                    src="{{ url('') }}/frontend/assets/images/resource/testimonial-2.png"
                                    alt=""></figure>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block-one">
                    <div class="inner-box">
                        <ul class="rating-box clearfix">
                            <li><i class="icon-Star"></i></li>
                            <li><i class="icon-Star"></i></li>
                            <li><i class="icon-Star"></i></li>
                            <li><i class="icon-Star"></i></li>
                            <li><i class="icon-Star"></i></li>
                        </ul>
                        <div class="text">
                            <div class="icon" style="background-image: url(assets/images/icons/quote-1.png);">
                            </div>
                            <p>Lorem ipsum dolor amet consectet adipiscing sed do eiusmod tempor incididunt labore
                                et dolore magna aliqua ipsum suspen disse ultrices gravida Risus</p>
                        </div>
                        <div class="author-box">
                            <h4>Luaka Smith</h4>
                            <span class="designation">Traveler</span>
                            <figure class="thumb-box"><img
                                    src="{{ url('') }}/frontend/assets/images/resource/testimonial-3.png"
                                    alt=""></figure>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block-one">
                    <div class="inner-box">
                        <ul class="rating-box clearfix">
                            <li><i class="icon-Star"></i></li>
                            <li><i class="icon-Star"></i></li>
                            <li><i class="icon-Star"></i></li>
                            <li><i class="icon-Star"></i></li>
                            <li><i class="icon-Star"></i></li>
                        </ul>
                        <div class="text">
                            <div class="icon" style="background-image: url(assets/images/icons/quote-1.png);">
                            </div>
                            <p>Lorem ipsum dolor amet consectet adipiscing sed do eiusmod tempor incididunt labore
                                et dolore magna aliqua ipsum suspen disse ultrices gravida Risus</p>
                        </div>
                        <div class="author-box">
                            <h4>Mike Hardson</h4>
                            <span class="designation">Traveler</span>
                            <figure class="thumb-box"><img
                                    src="{{ url('') }}/frontend/assets/images/resource/testimonial-1.png"
                                    alt=""></figure>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block-one">
                    <div class="inner-box">
                        <ul class="rating-box clearfix">
                            <li><i class="icon-Star"></i></li>
                            <li><i class="icon-Star"></i></li>
                            <li><i class="icon-Star"></i></li>
                            <li><i class="icon-Star"></i></li>
                            <li><i class="icon-Star"></i></li>
                        </ul>
                        <div class="text">
                            <div class="icon" style="background-image: url(assets/images/icons/quote-1.png);">
                            </div>
                            <p>Lorem ipsum dolor amet consectet adipiscing sed do eiusmod tempor incididunt labore
                                et dolore magna aliqua ipsum suspen disse ultrices gravida Risus</p>
                        </div>
                        <div class="author-box">
                            <h4>Amy Johnson</h4>
                            <span class="designation">Traveler</span>
                            <figure class="thumb-box"><img
                                    src="{{ url('') }}/frontend/assets/images/resource/testimonial-2.png"
                                    alt=""></figure>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block-one">
                    <div class="inner-box">
                        <ul class="rating-box clearfix">
                            <li><i class="icon-Star"></i></li>
                            <li><i class="icon-Star"></i></li>
                            <li><i class="icon-Star"></i></li>
                            <li><i class="icon-Star"></i></li>
                            <li><i class="icon-Star"></i></li>
                        </ul>
                        <div class="text">
                            <div class="icon" style="background-image: url(assets/images/icons/quote-1.png);">
                            </div>
                            <p>Lorem ipsum dolor amet consectet adipiscing sed do eiusmod tempor incididunt labore
                                et dolore magna aliqua ipsum suspen disse ultrices gravida Risus</p>
                        </div>
                        <div class="author-box">
                            <h4>Luaka Smith</h4>
                            <span class="designation">Traveler</span>
                            <figure class="thumb-box"><img
                                    src="{{ url('') }}/frontend/assets/images/resource/testimonial-3.png"
                                    alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-section end -->


    <!-- video-section -->
    <section class="video-section centred" style="background-image: url(assets/images/background/video-1.jpg);">
        <div class="auto-container">
            <div class="inner-box">
                <h2>Explore Your Travel</h2>
                <p>Your New Traveling Idea</p>
                <div class="video-btn">
                    <a href="{{ url('') }}/frontend/https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s"
                        class="lightbox-image" data-caption="">
                        <i class="far fa-play"></i>
                        <span class="border-animation border-1"></span>
                        <span class="border-animation border-2"></span>
                        <span class="border-animation border-3"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- video-section end -->


    <!-- news-section -->
    <section class="news-section sec-pad pb-220">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-10.png);"></div>
        <div class="auto-container">
            <div class="sec-title">
                <p>News & Articles</p>
                <h2>Stay Update with Travio Tips</h2>
                <a href="{{ url('') }}/frontend/blog.html" class="theme-btn-two">All Blog Posts</a>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <a href="{{ url('') }}/frontend/blog-details.html"><img
                                        src="{{ url('') }}/frontend/assets/images/news/news-1.jpg"
                                        alt=""></a>
                                <span class="post-date"><i class="icon-Calendar"></i>5 Oct, 2020</span>
                            </figure>
                            <div class="lower-content">
                                <div class="category"><a
                                        href="{{ url('') }}/frontend/blog-details.html">Lifestyle</a></div>
                                <h3><a href="{{ url('') }}/frontend/blog-details.html">Including animation
                                        in your design system</a></h3>
                                <ul class="post-info clearfix">
                                    <li><span>By</span> <a href="{{ url('') }}/frontend/index.html">Eva
                                            Green</a></li>
                                    <li> - October 13, 2020</li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet consectur adip icing sed do eiusmod tempor incididunt
                                    labore dolore magna aliqua enim.</p>
                                <div class="btn-box">
                                    <a href="{{ url('') }}/frontend/blog-details.html" class="theme-btn-two">See
                                        Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="300ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <a href="{{ url('') }}/frontend/blog-details.html"><img
                                        src="{{ url('') }}/frontend/assets/images/news/news-2.jpg"
                                        alt=""></a>
                                <span class="post-date"><i class="icon-Calendar"></i>4 Oct, 2020</span>
                            </figure>
                            <div class="lower-content">
                                <div class="category"><a
                                        href="{{ url('') }}/frontend/blog-details.html">Lifestyle</a></div>
                                <h3><a href="{{ url('') }}/frontend/blog-details.html">Strategic &
                                        commercial with issues.</a></h3>
                                <ul class="post-info clearfix">
                                    <li><span>By</span> <a href="{{ url('') }}/frontend/index.html">Eva
                                            Green</a></li>
                                    <li> - October 13, 2020</li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet consectur adip icing sed do eiusmod tempor incididunt
                                    labore dolore magna aliqua enim.</p>
                                <div class="btn-box">
                                    <a href="{{ url('') }}/frontend/blog-details.html" class="theme-btn-two">See
                                        Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="600ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <a href="{{ url('') }}/frontend/blog-details.html"><img
                                        src="{{ url('') }}/frontend/assets/images/news/news-3.jpg"
                                        alt=""></a>
                                <span class="post-date"><i class="icon-Calendar"></i>3 Oct, 2020</span>
                            </figure>
                            <div class="lower-content">
                                <div class="category"><a
                                        href="{{ url('') }}/frontend/blog-details.html">Lifestyle</a></div>
                                <h3><a href="{{ url('') }}/frontend/blog-details.html">Best interior design
                                        idea for your home.</a></h3>
                                <ul class="post-info clearfix">
                                    <li><span>By</span> <a href="{{ url('') }}/frontend/index.html">Eva
                                            Green</a></li>
                                    <li> - October 13, 2020</li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet consectur adip icing sed do eiusmod tempor incididunt
                                    labore dolore magna aliqua enim.</p>
                                <div class="btn-box">
                                    <a href="{{ url('') }}/frontend/blog-details.html" class="theme-btn-two">See
                                        Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script src="{{ url('') }}/frontend/assets/js/jquery.js"></script>
    <script src="{{ url('') }}/frontend/assets/js/popper.min.js"></script>
    <script src="{{ url('') }}/frontend/assets/js/bootstrap.min.js"></script>
    <script src="{{ url('') }}/frontend/assets/js/owl.js"></script>
    <script src="{{ url('') }}/frontend/assets/js/wow.js"></script>
    <script src="{{ url('') }}/frontend/assets/js/validation.js"></script>
    <script src="{{ url('') }}/frontend/assets/js/jquery.fancybox.js"></script>
    <script src="{{ url('') }}/frontend/assets/js/appear.js"></script>
    <script src="{{ url('') }}/frontend/assets/js/scrollbar.js"></script>
    <script src="{{ url('') }}/frontend/assets/js/jquery.nice-select.min.js"></script>
    <script src="{{ url('') }}/frontend/assets/js/jquery-ui.js"></script>

    <!-- main-js -->
    <script src="{{ url('') }}/frontend/assets/js/script.js"></script>
@endsection
