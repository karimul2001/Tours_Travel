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
        <link rel="icon" type="image/png" sizes="16x16" href="{{ url('') }}/frontend/assets/images/favicon.png">
        <title>AdminBite admin Template - The Ultimate Multipurpose admin template</title>
        <!-- Custom CSS -->
        <link href="{{ url('') }}/frontend/assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
        <link href="{{ url('') }}/frontend/assets/extra-libs/c3/c3.min.css" rel="stylesheet">
        <link href="{{ url('') }}/frontend/assets/libs/morris.js/morris.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="{{ url('') }}/frontend/dist/css/style.min.css" rel="stylesheet">


    </head>
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
                    <h4 class="card-title">Add Resort</h4>
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
                    <form class="m-t-40" method="POST" action="{{ route('resorts.update', $resort) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        {{-- <div class="form-group">
                            <label for="">Tour Category :</label>
                            <select name="tour_category" id="" class="form-control">
                                <option value="">Select One</option>
                                @foreach ($datas as $data)
                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                @endforeach
                            </select>

                        </div> --}}
                        <div class="form-group">
                            <label for="">Resort Name :</label>
                            <div class="controls">
                                <input type="text" name="name"
                                    value="{{ !old('name') ? $resort->name : old('name') }}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Slug :</label>
                            <div class="controls">
                                <input type="text" name="slug"
                                    value="{{ !old('slug') ? $resort->slug : old('slug') }}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Location :</label>
                            <div class="controls">
                                <input type="text" name="location"
                                    value="{{ !old('location') ? $resort->location : old('location') }}"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Price_per_night :</label>
                            <div class="controls">
                                <input type="number" name="price_per_night"
                                    value="{{ !old('price_per_night') ? $resort->price_per_night : old('price_per_night') }}"
                                    class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">Description :</label>
                            <div class="controls">
                                <textarea name="description" class="form-control" rows="2">{{ old('description', $resort->description) }}</textarea>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Upload Photo :</label>
                            <div class="controls">
                                <input type="file" name="image" class="form-control">
                            </div>

                            @if ($resort->image)
                                <div class="mt-2">
                                    <p class="mb-1">Current Image:</p>
                                    <img src="{{ asset($resort->image) }}" width="120" class="img-thumbnail">
                                </div>
                            @endif
                        </div>

                        <div class="form-group mb-3">
                            <label>Status :</label>
                            <select name="status" class="form-control">
                                <option value="1" {{ old('status', $resort->status) == 1 ? 'selected' : '' }}>
                                    Active
                                </option>
                                <option value="0" {{ old('status', $resort->status) == 0 ? 'selected' : '' }}>
                                    Inactive
                                </option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Contcat Number :</label>
                            <div class="controls">
                                <input type="text" name="contact_number"
                                    value="{{ !old('contact_number') ? $resort->contact_number : old('contact_number') }}"
                                    class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">Email :</label>
                            <div class="controls">
                                <input type="email" name="email"
                                    value="{{ !old('email') ? $resort->email : old('email') }}" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Website</label>
                            <input type="url" name="website" value="{{ old('website', $resort->website) }}"
                                class="form-control" placeholder="https://example.com">
                        </div>


                        <button type="submit" class="btn btn-success w-100 py-2">
                            <span class="fw-bold text-primary" style="font-size: 20px;">
                                UPDATE
                            </span>
                        </button>
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
    <script src="{{ url('') }}/frontend/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ url('') }}/frontend/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="{{ url('') }}/frontend/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <script src="{{ url('') }}/frontend/dist/js/app.min.js"></script>
    <script src="{{ url('') }}/frontend/dist/js/app.init.dark.js"></script>
    <script src="{{ url('') }}/frontend/dist/js/app-style-switcher.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ url('') }}/frontend/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="{{ url('') }}/frontend/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="{{ url('') }}/frontend/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="{{ url('') }}/frontend/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="{{ url('') }}/frontend/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="{{ url('') }}/frontend/assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="{{ url('') }}/frontend/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js">
    </script>
    <!--c3 charts -->
    <script src="{{ url('') }}/frontend/assets/extra-libs/c3/d3.min.js"></script>
    <script src="{{ url('') }}/frontend/assets/extra-libs/c3/c3.min.js"></script>
    <!--chartjs -->
    <script src="{{ url('') }}/frontend/assets/libs/raphael/raphael.min.js"></script>
    <script src="{{ url('') }}/frontend/assets/libs/morris.js/morris.min.js"></script>

    <script src="{{ url('') }}/frontend/dist/js/pages/dashboards/dashboard1.js"></script>
@endsection
