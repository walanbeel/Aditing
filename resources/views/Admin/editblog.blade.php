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

                                    <form method="post" enctype="multipart/form-data" action="{{route('blogs.update')}}">
                                        @foreach($blogs  as $item)
                                      @csrf
                                        <div class="col-12">
                                            <input type="hidden" name="blog_id" value="{{$item->blog_id}}">
                                            <div class="form-group">
                                              <label>{{__('messages.News title en')}} </label>
                                              <input type="text"  class="form-control" name="title_en" value="{{$item->title_en}}"  placeholder="{{__('messages.New title en')}}">
                                              @error('title_en')
                                              <small class="form-text text-danger">{{$message}}</small>
                                              @enderror
                                            </div>
                                          </div>
                                          <div class="col-12">
                                            <input type="hidden">
                                            <div class="form-group">
                                              <label>{{__('messages.News title ar')}}  </label>
                                              <input type="text"  class="form-control" name="title_ar" value="{{$item->title_ar}}"  placeholder="{{__('messages.News title ar')}}">
                                              @error('title_ar')
                                              <small class="form-text text-danger">{{$message}}</small>
                                              @enderror
                                            </div>
                                          </div>
                                          <div class="col-12">
                                          <input type="hidden">
                                          <div class="form-group">
                                            <label>{{__('messages.News content en')}}  </label>
                                            <div class="col-12">
                                                <textarea class="form-control" name="content_en"  placeholder="{{__('messages.News content en')}}">{{$item->content_en}}</textarea>
                                                @error('content_en')
                                                <small class="form-text text-danger">{{$message}}</small>
                                                @enderror
                                            </div>
                                            </div>
                                            </div>
                                            <div class="col-12">
                                                <input type="hidden">
                                            <div class="form-group">
                                            <label>{{__('messages.News content ar')}}  </label>
                                            <div class="col-12">
                                                <textarea class="form-control" name="content_ar"  placeholder="{{__('messages.s_describe_ar')}}"> {{$item->content_ar}}</textarea>
                                                @error('content_ar')
                                                <small class="form-text text-danger">{{$message}}</small>
                                                @enderror
                                            </div>
                                           </div>
                                        </div>
                                        <div class="col-12">
                                            <input type="hidden">
                                            <label for="exampleFormControlFile1"> @error('main_img')<small>{{$message}}</small> @enderror</label>
                                            <input type="file" id="file-ip-1" onchange="showPreview(event);"  accept="image/*" class="form-control-file" name='main_img[]' value="{{$item->main_img}}">
                                            <input type="hidden"   accept="image/*" name='main_img2' value="{{$item->main_img}}">
                                           <br>
                                            <img  class="img-fluid" id="file-ip-1-preview" width="70">
                                        </div>
                                        {{-- <div class="col-12">
                                            <input type="hidden">
                                            <label for="exampleFormControlFile1"> @error('blog_img')<small>{{$message}}</small> @enderror</label>
                                            <input type="file" id="file-ip-1" onchange="showPreview(event);"  accept="image/*" class="form-control-file" name='blog_img[]' value="{{$item->blog_img}}">
                                            <input type="hidden" accept="image/*" class="form-control-file" name='blog_img2' value="{{$item->blog_img}}">
                                           <br>
                                            <img  class="img-fluid" id="file-ip-1-preview" width="70">
                                        </div> --}}

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
                                        <button type="submit" class="btn btn-primary">{{__('messages.Add Services')}}</button>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                   </div>
                   @endforeach
              @endsection
