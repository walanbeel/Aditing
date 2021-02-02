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
                                <div class="text-right mb-3">
                                    <a class="btn btn-outline-warning so_form_btn" href="{{ route('books.create')}}">
                                        <i class="fa fa-plus" aria-hidden="true"></i> Add New Book</a>
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
                                      <th scope="col">{{__('messages.B_id')}}</th>
                                      @if ( Config::get('app.locale') == 'en')
                                      <th scope="col"  style="width: 30px">{{__('messages.authoer_name_en')}}</th>
                                      @elseif ( Config::get('app.locale') == 'ar' )
                                      <th scope="col"  style="width: 30px">{{__('messages.authoer_name_ar')}}</th>
                                      @endif
                                      @if ( Config::get('app.locale') == 'en')
                                      <th scope="col"  style="width: 30px">{{__('messages.B_name_en')}}</th>
                                      @elseif ( Config::get('app.locale') == 'ar' )
                                      <th scope="col"  style="width: 30px">{{__('messages.B_name_ar')}}</th>
                                      @endif
                                      <th scope="col" style="width: 30px">{{__('messages.file')}}</th>
                                      <th scope="col">{{__('messages.cover')}}</th>
                                      @if ( Config::get('app.locale') == 'en')
                                      <th scope="col" style="width:30px">{{__('messages.B_preface_en')}}</th>
                                      @elseif ( Config::get('app.locale') == 'ar' )
                                      <th scope="col"style="width:30px" >{{__('messages.B_preface_ar')}}</th>
                                      @endif
                                      <th scope="col">{{__('messages.cat_id')}}</th>
                                      <th scope="col">{{__('messages.name')}}</th>
                                      <th scope="col">{{__('messages.operation')}}</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($books as $book)

                                    <tr>
                                      <td scope="row">{{$book->B_id}}</td>
                                      @if ( Config::get('app.locale') == 'en')
                                      <td style="width: 30px">{{$book->authoer_name_en}}</td>
                                      @elseif ( Config::get('app.locale') == 'ar' )
                                      <td  style="width: 30px">{{$book->authoer_name_ar}}</td>
                                      @endif
                                      @if ( Config::get('app.locale') == 'en')
                                      <td  style="width: 30px">{{$book->B_name_en}}</td>
                                      @elseif ( Config::get('app.locale') == 'ar' )
                                      <td  style="width: 30px">{{$book->B_name_ar}}</td>
                                      @endif
                                      <td style="width:30px">{{$book->file}}</td>
                                      <td><img src="{{asset('/images/books/'.$book->cover)}}" alt="imgExper"  style="width:60%;hight:50%"></td>
                                      @if ( Config::get('app.locale') == 'en')
                                      <td style="width:30px">{!! substr($book->B_preface_en, 0, 100) !!}{!!strlen($book->B_preface_en) > 100 ? "..." : "" !!}</td>
                                      @elseif ( Config::get('app.locale') == 'ar' )
                                      <td style="width:30px">{!! substr($book->B_preface_ar, 0, 100) !!}{!!strlen($book->B_preface_ar) > 100 ? "..." : "" !!}</td>
                                      @endif
                                      <td>{{$book->cat_name_en}}</td>
                                      <td>{{$book->name}}</td>
                                      <td>
                                        {{-- <a href="" class="btn btn-primary"><i class="fa fa-eye"></i></a> --}}
                                        <a href="{{route('books.edit',$book->B_id)}}" class="btn btn-outline-success"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="{{route('books.delete',$book->B_id)}}" class="btn btn-outline-danger"><i class="fas fa-trash"></i></a>

                                       </td>


                                    </tr>

                                    @endforeach

                                  </tbody>
                            </table>
                        </div>
                        </div>

                        @endsection
