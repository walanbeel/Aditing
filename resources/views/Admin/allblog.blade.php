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
                            <table class="table">
                                  <thead>
                                    <tr>
                                      <th scope="col">{{__('messages.blog_id')}}</th>
                                      <th scope="col">{{__('messages.id')}}</th>
                                      <th scope="col">{{__('messages.cat_id')}}</th>
                                      <th scope="col">{{__('messages.title_en')}}</th>
                                      <th scope="col">{{__('messages.title_ar')}}</th>
                                      <th scope="col">{{__('messages.content_en')}}</th>
                                      <th scope="col">{{__('messages.content_ar')}}</th>
                                      <th scope="col">{{__('messages.main_img')}}</th>
                                      <th scope="col">{{__('messages.blog_img')}}</th>
                                      <th scope="col">{{__('messages.operation')}}</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($blogs as $blog)

                                    <tr>
                                      <td scope="row">{{$blog->blog_id}}</td>
                                      <td>{{$blog->id}}</td>
                                      <td>{{$blog->cat_id}}</td>
                                      <td>{{$blog->title_en}}</td>
                                      <td>{{$blog->title_ar}}</td>
                                      <td>{{$blog->content_en}}</td>
                                      <td>{{$blog->content_ar}}</td>
                                      <td>{{$blog->main_img}}</td>
                                      <td>{{$blog->blog_img}}</td>

                                      <td>

                                        <a href="{{route('blogs.edit',$blog->blog_id)}}" class="btn btn-success"> {{__('messages.update')}}</a>
                                        {{-- <a href="{{url('services/edit/'.$service->s_id)}}" class="btn btn-success"> {{__('messages.update')}}</a> --}}
                                        <a href="{{route('blogs.delete',$blog->blog_id)}}" class="btn btn-danger"> {{__('messages.delete')}}</a>

                                       </td>


                                    </tr>

                                    @endforeach

                                  </tbody>
                            </table>
                        </div>

                        @endsection
