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
            href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">
        <link
            href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
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
            <div class="nav-logo"><a href="index.html"><img src="assets/images/logo-2.png" alt=""
                        title=""></a></div>
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
    <section class="page-title style-two centred"
        style="background-image: url({{ url('') }}/frontend/assets/images/background/bg_image.jpg);">
        <div class="auto-container">
            <div class="content-box">
                <h1>Tours Grid</h1>
                <p>Discover your next great adventure</p>
            </div>
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
                        <button type="submit" class="theme-btn"><i class="far fa-search"></i>Find Now</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- End Page Title -->


    <!-- tours-page-section -->
    <section class="tours-page-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="item-shorting clearfix">
                        <div class="left-column pull-left">
                            <h3>Showing Tour Packages</h3>
                        </div>
                        <div class="right-column pull-right clearfix">
                            <div class="short-box clearfix">
                                <div class="select-box">
                                    <select class="wide">
                                        <option data-display="Sort by">Sort by</option>
                                        <option value="1">Sort 01</option>
                                        <option value="2">Sort 02</option>

                                    </select>
                                </div>
                            </div>
                            <div class="menu-box">
                                <button class="list-view"><i class="icon-List"></i></button>
                                <button class="grid-view on"><i class="icon-Grid"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper grid">
                        <div class="">
                            <div class="row clearfix">

                                @foreach ($datas as $data)
                                    <div class="col-lg-6 col-md-6 col-sm-12 tour-block">
                                        <div class="tour-block-one">
                                            <div class="inner-box">

                                                <!-- Tour Image -->
                                                <figure class="image-box">
                                                    <img src="{{ asset($data->image) }}" alt="{{ $data->title }}">
                                                </figure>

                                                <!-- Tour Details -->
                                                <div class="lower-content">
                                                    <h3>{{ $data->title }}</h3>

                                                    <h4>
                                                        ৳ {{ $data->price }} <span>/ Per person</span>
                                                    </h4>

                                                    <ul class="info clearfix">
                                                        <li>
                                                            <i class="far fa-map"></i> {{ $data->location }}
                                                        </li>
                                                    </ul>

                                                    <p>{{ $data->description }}</p>

                                                    <div class="btn-box">
                                                        <a href="#">Booking Here</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>



                    </div>

                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="default-sidebar tour-sidebar ml-20">
                        <div class="sidebar-widget sidebar-search">
                            <div class="widget-title">
                                <h3>Search</h3>
                            </div>
                            <form action="destination-details.html" method="post" class="search-form">
                                <div class="form-group">
                                    <input type="search" name="search-field" placeholder="Search" required="">
                                    <button type="submit"><i class="fas fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="sidebar-widget category-widget">
                            <div class="widget-title">
                                <h3>Category</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="category-list clearfix">
                                    <li class="custom-check-box">
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control material-checkbox">
                                                <input type="checkbox" class="material-control-input">
                                                <span class="material-control-indicator"></span>
                                                <span class="description">Adventure Tours</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li class="custom-check-box">
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control material-checkbox">
                                                <input type="checkbox" class="material-control-input" checked="checked">
                                                <span class="material-control-indicator"></span>
                                                <span class="description">City Tours</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li class="custom-check-box">
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control material-checkbox">
                                                <input type="checkbox" class="material-control-input">
                                                <span class="material-control-indicator"></span>
                                                <span class="description">Couple Tours</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li class="custom-check-box">
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control material-checkbox">
                                                <input type="checkbox" class="material-control-input">
                                                <span class="material-control-indicator"></span>
                                                <span class="description">Group Tours</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li class="custom-check-box">
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control material-checkbox">
                                                <input type="checkbox" class="material-control-input">
                                                <span class="material-control-indicator"></span>
                                                <span class="description">Hosted Tours</span>
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget price-filter">
                            <div class="widget-title">
                                <h3>Price Range</h3>
                            </div>
                            <div class="range-slider clearfix">
                                <div class="value-box clearfix">
                                    <div class="min-value pull-left">
                                        <p>$50.00</p>
                                    </div>
                                    <div class="max-value pull-right">
                                        <p>$100.00</p>
                                    </div>
                                </div>
                                <div class="price-range-slider"></div>
                            </div>
                        </div>
                        <div class="sidebar-widget duration-widget">
                            <div class="widget-title">
                                <h3>Durations</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="category-list clearfix">
                                    <li class="custom-check-box">
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control material-checkbox">
                                                <input type="checkbox" class="material-control-input">
                                                <span class="material-control-indicator"></span>
                                                <span class="description">0 - 24 hours</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li class="custom-check-box">
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control material-checkbox">
                                                <input type="checkbox" class="material-control-input">
                                                <span class="material-control-indicator"></span>
                                                <span class="description">1 - 2 days</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li class="custom-check-box">
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control material-checkbox">
                                                <input type="checkbox" class="material-control-input">
                                                <span class="material-control-indicator"></span>
                                                <span class="description">2 - 3 days</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li class="custom-check-box">
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control material-checkbox">
                                                <input type="checkbox" class="material-control-input">
                                                <span class="material-control-indicator"></span>
                                                <span class="description">3 - 4 days</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li class="custom-check-box">
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control material-checkbox">
                                                <input type="checkbox" class="material-control-input">
                                                <span class="material-control-indicator"></span>
                                                <span class="description">4 - 5 days</span>
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget review-widget">
                            <div class="widget-title">
                                <h3>Review Score</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="category-list clearfix">
                                    <li class="custom-check-box">
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control material-checkbox">
                                                <input type="checkbox" class="material-control-input">
                                                <span class="material-control-indicator"></span>
                                                <span class="description">
                                                    <i class="icon-Star"></i>
                                                    <i class="icon-Star"></i>
                                                    <i class="icon-Star"></i>
                                                    <i class="icon-Star"></i>
                                                    <i class="icon-Star"></i>
                                                </span>
                                            </label>
                                        </div>
                                    </li>
                                    <li class="custom-check-box">
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control material-checkbox">
                                                <input type="checkbox" class="material-control-input">
                                                <span class="material-control-indicator"></span>
                                                <span class="description">
                                                    <i class="icon-Star"></i>
                                                    <i class="icon-Star"></i>
                                                    <i class="icon-Star"></i>
                                                    <i class="icon-Star"></i>
                                                    <i class="icon-Star light"></i>
                                                </span>
                                            </label>
                                        </div>
                                    </li>
                                    <li class="custom-check-box">
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control material-checkbox">
                                                <input type="checkbox" class="material-control-input">
                                                <span class="material-control-indicator"></span>
                                                <span class="description">
                                                    <i class="icon-Star"></i>
                                                    <i class="icon-Star"></i>
                                                    <i class="icon-Star"></i>
                                                    <i class="icon-Star light"></i>
                                                    <i class="icon-Star light"></i>
                                                </span>
                                            </label>
                                        </div>
                                    </li>
                                    <li class="custom-check-box">
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control material-checkbox">
                                                <input type="checkbox" class="material-control-input">
                                                <span class="material-control-indicator"></span>
                                                <span class="description">
                                                    <i class="icon-Star"></i>
                                                    <i class="icon-Star"></i>
                                                    <i class="icon-Star light"></i>
                                                    <i class="icon-Star light"></i>
                                                    <i class="icon-Star light"></i>
                                                </span>
                                            </label>
                                        </div>
                                    </li>
                                    <li class="custom-check-box">
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control material-checkbox">
                                                <input type="checkbox" class="material-control-input">
                                                <span class="material-control-indicator"></span>
                                                <span class="description">
                                                    <i class="icon-Star"></i>
                                                    <i class="icon-Star light"></i>
                                                    <i class="icon-Star light"></i>
                                                    <i class="icon-Star light"></i>
                                                    <i class="icon-Star light"></i>
                                                </span>
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="advice-widget">
                            <div class="inner-box" style="background-image: url(assets/images/resource/advice-1.jpg);">
                                <div class="text">
                                    <h2>Get <br />25% Off <br />On Sajek Tours</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tours-page-section end -->
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
