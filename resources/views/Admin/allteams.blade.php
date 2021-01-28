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
                                        <th scope="col">{{__('messages.t_id')}}</th>
                                        <th scope="col">{{__('messages.id')}}</th>
                                        <th scope="col">{{__('messages.t_profile')}}</th>
                                        <th scope="col">{{__('messages.name_en')}}</th>
                                        <th scope="col">{{__('messages.name_ar')}}</th>
                                        <th scope="col">{{__('messages.sub_title_en')}}</th>
                                        <th scope="col">{{__('messages.sub_title_ar')}}</th>
                                        <th scope="col">{{__('messages.short_intro_en')}}</th>
                                        <th scope="col">{{__('messages.short_intro_ar')}}</th>
                                        <th scope="col">{{__('messages.operation')}}</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($teams as $team)

                                      <tr>
                                        <th scope="row">{{$team->t_id}}</th>
                                        <td>{{$team->id}}</td>
                                        <td><img src="{{asset('/images/teams/'.$team->t_profile)}}" alt="imgteams"  style="width:60%;hight:50%"class="post-image"></td>
                                        <td>{{$team->name_en}}</td>
                                        <td>{{$team->name_ar}}</td>
                                        <td>{{$team->sub_title_en}}</td>
                                        <td>{{$team->sub_title_ar}}</td>
                                        <td>{{$team->short_intro_en}}</td>
                                        <td>{{$team->short_intro_ar}}</td>

                                        <td>
                                          <a href="" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                                          <a href="{{route('team.edit',$team->t_id)}}" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                          <a href="{{route('team.delete',$team->t_id)}}" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>

                                         </td>


                                      </tr>

                                      @endforeach

                                    </tbody>
                              </table>
                            </div>

                        </div>

                        @endsection
