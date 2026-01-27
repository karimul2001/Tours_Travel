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
