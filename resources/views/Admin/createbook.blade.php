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
                                    <li class="breadcrumb-item active" aria-current="page">library</li>
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
                                <h4 class="card-title"> Add Books </h4>
                                @if(Session::has('success'))
                                <div class="alert alert-success" role="alert">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    {{ Session::get('success') }}
                                </div>
                                @endif

                                  <br>

                                <form method="POST" action="{{route('books.add')}}" enctype="multipart/form-data">
                                    @csrf

                                    <div class="col-12">
                                        <input type="hidden">
                                        <div class="form-group">
                                          <label>{{__('messages.authoer Name en')}} </label>
                                          <input type="text"  class="form-control" name="authoer_name_en"  placeholder="{{__('messages.authoer Name en')}}">
                                          @error('authoer_name_en')
                                          <small class="form-text text-danger">{{$message}}</small>
                                          @enderror
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <input type="hidden">
                                        <div class="form-group">
                                          <label>{{__('messages.authoer Name ar')}}  </label>
                                          <input type="text"  class="form-control" name="authoer_name_ar"  placeholder="{{__('messages.authoer Name ar')}}">
                                          @error('authoer_name_ar')
                                          <small class="form-text text-danger">{{$message}}</small>
                                          @enderror
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <input type="hidden">
                                        <div class="form-group">
                                          <label>{{__('messages.book Name en')}} </label>
                                          <input type="text"  class="form-control" name="B_name_en"  placeholder="{{__('messages.book Name en')}}">
                                          @error('B_name_en')
                                          <small class="form-text text-danger">{{$message}}</small>
                                          @enderror
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <input type="hidden">
                                        <div class="form-group">
                                          <label>{{__('messages.book Name ar')}}  </label>
                                          <input type="text"  class="form-control" name="B_name_ar"  placeholder="{{__('messages.book Name ar')}}">
                                          @error('B_name_ar')
                                          <small class="form-text text-danger">{{$message}}</small>
                                          @enderror
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <input type="hidden">
                                        <div class="form-group">
                                        <label for="exampleFormControlFile1">{{__('messages.Book cover')}}</label>
                                        <input type="file" id="file-ip-1" accept="image/*" class="form-control-file" name="cover"  placeholder="{{__('messages.cover')}}">
                                        @error('cover')
                                        <small class="form-text text-danger">{{$message}}</small>
                                        @enderror
                                       </div>
                                      </div>
                                      <div class="col-12">
                                        <input type="hidden">
                                        <div class="form-group">
                                        <label for="exampleFormControlFile1">{{__('messages.Book file')}}</label>
                                        <input type="file" id="file-ip-1"  class="form-control-file" name="file"  placeholder="{{__('messages.file')}}">
                                        @error('file')
                                        <small class="form-text text-danger">{{$message}}</small>
                                        @enderror
                                        </div>
                                      </div>

                                    <div class="col-12">
                                        <input type="hidden">
                                    <div class="form-group">
                                    <label>{{__('messages.B_preface_en')}}  </label>
                                    <div class="col-12">
                                        <textarea class="form-control" name="B_preface_en"  placeholder="{{__('messages.B_preface_en')}}"></textarea>
                                        @error('B_preface_en')
                                        <small class="form-text text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    </div>
                                   </div>

                                   <div class="col-12">
                                    <input type="hidden">
                                <div class="form-group">
                                <label>{{__('messages.B_preface_ar')}}  </label>
                                <div class="col-12">
                                    <textarea class="form-control"id="mytextarea" name="B_preface_ar"  placeholder="{{__('messages.B_preface_ar')}}"></textarea>
                                    @error('B_preface_ar')
                                    <small class="form-text text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                </div>
                               </div>

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
                                 <button type="submit" class="btn btn-primary">{{__('messages.Add books')}}</button>
                                 </div>

                             </form>

                            </div>
                        </div>
                    </div>
                </div>
               </div>
            </div>

            <script src="https://cdn.tiny.cloud/1/8khmkr26c2my4f7ivzjbi7v6gc06qs3rs6cr8r24x5meautp/tinymce/5/tinymce.min.js" referrerpolicy="origin">
            </script>
            <script>
                tinymce.init({
                  selector: '#mytextarea',
                  plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker textcolor colorpicker',
                    toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table ',
                    toolbar_mode: 'floating',
                    tinycomments_mode: 'embedded',
                    tinycomments_author: 'Author name',
                });
              </script>



          @endsection
