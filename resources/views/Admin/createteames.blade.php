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
                                    <li class="breadcrumb-item active" aria-current="page">Teams</li>
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
                                        <h4 class="card-title"> Add Team </h4>
                                        @if(Session::has('success'))
                                        <div class="alert alert-success" role="alert">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            {{ Session::get('success') }}
                                        </div>
                                        @endif
                                         <br>
                                    <form method="POST" action="{{route('team.add')}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-12">
                                            <input type="hidden">
                                            <div class="form-group">
                                            <label for="exampleFormControlFile1">{{__('messages.Team t_profile')}}</label>
                                            <input type="file" id="file-ip-1"   class="form-control-file" name="t_profile"  accept="image/*"  placeholder="{{__('messages.t_profile')}}">
                                            @error('t_profile')
                                            <small class="form-text text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                        </div>
                                          <div class="col-12">
                                            <input type="hidden">
                                            <div class="form-group">
                                              <label>{{__('messages.Team name_en')}}  </label>
                                              <input type="text"  class="form-control" name="name_en"   placeholder="{{__('messages.name_en')}}">
                                              @error('name_en')
                                              <small class="form-text text-danger">{{$message}}</small>
                                              @enderror
                                            </div>
                                          </div>
                                          <div class="col-12">
                                            <input type="hidden">
                                            <div class="form-group">
                                              <label>{{__('messages.Team name_ar')}}  </label>
                                              <input type="text"  class="form-control" name="name_ar"   placeholder="{{__('messages.name_ar')}}">
                                              @error('name_ar')
                                              <small class="form-text text-danger">{{$message}}</small>
                                              @enderror
                                            </div>
                                          </div>
                                          <div class="col-12">
                                            <input type="hidden">
                                            <div class="form-group">
                                              <label>{{__('messages.Team sub_title_en')}}  </label>
                                              <input type="text"  class="form-control" name="sub_title_en"   placeholder="{{__('messages.sub_title_en')}}">
                                              @error('sub_title_en')
                                              <small class="form-text text-danger">{{$message}}</small>
                                              @enderror
                                            </div>
                                          </div>
                                          <div class="col-12">
                                            <input type="hidden">
                                            <div class="form-group">
                                              <label>{{__('messages.Team sub_title_ar')}}  </label>
                                              <input type="text"  class="form-control" name="sub_title_ar"   placeholder="{{__('messages.sub_title_ar')}}">
                                              @error('sub_title_ar')
                                              <small class="form-text text-danger">{{$message}}</small>
                                              @enderror
                                            </div>
                                          </div>
                                          <div class="col-12">
                                          <input type="hidden">
                                          <div class="form-group">
                                            <label>{{__('messages.Team short_intro_en')}}  </label>
                                            <div class="col-12">
                                                <textarea  id="mytextarea" class="form-control" name="short_intro_en"  placeholder="{{__('messages.short_intro_en')}}"></textarea>
                                                @error('cshort_intro_en')
                                                <small class="form-text text-danger">{{$message}}</small>
                                                @enderror
                                            </div>
                                            </div>
                                            </div>
                                            <div class="col-12">
                                                <input type="hidden">
                                                <div class="form-group">
                                                  <label>{{__('messages.Team short_intro_ar')}}  </label>
                                                  <div class="col-12">
                                                      <textarea  id="mytextarea" class="form-control" name="short_intro_ar"  placeholder="{{__('messages.short_intro_ar')}}"></textarea>
                                                      @error('short_intro_ar')
                                                      <small class="form-text text-danger">{{$message}}</small>
                                                      @enderror
                                                  </div>
                                                  </div>
                                           </div>

                                        <div class="col-12">
                                         <button type="submit" class="btn btn-primary">{{__('messages.Add Team')}}</button>
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
                  selector: '#mytextarea',
                  plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker textcolor colorpicker',
                    toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table ',
                    toolbar_mode: 'floating',
                    tinycomments_mode: 'embedded',
                    tinycomments_author: 'Author name',
                });
              </script>
             @endsection
