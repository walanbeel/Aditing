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
                                <h5 class="card-title m-b-0">Blogs</h5>
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
                                        <th scope="col">{{__('messages.blog_id')}}</th>
                                        <th scope="col">{{__('messages.name')}}</th>
                                        <th scope="col">{{__('messages.cat_id')}}</th>
                                        @if ( Config::get('app.locale') == 'en')
                                        <th scope="col">{{__('messages.title_en')}}</th>
                                        @elseif ( Config::get('app.locale') == 'ar' )
                                        <th scope="col">{{__('messages.title_ar')}}</th>
                                        @endif
                                         <th scope="col">{{__('messages.main_img')}}</th>
                                         <th scope="col">{{__('messages.content_en')}}</th>
                                        <th scope="col">{{__('messages.operation')}}</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($blogs as $blog)

                                      <tr>
                                        <th scope="row">{{$blog->blog_id}}</th>
                                        <td>{{$blog->name}}</td>
                                        <td>{{$blog->cat_name_en}}</td>
                                        @if ( Config::get('app.locale') == 'en')
                                        <td>{{$blog->title_en}}</td>
                                        @elseif ( Config::get('app.locale') == 'ar' )
                                        <td>{{$blog->title_ar}}</td>
                                        @endif
                                        <td style="width:100px"><img src="{{asset('/images/news/'.$blog->main_img)}}" alt="imgpost" style="width:80%;hight:50%"></td>
                                        <td>{!! substr($blog->content_en, 0, 100) !!}{!!strlen($blog->content_en) > 100 ? "..." : "" !!}</td>
                                        <td>
                                          <a href="" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                                          <a href="{{route('blogs.edit',$blog->blog_id)}}" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                          <a href="{{route('blogs.delete',$blog->blog_id)}}" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>

                                         </td>


                                      </tr>

                                      @endforeach

                                    </tbody>
                              </table>
                            </div>

                        </div>

                        @endsection
