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
                                    <li class="breadcrumb-item active" aria-current="page">Services</li>
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
                                <h5 class="card-title m-b-0">Services</h5>
                                <div class="text-right mb-3">
                                    <a class="btn btn-outline-warning so_form_btn" href="{{ route('services.create')}}">
                                        <i class="fa fa-plus" aria-hidden="true"></i> Add New Services</a>
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
                                      <th scope="col">{{__('messages.s_id')}}</th>
                                      @if ( Config::get('app.locale') == 'en')
                                      <th scope="col">{{__('messages.s_name_en')}}</th>
                                      @elseif ( Config::get('app.locale') == 'ar' )
                                      <th scope="col">{{__('messages.s_name_ar')}}</th>
                                      @endif
                                      @if ( Config::get('app.locale') == 'en')
                                      <th scope="col">{{__('messages.sub_services_en')}}</th>
                                      @elseif ( Config::get('app.locale') == 'ar' )
                                      <th scope="col">{{__('messages.sub_services_ar')}}</th>
                                      @endif
                                      <th scope="col">{{__('messages.ser_images')}}</th>
                                      @if ( Config::get('app.locale') == 'en')
                                      <th scope="col" style="width:200px">{{__('messages.s_describe_en')}}</th>
                                      @elseif ( Config::get('app.locale') == 'ar' )
                                      <th scope="col"style="width:200px">{{__('messages.s_describe_ar')}}</th>
                                      @endif
                                      <th scope="col">{{__('messages.name')}}</th>
                                      <th scope="col">{{__('messages.cat_id')}}</th>
                                      <th scope="col">{{__('messages.is_active')}}</th>
                                      <th scope="col">{{__('messages.operation')}}</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                  {{-- <?php print_r($services);?> --}}
                                    @foreach($services as $service)

                                    <tr>
                                      <td scope="row">{{$service->s_id}}</td>
                                      @if ( Config::get('app.locale') == 'en')
                                      <td>{{$service->s_name_en}}</td>
                                      @elseif ( Config::get('app.locale') == 'ar' )
                                      <td>{{$service->s_name_ar}}</td>
                                      @endif
                                      @if ( Config::get('app.locale') == 'en')
                                      <td>{!!$service->sub_services_en!!}</td>
                                      @elseif ( Config::get('app.locale') == 'ar' )
                                      <td>{!!$service->sub_services_ar!!}</td>
                                      @endif
                                      {{-- <td style="width:100px"><img src="{{asset('/images/services/'.$service->ser_images)}}" alt="imgpost" style="width:80%;hight:50%"></td> --}}
                                      <td><img src="{{asset('/images/services/'.$service->ser_images)}}" alt="imgset"  style="width:60px;height:50px"></td>

                                      @if ( Config::get('app.locale') == 'en')
                                      <td style="width:200px">{!! substr($service->s_describe_en, 0,255) !!}{!!strlen($service->s_describe_en) > 255 ? "..." : "" !!}</td>
                                      @elseif ( Config::get('app.locale') == 'ar' )
                                      <td style="width:200px">{!! substr($service->s_describe_ar, 0, 255) !!}{!!strlen($service->s_describe_ar) > 255 ? "..." : "" !!}</td>
                                      @endif
                                      <td>{{$service->name}}</td>
                                      <td> {{$service->cat_name_en}}</td>
                                      <td>
                                        @if($service->is_active==0)

                                        <div class="form-group">
                                            <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                            <input onclick="myFunction{{$service->s_id}}()" type="checkbox" class="custom-control-input" id="customSwitch{{$service->s_id}}">
                                            <label class="custom-control-label" for="customSwitch{{$service->s_id}}"></label>
                                            </div>
                                        </div>
                                        @elseif($service->is_active == 1)
                                        <div class="form-group">
                                            <div  class="custom-control custom-switch custom-switch-on-success custom-switch-off-danger ">
                                            <input onclick="myFunction{{$service->s_id}}()" checked type="checkbox" class="custom-control-input" id="customSwitch{{$service->s_id}}">
                                            <label class="custom-control-label" for="customSwitch{{$service->s_id}}"></label>
                                            </div>
                                        </div>
                                       @endif
                                     </td>
                                      <td>
                                        {{-- <a href="" class="btn btn-primary"><i class="fa fa-eye"></i></a> --}}
                                        <a href="{{route('services.edit',$service->s_id)}}" class="btn btn-outline-success"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="{{route('services.delete',$service->s_id)}}" class="btn btn-outline-danger deletebtn"><i class="fas fa-trash"></i></a>
                                       </td>


                                    </tr>
                                    <script>
                                        function dep_select(){
                                        var m= $("#selectdep").val();
                                        if(m==1){
                                        $('.dep4').css('display','none');
                                            }
                                        }
                                        function myFunction{{$service->s_id}}() {
                                        var checkBox{{$service->s_id}} = document.getElementById("customSwitch{{$service->s_id}}");

                                        if (checkBox{{$service->s_id}}.checked == true){
                                            $.ajax({
                                                    type:'get',
                                                    url:'/ser_active/'+{{$service->s_id}},
                                                    data:{id:{{$service->s_id}}},
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
                                                    url:'/ser_no_active/'+{{$service->s_id}},
                                                    data:{id:{{$service->s_id}}},
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
                             {{-- <div class="d-flex justify-content-center">
                                {!!  $services -> links() !!}
                                </div> --}}
                            </div>
                        </div>


                        @endsection
