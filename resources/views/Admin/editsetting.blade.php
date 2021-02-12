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
                                    <li class="breadcrumb-item active" aria-current="page">Setting</li>
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
                                    {{ Session::get('success') }}
                                </div>
                                @endif
                                  <br>
                                  <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                        <div class="card">
                                            <h5 class="card-header">Edit settings</h5>
                                            <div class="card-body">
                                                <form method="POST" action="{{route('setting.update')}}" enctype="multipart/form-data">
                                                    @foreach($setting as $item)
                                                    @csrf
                                                    <div class="form-group">
                                                        <input type="hidden" name="set_id" value="{{$item->set_id}}">
                                                        <input type="hidden" name="id" value="{{$item->id}}">
                                                        <label for="inputText3" class="col-form-label">{{__('messages.Website Name en')}}</label>
                                                        <input id="inputText3" type="text" class="form-control" name="Website_name_en" value="{{$item->Website_name_en}}">
                                                        @error('Website_name_en')
                                                        <small class="form-text text-danger">{{$message}}</small>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputText3" class="col-form-label">{{__('messages.Website Name ar')}}</label>
                                                        <input id="inputText3" type="text" class="form-control" name="Website_name_ar" value="{{$item->Website_name_ar}}">
                                                        @error('Website_name_ar')
                                                        <small class="form-text text-danger">{{$message}}</small>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="inputText3" class="col-form-label">{{__('messages.Location')}}</label>
                                                        <input id="inputText3" type="text" class="form-control" name="location" value="{{$item->location}}">
                                                        @error('location')
                                                         <small class="form-text text-danger">{{$message}}</small>
                                                        @enderror
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2">
                                                            <label>{{__('messages.Phone')}}</label>
                                                            <input type="number" class="form-control phone-inputmask" id="phone-mask" placeholder="" name="mobile_num" value="{{$item->mobile_num}}">
                                                            @error('mobile_num')
                                                            <small class="form-text text-danger">{{$message}}</small>
                                                            @enderror

                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2">
                                                            <label >{{__('messages.Tellphone')}} </label>
                                                            <input type="number" class="form-control phone-inputmask" id="phone-mask"  placeholder="" name="phone_num" value="{{$item->phone_num}}">
                                                            @error('phone_num')
                                                            <small class="form-text text-danger">{{$message}}</small>
                                                            @enderror

                                                        </div>
                                                       </div>
                                                        {{-- <div class="form-group">
                                                            <label>{{__('messages.Phone')}}</label>
                                                            <input type="text" class="form-control phone-inputmask" id="phone-mask" placeholder="" name="mobile_num" value="{{$item->mobile_num}}">
                                                            @error('mobile_num')
                                                            <small class="form-text text-danger">{{$message}}</small>
                                                            @enderror
                                                        </div> --}}
                                                        {{-- <div class="col-12">
                                                            <input type="hidden">
                                                            <input type="file" id="file-ip-1"  class="form-control-file" name="icon" value="{{$item->icon}}">
                                                        </div>
                                                    <div class="col-12">
                                                        <input type="hidden">
                                                        <input type="file" id="file-ip-1"  class="form-control-file" name="logo" value="{{$item->logo}}">
                                                    </div> --}}

                                                    <div class="form-group">
                                                        <input type="hidden">
                                                        <label for="exampleFormControlFile1"> @error('icon')<small>{{$message}}</small> @enderror</label>
                                                        <input type="file" id="file-ip-1" onchange="showPreview(event);"  accept="image/*" class="form-control-file" name='icon[]' value="{{$item->icon}}">
                                                        <input type="hidden"   accept="image/*" name='icon2'value="{{$item->icon}}">
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
                                                        <label for="exampleFormControlFile1"> @error('logo')<small>{{$message}}</small> @enderror</label>
                                                        <input type="file" id="file-ip-1" onchange="showPreview(event);"  accept="image/*" class="form-control-file" name='logo[]' value="{{$item->logo}}">
                                                        <input type="hidden" accept="image/*" class="form-control-file" name='logo2' value="{{$item->logo}}">
                                                        <div class="timeline-item">
                                                            <div class="timeline-body preview">
                                                              <img  id="file-preview" style="width:50px;height:50px;margin-top:10px;">
                                                            </div>
                                                            </div>
                                                        @error('logo')
                                                        <small class="form-text text-danger">{{$message}}</small>
                                                        @enderror
                                                    </div>


                                                    <div class="form-row">

                                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                            <label for="inputEmail">{{__('messages.Facebook address')}}</label>
                                                            <input id="inputEmail" type="url" placeholder="name@example.com" class="form-control" name="Facebook" value="{{$item->Facebook}}">
                                                            @error('Facebook')
                                                             <small class="form-text text-danger">{{$message}}</small>
                                                            @enderror
                                                        </div>
                                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                            <label for="inputEmail">{{__('messages.LinkedIn address')}}</label>
                                                            <input id="inputEmail" type="url" placeholder="name@example.com" class="form-control" name="LinkedIn" value="{{$item->LinkedIn}}">
                                                            @error('LinkedIn')
                                                            <small class="form-text text-danger">{{$message}}</small>
                                                            @enderror
                                                        </div>
                                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                            <label for="inputEmail">{{__('messages.Twitter address')}}</label>
                                                            <input id="inputEmail" type="url" placeholder="name@example.com" class="form-control" name="Twitter" value="{{$item->Twitter}}">
                                                            @error('Twitter')
                                                              <small class="form-text text-danger">{{$message}}</small>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    {{-- <div class="form-group">
                                                        <label for="inputEmail">{{__('messages.Facebook address')}}</label>
                                                        <input id="inputEmail" type="url" placeholder="name@example.com" class="form-control" name="Facebook" value="{{$item->Facebook}}">
                                                        @error('Facebook')
                                                        <small class="form-text text-danger">{{$message}}</small>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputEmail">{{__('messages.LinkedIn address')}}</label>
                                                        <input id="inputEmail" type="url" placeholder="name@example.com" class="form-control" name="LinkedIn" value="{{$item->LinkedIn}}">
                                                        @error('LinkedIn')
                                                        <small class="form-text text-danger">{{$message}}</small>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputEmail">{{__('messages.Twitter address')}}</label>
                                                        <input id="inputEmail" type="url" placeholder="name@example.com" class="form-control" name="Twitter" value="{{$item->Twitter}}">
                                                        @error('Twitter')
                                                        <small class="form-text text-danger">{{$message}}</small>
                                                        @enderror
                                                    </div> --}}
                                                    <div class="form-group">
                                                        <label for="inputEmail">{{__('messages.Email address')}}</label>
                                                        <input id="inputEmail" type="email"  name="email_web" placeholder="name@example.com" class="form-control" value="{{$item->email_web}}">
                                                        @error('email_web')
                                                        <small class="form-text text-danger">{{$message}}</small>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">{{__('messages.Page Content en')}}</label>
                                                        <textarea class="form-control" name="aboutus_en"  id="exampleFormControlTextarea1" rows="3">{!!$item->aboutus_en!!}</textarea>
                                                        @error('aboutus_en')
                                                        <small class="form-text text-danger">{{$message}}</small>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">{{__('messages.Page Content ar')}}</label>
                                                        <textarea class="form-control" name="aboutus_ar"  id="exampleFormControlTextarea1"
                                                        rows="3">{!! $item->aboutus_ar !!}</textarea>
                                                        @error('aboutus_ar')
                                                        <small class="form-text text-danger">{{$message}}</small>
                                                        @enderror
                                                    </div>

                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-primary">{{__('messages.Save Change')}}</button>
                                                        </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                @endforeach


                             </div>
                        </div>
                    </div>
                 </div>
                </div>
            </div>

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
