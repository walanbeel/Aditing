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
                                <h5 class="card-title m-b-0">Settings</h5>
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
                                      <th scope="col">{{__('messages.set_id')}}</th>
                                      <th scope="col">{{__('messages.icon')}}</th>
                                      <th scope="col">{{__('messages.logo')}}</th>
                                      @if ( Config::get('app.locale') == 'en')
                                      <th scope="col">{{__('messages.Website_name_en')}}</th>
                                      @elseif ( Config::get('app.locale') == 'ar' )
                                      <th scope="col">{{__('messages.Website_name_ar')}}</th>
                                      @endif
                                      <th scope="col">{{__('messages.mobile_num')}}</th>
                                      <th scope="col">{{__('messages.location')}}</th>
                                      <th scope="col">{{__('messages.email_web')}}</th>
                                      @if ( Config::get('app.locale') == 'en')
                                      <th scope="col" style="width:300px">{{__('messages.aboutus_en')}}</th>
                                      @elseif ( Config::get('app.locale') == 'ar' )
                                      <th scope="col"style="width:300px">{{__('messages.aboutus_ar')}}</th>
                                      @endif
                                      <th scope="col" style="width:100px">{{__('messages.Facebook')}}</th>
                                      <th scope="col"style="width:100px">{{__('messages.LinkedIn')}}</th>
                                      <th scope="col"style="width:100px">{{__('messages.Twitter')}}</th>
                                      <th scope="col">{{__('messages.operation')}}</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($settings as $setting)

                                    <tr>
                                      <td scope="row">{{$setting->set_id}}</td>
                                      <td><img src="{{asset('/images/set/'.$setting->icon)}}" alt="imgset"  style="width:60px;height:50px"></td>
                                      <td><img src="{{asset('/images/set/'.$setting->logo)}}" alt="imgset"  style="width:60px;hight:50px"></td>
                                      @if ( Config::get('app.locale') == 'en')
                                      <td>{{$setting->Website_name_en}}</td>
                                      @elseif ( Config::get('app.locale') == 'ar' )
                                      <td>{{$setting->Website_name_ar}}</td>
                                      @endif
                                      <td>{{$setting->mobile_num}}</td>
                                      <td>{{$setting->location}}</td>
                                      <td>{{$setting->email_web}}</td>
                                      @if ( Config::get('app.locale') == 'en')
                                      <td style="width:300px">{!! substr($setting->aboutus_en, 0, 300) !!}{!!strlen($setting->aboutus_en) > 300 ? "..." : "" !!}</td>
                                      @elseif ( Config::get('app.locale') == 'ar' )
                                      <td style="width:300px">{!! substr($setting->aboutus_ar, 0, 300) !!}{!!strlen($setting->aboutus_ar) > 300 ? "..." : "" !!}</td>
                                      @endif
                                      <td style="width:100px">{{$setting->Facebook}}</td>
                                      <td style="width:100px">{{$setting->LinkedIn}}</td>
                                      <td style="width:100px">{{$setting->Twitter}}</td>
                                      {{-- <td>{{$setting->name}}</td> --}}
                                      <td>
                                        <a href="{{route('setting.edit',$setting->set_id)}}" class="btn btn-outline-success"><i class="fas fa-pencil-alt"></i></a>

                                        {{-- <a href="{{url('services/edit/'.$service->s_id)}}" class="btn btn-success"> {{__('messages.update')}}</a> --}}
                                        <a href="{{route('setting.delete',$setting->set_id)}}" class="btn btn-outline-danger"><i class="fas fa-trash"></i></a>

                                       </td>


                                    </tr>

                                    @endforeach

                                  </tbody>
                            </table>
                        </div>
                    </div>


                        @endsection
