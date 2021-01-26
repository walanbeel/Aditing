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

                                    <form method="POST" action="{{route('team.add')}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-12">
                                            <input type="hidden">
                                            <label for="exampleFormControlFile1">{{__('messages.Team t_profile')}}</label>
                                            <input type="file" id="file-ip-1"   class="form-control-file" name="t_profile"  placeholder="{{__('messages.t_profile')}}">
                                            @error('t_profile')
                                            <small>{{$message}}</small>
                                            @enderror
                                        </div>
                                          <div class="col-12">
                                            <input type="hidden">
                                            <div class="form-group">
                                              <label>{{__('messages.Team name_en')}}  </label>
                                              <input type="text"  class="form-control" name="name_en"   placeholder="{{__('messages.name_en')}}">
                                              @error('name_en')
                                              <small class="form-text text-danger">{{$message}}</small>
                                              @enderror
                                            </div>
                                          </div>
                                          <div class="col-12">
                                            <input type="hidden">
                                            <div class="form-group">
                                              <label>{{__('messages.Team name_ar')}}  </label>
                                              <input type="text"  class="form-control" name="name_ar"   placeholder="{{__('messages.name_ar')}}">
                                              @error('name_ar')
                                              <small class="form-text text-danger">{{$message}}</small>
                                              @enderror
                                            </div>
                                          </div>
                                          <div class="col-12">
                                            <input type="hidden">
                                            <div class="form-group">
                                              <label>{{__('messages.Team sub_title_en')}}  </label>
                                              <input type="text"  class="form-control" name="sub_title_en"   placeholder="{{__('messages.sub_title_en')}}">
                                              @error('sub_title_en')
                                              <small class="form-text text-danger">{{$message}}</small>
                                              @enderror
                                            </div>
                                          </div>
                                          <div class="col-12">
                                            <input type="hidden">
                                            <div class="form-group">
                                              <label>{{__('messages.Team sub_title_ar')}}  </label>
                                              <input type="text"  class="form-control" name="sub_title_ar"   placeholder="{{__('messages.sub_title_ar')}}">
                                              @error('sub_title_ar')
                                              <small class="form-text text-danger">{{$message}}</small>
                                              @enderror
                                            </div>
                                          </div>
                                          <div class="col-12">
                                          <input type="hidden">
                                          <div class="form-group">
                                            <label>{{__('messages.Team cshort_intro_en')}}  </label>
                                            <div class="col-12">
                                                <textarea  id="mytextarea" class="form-control" name="short_intro_en"  placeholder="{{__('messages.short_intro_en')}}"></textarea>
                                                @error('cshort_intro_en')
                                                <small class="form-text text-danger">{{$message}}</small>
                                                @enderror
                                            </div>
                                            </div>
                                            </div>
                                            <div class="col-12">
                                                <input type="hidden">
                                                <div class="form-group">
                                                  <label>{{__('messages.Team cshort_intro_ar')}}  </label>
                                                  <div class="col-12">
                                                      <textarea  id="mytextarea" class="form-control" name="short_intro_ar"  placeholder="{{__('messages.short_intro_ar')}}"></textarea>
                                                      @error('short_intro_ar')
                                                      <small class="form-text text-danger">{{$message}}</small>
                                                      @enderror
                                                  </div>
                                                  </div>
                                           </div>

                                        <div class="col-12">
                                         <button type="submit" class="btn btn-primary">{{__('messages.Add Team')}}</button>
                                        </div>

                                    </form>


                                  </div>
                             </div>
                        </div>
                    </div>
                 </div>
                </div>
            </div>

                            @endsection
