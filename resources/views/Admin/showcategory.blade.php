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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Category</h5>
                            </div>
                            @if(Session::has('success'))

                                <div class="alert alert-success">
                                    {{Session::get('success')}}
                                </div>
                                @endif


                            @if(Session::has('error'))
                                <div class="alert alert-danger">
                                    {{Session::get('error')}}
                                </div>
                            @endif
                            <div class="table-responsive">

                                <table class="table table-striped table-bordered dataTable">
                                  <thead>
                                    <tr>
                                      <th scope="col">{{__('messages.cat_id')}}</th>
                                      <th scope="col">{{__('messages.cat_name_en')}}</th>
                                      <th scope="col">{{__('messages.cat_name_ar')}}</th>
                                      <th scope="col">{{__('messages.id')}}</th>
                                      <th scope="col">{{__('messages.parent')}}</th>
                                      <th scope="col">{{__('messages.is_active')}}</th>
                                      <th scope="col">{{__('messages.operation')}}</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($Categorys as $category)

                                    <tr>
                                      <th scope="row">{{$category->cat_id}}</th>
                                      <td>{{$category->cat_name_ar}}</td>
                                      <td>{{$category->cat_name_ar}}</td>
                                      <td>{{$category->name}}</td>

                                     
                                    {{-- <td>
                                        <input data-id="{{$category->cat_id}}" id="switch16" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{$categorys->status ? 'checked' : '' }}>
                                     </td> --}}
                                     @if($category->is_active==0)
                                      <td>Mean</td>
                                      @elseif($category->is_active==1)
                                      <td>{{$category->cat_name_en}}</td>
                                      @endif

                                      <td>
                                        <div class="switch-button switch-button-success">
                                            <input type="checkbox" checked="" name="is_active" value="{{$category->is_active}}" id="switch16"><span>
                                                {{-- <input data-id="{{$category->cat_id}}" id="switch16" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{$categorys->status ? 'checked' : '' }}> --}}

                                                <label for="switch16"></label></span>
                                        </div>
                                      </td>

                                      <td>
                                        <a href="" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                                        <a href="{{route('category.edit',$category->cat_id)}}" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                        <a href="{{route('category.delete',[$category->cat_id])}}" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>

                                       </td>

                                       


                                    </tr>

                                    @endforeach

                                  </tbody>
                            </table>
                        </div>
                        <script>
                            $(function() {
                              $('.toggle-class').change(function() {
                                  var status = $(this).prop('checked') == true ? 1 : 0; 
                                  var cat_id = $(this).data('cat_id'); 
                                   console.log(status);
                                  $.ajax({
                                      type: "GET",
                                      dataType: "json",
                                      url: '/getAllCategory',
                                      data: {'status': status, 'cat_id': cat_id},
                                      success: function(data){
                                        console.log(data.success)
                                      }
                                  });
                              })
                            })
                          </script>






                        @endsection
