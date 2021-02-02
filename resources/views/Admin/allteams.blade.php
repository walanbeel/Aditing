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
                                    <li class="breadcrumb-item active" aria-current="page">Teams</li>
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
                                <h5 class="card-title m-b-0">Teams</h5>
                                <div class="text-right mb-3">
                                    <a class="btn btn-outline-warning so_form_btn" href="{{ route('team.create')}}">
                                     <i class="fa fa-plus" aria-hidden="true"></i> Add New Teams</a>
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
                                        <th scope="col">{{__('messages.t_id')}}</th>
                                        @if ( Config::get('app.locale') == 'en')
                                        <th scope="col">{{__('messages.name_en')}}</th>
                                        @elseif ( Config::get('app.locale') == 'ar' )
                                        <th scope="col">{{__('messages.name_ar')}}</th>
                                        @endif
                                        @if ( Config::get('app.locale') == 'en')
                                        <th scope="col">{{__('messages.sub_title_en')}}</th>
                                        @elseif ( Config::get('app.locale') == 'ar' )
                                        <th scope="col">{{__('messages.sub_title_ar')}}</th>
                                        @endif
                                        <th scope="col">{{__('messages.t_profile')}}</th>
                                        @if ( Config::get('app.locale') == 'en')
                                        <th scope="col" style="width:200px">{{__('messages.short_intro_en')}}</th>
                                        @elseif ( Config::get('app.locale') == 'ar' )
                                        <th scope="col" style="width:200px">{{__('messages.short_intro_ar')}}</th>
                                        @endif
                                        <th scope="col">{{__('messages.name')}}</th>
                                        <th scope="col">{{__('messages.operation')}}</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($teams as $team)

                                      <tr>
                                        <th scope="row">{{$team->t_id}}</th>
                                        @if ( Config::get('app.locale') == 'en')
                                        <td>{{$team->name_en}}</td>
                                        @elseif ( Config::get('app.locale') == 'ar' )
                                        <td>{{$team->name_ar}}</td>
                                        @endif
                                        @if ( Config::get('app.locale') == 'en')
                                        <td>{{$team->sub_title_en}}</td>
                                        @elseif ( Config::get('app.locale') == 'ar' )
                                        <td>{{$team->sub_title_ar}}</td>
                                        @endif
                                        <td><img src="{{asset('/images/teams/'.$team->t_profile)}}" alt="imgteams"  style="width:50px;height:50px"class="post-image"></td>
                                        @if ( Config::get('app.locale') == 'en')
                                        <td style="width:200px">{!! substr($team->short_intro_en, 0, 300) !!}{!!strlen($team->short_intro_en) > 300 ? "..." : "" !!}</td>
                                        @elseif ( Config::get('app.locale') == 'ar' )
                                        <td style="width:200px">{!! substr($team->short_intro_ar, 0, 300) !!}{!!strlen($team->short_intro_ar) > 300 ? "..." : "" !!}</td>
                                        @endif
                                        <td>{{$team->name}}</td>

                                        <td>
                                          {{-- <a href="" class="btn btn-primary"><i class="fa fa-eye"></i></a> --}}
                                          <a href="{{route('team.edit',$team->t_id)}}" class="btn btn-outline-success"><i class="fas fa-pencil-alt"></i></a>
                                          <a href="{{route('team.delete',$team->t_id)}}" class="btn btn-outline-danger"><i class="fas fa-trash"></i></a>

                                         </td>


                                      </tr>

                                      @endforeach

                                    </tbody>
                              </table>
                            </div>

                        </div>

                        @endsection
