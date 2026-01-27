<header class="main-header style-one">
    <!-- header-lower -->
    <div class="header-lower">
        <div class="auto-container">
            <div class="outer-box">
                <div class="logo-box">
                    <figure class="logo"><a href="{{ url('') }}/frontend/index.html"><img
                                src="{{ url('') }}/frontend/assets/images/logo.png" alt=""></a>
                    </figure>
                </div>
                <div class="menu-area clearfix">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="current dropdown"><a href="{{ route('home') }}">Home</a>
                                    
                                </li>
                                <li class="dropdown"><a href="{{route('destination')}}">Destinations</a>
                                    
                                </li>
                                <li class="dropdown"><a href="{{route('tour')}}">Tours</a>
                                    
                                </li>
                                <li class="dropdown"><a href="{{ url('') }}/frontend/index.html">Pages</a>
                                    <ul>
                                        <li><a href="{{ url('') }}/frontend/about.html">About Us</a>
                                        </li>
                                        <li><a href="{{ url('') }}/frontend/booking-1.html">Booking
                                                Process</a></li>
                                        
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="{{ url('') }}/frontend/index.html">Elements</a>
                                    
                                </li>
                                
                                <li><a href="{{ url('') }}/frontend/contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <ul class="menu-right-content clearfix">
                    <li class="search-box-outer">
                        <div class="dropdown">
                            <button class="search-box-btn" type="button" id="dropdownMenu3" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><i class="far fa-search"></i></button>
                            <div class="dropdown-menu search-panel" aria-labelledby="dropdownMenu3">
                                <div class="form-container">
                                    <form method="post" action="blog.html">
                                        <div class="form-group">
                                            <input type="search" name="search-field" value=""
                                                placeholder="Search...." required="">
                                            <button type="submit" class="search-btn"><span
                                                    class="fas fa-search"></span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="user-link">
                        <a href="{{ url('') }}/frontend/signup.html"><i class="icon-Profile"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="outer-box">
                <div class="logo-box">
                    <figure class="logo"><a href="{{ url('') }}/frontend/index.html"><img
                                src="{{ url('') }}/frontend/assets/images/logo.png" alt=""></a>
                    </figure>
                </div>
                <div class="menu-area">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
                <ul class="menu-right-content clearfix">
                    <li class="search-box-outer">
                        <div class="dropdown">
                            <button class="search-box-btn" type="button" id="dropdownMenu4" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><i class="far fa-search"></i></button>
                            <div class="dropdown-menu search-panel" aria-labelledby="dropdownMenu4">
                                <div class="form-container">
                                    <form method="post" action="blog.html">
                                        <div class="form-group">
                                            <input type="search" name="search-field" value=""
                                                placeholder="Search...." required="">
                                            <button type="submit" class="search-btn"><span
                                                    class="fas fa-search"></span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="user-link">
                        <a href="{{ url('') }}/frontend/signup.html"><i class="icon-Profile"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
