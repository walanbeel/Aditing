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
                <div class="content">
                    <div class="title m-b-md">
                        {{__('messages.Add your Category')}}
                    </div>
                    @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                    @endif

                      <br>

                <form method="POST" action="{{route('category.store')}}">

                    @csrf


                    <div class="col-12">
                        <input type="hidden">
                        <div class="form-group">
                          <label>{{__('messages.Category Name en')}} </label>
                          <input type="text" id="category_name" class="form-control" name="cat_name_en" placeholder="{{__('messages.Category Name en')}}">
                          @error('cat_name_en')
                          <small class="form-text text-danger">{{$message}}</small>
                          @enderror
                        </div>
                      </div>


                      <div class="col-12">
                        <input type="hidden">
                        <div class="form-group">
                          <label>{{__('messages.Category Name ar')}}  </label>
                          <input type="text" id="category_name" class="form-control" name="cat_name_ar" placeholder="{{__('messages.Category Name ar')}}">
                          @error('cat_name_ar')
                          <small class="form-text text-danger">{{$message}}</small>
                          @enderror
                        </div>
                      </div>
                      <div class="col-12">

                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" value="1" name="active" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">is Active</label>
                          </div>
                       </div>

                        <div class="form-group">


                            {{-- <div class="col-md-9">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing1">
                                    <label class="custom-control-label" for="customControlAutosizing1">>is Active</label>
                                </div>
                            </div> --}}
                        </div>
                        <div class="col-md-6">
                            <div class="form-group col-sm-8">
                                <label>{{__('messages.Type Category')}}  </label>
                                <select class="custom-select" name="status" id="inputGroupSelect02">
                                    <option value="1">Books</opiton>
                                       <option value="2"> Services</opiton>
                               </select>
                              </div>
                            </div>

                            <div class="col-12">
                                <label>Parent </label>
                                <div class="input-group mb-3">
                                    <select class="custom-select" name="parent" id="inputGroupSelect02">
                                        @foreach($cate as $cat)
                                    {{-- <option selected>Choose...</option> --}}
                                    <option value='{{$cat['cat_id']}}'>{{$cat['cat_name_en']}}</opiton>
                                        @endforeach
                                    </select>
                                </div>
                            </div>





                            <div class="col-12">
                            <button type="submit" class="btn btn-primary">{{__('messages.Add Category')}}</button>

                            </div>
                            </form>

                            </div>

             @endsection
