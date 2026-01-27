<!DOCTYPE html>
<html lang="en">

@yield('head')


<!-- page wrapper -->

<body>

    <div class="boxed_wrapper">

        <!-- main header -->
        @include('frontend.layouts.header')
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        @yield('content')
        <!-- news-section end -->


        <!-- main-footer -->
        @include('frontend.layouts.footer')
        <!-- main-footer end -->



        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fal fa-angle-up"></span>
        </button>
    </div>


    <!-- jequery plugins -->
    @yield('script')

</body><!-- End of .page_wrapper -->

</html>
