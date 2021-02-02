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
                                    <li class="breadcrumb-item active" aria-current="page">Exprienc</li>
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
                                <h5 class="card-title m-b-0">Exprienc</h5>
                                <div class="text-right mb-3">
                                    <a class="btn btn-outline-warning so_form_btn" href="{{ route('experienc.create')}}">
                                        <i class="fa fa-plus" aria-hidden="true"></i> Add New Experienc</a>
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
                                        <th scope="col">{{__('messages.exp_id')}}</th>
                                        @if ( Config::get('app.locale') == 'en')
                                        <th scope="col">{{__('messages.name_en')}}</th>
                                        @elseif ( Config::get('app.locale') == 'ar' )
                                        <th scope="col">{{__('messages.name_ar')}}</th>
                                        @endif
                                        <th scope="col">{{__('messages.logo')}}</th>
                                         <th scope="col">{{__('messages.url')}}</th>
                                         <th scope="col">{{__('messages.user')}}</th>
                                         <th scope="col">{{__('messages.is_active')}}</th>
                                        <th scope="col">{{__('messages.operation')}}</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($experience as $exper)

                                      <tr>
                                        <th scope="row">{{$exper->exp_id}}</th>
                                        @if ( Config::get('app.locale') == 'en')
                                        <td>{{$exper->name_en}}</td>
                                        @elseif ( Config::get('app.locale') == 'ar' )
                                        <td>{{$exper->name_ar}}</td>
                                        @endif
                                        <td><img src="{{asset('/images/experienc/'.$exper->logo)}}" alt="imgExper" style="width:50px;height:50px"></td>
                                        <td>{{$exper->url}}</td>
                                        <td>{{$exper->name}}</td>
                                        <td>
                                            @if($exper->is_active==0)

                                            <div class="form-group">
                                                <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                                <input onclick="myFunction{{$exper->exp_id}}()" type="checkbox" class="custom-control-input" id="customSwitch{{$exper->exp_id}}">
                                                <label class="custom-control-label" for="customSwitch{{$exper->exp_id}}"></label>
                                                </div>
                                            </div>
                                            @elseif($exper->is_active == 1)
                                            <div class="form-group">
                                                <div  class="custom-control custom-switch custom-switch-on-success custom-switch-off-danger ">
                                                <input onclick="myFunction{{$exper->exp_id}}()" checked type="checkbox" class="custom-control-input" id="customSwitch{{$exper->exp_id}}">
                                                <label class="custom-control-label" for="customSwitch{{$exper->exp_id}}"></label>
                                                </div>
                                            </div>
                                           @endif
                                        </td>

                                        <td>
                                          {{-- <a href="" class="btn btn-primary"><i class="fa fa-eye"></i></a> --}}
                                          <a href="{{route('experienc.edit',$exper->exp_id)}}" class="btn btn-outline-success"><i class="fas fa-edit"></i></a>
                                          <a href="{{route('experienc.delete',$exper->exp_id)}}" class="btn btn-outline-danger"><i class="fas fa-trash"></i></a>

                                         </td>


                                      </tr>

                <script>
                    function dep_select(){
                    var m= $("#selectdep").val();
                    if(m==1){
                    $('.dep4').css('display','none');
                        }
                    }
                    function myFunction{{$exper->exp_id}}() {
                    var checkBox{{$exper->exp_id}} = document.getElementById("customSwitch{{$exper->exp_id}}");

                    if (checkBox{{$exper->exp_id}}.checked == true){
                        $.ajax({
                                type:'get',
                                url:'/exp_active/'+{{$exper->exp_id}},
                                data:{id:{{$exper->exp_id}}},
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
                                url:'/exp_no_active/'+{{$exper->exp_id}},
                                data:{id:{{$exper->exp_id}}},
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

                        @endsection
