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
                                    <li class="breadcrumb-item active" aria-current="page">News</li>
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
                                <h5 class="card-title m-b-0">News</h5>
                                <div class="text-right mb-3">
                                    <a class="btn btn-outline-warning so_form_btn" href="{{ route('blogs.create')}}">
                                        <i class="fa fa-plus" aria-hidden="true"></i> Add New News</a>
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
                                        <th scope="col" style="width:20px">{{__('messages.blog_id')}}</th>
                                        @if ( Config::get('app.locale') == 'en')
                                        <th scope="col"  style="width: 30px">{{__('messages.title_en')}}</th>
                                        @elseif ( Config::get('app.locale') == 'ar' )
                                        <th scope="col"  style="width: 30px">{{__('messages.title_ar')}}</th>
                                        @endif
                                         <th scope="col">{{__('messages.main_img')}}</th>
                                         @if ( Config::get('app.locale') == 'en')
                                         <th scope="col" style="width:30px">{{__('messages.content_en')}}</th>
                                         @elseif ( Config::get('app.locale') == 'ar' )
                                         <th scope="col"style="width:30px">{{__('messages.content_ar')}}</th>
                                         @endif
                                         <th scope="col" style="width:20px">{{__('messages.cat_name_en')}}</th>
                                         <th scope="col"style="width:20px">{{__('messages.name')}}</th>
                                        <th scope="col"style="width:40px">{{__('messages.operation')}}</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($blogs as $blog)

                                      <tr>
                                        <th scope="row" style="width:20px">{{$blog->blog_id}}</th>
                                        @if ( Config::get('app.locale') == 'en')
                                        <td  style="width:30px">{{$blog->title_en}}</td>
                                        @elseif ( Config::get('app.locale') == 'ar' )
                                        <td  style="width:30px">{{$blog->title_ar}}</td>
                                        @endif
                                        <td style="width:100px"><img src="{{asset('/images/news/'.$blog->main_img)}}" alt="imgpost" style="width:80%;hight:50%"></td>
                                        @if ( Config::get('app.locale') == 'en')
                                        <td  style="width: 30px">{!! substr($blog->content_en, 0, 100) !!}{!!strlen($blog->content_en) > 100 ? "..." : "" !!}</td>
                                        @elseif ( Config::get('app.locale') == 'ar' )
                                        <td  style="width: 30px">{!! substr($blog->content_ar, 0, 100) !!}{!!strlen($blog->content_ar) > 100 ? "..." : "" !!}</td>
                                        @endif
                                        <td style="width:20px">{{$blog->cat_name_en}}</td>
                                        <td style="width:20px">{{$blog->name}}</td>

                                        <td  style="width: 40px">
                                          {{-- <a href="" class="btn btn-primary"><i class="fa fa-eye"></i></a> --}}
                                          <a href="{{route('blogs.edit',$blog->blog_id)}}" class="btn btn-outline-success"><i class="fas fa-pencil-alt"></i></a>
                                          <a href="{{route('blogs.delete',$blog->blog_id)}}" class="btn btn-outline-danger"><i class="fas fa-trash"></i></a>

                                         </td>


                                      </tr>

                                      @endforeach

                                    </tbody>
                              </table>

                            </div>

                        </div>
                    </div>

                </div>
                <div class="d-flex justify-content-center">
                    {!!  $blogs ->links() !!}
                    </div>
            </div>
        </div>




                        @endsection
