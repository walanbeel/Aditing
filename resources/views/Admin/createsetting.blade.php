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
                                {{-- <h4 class="card-title"> General settings </h4> --}}
                                @if(Session::has('success'))
                                <div class="alert alert-success" role="alert">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    {{ Session::get('success') }}
                                </div>
                                @endif
                                  <br>
                                  <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                        <div class="card">
                                            <h5 class="card-header">General settings</h5>
                                            <div class="card-body">
                                                <form method="POST" action="{{route('setting.add')}}" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="inputText3" class="col-form-label">{{__('messages.Website Name en')}}</label>
                                                        <input id="inputText3" type="text" class="form-control" name="Website_name_en">
                                                        @error('Website_name_en')
                                                        <small class="form-text text-danger">{{$message}}</small>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputText3" class="col-form-label">{{__('messages.Website Name ar')}}</label>
                                                        <input id="inputText3" type="text" class="form-control" name="Website_name_ar" >
                                                        @error('Website_name_ar')
                                                        <small class="form-text text-danger">{{$message}}</small>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="inputText3" class="col-form-label">{{__('messages.Location')}}</label>
                                                        <input id="inputText3" type="text" class="form-control" name="location">
                                                        @error('location')
                                                         <small class="form-text text-danger">{{$message}}</small>
                                                        @enderror
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2">
                                                            <label for="inputText3" class="col-form-label">{{__('messages.Phone')}} </label>
                                                            <input type="number" class="form-control phone-inputmask" id="phone-mask" placeholder="{{__('messages.(1) 517-519')}}" name="mobile_num">
                                                            @error('mobile_num')
                                                            <small class="form-text text-danger">{{$message}}</small>
                                                            @enderror

                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2">
                                                            <label for="inputText3" class="col-form-label">{{__('messages.Tellphone')}} </label>
                                                            <input type="number" class="form-control phone-inputmask" id="phone-mask" placeholder="{{__('messages.(967) 777-777-777')}}" name="phone_num">
                                                            @error('phone_num')
                                                            <small class="form-text text-danger">{{$message}}</small>
                                                            @enderror

                                                        </div>
                                                    </div>

                                                        {{-- <div class="form-group">
                                                            <label for="inputText3" class="col-form-label">{{__('messages.Phone')}} </label>
                                                            <input type="number" class="form-control phone-inputmask" id="phone-mask" placeholder="{{__('messages.(1) 517-519')}}" name="mobile_num">
                                                            @error('mobile_num')
                                                            <small class="form-text text-danger">{{$message}}</small>
                                                            @enderror
                                                        </div> --}}

                                                        <div class="form-group">
                                                            <input type="hidden">
                                                            <label>{{__('messages.website icon ')}}</label>
                                                            <input type="file" id="file-ip-1-img"  class="form-control-file" name="icon" onchange="showPreviewimg(event);">
                                                            <div class="timeline-item">
                                                                <div class="timeline-body preview">
                                                                  <img  id="file-preview" style="width:50px;height:50px;margin-top:10px;">
                                                                </div>
                                                                </div>
                                                            @error('icon')
                                                            <small class="form-text text-danger">{{$message}}</small>
                                                            @enderror
                                                        </div>
                                                    <div class="form-group">
                                                        <input type="hidden">
                                                        <label>{{__('messages.website logo')}}</label>
                                                        <input type="file" id="file-ip-1"  class="form-control-file" name="logo" onchange="showPreview(event);" >
                                                        <div class="timeline-item">
                                                        <div class="timeline-body preview">
                                                          <img  id="file-ip-1-preview" style="width:50px;height:50px;margin-top:10px;">
                                                        </div>
                                                        </div>
                                                        @error('logo')
                                                        <small class="form-text text-danger">{{$message}}</small>
                                                        @enderror
                                                    </div>

                                                    <div class="form-row">

                                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                            <label for="inputEmail">{{__('messages.Facebook address')}}</label>
                                                            <input id="inputEmail" type="url" placeholder="name@example.com" class="form-control" name="Facebook">
                                                            @error('Facebook')
                                                             <small class="form-text text-danger">{{$message}}</small>
                                                            @enderror
                                                        </div>
                                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                            <label for="inputEmail">{{__('messages.LinkedIn address')}}</label>
                                                            <input id="inputEmail" type="url" placeholder="name@example.com" class="form-control" name="LinkedIn">
                                                            @error('LinkedIn')
                                                            <small class="form-text text-danger">{{$message}}</small>
                                                            @enderror
                                                        </div>
                                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                            <label for="inputEmail">{{__('messages.Twitter address')}}</label>
                                                            <input id="inputEmail" type="url" placeholder="name@example.com" class="form-control" name="Twitter">
                                                            @error('Twitter')
                                                              <small class="form-text text-danger">{{$message}}</small>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    {{-- <div class="form-group">
                                                        <label for="inputEmail">{{__('messages.Facebook address')}}</label>
                                                        <input id="inputEmail" type="url" placeholder="name@example.com" class="form-control" name="Facebook">
                                                        @error('Facebook')
                                                        <small class="form-text text-danger">{{$message}}</small>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputEmail">{{__('messages.LinkedIn address')}}</label>
                                                        <input id="inputEmail" type="url" placeholder="name@example.com" class="form-control" name="LinkedIn">
                                                        @error('LinkedIn')
                                                        <small class="form-text text-danger">{{$message}}</small>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputEmail">{{__('messages.Twitter address')}}</label>
                                                        <input id="inputEmail" type="url" placeholder="name@example.com" class="form-control" name="Twitter">
                                                        @error('Twitter')
                                                        <small class="form-text text-danger">{{$message}}</small>
                                                        @enderror
                                                    </div> --}}
                                                    <div class="form-group">
                                                        <label for="inputEmail">{{__('messages.Email address')}}</label>
                                                        <input id="inputEmail" type="email"  name="email_web" placeholder="name@example.com" class="form-control">
                                                        @error('email_web')
                                                        <small class="form-text text-danger">{{$message}}</small>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">{{__('messages.Page Content en')}}</label>
                                                        <textarea class="form-control" name="aboutus_en"  id="mytextarea" rows="3"></textarea>
                                                        @error('aboutus_en')
                                                        <small class="form-text text-danger">{{$message}}</small>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">{{__('messages.Page Content ar')}}</label>
                                                        <textarea class="form-control" name="aboutus_ar"  id="mytextarea" rows="3"></textarea>
                                                        @error('aboutus_ar')
                                                        <small class="form-text text-danger">{{$message}}</small>
                                                        @enderror
                                                    </div>

                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-secondary">{{__('messages.Save setting')}}</button>
                                                        </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                             </div>
                        </div>
                    </div>
                 </div>
                </div>
            </div>
            <!--Preview image-->
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

