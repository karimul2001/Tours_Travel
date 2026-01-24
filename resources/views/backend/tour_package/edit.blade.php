@extends('backend.layouts.master')

@section('head')

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
        <title>AdminBite admin Template - The Ultimate Multipurpose admin template</title>
        <!-- Custom CSS -->
        <link href="../../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
        <link href="../../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
        <link href="../../assets/libs/morris.js/morris.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="../../dist/css/style.min.css" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
                                                                                                                                                                                        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                                                                                                                                                                                        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
                                                                                                                                                                                    <![endif]-->
    </head>
@endsection

@section('oncontent')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Admin Dashboard</h4>
                <div class="d-flex align-items-center">

                </div>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex no-block justify-content-end align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Info box -->
        <!-- ============================================================== -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Tour Package</h4>
                    @if ($errors->any())
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="alert alert-danger text-center">
                                @foreach ($errors->all() as $error)
                                    <div>{{ $error }}</div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif
                    <form class="m-t-40" method="POST" action="{{ route('tour_package.update') }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="">Tour Category :</label>
                            <select name="tour_category" id="" class="form-control">
                                <option value="">Select One</option>
                                @foreach ($datas as $data)
                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="form-group">
                            <label for="">Title :</label>
                            <div class="controls">
                                <input type="text" name="title" value="{{ old('title') }}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Slug :</label>
                            <div class="controls">
                                <input type="text" name="slug" value="{{ old('slug') }}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Price :</label>
                            <div class="controls">
                                <input type="number" name="price" value="{{ old('price') }}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Duration :</label>
                            <div class="controls">
                                <input type="text" name="duration" value="{{ old('duration') }}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Location :</label>
                            <div class="controls">
                                <input type="text" name="location" value="{{ old('location') }}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Description :</label>
                            <div class="controls">
                                <textarea type="text" name="description" value="{{ old('description') }}" class="form-control" cols="30"
                                    rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Upload Photo :</label>
                            <div class="controls">
                                <input type="file" name="image" class="form-control">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>


        <!-- ============================================================== -->
        <!-- Recent comment and chats -->
        <!-- ============================================================== -->
    </div>
@endsection

@section('scripts')
    <!-- ============================================================== -->
    <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <script src="../../dist/js/app.min.js"></script>
    <script src="../../dist/js/app.init.dark.js"></script>
    <script src="../../dist/js/app-style-switcher.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="../../assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="../../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 charts -->
    <script src="../../assets/extra-libs/c3/d3.min.js"></script>
    <script src="../../assets/extra-libs/c3/c3.min.js"></script>
    <!--chartjs -->
    <script src="../../assets/libs/raphael/raphael.min.js"></script>
    <script src="../../assets/libs/morris.js/morris.min.js"></script>

    <script src="../../dist/js/pages/dashboards/dashboard1.js"></script>
@endsection
