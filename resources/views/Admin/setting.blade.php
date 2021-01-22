@extends('Admin.layout.master')
@section('content')
        <!-- ============================================================== --><!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Full Width</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"> General settings </h4>
                                @if(Session::has('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ Session::get('success') }}
                                </div>
                                @endif

                                  <br>

                    <!-- ============================================================== -->
                        <!-- Simple tabs  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 mb-5">

                            <div class="simple-card">
                                <ul class="nav nav-tabs" id="myTab5" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active border-left-0" id="home-tab-simple" data-toggle="tab" href="#home-simple" role="tab" aria-controls="home" aria-selected="true">General settings</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab-simple" data-toggle="tab" href="#profile-simple" role="tab" aria-controls="profile" aria-selected="false">Silder setting</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab-simple" data-toggle="tab" href="#contact-simple" role="tab" aria-controls="contact" aria-selected="false">Email setting</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent5">
                                    <div class="tab-pane fade show active" id="home-simple" role="tabpanel" aria-labelledby="home-tab-simple">
                       <!-- ============================================================== -->
                        <!-- vertical tabs  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 mb-5">

                            <div class="tab-vertical">
                                <ul class="nav nav-tabs" id="myTab3" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-vertical-tab" data-toggle="tab" href="#home-vertical" role="tab" aria-controls="home" aria-selected="true">General</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-vertical-tab" data-toggle="tab" href="#profile-vertical" role="tab" aria-controls="profile" aria-selected="false">Social</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-vertical-tab" data-toggle="tab" href="#contact-vertical" role="tab" aria-controls="contact" aria-selected="false">About Us</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent3">
                             <div class="tab-pane fade show active" id="home-vertical" role="tabpanel" aria-labelledby="home-vertical-tab">
                                    <!-- ============================================================== -->
                                    <!-- basic form  -->
                                    <!-- ============================================================== -->
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                            <div class="card">
                                                <h5 class="card-header">General settings</h5>
                                                <div class="card-body">
                                                    <form method="POST" action="{{route('setting.add')}}" enctype="multipart/form-data">

                                                        @csrf
                                                        <div class="form-group">
                                                            <label for="inputText3" class="col-form-label">Website Name en</label>
                                                            <input id="inputText3" type="text" class="form-control" name="Website_name_en">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputText3" class="col-form-label">Website Name ar</label>
                                                            <input id="inputText3" type="text" class="form-control" name="Website_name_ar">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="inputText3" class="col-form-label">Location</label>
                                                            <input id="inputText3" type="text" class="form-control" name="location">
                                                        </div>
                                                            <div class="form-group">
                                                                <label>Phone <small class="text-muted">(967) 999-9999</small></label>
                                                                <input type="text" class="form-control phone-inputmask" id="phone-mask" placeholder="" name="mobile_num">
                                                            </div>


                                                        <div class="custom-file mb-3">
                                                            <input type="file" class="custom-file-input" id="customFile" name="logo">
                                                            <label class="custom-file-label" for="customFile">File Input</label>
                                                        </div>

                                                        {{-- <div class="custom-file mb-3">
                                                            <input type="file" class="custom-file-input" id="customFile" name="icon">
                                                            <label class="custom-file-label" for="customFile">File Input</label>
                                                        </div> --}}
                                                        <div class="col-12">
                                                            <button type="submit" class="btn btn-secondary">{{__('messages.Add Services')}}</button>
                                                            </div>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- ============================================================== -->
                                    <!-- end basic form  -->
                                    <!-- ============================================================== -->
                                    </div>
                                    <div class="tab-pane fade" id="profile-vertical" role="tabpanel" aria-labelledby="profile-vertical-tab">
                                    <!-- ============================================================== -->
                                    <!-- basic form  -->
                                    <!-- ============================================================== -->
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                            <div class="card">
                                                <h5 class="card-header">Social settings</h5>
                                                <div class="card-body">
                                                    <form method="POST" action="{{route('setting.add')}}" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label for="inputEmail">Facebook address</label>
                                                            <input id="inputEmail" type="url" placeholder="name@example.com" class="form-control" name="Facebook">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputEmail">Tiwtter address</label>
                                                            <input id="inputEmail" type="url" placeholder="name@example.com" class="form-control" name="LinkedIn">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputEmail">Linkind address</label>
                                                            <input id="inputEmail" type="url" placeholder="name@example.com" class="form-control" name="Twitter">
                                                        </div>
                                                         <div class="col-12">
                                                            <button type="submit" class="btn btn-secondary">{{__('messages.Add Services')}}</button>
                                                            </div>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- ============================================================== -->
                                    <!-- end basic form  -->
                                    <!-- ============================================================== -->
                                    </div>
                                    <div class="tab-pane fade" id="contact-vertical" role="tabpanel" aria-labelledby="contact-vertical-tab">
                                       <!-- ============================================================== -->
                                        <!-- basic form  -->
                                        <!-- ============================================================== -->
                                            <div class="row">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                                                <div class="card">
                                                                        <h5 class="card-header">About Us</h5>
                                                                        <div class="card-body">
                                                                            <form method="POST" action="{{route('setting.add')}}" enctype="multipart/form-data">
                                                                                @csrf

                                                                                <div class="form-group">
                                                                                    <label for="exampleFormControlTextarea1">Page Content</label>
                                                                                    <textarea class="form-control" name="aboutus_en"  id="exampleFormControlTextarea1" rows="3"></textarea>
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="exampleFormControlTextarea1">Page Content</label>
                                                                                    <textarea class="form-control" name="aboutus_ar"  id="exampleFormControlTextarea1" rows="3"></textarea>
                                                                                </div>

                                                                                <div class="col-12">
                                                                                    <button type="submit" class="btn btn-secondary">{{__('messages.Add Services')}}</button>
                                                                                    </div>

                                                                            </form>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- ============================================================== -->
                                                            <!-- end basic form  -->
                                                            <!-- ============================================================== -->
                                                            </div>
                                        <!-- ============================================================== -->
                                        <!-- end basic tabs  -->
                                        <!-- ============================================================== -->
                                        <!-- ============================================================== -->
                                        <!-- vertical tabs  -->
                                        <!-- ============================================================== -->
                                    </div>


                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end simple tabs  -->
                        <!-- ============================================================== -->
                        <div class="tab-pane fade" id="profile-simple" role="tabpanel" aria-labelledby="profile-tab-simple">

                             <!-- ============================================================== -->
                                    <!-- basic form  -->
                                    <!-- ============================================================== -->
                                    <div class="row">
                                        {{-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                            <div class="card">
                                                <h5 class="card-header">General settings</h5>
                                                <div class="card-body">
                                                    <form method="POST" action="{{route('setting.add')}}" enctype="multipart/form-data">
                                                        @csrf

                                                         <div class="custom-file mb-3">
                                                            <input type="file" class="custom-file-input" id="customFile" name="slider">
                                                            <label class="custom-file-label" for="customFile">File Input</label>
                                                        </div>
                                                        <div class="col-12">
                                                            <button type="submit" class="btn btn-secondary">{{__('messages.Add Services')}}</button>
                                                            </div>
                                                    </form>
                                                </div>

                                            </div>
                                        </div> --}}
                                    </div>
                                    <!-- ============================================================== -->
                                    <!-- end basic form  -->
                                    <!-- ============================================================== -->

                          </div>

                        <div class="tab-pane fade" id="contact-simple" role="tabpanel" aria-labelledby="contact-tab-simple">

                             <!-- ============================================================== -->
                                    <!-- basic form  -->
                                    <!-- ============================================================== -->
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                            <div class="card">
                                                <h5 class="card-header">Email settings</h5>
                                                <div class="card-body">
                                                    <form method="POST" action="{{route('setting.add')}}" enctype="multipart/form-data">
                                                        @csrf
                                                            {{-- <div class="form-group">
                                                                <label>Phone <small class="text-muted">(967) 999-9999</small></label>
                                                                <input type="text" class="form-control phone-inputmask"  name="mobile_num" id="phone-mask" placeholder="">
                                                            </div> --}}
                                                            <div class="form-group">
                                                                <label for="inputEmail">Email address</label>
                                                                <input id="inputEmail" type="email"  name="email_web" placeholder="name@example.com" class="form-control">
                                                            </div>

                                                            <div class="col-12">
                                                                <button type="submit" class="btn btn-secondary">{{__('messages.Add Services')}}</button>
                                                                </div>

                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- ============================================================== -->
                                    <!-- end basic form  -->
                                    <!-- ============================================================== -->
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
               </div>
            </div>

          @endsection
