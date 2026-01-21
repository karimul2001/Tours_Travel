@extends("backend.layouts.master")

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

@section("oncontent")

<div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Tours Category</h4>
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

@section("content")

<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Info box -->
                <!-- ============================================================== -->
               <!-- Start Page Content -->
                
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="flex justify-end mb-4">
                                              <button class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-4 py-2 rounded">
                                                <a href="{{route('tour_category.create')}}">Add Category</a>
                                                   
                                              </button>
                                            </div>
                                <h6 class="card-title m-t-40" style="text-align: center"><i class="m-r-5 font-18 mdi mdi-numeric-1-box-multiple-outline"></i> All Category</h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            
                                                
                                            
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Slug</th>
                                                <th scope="col">status</th>
                                                <th scope="col" >Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($tours as $tour)
                                            <tr>
                                                <th scope="row">{{$tour->id}}</th>
                                                <td>{{$tour->name}}</td>
                                                <td>{{$tour->slug}}</td>
                                                <td>{{$tour->status}}</td>
                                                <td><a href=""
   class="border border-blue-500 text-blue-500 hover:bg-blue-500 hover:text-white
          px-3 py-1 rounded text-sm transition duration-200">
    Edit
</a>

<button type="submit"
        class="border border-red-500 text-red-500 hover:bg-red-500 hover:text-white
               px-3 py-1 rounded text-sm transition duration-200">
    Delete
</button></td>
                                                
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

@section("scripts")

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