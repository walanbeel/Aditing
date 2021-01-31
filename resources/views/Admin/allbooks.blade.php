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
                                <h5 class="card-title m-b-0">Library</h5>
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
                                      <th scope="col">{{__('messages.B_id')}}</th>
                                      <th scope="col">{{__('messages.name')}}</th>
                                      <th scope="col">{{__('messages.cat_id')}}</th>
                                      <th scope="col">{{__('messages.authoer_name_en')}}</th>
                                      <th scope="col">{{__('messages.authoer_name_ar')}}</th>
                                      <th scope="col">{{__('messages.B_name_en')}}</th>
                                      <th scope="col">{{__('messages.B_name_ar')}}</th>
                                      <th scope="col">{{__('messages.file')}}</th>
                                      <th scope="col">{{__('messages.cover')}}</th>
                                      {{-- <th scope="col" >{{__('messages.B_preface_en')}}</th>
                                      <th scope="col" >{{__('messages.B_preface_ar')}}</th> --}}
                                      <th scope="col">{{__('messages.operation')}}</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($books as $book)

                                    <tr>
                                      <td scope="row">{{$book->B_id}}</td>
                                      <td>{{$book->name}}</td>
                                      <td>{{$book->cat_name_en}}</td>
                                      <td style="width:10px">{{$book->authoer_name_en}}</td>
                                      <td style="width:10px">{{$book->authoer_name_ar}}</td>
                                      <td>{{$book->B_name_en}}</td>
                                      <td>{{$book->B_name_ar}}</td>
                                      <td>{{$book->file}}</td>
                                      <td><img src="{{asset('/images/books/'.$book->cover)}}" alt="imgExper"  style="width:60%;hight:50%"></td>
                                      @if ( Config::get('app.locale') == 'en')
                                      <td  class="mycell">{!! $book->B_preface_en !!}</td>
                                      @elseif ( Config::get('app.locale') == 'ar' )
                                      <td  class="mycell">{!! $book->B_preface_ar !!}</td>
                                      @endif
                                      <td>
                                        <a href="" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                                        <a href="{{route('books.edit',$book->B_id)}}" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                        <a href="{{route('books.delete',$book->B_id)}}" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>

                                       </td>


                                    </tr>

                                    @endforeach

                                  </tbody>
                            </table>
                        </div>
                        </div>

                        @endsection
