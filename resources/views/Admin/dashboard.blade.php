@extends('Admin.layout.master')
@section('content')
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Dashboard</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
                <div class="row">
                     <!-- Column -->
                     @foreach ($users as $user)

                     <div class="col-md-6 col-lg-2 col-xlg-3">
                         <div class="card card-hover">
                            <div class="box bg-cyan text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-account-plus"></i></h1>
                               <h6 class="text-white">USers</h6>
                                <h3 class="text-white"> {{$user->users()->count()}}</h3>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <!-- Column -->
                    {{-- <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-cyan text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-account-plus"></i></h1>
                               <h6 class="text-white">Users</h6>
                                <h3 class="text-white">150</h3>

                            </div>
                        </div>
                    </div> --}}
                    <!-- Column -->

                     <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-warning text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-collage"></i></h1>
                                <h6 class="text-white">Category</h6>
                                <h3 class="text-white">10</h3>

                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-danger text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-chart-pie"></i></h1>
                                <h6 class="text-white">Services</h6>
                                <h3 class="text-white">10</h3>

                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-info text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-file-pdf"></i></h1>
                                <h6 class="text-white">Books</h6>
                                <h3 class="text-white">150</h3>

                            </div>
                        </div>
                    </div>
                    <!-- Column -->

                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-cyan text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-pencil"></i></h1>
                                <h6 class="text-white">News</h6>
                                <h3 class="text-white">150</h3>

                            </div>

                        </div>
                    </div>
                    <!-- Column -->

                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-success text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-message-text"></i></h1>
                                <h6 class="text-white">Commint</h6>
                                <h3 class="text-white">50</h3>

                            </div>

                        </div>
                    </div>
                    <!-- Column -->

                </div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->


                @endsection
