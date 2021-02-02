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
                        <h4 class="page-title"></h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Category</li>
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
                <div class="text-right mb-3">
                    <a class="btn btn-outline-warning so_form_btn" href="{{ route('category.create')}}">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New Category</a>
                </div>
            </div>


            @if(Session::has('success'))

                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    {{Session::get('success')}}
                </div>
                @endif
            @if(Session::has('error'))
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    {{Session::get('error')}}
                </div>
            @endif


            <div class="table-responsive">
            <table class="table table-striped table-bordered dataTable">
                <thead>
                <tr>
                    <th scope="col">{{__('messages.cat_id')}}</th>
                    @if ( Config::get('app.locale') == 'en')
                    <th scope="col">{{__('messages.cat_name_en')}}</th>
                    @elseif ( Config::get('app.locale') == 'ar' )
                    <th scope="col">{{__('messages.cat_name_ar')}}</th>
                    @endif
                    <th scope="col">{{__('messages.name')}}</th>
                    <th scope="col">{{__('messages.parent')}}</th>
                    <th scope="col">{{__('messages.Status')}}</th>
                    <th scope="col">{{__('messages.operation')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($Categorys as $category)

                <tr>
                    <th scope="row">{{$category->cat_id}}</th>
                    @if ( Config::get('app.locale') == 'en')
                    <td>{{$category->cat_name_en}}</td>
                    @elseif ( Config::get('app.locale') == 'ar' )
                    <td>{{$category->cat_name_ar}}</td>
                    @endif
                    <td>{{$category->name}}</td>

                        @if($category->parent==0)

                            <td>parent</td>


                        @else

                            @foreach($Categorys as $cat2)
                            @if($category->parent==$cat2->cat_id)

                                <td>{{$cat2->cat_name_en}}</td>
                             @break;

                            @endif
                        @endforeach



                        @endif

                    <td>
                    @if($category->is_active==0)

                            <div class="form-group">
                                <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                <input onclick="myFunction{{$category->cat_id}}()" type="checkbox" class="custom-control-input" id="customSwitch{{$category->cat_id}}">
                                <label class="custom-control-label" for="customSwitch{{$category->cat_id}}"></label>
                                </div>
                            </div>
                            @elseif($category->is_active == 1)
                            <div class="form-group">
                                <div  class="custom-control custom-switch custom-switch-on-success custom-switch-off-danger ">
                                <input onclick="myFunction{{$category->cat_id}}()" checked type="checkbox" class="custom-control-input" id="customSwitch{{$category->cat_id}}">
                                <label class="custom-control-label" for="customSwitch{{$category->cat_id}}"></label>
                                </div>
                            </div>
                    @endif
                    </td>
                    <td>

                    {{-- <a href="button" data-dismiss="modal" aria-hidden="true"class="btn btn-primary" href="{{route('category.edit',$category->cat_id)}}><i class="fas fa-eye"></i></a> --}}
                    <a type="button" class="btn btn-outline-success" href="{{route('category.edit',$category->cat_id)}}"><i class="fas fa-pencil-alt "></i></a>
                    <a type="button" class="btn btn-outline-danger deletebtn" href="{{route('category.delete',[$category->cat_id])}}"><i class="fas fa-trash "></i></a>
                    </td>
                    </tr>


                <script>
                function dep_select(){
                var m= $("#selectdep").val();
                if(m==1){
                $('.dep4').css('display','none');
                    }
                }
                function myFunction{{$category->cat_id}}() {
                var checkBox{{$category->cat_id}} = document.getElementById("customSwitch{{$category->cat_id}}");

                if (checkBox{{$category->cat_id}}.checked == true){
                    $.ajax({
                            type:'get',
                            url:'/cat_active/'+{{$category->cat_id}},
                            data:{id:{{$category->cat_id}}},
                            success:function(response){console.log(response);
                            // alert("data saved");
                            },
                            error:function(error){console.log(error);
                            // alert("data dont saved");
                            }
                        });
                } else{
                    $.ajax({
                            type:'get',
                            url:'/cat_no_active/'+{{$category->cat_id}},
                            data:{id:{{$category->cat_id}}},
                            success:function(response){console.log(response);
                            // alert("data saved");
                            },
                            error:function(error){console.log(error);
                            // alert("data dont saved");
                            }
                        });
                }
                }

            </script>

                @endforeach
                </tbody>
            </table>


            </div>
        </div>
      </div>
  </div>
  <!-- /.content-wrapper -->
@endsection
