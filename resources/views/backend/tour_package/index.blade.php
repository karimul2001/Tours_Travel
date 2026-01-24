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
        <link href="{{ url('') }}/assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
        <link href="{{ url('') }}/assets/extra-libs/c3/c3.min.css" rel="stylesheet">
        <link href="{{ url('') }}/assets/libs/morris.js/morris.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="{{ url('') }}/dist/css/style.min.css" rel="stylesheet">
        
    </head>
@endsection

@section('oncontent')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">All Packages</h4>
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
                <div class="card">
                    <div class="card-body">
                        <div>
                            {{-- successfull massege show conditin --}}
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                        </div>
                        <div class="flex justify-end mb-4">
                            <a href="{{ route('tour_package.create') }}"
                                class="btn btn-info btn-rounded m-t-10 mb-2 float-right">
                                <i class="bi bi-plus-lg"></i> Add Category
                            </a>
                        </div>

                        <div class="table-responsive">
                            <table id="demo-foo-addrow" class="table table-bordered m-t-30 table-hover contact-list"
                                data-paging="true" data-paging-size="7">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Slug</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Duration</th>
                                        <th scope="col">Location</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                {{-- id	tour_category_id	title	slug	price	duration	location	description	image	status	created_at	 --}}
                                <tbody>
                                    @foreach ($datas as $data)
                                        <tr>
                                            <form action="{{route('tour_package.destroy', $data->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <th scope="row">{{ $data->id }}</th>
                                            <td>{{ $data->tourcategory->name }}</td>
                                            <td>{{ $data->title }}</td>
                                            <td>{{ $data->slug }}</td>
                                            <td>{{ $data->price }}</td>
                                            <td>{{ $data->duration }}</td>
                                            <td>{{ $data->location }}</td>
                                            <td>{{ $data->description }}</td>

                                            <td>
                                                <img src="{{ asset($data->image ?? 'package_photo/nophoto.jpg') }}"
                                                    width="100" alt="No Image">
                                            </td>
                                            <td>
                                                <button type="button"
                                                    class="btn btn-sm {{ $data->status ? 'btn-success' : 'btn-danger' }}">
                                                    {{ $data->status ? 'Active' : 'Inactive' }}
                                                </button>
                                            </td>
                                            <td>{{ $data->created_at }}</td>
                                            <td class="text-center">
                                                <a href="" class="btn btn-info">
                                                    Edit
                                                </a>

                                                <button type="submit" class="btn btn-danger">
                                                    Delete
                                                </button>
                                            </td>
                                            </form>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>

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
    <!-- ============================================================== -->
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
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="{{ url('') }}/assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="{{ url('') }}/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 charts -->
    <script src="{{ url('') }}/assets/extra-libs/c3/d3.min.js"></script>
    <script src="{{ url('') }}/assets/extra-libs/c3/c3.min.js"></script>
    <!--chartjs -->
    <script src="{{ url('') }}/assets/libs/raphael/raphael.min.js"></script>
    <script src="{{ url('') }}/assets/libs/morris.js/morris.min.js"></script>

    <script src="{{ url('') }}/dist/js/pages/dashboards/dashboard1.js"></script>
@endsection
