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
                                {{-- <h4 class="card-title"> General settings </h4> --}}
                                @if(Session::has('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ Session::get('success') }}
                                </div>
                                @endif
                                  <br>
                                  <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                        <div class="card">
                                            <h5 class="card-header">General settings</h5>
                                            <div class="card-body">
                                                <form method="POST" action="{{route('setting.update')}}" enctype="multipart/form-data">
                                                    @foreach($setting as $item)
                                                    @csrf
                                                    <div class="form-group">
                                                        <input type="hidden" name="set_id" value="{{$item->set_id}}">
                                                        <input type="hidden" name="id" value="{{$item->id}}">
                                                        <label for="inputText3" class="col-form-label">Website Name en</label>
                                                        <input id="inputText3" type="text" class="form-control" name="Website_name_en" value="{{$item->Website_name_en}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputText3" class="col-form-label">Website Name ar</label>
                                                        <input id="inputText3" type="text" class="form-control" name="Website_name_ar" value="{{$item->Website_name_ar}}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="inputText3" class="col-form-label">Location</label>
                                                        <input id="inputText3" type="text" class="form-control" name="location" value="{{$item->location}}">
                                                    </div>
                                                        <div class="form-group">
                                                            <label>Phone <small class="text-muted">(967) 999-9999</small></label>
                                                            <input type="text" class="form-control phone-inputmask" id="phone-mask" placeholder="" name="mobile_num" value="{{$item->mobile_num}}">
                                                        </div>
                                                        {{-- <div class="col-12">
                                                            <input type="hidden">
                                                            <input type="file" id="file-ip-1"  class="form-control-file" name="icon" value="{{$item->icon}}">
                                                        </div>
                                                    <div class="col-12">
                                                        <input type="hidden">
                                                        <input type="file" id="file-ip-1"  class="form-control-file" name="logo" value="{{$item->logo}}">
                                                    </div> --}}
                                                    <div class="form-group">
                                                        <input type="hidden">
                                                        <label for="exampleFormControlFile1"> @error('icon')<small>{{$message}}</small> @enderror</label>
                                                        <input type="file" id="file-ip-1" onchange="showPreview(event);"  accept="image/*" class="form-control-file" name='icon[]' value="{{$item->icon}}">
                                                        <input type="hidden"   accept="image/*" name='icon2'value="{{$item->icon}}">
                                                       <br>
                                                        <img  class="img-fluid" id="file-ip-1-preview" width="70">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="hidden">
                                                        <label for="exampleFormControlFile1"> @error('logo')<small>{{$message}}</small> @enderror</label>
                                                        <input type="file" id="file-ip-1" onchange="showPreview(event);"  accept="image/*" class="form-control-file" name='logo[]' value="{{$item->logo}}">
                                                        <input type="hidden" accept="image/*" class="form-control-file" name='logo2' value="{{$item->logo}}">
                                                       <br>
                                                        <img  class="img-fluid" id="file-ip-1-preview" width="70">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="inputEmail">Facebook address</label>
                                                        <input id="inputEmail" type="url" placeholder="name@example.com" class="form-control" name="Facebook" value="{{$item->Facebook}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputEmail">Tiwtter address</label>
                                                        <input id="inputEmail" type="url" placeholder="name@example.com" class="form-control" name="LinkedIn" value="{{$item->LinkedIn}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputEmail">Linkind address</label>
                                                        <input id="inputEmail" type="url" placeholder="name@example.com" class="form-control" name="Twitter" value="{{$item->Twitter}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputEmail">Email address</label>
                                                        <input id="inputEmail" type="email"  name="email_web" placeholder="name@example.com" class="form-control" value="{{$item->email_web}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">Page Content</label>
                                                        <textarea class="form-control" name="aboutus_en"  id="exampleFormControlTextarea1" rows="3">{{$item->aboutus_en}}</textarea>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">Page Content</label>
                                                        <textarea class="form-control" name="aboutus_ar"  id="exampleFormControlTextarea1"
                                                        rows="3">{{$item->aboutus_ar}}</textarea>
                                                    </div>

                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-secondary">{{__('messages.Add Services')}}</button>
                                                        </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                @endforeach


                             </div>
                        </div>
                    </div>
                 </div>
                </div>
            </div>

                            @endsection
