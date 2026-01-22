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
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('')}}/assets/images/favicon.png">
    <title>AdminBite admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href="{{url('')}}/dist/css/style.min.css" rel="stylesheet">
    </head>
@endsection

@section('oncontent')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Toure Category Add Here</h4>
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
        <div class="row">
            <div class="col-12">

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
                <div class="card">
                    <div class="card-body">
                        {{-- @dd($tourCategory); --}}

                        <form method="POST" action="{{ route('tour_category.update', $tourCategory) }}">
                            @csrf
                            @method('put')

                            <div class="form-group">
                                <label>Name:</label>
                                <input type="text" name="tour_category"
                                    value="{{ !old('tour_category') ? $tourCategory->name : old('tour_category') }}"
                                    class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Slug:</label>
                                <input type="text" name="slug"
                                    value="{{ !old('slug') ? $tourCategory->slug : old('slug') }}" class="form-control">
                            </div>


                            <button type="submit" class="btn btn-info">UPDATE</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>


        <!-- ============================================================== -->
        <!-- Recent comment and chats -->
        <!-- ============================================================== -->
    </div>
@endsection

@section('scripts')
    <script src="{{url('')}}/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{url('')}}/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="{{url('')}}/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <script src="{{url('')}}/dist/js/app.min.js"></script>
    <script src="{{url('')}}/dist/js/app.init.dark.js"></script>
    <script src="{{url('')}}/dist/js/app-style-switcher.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{url('')}}/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="{{url('')}}/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="{{url('')}}/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="{{url('')}}/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="{{url('')}}/dist/js/custom.min.js"></script>
@endsection
