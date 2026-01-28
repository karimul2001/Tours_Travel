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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    </head>
@endsection

@section('oncontent')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Tours Categories</h4>
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
        <!-- Start Page Content -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div>
                            {{-- successfull massege show conditin --}}
                            @if (session('success'))
                                <div id="success-alert"
                                    class="alert text-white text-center position-fixed top-50 start-50 translate-middle fs-3 fw-bold"
                                    style="background-color: #107721; z-index: 1050; min-width: 800px; "
                                    role="alert">
                                    {{ session('success') }}
                                </div>

                                <script>
                                    // Automatically fade out after 5 seconds
                                    setTimeout(() => {
                                        const alert = document.getElementById('success-alert');
                                        if (alert) {
                                            alert.classList.add('fade'); // fade effect
                                            setTimeout(() => alert.remove(), 500); // remove from DOM
                                        }
                                    }, 4000);
                                </script>
                            @endif
                        </div>

                        <div class="flex justify-end mb-4">
                            <a href="{{ route('tour_category.create') }}"
                                class="btn btn-info btn-rounded m-t-10 mb-2 float-right">
                                <i class="bi bi-plus-lg"></i> Add Category
                            </a>
                        </div>


                        <h6 class="card-title mt-4 text-center"></h6>

                        <div class="table-responsive">
                            <table class="table">
                                <thead style="background-color: blueviolet; color: white; text-align: center;">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Slug</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tours as $tour)
                                        <tr>
                                            <form method="POST" action="{{ route('tour_category.destroy', $tour->id) }}">
                                                @csrf
                                                @method('delete')
                                                <th scope="row" class="text-center">{{ $tour->id }}</th>
                                                <td class="text-center">{{ $tour->name }}</td>
                                                <td class="text-center">{{ $tour->slug }}</td>
                                                <td class="text-center">
                                                    <button type="button"
                                                        class="btn btn-sm {{ $tour->status ? 'btn-success' : 'btn-danger' }}">
                                                        {{ $tour->status ? 'Active' : 'Inactive' }}
                                                    </button>
                                                </td>
                                                    {{-- @if ($tour->status)
                                                        <span
                                                            class="bg-green-500 text-white px-2 py-1 rounded text-sm">Active</span>
                                                    @else
                                                        <span
                                                            class="bg-red-500 text-white px-2 py-1 rounded text-sm">Inactive</span>
                                                    @endif --}}
                                                <td class="text-center">{{ $tour->created_at }}</td>
                                                <td class="text-center">
                                                    <a href="{{ route('tour_category.edit', $tour->id) }}"
                                                        class="btn btn-info">
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
        <!-- End PAge Content -->


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
