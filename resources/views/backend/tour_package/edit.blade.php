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
        <link rel="icon" type="image/png" sizes="16x16" href="{{ url('') }}/assets/images/favicon.png">
        <title>AdminBite admin Template - The Ultimate Multipurpose admin template</title>
        <!-- Custom CSS -->
        <link href="{{ url('') }}/dist/css/style.min.css" rel="stylesheet">

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
                    <form class="m-t-40" method="POST" action="{{ route('tour_package.update', $tourPackage) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label>Tour Category :</label>
                            <select name="tour_category" class="form-control">
                                <option value="">Select One</option>
                                @foreach ($datas as $data)
                                    <option value="{{ $data->id }}"
                                        {{ old('tour_category', $tourPackage->tour_category_id) == $data->id ? 'selected' : '' }}>
                                        {{ $data->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Title :</label>
                            <div class="controls">
                                <input type="text" name="title"
                                    value="{{ !old('title') ? $tourPackage->title : old('title') }}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Slug :</label>
                            <div class="controls">
                                <input type="text" name="slug"
                                    value="{{ !old('slug') ? $tourPackage->slug : old('slug') }}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Price :</label>
                            <div class="controls">
                                <input type="number" name="price"
                                    value="{{ !old('price') ? $tourPackage->price : old('price') }}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Duration :</label>
                            <div class="controls">
                                <input type="text" name="duration"
                                    value="{{ !old('duration') ? $tourPackage->duration : old('duration') }}"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Location :</label>
                            <div class="controls">
                                <input type="text" name="location"
                                    value="{{ !old('location') ? $tourPackage->location : old('location') }}"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Description :</label>
                            <textarea name="description" class="form-control" cols="30" rows="3">
                                {{ old('description', $tourPackage->description) }}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>Status:</label>
                            <select name="status" class="form-control">
                                <option value="1" {{ old('status', $tourPackage->status) == 1 ? 'selected' : '' }}>
                                    Active
                                </option>
                                <option value="0" {{ old('status', $tourPackage->status) == 0 ? 'selected' : '' }}>
                                    Inactive
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Upload Photo :</label>
                            <input type="file" name="image" class="form-control">

                            @if ($tourPackage->image)
                                <img src="{{ asset('uploads/tour/' . $tourPackage->image) }}" width="120"
                                    class="mt-2">
                            @endif
                        </div>
                        <button type="submit" class="btn btn-success">UPDATE</button>
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
    <script src="{{ url('') }}/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ url('') }}/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="{{ url('') }}/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <script src="{{ url('') }}/dist/js/app.min.js"></script>
    <script src="{{ url('') }}/dist/js/app.init.dark.js"></script>
    <script src="{{ url('') }}/dist/js/app-style-switcher.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ url('') }}/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="{{ url('') }}/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="{{ url('') }}/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="{{ url('') }}/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="{{ url('') }}/dist/js/custom.min.js"></script>
    <script src="{{ url('') }}/assets/extra-libs/jqbootstrapvalidation/validation.js"></script>
    <script>
        ! function(window, document, $) {
            "use strict";
            $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
        }(window, document, jQuery);
    </script>
@endsection
