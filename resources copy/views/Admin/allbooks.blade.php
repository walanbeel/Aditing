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
                                <h5 class="card-title m-b-0">Services</h5>
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
                                      <th scope="col">{{__('messages.B_id ')}}</th>
                                      <th scope="col">{{__('messages.id')}}</th>
                                      <th scope="col">{{__('messages.cat_id')}}</th>
                                      <th scope="col">{{__('messages.authoer_name_en')}}</th>
                                      <th scope="col">{{__('messages.authoer_name_ar')}}</th>
                                      <th scope="col">{{__('messages.B_name_en')}}</th>
                                      <th scope="col">{{__('messages.B_name_ar')}}</th>
                                      <th scope="col">{{__('messages.image')}}</th>
                                      <th scope="col">{{__('messages.B_preface_en')}}</th>
                                      <th scope="col">{{__('messages.B_preface_ar')}}</th>
                                      <th scope="col">{{__('messages.operation')}}</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($books as $book)

                                    <tr>
                                      <th scope="row">{{$book->B_id }}</th>
                                      <td>{{$book->id}}</td>
                                      <td>{{$book->cat_id}}</td>
                                      <td>{{$book->authoer_name_en}}</td>
                                      <td>{{$book->authoer_name_ar}}</td>
                                      <td>{{$book->B_name_en}}</td>
                                      <td>{{$book->B_name_ar}}</td>
                                      <td>{{$book->image}}</td>
                                      <td>{{$book->B_preface_en}}</td>
                                      <td>{{$book->B_preface_ar}}</td>
                                      <td>
                                        <a href="{{route('books.edit',$book->B_id)}}" class="btn btn-success"> {{__('messages.update')}}</a>

                                        {{-- <a href="{{url('services/edit/'.$service->s_id)}}" class="btn btn-success"> {{__('messages.update')}}</a> --}}
                                        <a href="{{route('books.delete',$book->B_id)}}" class="btn btn-danger"> {{__('messages.delete')}}</a>

                                       </td>


                                    </tr>

                                    @endforeach

                                  </tbody>
                            </table>
                        </div>

                        @endsection
