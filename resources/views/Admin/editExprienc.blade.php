@extends('Admin.layout.master')
@section('content')
        <!-- ============================================================== -->
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
                                    <li class="breadcrumb-item active" aria-current="page">Experience</li>
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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"> Eidt Experience </h4>
                                @if(Session::has('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ Session::get('success') }}
                                </div>
                                @endif

                                  <br>

                                  <form method="POST" enctype="multipart/form-data" action="{{route('experienc.update')}}">
                                    @foreach($experience as $item)
                                    @csrf
                                    <div class="col-12">
                                        <input type="hidden" name="exp_id" value="{{$item->exp_id}}">
                                        <input type="hidden" name="id" value="{{$item->id}}">
                                        <div class="form-group">
                                          <label>{{__('messages.experienc name en')}} </label>
                                          <input type="text"  class="form-control" name="name_en" value="{{$item->name_en}}"  placeholder="{{__('messages.name_en')}}">
                                          @error('name_en')
                                          <small class="form-text text-danger">{{$message}}</small>
                                          @enderror
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <input type="hidden">
                                        <div class="form-group">
                                          <label>{{__('messages.experienc name ar')}}  </label>
                                          <input type="text"  class="form-control" name="name_ar" value="{{$item->name_ar}}"  placeholder="{{__('messages.name_ar')}}">
                                          @error('name_ar')
                                          <small class="form-text text-danger">{{$message}}</small>
                                          @enderror
                                        </div>
                                      </div>

                                    <div class="col-12">
                                        <label for="exampleFormControlFile1"> @error('logo')<small>{{$message}}</small> @enderror</label>
                                        <input type="file" id="file-ip-1" onchange="showPreview(event);"  accept="image/*" class="form-control-file" name='logo[]' value="{{$item->logo}}">
                                        <input type="hidden"   accept="image/*" name='logo2' value="{{$item->logo}}">
                                       <br>
                                        <img  class="img-fluid" id="file-ip-1-preview" width="70">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail">logo address</label>
                                        <input id="inputEmail" type="url" placeholder="name@example.com" class="form-control" name="url" value="{{$item->url}}">
                                    </div>
                                    <div class="col-12 ">
                                        <div class="form-group col-sm-8">
                                          <div class="form-check">
                                            @if($item->is_active==1)
                                            <input type="checkbox" checked class="form-check-input" name="is_active"  id="active">
                                            <label class="form-check-label" for="exampleCheck2">Active</label>
                                            @else
                                            <input type="checkbox" class="form-check-input" name="is_active" id="active">
                                            <label class="form-check-label" for="exampleCheck2">Active</label>
                                            @endif
                                          </div>
                                        </div>
                                      </div>


                                    <div class="col-12">
                                     <button type="submit" class="btn btn-primary">{{__('messages.Add Experienc')}}</button>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
               </div>
            </div>
            @endforeach

            @endsection
