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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"> Add News </h4>
                                @if(Session::has('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ Session::get('success') }}
                                </div>
                                @endif

                                  <br>

                                <form method="POST" action="{{route('blogs.add')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-12">
                                        <input type="hidden">
                                        <div class="form-group">
                                          <label>{{__('messages.News title en')}} </label>
                                          <input type="text"  class="form-control" name="title_en"  placeholder="{{__('messages.title_en')}}">
                                          @error('title_en')
                                          <small class="form-text text-danger">{{$message}}</small>
                                          @enderror
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <input type="hidden">
                                        <div class="form-group">
                                          <label>{{__('messages.News title ar')}}  </label>
                                          <input type="text"  class="form-control" name="title_ar"   placeholder="{{__('messages.title_ar')}}">
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
                                            <textarea  id="mytextarea" class="form-control" name="content_en"  placeholder="{{__('messages.content_en')}}"></textarea>
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
                                            <textarea id="mytextarea" class="form-control" name="content_ar"  placeholder="{{__('messages.content_ar')}}"></textarea>
                                            @error('content_ar')
                                            <small class="form-text text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                       </div>
                                    </div>
                                    <div class="col-12">
                                        <input type="hidden">
                                        <label for="exampleFormControlFile1">{{__('messages.News main img')}}</label>
                                        <input type="file" id="file-ip-1"  class="form-control-file" name="main_img"  placeholder="{{__('messages.main_img')}}">

                                        @error('main_img')
                                        <small>{{$message}}</small>
                                        @enderror
                                    </div>
                                    {{-- <div class="col-12">
                                        <input type="hidden">
                                        <label for="exampleFormControlFile1">{{__('messages.News blog img')}}</label>
                                        <input type="file" id="file-ip-1"  class="form-control-file" name="blog_img[]"  multiple placeholder="{{__('messages.blog_img')}}">
                                        @error('blog_img')
                                        <small>{{$message}}</small>
                                        @enderror
                                    </div> --}}
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>{{__('messages. News Category')}} </label>
                                            <select class="form-control category_list" name="cat_id">

                                                @foreach($category as $item)
                                                <option value="{{$item->cat_id}}"> {{$item->cat_name_en}}</opiton>

                                                @endforeach
                                                </select>

                                            </div>
                                            </div>

                                    <div class="col-12">
                                     <button type="submit" class="btn btn-primary">{{__('messages.Add News')}}</button>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
               </div>
            </div>





            <script src="https://cdn.tiny.cloud/1/8khmkr26c2my4f7ivzjbi7v6gc06qs3rs6cr8r24x5meautp/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>          <script>
            tinymce.init({
              selector: 'textarea',
              plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker textcolor colorpicker',
                toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table ',
                toolbar_mode: 'floating',
                tinycomments_mode: 'embedded',
                tinycomments_author: 'Author name',
            });
          </script>
            @endsection
