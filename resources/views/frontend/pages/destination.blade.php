@extends('frontend.layouts.master')

@section('head')

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

        <title>Travio - HTML 5 Template Preview</title>

        <!-- Fav Icon -->
        <link rel="icon" href="{{url('')}}/frontend/assets/images/favicon.ico" type="image/x-icon">

        <!-- Google Fonts -->
        <link
            href="{{url('')}}/frontend/https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">
        <link
            href="{{url('')}}/frontend/https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">

        <!-- Stylesheets -->
        <link href="{{url('')}}/frontend/assets/css/font-awesome-all.css" rel="stylesheet">
        <link href="{{url('')}}/frontend/assets/css/flaticon.css" rel="stylesheet">
        <link href="{{url('')}}/frontend/assets/css/owl.css" rel="stylesheet">
        <link href="{{url('')}}/frontend/assets/css/bootstrap.css" rel="stylesheet">
        <link href="{{url('')}}/frontend/assets/css/jquery.fancybox.min.css" rel="stylesheet">
        <link href="{{url('')}}/frontend/assets/css/animate.css" rel="stylesheet">
        <link href="{{url('')}}/frontend/assets/css/nice-select.css" rel="stylesheet">
        <link href="{{url('')}}/frontend/assets/css/jquery-ui.css" rel="stylesheet">
        <link href="{{url('')}}/frontend/assets/css/color.css" rel="stylesheet">
        <link href="{{url('')}}/frontend/assets/css/style.css" rel="stylesheet">
        <link href="{{url('')}}/frontend/assets/css/responsive.css" rel="stylesheet">

    </head>
@endsection

@section('content')
    <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="{{url('')}}/frontend/index.html"><img src="{{url('')}}/frontend/assets/images/logo-2.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Chicago 12, Melborne City, USA</li>
                        <li><a href="{{url('')}}/frontend/tel:+8801682648101">+88 01682648101</a></li>
                        <li><a href="{{url('')}}/frontend/mailto:info@example.com">info@example.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="{{url('')}}/frontend/index.html"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="{{url('')}}/frontend/index.html"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="{{url('')}}/frontend/index.html"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="{{url('')}}/frontend/index.html"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="{{url('')}}/frontend/index.html"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->


        <!-- Page Title -->
        <section class="page-title centred" style="background-image: url({{url('')}}/frontend/assets/images/background/bg1.jpg);">
            <div class="auto-container">
                <div class="content-box">
                    <h1>Destinations</h1>
                    <p>Discover your next great adventure</p>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- place-section -->
        <section class="place-section sec-pad-2">
            <div class="anim-icon">
                <div class="icon anim-icon-1" style="background-image: url(assets/images/icons/anim-icon-1.png);"></div>
                <div class="icon anim-icon-2" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                <div class="icon anim-icon-3" style="background-image: url(assets/images/shape/shape-3.png);"></div>
            </div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 place-block">
                        <div class="place-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{url('')}}/frontend/assets/images/resource/img1.jpg" alt=""></figure>
                                <div class="text">
                                    <h3><a href="{{url('')}}/frontend/destination-details.html">Sajek</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 place-block">
                        <div class="place-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{url('')}}/frontend/assets/images/resource/img2.jpg" alt=""></figure>
                                <div class="text">
                                    <h3><a href="{{url('')}}/frontend/destination-details.html">Sylet</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 place-block">
                        <div class="place-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{url('')}}/frontend/assets/images/resource/img3.jpg" alt=""></figure>
                                <div class="text">
                                    <h3><a href="{{url('')}}/frontend/destination-details.html">Bandarban</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 place-block">
                        <div class="place-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{url('')}}/frontend/assets/images/resource/img4.jpg" alt=""></figure>
                                <div class="text">
                                    <h3><a href="{{url('')}}/frontend/destination-details.html">Affrican Park</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 place-block">
                        <div class="place-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{url('')}}/frontend/assets/images/resource/img5.jpg" alt=""></figure>
                                <div class="text">
                                    <h3><a href="{{url('')}}/frontend/destination-details.html">Vietnam</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 place-block">
                        <div class="place-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{url('')}}/frontend/assets/images/resource/img6.jpg" alt=""></figure>
                                <div class="text">
                                    <h3><a href="{{url('')}}/frontend/destination-details.html">Netherlands</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 place-block">
                        <div class="place-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{url('')}}/frontend/assets/images/resource/img7.jpg" alt=""></figure>
                                <div class="text">
                                    <h3><a href="{{url('')}}/frontend/destination-details.html">Greece</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 place-block">
                        <div class="place-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{url('')}}/frontend/assets/images/resource/img1.jpg" alt=""></figure>
                                <div class="text">
                                    <h3><a href="{{url('')}}/frontend/destination-details.html">Australia</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 place-block">
                        <div class="place-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{url('')}}/frontend/assets/images/resource/img9.jpg" alt=""></figure>
                                <div class="text">
                                    <h3><a href="{{url('')}}/frontend/destination-details.html">Costa Rica</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- place-section end -->
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
