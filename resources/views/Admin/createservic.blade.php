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
                                    <li class="breadcrumb-item active" aria-current="page">Services</li>
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
                                <h4 class="card-title"> Add Services </h4>
                                @if(Session::has('success'))
                                <div class="alert alert-success" role="alert">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    {{ Session::get('success') }}
                                </div>
                                @endif

                                  <br>

                                <form method="POST" action="{{route('services.add')}}" enctype="multipart/form-data">
                                    @csrf


                                    <div class="col-12">
                                        <input type="hidden">
                                        <div class="form-group">
                                          <label>{{__('messages.Services Name en')}} </label>
                                          <input type="text"  class="form-control" name="s_name_en"  placeholder="{{__('messages.Services Name en')}}">
                                          @error('s_name_en')
                                          <small class="form-text text-danger">{{$message}}</small>
                                          @enderror
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <input type="hidden">
                                        <div class="form-group">
                                          <label>{{__('messages.Services Name ar')}}  </label>
                                          <input type="text"  class="form-control" name="s_name_ar"  placeholder="{{__('messages.Services Name ar')}}">
                                          @error('s_name_ar')
                                          <small class="form-text text-danger">{{$message}}</small>
                                          @enderror
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <input type="hidden">
                                        <div class="form-group">
                                          <label>{{__('messages.Servicess sub_services_en')}}  </label>
                                          <div class="col-12">
                                              <textarea class="form-control" id="mytextarea" name="sub_services_en"  placeholder="{{__('messages.sub_services_en')}}"></textarea>
                                              @error('sub_services_en')
                                              <small class="form-text text-danger">{{$message}}</small>
                                              @enderror
                                          </div>
                                          </div>
                                          </div>
                                          <div class="col-12">
                                            <input type="hidden">
                                            <div class="form-group">
                                              <label>{{__('messages.Servicess sub_services_ar')}}  </label>
                                              <div class="col-12">
                                                  <textarea class="form-control" id="mytextarea" name="sub_services_ar"  placeholder="{{__('messages.sub_services_ar')}}"></textarea>
                                                  @error('sub_services_ar')
                                                  <small class="form-text text-danger">{{$message}}</small>
                                                  @enderror
                                              </div>
                                              </div>
                                              </div>
                                      <div class="form-group">
                                        <input type="hidden">
                                        <label>{{__('messages.website ser_images ')}}</label>
                                        <input type="file" id="file-ip-1-img"  class="form-control-file" name="ser_images" onchange="showPreviewimg(event);">
                                        <div class="timeline-item">
                                            <div class="timeline-body preview">
                                              <img  id="file-preview" style="width:50px;height:50px;margin-top:10px;">
                                            </div>
                                            </div>
                                        @error('ser_images')
                                        <small class="form-text text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                      <div class="col-12">
                                      <input type="hidden">
                                      <div class="form-group">
                                        <label>{{__('messages.Servicess describe en')}}  </label>
                                        <div class="col-12">
                                            <textarea class="form-control" id="mytextarea" name="s_describe_en"  placeholder="{{__('messages.s_describe_en')}}"></textarea>
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
                                            <textarea class="form-control"  id="mytextarea" name="s_describe_ar"  placeholder="{{__('messages.s_describe_ar')}}"></textarea>
                                            @error('s_describe_ar')
                                            <small class="form-text text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                       </div>
                                    </div>

                                    <div class="col-12 ">
                                        <div class="form-group col-sm-8">
                                              <div class="form-check">
                                                <input type="checkbox" checked class="form-check-input" value="1" name="is_active" id="active">
                                                <label class="form-check-label" for="exampleCheck2">Active</label>
                                              </div>
                                          </div>
                                        </div>

                                    {{-- <div class="col-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" value="1" name="active" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">is Active</label>
                                          </div>
                                       </div> --}}

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>{{__('messages.Category')}} </label>
                                                    <select class="form-control category_list" name="cat_id">

                                                        @foreach($category as $item)
                                                        <option value="{{$item->cat_id}}"> {{$item->cat_name_en}}</opiton>

                                                        @endforeach
                                                        </select>

                                                    </div>
                                                    </div>
                                            <div class="col-12">
                                            <button type="submit" class="btn btn-primary">{{__('messages.Add Services')}}</button>
                                            </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
               </div>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.7.0/tinymce.min.js" integrity="sha512-XaygRY58e7fVVWydN6jQsLpLMyf7qb4cKZjIi93WbKjT6+kG/x4H5Q73Tff69trL9K0YDPIswzWe6hkcyuOHlw==" crossorigin="anonymous"></script>
            <script>
                tinymce.init({
                  selector: 'textarea#mytextarea',
                  plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker textcolor colorpicker',
                    toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table ',
                    toolbar_mode: 'floating',
                    tinycomments_mode: 'embedded',
                    tinycomments_author: 'Author name',
                });
              </script>

            <script>
                function showPreviewimg(event)
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
