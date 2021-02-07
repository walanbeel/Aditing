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
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="title m-b-md">
                                        {{__('messages.Add your Category')}}
                                    </div>
                                    @if(Session::has('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{ Session::get('success') }}
                                    </div>
                                    @endif

                                      <br>

                                    <form method="POST" enctype="multipart/form-data" action="{{route('services.update')}}">
                                        @foreach($services  as $item)

                                      @csrf
                                        <div class="col-12">
                                            {{-- {{ print_r() }} --}}
                                            <input type="hidden" name="s_id" value="{{$item->s_id}}">
                                            <input type="hidden" name="id" value="{{$item->id}}">

                                            <div class="form-group">
                                              <label>{{__('messages.Services Name en')}} </label>
                                              <input type="text"  class="form-control" name="s_name_en" value="{{$item->s_name_en}}"  placeholder="{{__('messages.Services Name en')}}">
                                              @error('s_name_en')
                                              <small class="form-text text-danger">{{$message}}</small>
                                              @enderror
                                            </div>
                                          </div>
                                          <div class="col-12">
                                            <input type="hidden">
                                            <div class="form-group">
                                              <label>{{__('messages.Services Name ar')}}  </label>
                                              <input type="text"  class="form-control" name="s_name_ar" value="{{$item->s_name_ar}}"  placeholder="{{__('messages.Services Name ar')}}">
                                              @error('s_name_ar')
                                              <small class="form-text text-danger">{{$message}}</small>
                                              @enderror
                                            </div>
                                          </div>
                                          <div class="col-12">
                                            <input type="hidden">
                                            <label for="exampleFormControlFile1"> @error('ser_images')<small>{{$message}}</small> @enderror</label>
                                            <input type="file" id="file-ip-1" onchange="showPreview(event);"  accept="image/*" class="form-control-file" name='ser_images[]' value="{{$item->ser_images}}">
                                            <input type="hidden"   accept="image/*" name='ser_images2' value="{{$item->ser_images}}">
                                            <div class="timeline-item">
                                                <div class="timeline-body preview">
                                                  <img  id="file-preview" style="width:50px;height:50px;margin-top:10px;">
                                                </div>
                                                </div>
                                        </div>
                                          <div class="col-12">
                                          <input type="hidden">
                                          <div class="form-group">
                                            <label>{{__('messages.Servicess describe en')}}  </label>
                                            <div class="col-12">
                                                <textarea class="form-control" name="s_describe_en"  placeholder="{{__('messages.s_describe_en')}}">{{$item->s_describe_en}}</textarea>
                                                @error('s_describe_en')
                                                <small class="form-text text-danger">{{$message}}</small>
                                                @enderror
                                            </div>
                                            </div>
                                            </div>
                                            <div class="col-12">
                                                <input type="hidden">
                                            <div class="form-group">
                                            <label>{{__('messages.Servicess describe ar')}}  </label>
                                            <div class="col-12">
                                                <textarea class="form-control" name="s_describe_ar"  placeholder="{{__('messages.s_describe_ar')}}"> {{$item->s_describe_ar}}</textarea>
                                                @error('s_describe_ar')
                                                <small class="form-text text-danger">{{$message}}</small>
                                                @enderror
                                            </div>
                                           </div>
                                        </div>

                                            {{-- <div class="col-12">
                                            <div class="form-group">
                                                <label>{{__('messages.is Active')}} </label>
                                                <select class="form-control category_list"   name="is_active"  id="is_active">
                                                <option value=1>yes</opiton>
                                                <option value=0>No</option>
                                                </select>
                                                </div>
                                                </div> --}}
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
                                                    <div class="form-group">
                                                        <label>{{__('messages.Category')}} </label>
                                                        <select class="form-control category_list" name="cat_id">
                                                            @foreach($category as $cat)

                                                            @if($item->cat_id===$cat->cat_id)
                                                            <option value="{{$cat->id}}" selected > {{$cat->cat_name_en}}</opiton>
                                                            @else
                                                            <option value="{{$cat->id}}"> {{$cat->cat_name_en}}</opiton>
                                                             @endif

                                                            @endforeach


                                                            </select>

                                                        </div>
                                                        </div>
                                                <div class="col-12">
                                                <button type="submit" class="btn btn-primary">{{__('messages.Save Change')}}</button>
                                                </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                   </div>
                   @endforeach


                   <script>
                    function showPreview(event)
                    {
                       if(event.target.files.length >0){
                           var src =URL.createObjectURL(event.target.files[0]);
                           var preview =document.getElementById("file-preview");
                           preview.src=src;
                           preview.style.display="block";
                       }
                    }
                </script>
              @endsection
