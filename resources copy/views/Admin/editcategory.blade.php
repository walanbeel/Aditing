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

                <form method="POST" action="{{route('category.update')}}">
                 @foreach($Categorys as $item)
                    @csrf
                    <div class="col-12">
                        <input type="hidden" name="cat_id" value="{{$item->cat_id}}">

                        {{-- <input type="hidden" value="{{$Category->id}}"> --}}
                        <div class="form-group">
                          <label>{{__('messages.Category Name en')}} </label>
                          <input type="text" id="category_name" class="form-control" name="cat_name_en" value="{{$item->cat_name_en}}" placeholder="{{__('messages.Category Name en')}}">
                          @error('cat_name_en')
                          <small class="form-text text-danger">{{$message}}</small>
                          @enderror
                        </div>
                      </div>



                      <div class="col-12">
                        <input type="hidden">
                        <div class="form-group">
                          <label>{{__('messages.Category Name ar')}}  </label>
                          <input type="text" id="category_name" class="form-control" name="cat_name_ar" value="{{$item->cat_name_ar}}" placeholder="{{__('messages.Category Name ar')}}">
                          @error('cat_name_ar')
                          <small class="form-text text-danger">{{$message}}</small>
                          @enderror
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                            <label>is Active </label>
                            <select class="form-control category_list"   name="is_active" value="{{$item->is_active}}" id="is_active">
                            <option value=1>yes</opiton>
                            <option value=0>No</option>
                            </select>
                            </div>
                            </div>

                          

                   <div class="col-12">
        			<div class="form-group">
		        		<label>Parent </label>
		        		<select class="form-control category_list" id="parent_catergory" name="parent" value="{{$item->parent}}">
                         <option value='0'>parent</opiton>
                            <option value='0'>parent</opiton>

		        		</select>
                       </div>
        		</div>


                <div class="col-12">
                 <button type="submit" class="btn btn-primary">{{__('messages.Add Category')}}</button>

                 </div>
                </form>

                </div>
                @endforeach
               @endsection
