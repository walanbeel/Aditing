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
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="title m-b-md">
                                        <h6>{{__('messages.Edit your Teams')}}</h6>
                                    </div>
                                    @if(Session::has('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{ Session::get('success') }}
                                    </div>
                                    @endif

                                      <br>

                                    <form method="POST" enctype="multipart/form-data" action="{{route('team.update')}}">
                                        @foreach($teams  as $item)
                                      @csrf
                                          <div class="col-12">
                                            <input type="hidden" name="t_id" value="{{$item->t_id}}">
                                            <div class="form-group">
                                            <label for="exampleFormControlFile1">{{__('messages.Team t_profile')}}</label>
                                            <input type="file" id="file-ip-1" onchange="showPreview(event);"  accept="image/*" class="form-control-file" name='t_profile[]' value="{{$item->t_profile}}">
                                            <input type="hidden"   accept="image/*" name='t_profile2' value="{{$item->t_profile}}">
                                           <br>
                                            <img  class="img-fluid" id="file-ip-1-preview" name='t_profile[]' src="{{URL::asset('/images/teams/'.$item->t_profile)}}"  value="{{$item->t_profile}}" style="width:50px;height:50px">
                                            @error('t_profile')
                                            <small class="form-text text-danger">{{$message}}</small>
                                             @enderror
                                           </div>
                                          </div>
                                          <div class="col-12">
                                            <input type="hidden">
                                            <div class="form-group">
                                              <label>{{__('messages.Team name_en')}}  </label>
                                              <input type="text"  class="form-control" name="name_en" value="{{$item->name_en}}"  placeholder="{{__('messages.Team name_en')}}">
                                              @error('name_en')
                                              <small class="form-text text-danger">{{$message}}</small>
                                              @enderror
                                            </div>
                                          </div>
                                          <div class="col-12">
                                            <input type="hidden">
                                            <div class="form-group">
                                              <label>{{__('messages.Team name_ar')}}  </label>
                                              <input type="text"  class="form-control" name="name_ar" value="{{$item->name_ar}}"  placeholder="{{__('messages.Team name_ar')}}">
                                              @error('name_ar')
                                              <small class="form-text text-danger">{{$message}}</small>
                                              @enderror
                                            </div>
                                          </div>
                                          <div class="col-12">
                                            <input type="hidden">
                                            <div class="form-group">
                                              <label>{{__('messages.Team sub_title_en')}}  </label>
                                              <input type="text"  class="form-control" name="sub_title_en" value="{{$item->sub_title_en}}"  placeholder="{{__('messages.Team sub_title_en')}}">
                                              @error('sub_title_en')
                                              <small class="form-text text-danger">{{$message}}</small>
                                              @enderror
                                            </div>
                                          </div>
                                          <div class="col-12">
                                            <input type="hidden">
                                            <div class="form-group">
                                              <label>{{__('messages.Team sub_title_ar')}}  </label>
                                              <input type="text"  class="form-control" name="sub_title_ar" value="{{$item->sub_title_ar}}"  placeholder="{{__('messages.Team sub_title_ar')}}">
                                              @error('sub_title_ar')
                                              <small class="form-text text-danger">{{$message}}</small>
                                              @enderror
                                            </div>
                                          </div>
                                            <div class="col-12">
                                                <input type="hidden">
                                            <div class="form-group">
                                            <label>{{__('messages.Team short_intro_en')}}</label>
                                            <div class="col-12">
                                                <textarea class="form-control" name="short_intro_en"  placeholder="{{__('messages.short_intro_en')}}"> {{$item->short_intro_en}}</textarea>
                                                @error('short_intro_en')
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
                                            <textarea class="form-control" name="short_intro_ar"  placeholder="{{__('messages.short_intro_ar')}}"> {{$item->short_intro_ar}}</textarea>
                                            @error('short_intro_ar')
                                            <small class="form-text text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
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
                           var preview =document.getElementById("file-ip-1-preview");
                           preview.src=src;
                           preview.style.display="block";
                       }
                    }
                </script>
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
