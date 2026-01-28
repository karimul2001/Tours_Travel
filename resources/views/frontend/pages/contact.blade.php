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
                <div class="nav-logo"><a href="index.html"><img src="assets/images/logo-2.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Chicago 12, Melborne City, USA</li>
                        <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->


        <!-- Page Title -->
        <section class="page-title centred" style="background-image: url(assets/images/background/page-title-5.jpg);">
            <div class="auto-container">
                <div class="content-box">
                    <h1>Contact</h1>
                    <p>Discover your next great adventure</p>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- contact-info-section -->
        <section class="contact-info-section bg-color-1">
            <div class="anim-icon">
                <div class="icon anim-icon-1" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                <div class="icon anim-icon-2" style="background-image: url(assets/images/shape/shape-3.png);"></div>
            </div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                        <div class="single-info-box wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-Location"></i></div>
                                <h3>Address</h3>
                                <p>31 park street, 5th Avenue, Dhanmondy, Dhaka.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                        <div class="single-info-box wow fadeInUp animated animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-Phone"></i></div>
                                <h3>Phone</h3>
                                <p><a href="tel:316668880001">+31 666 888 0001</a><br /><a href="tel:316668880023">+31 666 888 0023</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                        <div class="single-info-box wow fadeInUp animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-Envelope"></i></div>
                                <h3>Email</h3>
                                <p><a href="mailto:info@example.com">info@example.com</a><br /><a href="mailto:info@example.com">info@example.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-info-section end -->


        <!-- contact-section -->
        <section class="contact-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-5 col-md-12 col-sm-12 content-column">
                        <div class="content_block_5">
                            <div class="content-box">
                                <div class="sec-title">
                                    <p>Get in touch</p>
                                    <h2>Feel Free to Contact with us</h2>
                                </div>
                                <div class="text">
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiu smod tempor incididunt ut labore dolore magna aliqua. Quis ultrices ipsum suspen ultrices gravida Risus commodo.</p>
                                </div>
                                <ul class="social-links clearfix">
                                    <li><a href="contact.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="contact.html"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="contact.html"><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-sm-12 form-column">
                        <div class="form-inner">
                            <form method="post" action="sendemail.php" id="contact-form" class="default-form"> 
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="username" placeholder="Your Name" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="Email Address" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                        <input type="text" name="phone" required="" placeholder="Phone Number">
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                        <input type="text" name="subject" required="" placeholder="Subject">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="Write Message"></textarea>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                        <button class="theme-btn" type="submit" name="submit-form">Submit Now</button>
                                    </div>
                                </div>
                            </form>
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
