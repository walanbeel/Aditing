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
                            <table class="table">
                                  <thead>
                                    <tr>
                                      <th scope="col">{{__('messages.set_id')}}</th>
                                      <th scope="col">{{__('messages.id')}}</th>
                                      <th scope="col">{{__('messages.logo')}}</th>
                                      <th scope="col">{{__('messages.icon')}}</th>
                                      <th scope="col">{{__('messages.Website_name_en')}}</th>
                                      <th scope="col">{{__('messages.Website_name_en')}}</th>
                                      <th scope="col">{{__('messages.mobile_num')}}</th>
                                      <th scope="col">{{__('messages.location')}}</th>
                                      <th scope="col">{{__('messages.email_web')}}</th>
                                      <th scope="col">{{__('messages.aboutus_en')}}</th>
                                      <th scope="col">{{__('messages.aboutus_ar')}}</th>
                                      <th scope="col">{{__('messages.Facebook')}}</th>
                                      <th scope="col">{{__('messages.LinkedIn')}}</th>
                                      <th scope="col">{{__('messages.Twitter')}}</th>
                                      <th scope="col">{{__('messages.operation')}}</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($settings as $setting)

                                    <tr>
                                      <td scope="row">{{$setting->set_id}}</td>
                                      <td>{{$setting->id}}</td>
                                      <td>{{$setting->logo}}</td>
                                      <td>{{$setting->icon}}</td>
                                      <td>{{$setting->Website_name_en}}</td>
                                      <td>{{$setting->Website_name_ar}}</td>
                                      <td>{{$setting->mobile_num}}</td>
                                      <td>{{$setting->location}}</td>
                                      <td>{{$setting->email_web}}</td>
                                      <td>{!!$setting->aboutus_en!!}</td>
                                      <td>{!!$setting->aboutus_ar!!}</td>
                                      <td>{{$setting->Facebook}}</td>
                                      <td>{{$setting->LinkedIn}}</td>
                                      <td>{{$setting->Twitter}}</td>
                                      <td>
                                        <a href="{{route('setting.edit',$setting->set_id)}}" class="btn btn-success"> {{__('messages.update')}}</a>

                                        {{-- <a href="{{url('services/edit/'.$service->s_id)}}" class="btn btn-success"> {{__('messages.update')}}</a> --}}
                                        <a href="{{route('setting.delete',$setting->set_id)}}" class="btn btn-danger"> {{__('messages.delete')}}</a>

                                       </td>


                                    </tr>

                                    @endforeach

                                  </tbody>
                            </table>
                        </div>

                        @endsection
