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


                                <form method="POST" action="{{route('books.update')}}" enctype="multipart/form-data">
                                    @foreach($books  as $item)

                                    @csrf
                                    <div class="col-12">
                                        <input type="hidden" name="B_id" value="{{$item->B_id}}">
                                         <input type="hidden" name="id" value="{{$item->id}}">

                                        <div class="form-group">
                                          <label>{{__('messages.authoer Name en')}} </label>
                                          <input type="text"  class="form-control" name="authoer_name_en" value="{{$item->authoer_name_en}}" placeholder="{{__('messages.authoer Name en')}}">
                                          @error('authoer_name_en')
                                          <small class="form-text text-danger">{{$message}}</small>
                                          @enderror
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <input type="hidden">
                                        <div class="form-group">
                                          <label>{{__('messages.authoer Name ar')}}  </label>
                                          <input type="text"  class="form-control" name="authoer_name_ar" value="{{$item->authoer_name_ar}}"  placeholder="{{__('messages.authoer Name ar')}}">
                                          @error('authoer_name_ar')
                                          <small class="form-text text-danger">{{$message}}</small>
                                          @enderror
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <input type="hidden">
                                        <div class="form-group">
                                          <label>{{__('messages.book Name en')}} </label>
                                          <input type="text"  class="form-control" name="B_name_en" value="{{$item->B_name_en}}"  placeholder="{{__('messages.book Name en')}}">
                                          @error('B_name_en')
                                          <small class="form-text text-danger">{{$message}}</small>
                                          @enderror
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <input type="hidden">
                                        <div class="form-group">
                                          <label>{{__('messages.book Name ar')}}  </label>
                                          <input type="text"  class="form-control" name="B_name_ar" value="{{$item->B_name_ar}}" placeholder="{{__('messages.book Name ar')}}">
                                          @error('B_name_ar')
                                          <small class="form-text text-danger">{{$message}}</small>
                                          @enderror
                                        </div>
                                      </div>
                                      <div class="col-12">
                                            {{-- <label>books Image </label>
                                             <input type="hidden" name="cover1" value="{{$item->cover}}">
                                            <input type="file"  id="file-ip-1" name="cover" class="form-control" onchange="showPreview(event)" value="{{$item->cover}}">
                                            <br> --}}
                                         <div class="form-group">
                                          <input type="hidden">
                                          <label for="exampleFormControlFile1"> @error('cover')<small>{{$message}}</small> @enderror</label>
                                          <input type="file" id="file-ip-1" onchange="showPreview(event);"  accept="image/*" class="form-control-file" name='cover[]' value="{{$item->cover}}">
                                          <input type="hidden" accept="image/*" class="form-control-file" name='cover2' value="{{$item->cover}}">
                                         <br>
                                          <img  class="img-fluid" id="file-ip-1-preview" width="70">
                                        </div>
                                    </div>
                                      <div class="col-12">
                                         <div class="form-group">
                                            <label>books file </label>
                                             <input type="hidden" name="file2" value="{{$item->file}}">
                                            <input type="file"  id="file-ip-1" name="file[]" class="form-control" onchange="showPreview(event)" value="{{$item->file}}">
                                            <br>
                                          </div>
                                    </div>
                                    <div class="col-12">
                                        <input type="hidden">
                                    <div class="form-group">
                                    <label>{{__('messages.B_preface_en')}}  </label>
                                    <div class="col-12">
                                        <textarea class="form-control" name="B_preface_en"  placeholder="{{__('messages.B_preface_en')}}">{{$item->B_preface_en}}</textarea>
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
                                    <textarea class="form-control" name="B_preface_ar"   placeholder="{{__('messages.B_preface_ar')}}">{{$item->B_preface_ar}}</textarea>
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
                                        <button type="submit" class="btn btn-primary">{{__('messages.Add books')}}</button>
                                     </div>

                             </form>
                              </div>

                            </div>
                        </div>
                    </div>
                   </div>
                   @endforeach
              @endsection
