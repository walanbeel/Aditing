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
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="title m-b-md">
                                        {{__('messages.Add your Category')}}
                                    </div>
                                    @if(Session::has('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{ Session::get('success') }}
                                    </div>
                                    @endif

                                      <br>

                                    <form method="POST" action="{{route('services.update')}}">
                                        @foreach($services  as $item)
                                      @csrf
                                        <div class="col-12">
                                            <input type="hidden" name="set_id" value="{{$item->set_id}}">
                                            <input type="hidden" name="id" value="{{$item->id}}">

                                            <div class="form-group">
                                              <label>{{__('messages.Services Name en')}} </label>
                                              <input type="text"  class="form-control" name="s_name_en" value="{{$item->s_name_en}}"  placeholder="{{__('messages.Services Name en')}}">
                                              @error('s_name_en')
                                              <small class="form-text text-danger">{{$message}}</small>
                                              @enderror
                                            </div>
                                          </div>
                                          <div class="col-12">
                                            <input type="hidden">
                                            <div class="form-group">
                                              <label>{{__('messages.Services Name ar')}}  </label>
                                              <input type="text"  class="form-control" name="s_name_ar" value="{{$item->s_name_ar}}"  placeholder="{{__('messages.Services Name ar')}}">
                                              @error('s_name_ar')
                                              <small class="form-text text-danger">{{$message}}</small>
                                              @enderror
                                            </div>
                                          </div>
                                          <div class="col-12">
                                          <input type="hidden">
                                          <div class="form-group">
                                            <label>{{__('messages.Servicess describe en')}}  </label>
                                            <div class="col-12">
                                                <textarea class="form-control" name="s_describe_en"  placeholder="{{__('messages.s_describe_en')}}">{{$item->s_describe_en}}</textarea>
                                                @error('s_describe_en')
                                                <small class="form-text text-danger">{{$message}}</small>
                                                @enderror
                                            </div>
                                            </div>
                                            </div>
                                            <div class="col-12">
                                                <input type="hidden">
                                            <div class="form-group">
                                            <label>{{__('messages.Servicess describe ar')}}  </label>
                                            <div class="col-12">
                                                <textarea class="form-control" name="s_describe_ar"  placeholder="{{__('messages.s_describe_ar')}}"> {{$item->s_describe_ar}}</textarea>
                                                @error('s_describe_ar')
                                                <small class="form-text text-danger">{{$message}}</small>
                                                @enderror
                                            </div>
                                           </div>
                                        </div>

                                            <div class="col-12">
                                            <div class="form-group">
                                                <label>{{__('messages.is Active')}} </label>
                                                <select class="form-control category_list"   name="is_active"  id="is_active">
                                                <option value=1>yes</opiton>
                                                <option value=0>No</option>
                                                </select>
                                                </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label>{{__('messages.Category')}} </label>
                                                        <select class="form-control category_list" name="cat_id">

                                                            @foreach($category as $item)
                                                            <option value="{{$item->cat_id}}"> {{$item->cat_name_en}}</opiton>

                                                            @endforeach
                                                            </select>

                                                        </div>
                                                        </div>
                                                <div class="col-12">
                                                <button type="submit" class="btn btn-primary">{{__('messages.Add Services')}}</button>
                                                </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                   </div>
                   @endforeach
              @endsection
